<?php
// use App\MODEL\LittleContent;
// use App\MODEL\HiringContent;
use App\Helpers\Text;
// use App\Connection;

$text = new Text;
// $pdo = Connection::getPDO();

$titlePage = 'Form';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

$userSex = "F";
$file_name;
$file_type;
$messageError = "";


if (!empty($_FILES)) {

	$file_name = $_FILES['fichierCv']['name'];
	$file_tmp_name = $_FILES['fichierCv']['tmp_name'];
	$file_dest = "files/".$file_name;
	$file_extension = strrchr($file_name, ".");
	$extensions_autorisees = array('.pdf', '.PDF');

	if (in_array($file_extension, $extensions_autorisees)) {
		// if(move_uploaded_file($file_tmp_name,$file_dest)){
		// Fichier envoyé
		// }
	}else{
		$messageError="Seuls les fichiers PDF sont autorisés";
	}
	echo $file_type;
}

if (isset($_GET['btonPostuler'])) {
	$userName = $text->xss_clean($_GET['nameUser']);
	$userEmail = $text->xss_clean($_GET['emailUser']);
	$userPhoneNumber = $text->xss_clean($_GET['phoneNumber']);
	$userDataNaissance = $text->xss_clean($_GET['dataNaissance']);
	// $userEmail = 
	$userEtatCivil = $_GET['selectEtatCivil'];
	$userSex = $text->xss_clean($_GET['sexUser']);
	$userNote = $text->xss_clean($_GET['noteUser']);


	// if (empty($userEtatCivil)) {
	// 	$messageError = "Veuillez séléctionner votre etat civile";
	// }
	if (empty($userEtatCivil)) {
		$messageError = "Veuillez séléctionner votre etat civile";
	}
	if (empty($userName)) {
		$messageError = "Veuillez renseigner votre nom s'il vous plait";
	}
	if (empty($userPhoneNumber)) {
		$messageError = "Veuillez renseigner votre numéro de téléphone ";
	}

	if (empty($userEmail)) {
		$messageError = "Veuillez renseigner votre adresse email s'il vous plait";
		if ($text->is_valide_mail($_GET['emailUser'])) {
			$messageError = "votre adresse email n'est pas au bon format veuillez le modifier s'il vous plait";
		}
	}

	if (empty($messageError)) {
		$messageError = $userNote;
	}
}

// creer une  de type array  	
// $messageError= "coll";
// 
?>
<main>
	<section class="container_header_inovation">
		<div class="header_expertise_color_white">
			<div class="header_color_active"></div>
		</div>
		<div class="header-box">
			<h4> Postuler </h4>
		</div>
	</section>
	<section class="container-form my-5">
		<h4 class="text-center">Merci de remplir les champs ci-dessous</h4>
		<h4 class="text-center text-danger"><?= $messageError ?? " " ?></h4>
		<div class="d-flex justify-content-center ">
			<div class="form-card p-5 col-5 card ">
				<!-- <form method="GET" enctype="multipart/form-data" class="form" action="fom.php"> -->
				<form method="GET" enctype="multipart/form-data" class="form">
					<div class="mb-3">
						<!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
						<input value="<?= $userName ?? "" ?>" placeholder="Votre nom complet ( Ex:jean dupont )" name="nameUser" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
						<input value="<?= $userEmail ?? "" ?>" placeholder="Votre adress email complet ( Ex: jean_duponr@domain.com )" name="emailUser" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<!-- <label for="telephone" class="form-label">votre numero de téléphone</label> -->
						<input type="text" value="<?= $userPhoneNumber ?? "" ?>" name="phoneNumber" placeholder="Votre numero de téléphone " class="form-control">
					</div>
					<div class="mb-3">
						<!-- <label for="telephone" class="form-label">votre numero de téléphone</label> -->
						<input type="date" value="<?= $userDataNaissance ?? "" ?>" name="dataNaissance" placeholder="Votre date de naissance" class="form-control">
					</div>
					<div class="form-group">
						<select class="form-control" name="selectEtatCivil" id="elementFormControlSelect">
							<option selected disabled hidden> <?= $userEtatCivil ?? "Votre etat civil" ?></option>
							<option value="Marié">Marié</option>
							<option value="Célibataire">Célibataire</option>
						</select>
					</div>
					<div class="form-check ">
						<?= $userSex === "M" ? "true" : "false" ?>
						<div class="row d-flex align-items-end">
							<div class="col-2">
								<label class="form-check-label" for="exampleRadios1">
									Sex
								</label>
							</div>

							<div class="col-2">
								<input class="form-check-input" type="radio" name="sexUser" id="exampleRadios1" value="F" <?= $userSex === "F" ? "checked" : "no" ?>>
								<label class="form-check-label" for="exampleRadios1">
									F
								</label>
							</div>
							<div class="col-2">
								<input class="form-check-input" type="radio" name="sexUser" id="exampleRadios1" value="M" <?= $userSex === "M" ? "checked" : "no" ?>>
								<label class="form-check-label" for="exampleRadios1">
									M
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="mb-3">
							<textarea value="<?= $userNote ?? "" ?>" value="" class="form-control" name="noteUser" rows="7"></textarea>
						</div>
						<div class="custom-file mb-3">
							<input type="file" class="custom-file-input" name="fichierCv" id="inputGroupFile">
							<label class="custom-file-label" for="inputGroupFile">Votre cv en format PDF</label>
						</div>
						<button type="submit" name="btonPostuler" class="btn btn-primary">Je postule </button>
				</form>
			</div>

		</div>

	</section>

</main>
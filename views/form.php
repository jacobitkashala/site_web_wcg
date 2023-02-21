<?php
// use App\MODEL\LittleContent;
// use App\MODEL\HiringContent;
use App\Helpers\Text;
// use App\Connection;

$text = new Text;
// $pdo = Connection::getPDO();
// var_dump($_FILES); $_FILES['fichier']['name'];
// var_dump($_POST);

$titlePage = 'Formulaire recrutement';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

$error = true;
// $userSex = "F";
$file_name;
$file_type = null;
$messageError = null;
$userDataNaissance = null;
$userPhoneNumber = null;
$userEmail = null;
$userNote = null;
$userSex = null;
$userName = null;
$success = null;

if (!empty($_FILES)) {
	// var_dump($_FILES['fichier']['name']);
	$file_name = $_FILES['fichier']['name'];
	$file_tmp_name = $_FILES['fichier']['tmp_name'];
	$file_type = $_FILES['fichier']['type'];
	$file_size = $_FILES['fichier']['size'];
	$file_extension = strrchr($file_name, '.');
	$extension_autorisees = array('.pdf', '.PDF');

	$file_dest = 'files_cv/' . $file_name;

	// echo '<br/>' . 'Nom: ' . $file_name . '<br/>';
	// echo 'Type: ' . $file_type . '<br/>';

	if (in_array($file_extension, $extension_autorisees)) {
		if ($file_size < 19905260) {
			if (move_uploaded_file($file_tmp_name, $file_dest)) {
				// $messageError = "Fichier envoyer avec succès";
				$error = false;
				$success = "Votre demande a été envoyer avec succès";
			} else {
				$messageError = "Une erreur est survenue lors de l'envoi du fichier";
			}
		} else {
			$messageError = "Le fichier est superrieur à la taille max";
		}
	} else {
		$messageError = "Seuls les fichiers PDF sont autorisés";
	}
}

if (isset($_POST['btonPostuler'])) {
	$userName = $text->xss_clean($_POST['nameUser']);
	$userEmail = $text->xss_clean($_POST['emailUser']);
	$userPhoneNumber = $text->xss_clean($_POST['phoneNumber']);
	$userDataNaissance = $text->xss_clean($_POST['dataNaissance']);
	// $userEtatCivil = $text->xss_clean($_POST['etatCivil']);
	// $userSex = $text->xss_clean($_POST['sexUser']);
	$userNote = $text->xss_clean($_POST['noteUser']);

	// if (empty($userEtatCivil)) {
	// 	$messageError = "Veuillez séléctionner votre etat civile";
	// }
	//Verification de cv

	if ($error) {
		$messageError = "Veuillez télécharger votre cv";
	}

	if (empty($userDataNaissance)) {
		$messageError = "Veuillez renseigner votre date de naissance";
	}
	if (!$text->is_valide_phone($userPhoneNumber)) {
		$messageError = "Le numéro de téléphone n'est pas valide";
	}
	if (empty($userPhoneNumber)) {
		$messageError = "Veuillez renseigner votre numéro de téléphone ";
	}
	if ($text->is_valide_mail($_POST['emailUser'])) {
		$messageError = "Votre adresse email n'est pas au bon format veuillez le modifier s'il vous plait";
	}
	if (empty($userEmail)) {
		$messageError = "Veuillez renseigner votre adresse email s'il vous plait";
	}
	if (empty($userName)) {
		$messageError = "Veuillez renseigner votre nom complet s'il vous plait";
	}
}

// echo !empty($_FILES);
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
		<?php if ($messageError) : ?>
			<h4 class="text-center text-danger"><?= $messageError  ?></h4>
		<?php elseif ($success) : ?>
			<h4 class="text-center text-success"><?= $success  ?></h4>
		<?php endif ?>
		<div class="d-flex justify-content-center ">
			<div class="form-card p-5 col-5 card ">
				<!-- <form method="POST" enctype="multipart/form-data" action="fom.php"> -->
				<form method="POST" enctype="multipart/form-data" class="form">
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
					<!-- <div class="form-group">
						<select class="form-control" name="etatCivil" id="elementFormControlSelect">
							<option selected disabled hidden> <?= $userEtatCivil ?? "Votre etat civil" ?></option>
							<option value="Marié">Marié</option>
							<option value="Célibataire">Célibataire</option>
						</select>
					</div> -->
					<!-- <div class="form-check ">
						<div class="row d-flex align-items-end">
							<div class="col-2">
								<label class="form-check-label" for="exampleRadios1">
									Sexe
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
					</div> -->
					<div class="form-group">
						<div class="mb-3">
							<textarea value="<?= $userNote ?? "" ?>" value="" class="form-control" name="noteUser" rows="7"></textarea>
						</div>
						<!-- <input type="file" name="fichier" /> -->
						<div class="custom-file mb-3">
							<input type="file" name="fichier" id="inputGroupFile">
							<label class="custom-file-label" for="inputGroupFile"> <?= $file_name ?? "Votre cv en format pdf" ?> </label>
						</div>
						<button type="submit" name="btonPostuler" class="btn btn-primary">Je postule </button>
				</form>
			</div>

		</div>

	</section>

</main>
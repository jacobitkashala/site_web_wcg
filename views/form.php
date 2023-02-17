<?php
// use App\MODEL\LittleContent;
// use App\MODEL\HiringContent;
use App\Helpers\Text;
// use App\Connection;

$text= new Text;
// $pdo = Connection::getPDO();

$titlePage = 'Form';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';


if(isset($_POST['btonPostuler'])){

	// creer une  de type array  	
	$messageError= "coll";
}

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
		<div class="d-flex justify-content-center ">
			<div>
				<label class="label-danger"><?= $messageError?? " " ?></label>
			</div>
			<div class="form-card p-5 col-5 card ">
				<form method="post" enctype="multipart/form-data" class="form">
					<div class="mb-3">
						<!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
						<input placeholder="Votre nom complet" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
						<input placeholder="Post" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<!-- <label for="telephone" class="form-label">votre numero de téléphone</label> -->
						<input type="text" placeholder="Votre adress email" class="form-control">
					</div>
					<div class="mb-3">
						<!-- <label for="telephone" class="form-label">votre numero de téléphone</label> -->
						<input type="text" placeholder="Votre etat civil" class="form-control">
					</div>
					<div class="form-group">
						<label for="elementFormControlSelect">Votre etat civil</label>
						<select class="form-control" id="elementFormControlSelect">
							<option>Marié</option>
							<option>Célibataire</option>
						</select>
					</div>
					<div class="form-check ">
						<div class="row d-flex align-items-end">
							<div class="col-2">
								<label class="form-check-label" for="exampleRadios1">
									Sex
								</label>
							</div>

							<div class="col-2">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									F
								</label>
							</div>
							<div class="col-2">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									M
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="mb-3">
							<textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
						</div>
						<div class="custom-file mb-3">
							<input type="file" class="custom-file-input" id="inputGroupFile01">
							<label class="custom-file-label" for="inputGroupFile01">Votre cv en format PDF</label>
						</div>
						<button type="submit" name="btonPostuler" class="btn btn-primary">Je postule </button>
				</form>
			</div>

		</div>

	</section>

</main>
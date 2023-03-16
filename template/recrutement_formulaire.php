<?php
$title = "Form";

ob_start();
?>
<main>
	<!-- Section d'en tête -->
	<section class="container-fluid">
		<div class="row header-box">
			<h4 class="col-lg-12 col-md-12 col-sm-12">Formulaire</h4>
		</div>
	</section>
	<!-- Section liste des offres -->
	<section class="container box-content">
		<div class="col-12 pt-5 pb-2 ">
			<h4 class="font-weight-normal  title__recrutement text-center ">Merci de remplir les champs
				ci-dessous</h4>
		</div>
		<div class="row d-flex justify-content-center text-center">
			<div class="col-lg-6 col-md-7 col-sm-11">
				<form method="POST" enctype="multipart/form-data" class="form mb-5">
					<!-- <form class="form mb-5"> -->
					<div class="mb-3">
						<input value="" placeholder="Votre nom complet ( Ex:jean dupont )" name="nameUser" type="text" class="form-control" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<input value="" placeholder="Votre adress email complet ( Ex: jean_duponr@domain.com )" name="emailUser" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<input type="text" value="" name="phoneNumber" placeholder="Votre numero de téléphone " class="form-control">
					</div>
					<div class="mb-3">
						<input type="date" value="" name="dataNaissance" placeholder="Votre date de naissance" class="form-control">
					</div>
					<div class="form-group">
						<select class="form-control" name="etatCivil" id="elementFormControlSelect">
							<option selected disabled hidden> État civil</option>
							<option value="Marié">Marié</option>
							<option value="Célibataire">Célibataire</option>
						</select>
					</div>
					<div class="mb-3">
						<textarea value="" value="" class="form-control" name="noteUser" rows="7"></textarea>
					</div>
					<div class="mb-3">
						<label for="formFile" class="form-label">Veuillez télécharger votre cv en format pdf</label>
						<input class="form-control" type="file" id="formFile">
					</div>
					<div class="col-lg-6 col-md-7 col-sm-11 d-flex	">
						<button type="submit" name="btonPostuler" class="btn btn-primary mt-sm-3 font-weight-bold ">Je postule</button>
					</div>

				</form>
			</div>
		</div>
		</div>
	</section>
</main>
<?php $contentPage = ob_get_clean(); ?>

<?php require('layout.php') ?>
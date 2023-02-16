<?php
// use App\MODEL\LittleContent;
// use App\MODEL\HiringContent;
// use App\Helpers\Text;
use App\Connection;

// $pdo = Connection::getPDO();

$titlePage = 'Form';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';


// $idMenu = intval($params['id']);
// $idParent = intval($params['slug']);

// $queryLittleContent = "";
// if ($idParent === 0) {
// 	$queryLittleContent = $pdo->query("SELECT rubrique.SIT_ID as id, media.MED_RESSOURCE as bgImage, rubrique.RUB_LIBELLE as libelle,rubrique.RUB_TITRE as titre ,rubrique.RUB_CONTENU  as contenu FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = " . $idMenu . " AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");
// }
// $resultquery = $queryLittleContent->fetchAll(PDO::FETCH_CLASS, LittleContent::class);
// idMenu

// $carouselSlq="SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";
// $query = $pdo->query($carouselSlq);
// $carousels = $query->fetchAll(PDO::FETCH_CLASS, Carousel::class);
// echo '<pre>';
// echo print_r($resultQueryHiring);
// echo '<pre>';
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
		<div class="row d-flex justify-content-center">
			<div class="form-card p-5 col-4 card ">
				<form class="form">
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
						<div class="row d-flex align-items-start">
							<div class="col-3">
								<label class="form-check-label" for="exampleRadios1">
									Sex
								</label>
							</div>

							<div class="col-3">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									F
								</label>
							</div>
							<div class="col-3">
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
							<!-- <label for="telephone" class="form-label">votre numero de téléphone</label> -->
							<!-- <input type="text" placeholder="Votre etat civil"  class="form-control" > -->
						</div>
						<div class="custom-file mb-3">
							<input type="file" class="custom-file-input" id="inputGroupFile01">
							<label class="custom-file-label" for="inputGroupFile01">Votre cv en format PDF</label>
						</div>
						<!-- <div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div> -->
						<button type="submit" class="btn btn-primary">Je postule </button>
				</form>
			</div>

		</div>

	</section>

</main>
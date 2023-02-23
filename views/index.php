<?php

use App\MODEL\Carousel;
use App\MODEL\HomeSection;
use App\MODEL\AlaUneActualite;
use App\MODEL\SectionTwoHome;

use App\Connection;


$titlePage = 'WCG';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';



$pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);
$carouselSlq = "SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";
$query1 = $pdo->query($carouselSlq);
$carousels = $query1->fetchAll(PDO::FETCH_CLASS, Carousel::class);

$homeSectionlSlq = "SELECT  sous_rubrique.SRU_ID ,sous_rubrique.SRU_TITRE , sous_rubrique.SRU_CONTENU FROM  sous_rubrique WHERE sous_rubrique.SRU_LIBELLE = 'home'  AND STA_ID = 1 AND SIT_ID = 1 ";
$query2 = $pdo->query($homeSectionlSlq);
$homeSection = $query2->fetchAll(PDO::FETCH_CLASS, HomeSection::class);

$homeActualitelSlq = "SELECT  sous_rubrique.SRU_ID ,media.MED_RESSOURCE  FROM  sous_rubrique INNER JOIN media ON media.MED_ID= sous_rubrique.SRU_IMG_ID WHERE sous_rubrique.SRU_LIBELLE = 'actualite'  AND STA_ID = 1 AND SIT_ID = 1 And SRU_AVANT = 1 LIMIT 3";
$query3 = $pdo->query($homeActualitelSlq);
$homeActualite = $query3->fetchAll(PDO::FETCH_CLASS, AlaUneActualite::class);

// $homeServiceMiseEnAvantSql = "SELECT media.MED_RESSOURCE, sous_rubrique.SRU_LIBELLE, sous_rubrique.SRU_TITRE , sous_rubrique.SRU_CONTENU FROM sous_rubrique INNER JOIN media ON media.MED_ID = sous_rubrique.SRU_VIGNETTE_ID WHERE SRU_AVANT = 1 AND STA_ID = 1 ORDER BY SRU_ORDRE LIMIT 5";
$homeServiceMiseEnAvantSql = "SELECT template.TPL_LIBELLE as template,sous_rubrique.SRU_ID as id_sous_rubrique,rubrique.RUB_ID as id_rubrique, media.MED_RESSOURCE, sous_rubrique.SRU_LIBELLE, sous_rubrique.SRU_TITRE , sous_rubrique.SRU_CONTENU FROM sous_rubrique INNER JOIN media ON media.MED_ID = sous_rubrique.SRU_VIGNETTE_ID INNER JOIN rubrique ON rubrique.RUB_ID = sous_rubrique.RUB_ID INNER JOIN template ON template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.SRU_AVANT = 1 AND sous_rubrique.STA_ID = 1 AND sous_rubrique.SIT_ID = 1 ORDER BY SRU_ORDRE LIMIT " . limite5;

$query4 = $pdo->query($homeServiceMiseEnAvantSql);
$homeServiceMiseEnAvant = $query4->fetchAll(PDO::FETCH_CLASS, SectionTwoHome::class);


// echo '<pre>';
// echo print_r($homeServiceMiseEnAvant);
// echo '<pre>';
// exit();

?>
<main>
	<section class="home">
		<div class="home-slider swiper">
			<div class="swiper-wrapper">
				<?php foreach ($carousels as $image) : ?>
					<div class="slide swiper-slide" style="background:url(<?php echo ecrousel . $image->getCarouselNameRessource(); ?>) no-repeat">
						<div class="content">
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<div class="container-home">
		<div class="row">
			<div class="col-log-2 col-md-2 col-sm-1  ">
				<img class="image-illustration" src="<?= ephoto . "image1.png" ?>" alt="illustration lampe" srcset="">
			</div>
			<div class=" col-log-5 col-md-5 col-sm-9 ">
				<!-- <div class=" col-log-4 col-md-9 col-sm-9 content-desc"> -->
				<h1><?= $homeSection[0]->getTitle() ?> </h1>
				<p>
					<?= $homeSection[0]->getContenue() ?>
				</p>
			</div>
			<div class=" col-log-5 col-md-5 col-sm-9 ">
				<!-- <div class=" col-log-4 col-md-9 col-sm-9 content-desc"> -->
				<!-- <div class="row"> -->
				<!-- <div class="col-log-6"> -->
				<!-- <video class="" src="<?= evideo . $homeActualite[0]->getRessource() ?>" controls></video> -->
				<video class="w-video-main" src="<?= evideo . $homeActualite[0]->getRessource() ?>" controls></video>
				<!-- </div> -->
				<!-- <div class="col-log-6"> -->
				<!-- <video class="w-video-second" src="<?php echo evideo . $homeActualite[0]->getRessource() ?>" controls></video> -->
				<!-- <video class="w-video-second" src="<?php echo evideo . $homeActualite[0]->getRessource() ?>" controls></video> -->
				<!-- <video class="w-video-second" src="<?php echo evideo . $homeActualite[0]->getRessource() ?>" controls></video> -->
				<!-- </div> -->
				<!-- </div> -->

			</div>
		</div>
		<!-- Présentation de service -->
		<div class="contenaire-service">
			<!-- <div class=""> -->
			<div class="row text-center service-element">
				<?php
				foreach ($homeServiceMiseEnAvant as $contentMiseEnAvant) : ?>
					<!-- <div class="service-content"> -->
					<div class="service-content">
						<img src="<?= ephoto . $contentMiseEnAvant->getRessource() ?>" alt="image titre" srcset="">
						<h1><?= $contentMiseEnAvant->getTitre() ?></h1>
						<p><?= $contentMiseEnAvant->getContenu() ?> </p>
						<a class="btn" href="#">Pour en savoir plus ... ddd</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<!-- slide nos partenaire -->
		<div class="container_partner_slide">
			<h2 class="text-center font-weight-bold">Nos Partenaires</h2>
			<div class="container_partner_display">
				<div class="partner_block">
					<div class="container-slide">
						<img class="" src=" <?php echo ephoto . "left.png" ?>" alt="logo" />
					</div>
					<div class="partner_display_item ">
						<div class="item_slide"><img src="<?php echo logo . "image_evolis.png" ?>" alt="logo"></div>
						<div class="item_slide"><img src=" <?php echo logo . "image_huawai.png" ?>" alt="logo"></div>
						<div class="item_slide"><img src=" <?php echo logo . "image_juris_consult.png" ?>" alt="logo">
						</div>
						<div class="item_slide"><img src=" <?php echo logo . "image_konnect.png" ?>" alt="logo"></div>
					</div>
					<div>
						<img class="" src="<?php echo ephoto . "rigth.png" ?>" alt="logo" />
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
// On inclut les fichiers de configuration et d'accès aux données
include_once '../config/Database.php';
include_once '../config/include.php';

$sqlCarousel1 = "SELECT media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE
		FROM  media
		Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID
		Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID
		WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";

$db->sql($sqlCarousel1);
$resultCarousel = $db->getResult();

// $database = new Database();
// $dbCon = $database->getConnection();

$carousels = $resultCarousel;

?>
<main>
	<section class="home">
		<div class="home-slider swiper">
			<div class="swiper-wrapper">
				<?php
				foreach ($carousels as $image) {
				 ?>
				<div class="slide swiper-slide" style="background:url(images/part/<?php echo $image['MED_RESSOURCE']; ?>) no-repeat">
					<div class="content">
					</div>
				</div>
				<?php
				}
			?>
				<!-- <div class="slide swiper-slide" style="background:url(images/part/hero.png) no-repeat">
					<div class="content">
					</div>
				</div> -->
				<!-- <div class="slide swiper-slide" style="background:url(images/part/hero.png) no-repeat">
					<div class="content">
					</div>
				</div> -->
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<div class="container-home">
		<section class=" row description">
			<div class="col-xs-1 col-md-3  content-image">
				<img class="image-illustration" src="./images/part/imageIllustration.png" alt="illustration lampe" srcset="">
			</div>
			<div class=" col-xs-10 col-md-4 content-desc">
				<h1>World Corp Group RDC, </h1>
				<p>
					est une société de consulting et de développement de projets innovants, spécialiste en solutions
					SMAC (Social, Mobile, Analytics, Cloud).
					Nous accompagnons nos clients dans la mise en place des solutions SMAC et le développement sur
					mesure de leur stratégie digitale et multicanale pour une expérience numérique réussie.
				</p>
			</div>
			<div class=" col-xs-10 col-md-4 contenaire-video">
				<video src="./demo-video.mp4" controls></video>
			</div>
		</section>
		<!-- Présentation de service -->
		<div class="contenaire-service">
			<div class="service-element">
				<div class="service-content">
					<img src="./images/images_design_factory.png" alt="image titre" srcset="">
					<h1>CONSULTING</h1>
					<p>Nous accompagnons, très en amont de projets, nos clients dans leurs démarches de
						transformation
						digitale
						et d’optimisation de leur stratégie numérique. </p>
					<a class="btn" href="#">Pour en savoir plus ...</a>
				</div>

				<div class="service-content">
					<img src="./images/image_ecran_projection.png" alt="image titre" srcset="">
					<h1>CONSULTING</h1>
					<p>Nous accompagnons, très en amont de projets, nos clients dans leurs démarches de
						transformation
						digitale
						et d’optimisation de leur stratégie numérique. </p>
					<a class="btn" href="#">Pour en savoir plus ...</a>
				</div>
				<div class="service-content">
					<img src="./images/image_consulting.png" alt="image titre" srcset="">
					<h1>CONSULTING</h1>
					<p>Nous accompagnons, très en amont de projets, nos clients dans leurs démarches de
						transformation
						digitale
						et d’optimisation de leur stratégie numérique. </p>
					<a class="btn" href="#">Pour en savoir plus ...</a>
				</div>
				<div class="service-content">
					<img src="./images/image_et_innovation.png" alt="image titre" srcset="">
					<h1>CONSULTING</h1>
					<p>Nous accompagnons, très en amont de projets, nos clients dans leurs démarches de
						transformation
						digitale
						et d’optimisation de leur stratégie numérique. </p>
					<a class="btn" href="#">Pour en savoir plus ...</a>
				</div>
				<div class="service-content">
					<img src="./images/image_telecom.png" alt="image titre" srcset="">
					<h1>CONSULTING</h1>
					<p>Nous accompagnons, très en amont de projets, nos clients dans leurs démarches de
						transformation
						digitale
						et d’optimisation de leur stratégie numérique. </p>
					<a class="btn" href="#">Pour en savoir plus ...</a>
				</div>

			</div>
		</div>
		<!-- slide nos partenaire -->
		<div class="container_partner_slide">
			<h2 class="text-center font-weight-bold">Nos Partenaires</h2>
			<div class="container_partner_display">
				<div class="partner_block">
					<div class="container-slide">
						<img class="" src="./images/left.png" alt="logo" />
					</div>
					<div class="partner_display_item ">
						<div class="item_slide"><img src="./images/partners/image_evolis.png" alt="logo"></div>
						<div class="item_slide"><img src="./images/partners/image_huawai.png" alt="logo"></div>
						<div class="item_slide"><img src="./images/partners/image_juris_consult.png" alt="logo">
						</div>
						<div class="item_slide"><img src="./images/partners/image_konnect.png" alt="logo"></div>
					</div>
					<div>
						<img class="" src="./images/rigth.png" alt="logo" />
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php

use App\MODEL\LittleContent;
use App\MODEL\HiringContent;
// use App\Helpers\Text;
use App\Connection;

$pdo = Connection::getPDO();

$titlePage = 'hiring detail';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';


$idMenu = intval($params['id']);
$idParent = intval($params['slug']);

$queryLittleContent = "";
if ($idParent === 0) {
	$queryLittleContent = $pdo->query("SELECT rubrique.SIT_ID as id, media.MED_RESSOURCE as bgImage, rubrique.RUB_LIBELLE as libelle,rubrique.RUB_TITRE as titre ,rubrique.RUB_CONTENU  as contenu FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = " . $idMenu . " AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");
}
$resultquery = $queryLittleContent->fetchAll(PDO::FETCH_CLASS, LittleContent::class);
// idMenu
$query2 = $pdo->query("SELECT template.TPL_LIBELLE as template,sous_rubrique.SRU_ID as id, sous_rubrique.SRU_LIBELLE as libelle,sous_rubrique.SRU_TITRE as titre ,sous_rubrique.SRU_CONTENU  as contenu FROM sous_rubrique INNER JOIN template ON  template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.RUB_ID = " . $idMenu . "  AND sous_rubrique.STA_ID = 1");
$resultQueryHiring = $query2->fetchAll(PDO::FETCH_CLASS, HiringContent::class);

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
			<h4>Rejoignez-nous !</h4>
		</div>
	</section>
	<div class="bag-offre">
		<!-- <span>PARTAGER</span> -->
	</div>
	<section class="container-content-recrutement">
		<h4 class="title__recrutement">RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)</h4>
		<div class="recrutement-box">

			<div class="box-content">
				<div class="content-item">
					<p>Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
						recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
						l'évolution et l'intégration des API.
						Candidatez en nous envoyant votre CV à rh@worldcorpgroup.fr.
					</p>
					<div class="item_inline"></div>
					<p>
						Vous interviendrez sur :<br>
						- L'analyse et la conception technique :<br>
						- Le développement de nouvelles fonctionnalités :<br>
						- La livraison des développements en production :<br>
						- La maintenance corrective et évolutive des développements :<br>
						- La réalisation de tests unitaires :<br>
						- La rédaction de documents techniques :<br>
						- La stack technique : JAVA/J2E, Spring, Spring Boot/Sécurity,<br>
						Hibernate, Angular, JavaScript, Tomcat, Eclipse, REST, SOAP,<br>
						Docker, Maven, Jenkins, GIT.<br>
						<br>
						<br>
						<br>
						De formation universitaire ou école d'ingénieurs, vous devez<br>
						disposer d'une expérience significative dans le développement des API.<br>
					</p>
					<div class="item_inline"></div>
					<p>
						En plus de qualités techniques, vous devez avoir: <br>
						<br>
						- Le goût pour la technique et le travail en équipe ;<br>
						- La capacité à travailler à distance (Télétravail) ;<br>
						- L'Autonomie et l'intérêt pour la veille technologique ;<br>
						- La capacité à comprendre les besoins et enjeux métiers ;<br>
						- Le bon relationnel.<br>
						<br>
						Vous devez être rigoureux, pro-actif et curieux.<br>
						<br>
						<br>
						Votre rémunération sera définie en fonction de votre profil.<br>
						<br>
						Pour toute candidature :<br>
					</p>
					<h4>contact@wcg-rdc.com</h4>
					<br>
					<br>
					<h4>Télécharger le document de l'appel d'offres</h4>
				</div>
				<div>
					<h4>Postuler en ligne</h4>
					<div class="box_info"> <a class="btn" href="<?= $router->url("form", array('id' => 1, 'slug' => 0)) ?>"> Postuler</a>
				</div>
			</div>
		</div>
	</section>
</main>
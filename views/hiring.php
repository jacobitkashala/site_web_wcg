<?php

use App\MODEL\LittleContent;
use App\Helpers\Text;
use App\Connection;

$pdo = Connection::getPDO();

$titlePage = 'hiring';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';


$idMenu = intval($params['id']);
$idParent = intval($params['slug']);

$queryLittleContent = "";
if ($idParent === 0) {
	$queryLittleContent = $pdo->query("SELECT rubrique.SIT_ID as id, media.MED_RESSOURCE as bgImage, rubrique.RUB_LIBELLE as libelle,rubrique.RUB_TITRE as titre ,rubrique.RUB_CONTENU  as contenu FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = " . $idMenu . " AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");
}
$resultquery = $queryLittleContent->fetchAll(PDO::FETCH_CLASS, LittleContent::class);
// $pdo =Connection::getPDO(); 
// $carouselSlq="SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";
// $query = $pdo->query($carouselSlq);
// $carousels = $query->fetchAll(PDO::FETCH_CLASS, Carousel::class);
// echo '<pre>';
// echo print_r($resultquery);
// echo '<pre>';
?>
<main>
	<section class="container_header_inovation">
		<div class="header_expertise_color_white">
			<div class="header_color_active"></div>
		</div>
		<div class="header-box">
			<h4> <?= $resultquery[0]->getLittTitle() ?></h4>
		</div>
	</section>
	<section class="container-content-recrutement">
		<h4 class="title__recrutement">OFFRES D’EMPLOI</h4>
		<div class="recrutement-box">
			<div class="box-content">
				<div class="content-item">
					<h4>RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)</h4>
					<p>Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
						recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
						l'évolution et l'intégration des API.
					</p>
					<div class="box_info"> <a class="btn" href="./detail_recrutement.html"> En savoir plus</a>
						<p>Ouverture : 04-11-2022 / clôture : 26-12-2022</p>
					</div>
					<div class="item_inline"></div>
				</div>
				<div class="content-item">
					<h4>RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)</h4>
					<p>Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
						recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
						l'évolution et l'intégration des API.
					</p>
					<div class="box_info"> <a class="btn" href="./detail_recrutement.html"> En savoir plus</a>
						<p>Ouverture : 04-11-2022 / clôture : 26-12-2022</p>
					</div>
					<div class="item_inline"></div>
				</div>

			</div>
		</div>
	</section>
</main>
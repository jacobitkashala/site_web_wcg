<?php

use App\MODEL\LittleContent;
use App\MODEL\HiringContent;
// use App\Helpers\Text;
use App\Connection;

$pdo = Connection::getPDO(db_host,db_user,db_pass,db_name);

$titlePage = 'hiring';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';


$idMenu = intval($params['id']);
$idParent = intval($params['slug']);

$queryLittleContent = "";
if ($idParent === 0) {
	$queryLittleContent = $pdo->query("SELECT rubrique.SIT_ID as id, media.MED_RESSOURCE as bgImage, rubrique.RUB_LIBELLE as libelle,rubrique.RUB_TITRE as titre ,rubrique.RUB_CONTENU  as contenu FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = " . $idMenu . " AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");
}
$resultquery = $queryLittleContent->fetchAll(PDO::FETCH_CLASS, LittleContent::class);
// idMenu
$query2 = $pdo->query("SELECT template.TPL_LIBELLE as template,sous_rubrique.SRU_ID as id, sous_rubrique.SRU_LIBELLE as libelle,sous_rubrique.SRU_TITRE as titre ,sous_rubrique.SRU_CONTENU  as contenu FROM sous_rubrique INNER JOIN template ON  template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.RUB_ID = ".$idMenu."  AND sous_rubrique.STA_ID = 1");
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
			<h4> <?= $resultquery[0]->getLittTitle() ?></h4>
		</div>
	</section>
	<section class="container-content-recrutement">
		<h4 class="title__recrutement"><?= $resultquery[0]->getLittContenu() ?></h4>
		<div class="recrutement-box">
			<div class="box-content">
			<?php foreach ($resultQueryHiring as $itemHiring) : ?>
				<div class="content-item">
					<h4><?=  $itemHiring->getTitle()?></h4>
					<p><?=  $itemHiring->getContenu()?></p>
					<div class="box_info"> <a class="btn" href="<?= $router->url($itemHiring->getTemplate(), array('id' => $itemHiring->getId(), 'slug' => 0)) ?>"> En savoir plus</a>
						<p><?=  $itemHiring->getLibelle()?></</p>
					</div>
					<div class="item_inline"></div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</section>
</main>
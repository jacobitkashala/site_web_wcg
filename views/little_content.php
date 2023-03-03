<?php

use App\MODEL\LittleContent;
use App\Helpers\Text;
use App\Connection;

$pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);

$titlePage = 'Little content';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

$idMenu = intval($params['id']);
$idParent = intval($params['slug']);

$queryLittleContent = "";

if ($idParent === 0) {
	$queryLittleContent = $pdo->query("SELECT rubrique.SIT_ID as id, media.MED_RESSOURCE as bgImage, rubrique.RUB_LIBELLE as libelle,rubrique.RUB_TITRE as titre ,rubrique.RUB_CONTENU  as contenu FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = " . $idMenu . " AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");
} else if ($idParent > 0) {
	$queryLittleContent = $pdo->query("SELECT media.MED_RESSOURCE as bgImage, sous_rubrique.SRU_LIBELLE as libelle,sous_rubrique.SRU_TITRE as titre ,sous_rubrique.SRU_CONTENU  as contenu FROM sous_rubrique INNER JOIN media ON media.MED_ID = sous_rubrique.SRU_IMG_ID WHERE sous_rubrique.RUB_ID = " . $idParent . " AND sous_rubrique.SRU_ID = " . $idMenu . " AND sous_rubrique.STA_ID = 1 LIMIT 1");
}

$resultquery = $queryLittleContent->fetchAll(PDO::FETCH_CLASS, LittleContent::class);

$newPathEphoto = ephoto;


echo "
<style>
.container_content_expertise{
   background-image:  url(" . $newPathEphoto . $resultquery[0]->getBgImage() . " ) ;
background-repeat: no-repeat;
}
</style>
 ";

//  echo '<pre>';
//  echo print_r($params);
//  echo '<pre>';
//  exit();
?>
<section class=" row container_content_expertise">
	<h3 class="col-log-10 col-md-10 col-sm-10 mb-4"> <?= $resultquery[0]->getLittTitle() ?></h3>
	<p class=" col-log-10 col-md-10 col-sm-10 mb-4">
		<?= $resultquery[0]->getLittContenu() ?>
	</p>
</section>
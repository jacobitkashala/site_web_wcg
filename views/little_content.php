<?php

use App\MODEL\LittleContent;
use App\Connection;

$pdo = Connection::getPDO();

$titlePage = 'Little content';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

$idMenu = intval($params['id']);
$idParent = intval($params['slug']);

$queryLittleContent = "";

if ($idParent === 0) {
	$queryLittleContent = $pdo->query("SELECT rubrique.SIT_ID as id, media.MED_RESSOURCE as bgImage, rubrique.RUB_LIBELLE as libelle,rubrique.RUB_TITRE as titre ,rubrique.RUB_CONTENU  as contenu FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = " . $idMenu . " AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");
	// echo  $idParent;
	// echo  $idMenu;
	// $queryLittleContent = $pdo->query("SELECT rubrique.RUB_LIBELLE,rubrique.RUB_TITRE ,rubrique.RUB_CONTENU FROM rubrique INNER JOIN media ON media.MED_ID = rubrique.RUB_IMG_ID WHERE rubrique.RUB_ID = ".$idMenu." AND rubrique.SIT_ID = 1 AND rubrique.STA_ID = 1 LIMIT 1");	
}

$resultquery = $queryLittleContent->fetchAll(PDO::FETCH_CLASS, LittleContent::class);

echo '<style>
.container_content_expertise{
 
//    background: #000 ;
   background-image: url(.' . ephoto . '/expertises_fond.png) ;
background-repeat: no-repeat;
}
</style>';

// echo '<pre>';
// echo print_r($resultquery);
// echo '<pre>'
?>


<section class="container_content_expertise">
	<h4> <?php echo $resultquery[0]->getLittTitle() ?></h4>
	<p>
		<?php echo $resultquery[0]->getLittContenu() ?>
	</p>

</section>
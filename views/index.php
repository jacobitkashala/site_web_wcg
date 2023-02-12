
<?php
use App\MODEL\Carousel;
use App\Connection;

$titlePage = 'Ma home page';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

// $pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jaco', '1234');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");

$pdo =Connection::getPDO(); 
$carouselSlq="SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";
$query = $pdo->query($carouselSlq);
$carousels = $query->fetchAll(PDO::FETCH_CLASS, Carousel::class);
echo '<pre>';
echo print_r($carousels);
echo '<pre>';
?>
<p>Home page</p>
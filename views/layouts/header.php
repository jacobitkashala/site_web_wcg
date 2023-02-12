<?php

use App\MODEL\Menu;

$pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jaco', '1234');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");

$query = $pdo->query('SELECT r.RUB_ID, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource FROM rubrique r, media m, site s WHERE m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 order by r.RUB_ORDRE');
// $menus = $query->fetchAll(PDO::FETCH_OBJ);
$menus = $query->fetchAll(PDO::FETCH_CLASS, Menu::class);
//  echo '<pre>';
//  echo print_r($menus);
//  echo '<pre>';
// include_once '../../config/Database.php';
// define('pa2',dirname(__DIR__));

// echo '<pre>';
// echo print_r($menus);
// echo '<pre>';
?>
<h1>Header</h1>

<?php foreach ($menus as $itemMenu) : ?>
	<p><?= $itemMenu->getMenuName() ?> </p>
<?php endforeach ?>
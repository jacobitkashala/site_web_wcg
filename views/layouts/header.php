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

<header class="header_container">
	<div class="header_image">
		<img src=<?= logo . 'logo_wcg.png' ?> srcset="./images/icons/logo_smal_mobile.png 450w," alt="logo wcg" />
	</div>
	<nav class="header_nav_container">
		<ul class="link-navbar bg-color-shadox" id="main-menu">
			<?php
			foreach ($menus as $menu) {
			?>
				<li class="menu  <?php echo $menu['RUB_BACKGROUND'] . " " . $menu['RUB_FONT_COLOR'] ?> link  <?php echo ($menu['a_sous_rubrique'] == 1 ? "link-menu-grid overMenu" : ""); ?>">
					<a href="#">
						<img class="logo-menu" src="./media/icons/<?php echo $menu['med_ressource']; ?>" alt="logo" />
						<?php echo $menu['RUB_LIBELLE']; ?>
					</a>
					<?php if ($menu['a_sous_rubrique']) {
						$sql2 = "SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title 
								  FROM sous_rubrique 
								  INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID 
								  WHERE sous_rubrique.RUB_ID = " . $menu['RUB_ID'] . " AND sous_rubrique.STA_ID =1
								  ORDER BY SRU_ORDRE";
						$db->sql($sql2);
						$resultSousMenu = $db->getResult();
					?>
						<i class="fa-solid fa-plus icon-cog" id="btn-plus-sous-menu"></i>
						<div class=" sous-menu <?php echo $menu['RUB_BACKGROUND'] ?> ">
							<div class="container-sous-menu-grid">
								<ul class="link-navbar">
									<?php
									foreach ($resultSousMenu as $itemSousMenu) {
									?>
										<li class="link <?php echo $menu['RUB_FONT_COLOR'] ?>">
											<a class="" href="#">
												<?php echo $itemSousMenu['title']; ?>
											</a>

										</li>
									<?php }
									?>
								</ul>
							</div>
						</div>
					<?php } ?>
				<?php
			}
				?>
				</li>
		</ul>
	</nav>
	<div class="fas fa-bars" id="menu-btn">
	</div>
</header>
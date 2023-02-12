<?php

use App\MODEL\Menu;
use App\MODEL\SousMenu;
use App\Connection;

// $pdo = new PDO("mysql:host=127.0.0.1;dbname=wcg_site_web_databases", 'jaco', '1234');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");

$pdo =Connection::getPDO(); 
$query = $pdo->query('SELECT r.a_sous_rubrique,r.url_page,r.RUB_ID, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource FROM rubrique r, media m, site s  WHERE m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 order by r.RUB_ORDRE');
// $menus = $query->fetchAll(PDO::FETCH_OBJ);
$menus = $query->fetchAll(PDO::FETCH_CLASS, Menu::class);

// echo '<pre>';
// echo print_r(icons);
// echo '<pre>';
?>
<!-- <?php foreach ($menus as $itemMenu) : ?>
	<p><?= $itemMenu->getMenuId() ?> </p>
<?php endforeach ?> -->
<header class="header_container">
	<div class="header_image">
		<img src=<?= logo . 'logo_wcg.png' ?> alt="logo wcg" />
	</div>
	<nav class="header_nav_container">
		<ul class="link-navbar bg-color-shadox" id="main-menu">
			<?php foreach ($menus as $itemMenu) : ?>
				<li class="menu  <?php echo $itemMenu->getMenuBackgroud() . " " . $itemMenu->getMenuFontColor() ?> link  <?php echo ($itemMenu->getIsSubMenu() == 1 ? "link-menu-grid overMenu" : "") ?>">
					<a href="#">
						<img class="logo-menu" src="<?php echo icons . $itemMenu->getMenuNameIcone(); ?>" alt="logo" />
						<?php echo $itemMenu->getMenuName()  ?>
					</a>
					<?php if ($itemMenu->getIsSubMenu() == 1) {
						$sql2 = "SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title , template.TPL_LIBELLE as url_sub_menu, template.TPL_RESSOURCES as ressource_sub_menu FROM sous_rubrique INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID INNER JOIN template   ON template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.RUB_ID = ".$itemMenu->getMenuId()." AND sous_rubrique.STA_ID = 1 ORDER BY SRU_ORDRE";
						$query = $pdo->query($sql2);
						$subMenus = $query->fetchAll(PDO::FETCH_CLASS, SousMenu::class);
					?>
						<i class="fa-solid fa-plus icon-cog" id="btn-plus-sous-menu"></i>
						<div class="sous-menu <?php echo $itemMenu->getMenuBackgroud() ?> ">
							<div class="container-sous-menu-grid">
								<ul class="link-navbar">
									<?php foreach ($subMenus as $itemSousMenu) : ?>
										<li class="link <?php echo $itemMenu->getMenuFontColor() ?>">
											<a class="" href="#">
												<?php echo $itemSousMenu->getSubMenuTitle(); ?>
											</a>
										</li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
					<?php } ?>
				<?php endforeach ?>
				</li>
		</ul>
	</nav>
	<div class="fas fa-bars" id="menu-btn">
	</div>
</header>
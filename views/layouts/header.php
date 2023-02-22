<?php

use App\MODEL\Menu;
use App\MODEL\SousMenu;
use App\Connection;


$pdo = Connection::getPDO(db_host,db_user,db_pass,db_name);
$query = $pdo->query('SELECT  template.TPL_LIBELLE,r.a_sous_rubrique,r.url_page,r.RUB_ID, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource FROM rubrique r, media m, site s ,template WHERE m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 and template.TPL_ID = r.TPL_ID ORDER BY r.RUB_ORDRE');
$menus = $query->fetchAll(PDO::FETCH_CLASS, Menu::class);

$newPathLogo = logo;
$newPathIcons = icons;
// $newPathEphoto = ephoto;

if ($_SERVER['REQUEST_URI'] != '/') {
	$newPathLogo = "." . $newPathLogo;
	$newPathIcons = "." . $newPathIcons;
	// $newPathEphoto  = ".".$newPathEphoto;


}

// echo db_host;
// echo print_r(dirname(__DIR__));
// echo '<pre>';

?>
<header class="header_container">
	<div class="header_image">
		<img src=<?= $newPathLogo . 'logo_wcg.png' ?> alt="logo wcg" />
	</div>
	<nav class="header_nav_container">
		<ul class="link-navbar bg-color-shadox" id="main-menu">
			<?php foreach ($menus as $itemMenu) : ?>
				<li class="menu  <?php echo $itemMenu->getMenuBackgroud() . " " . $itemMenu->getMenuFontColor() ?> link  <?php echo ($itemMenu->getIsSubMenu() == 1 ? "link-menu-grid overMenu" : "") ?>">
					<a href="<?= $router->url($itemMenu->getMenuTemplate(), array('id' => $itemMenu->getMenuId(), 'slug' => $itemMenu->getMenuSlug())) ?>">
						<img class="logo-menu" src="<?= $newPathIcons . $itemMenu->getMenuNameIcone(); ?>" alt="logo" />
						<?= $itemMenu->getMenuName()  ?>
					</a>
					<?php if ($itemMenu->getIsSubMenu() == 1) {
						$sql2 = "SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title , template.TPL_LIBELLE as url_sub_menu, template.TPL_RESSOURCES as ressource_sub_menu FROM sous_rubrique INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID INNER JOIN template   ON template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.RUB_ID = " . $itemMenu->getMenuId() . " AND sous_rubrique.STA_ID = 1 ORDER BY SRU_ORDRE";
						$query = $pdo->query($sql2);
						$subMenus = $query->fetchAll(PDO::FETCH_CLASS, SousMenu::class);
					?>
						<i class="fa-solid fa-plus icon-cog" id="btn-plus-sous-menu"></i>
						<div class="sous-menu <?php echo $itemMenu->getMenuBackgroud() ?> ">
							<div class="container-sous-menu-grid">
								<ul class="element-sous-menu link-navbar">
									<?php foreach ($subMenus as $itemSousMenu) : ?>
										<li class="  <?= $itemMenu->getMenuFontColor() ?>">
											<!-- <li class="link <?= $itemMenu->getMenuFontColor() ?>"> -->
											<a class="" href="<?= $router->url($itemMenu->getMenuTemplate(), array('id' => $itemSousMenu->getSubMenuId(), 'slug' => $itemMenu->getMenuId())) ?>">
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
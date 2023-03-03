<?php

use App\MODEL\Menu;
use App\MODEL\SousMenu;
use App\Connection;


$pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);
$query = $pdo->query('SELECT  template.TPL_LIBELLE,r.a_sous_rubrique,r.url_page,r.RUB_ID, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource FROM rubrique r, media m, site s ,template WHERE m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 and template.TPL_ID = r.TPL_ID ORDER BY r.RUB_ORDRE');
$menus = $query->fetchAll(PDO::FETCH_CLASS, Menu::class);



?>
<header class="header_container ">
	<div class="header_image">
		<a class="" href="<?= $router->url('homepage') ?>">
			<img src=<?= logo . 'logo_wcg.png' ?> alt="logo wcg" />
		</a>
	</div>
	<nav class="header_nav_container navbar navbar-expand-lg bg-body-tertiary">
		<ul class="link-navbar bg-color-shadox" id="main-menu">
			<?php $i = 0;
			foreach ($menus as $itemMenu) : ?>
				<li class="menu link  <?= ($itemMenu->getIsSubMenu() == 1 ? "link-menu-grid overMenu" : "") ?>" style="background-color:<?= $itemMenu->getMenuBackgroud() ?>;">
					<a class="<?= ($i === 0) ? "no__border-btom" : " " ?>" href="<?= $router->url($itemMenu->getMenuTemplate(), array('id' => $itemMenu->getMenuId(), 'slug' => $itemMenu->getMenuSlug())) ?>" style="color:<?= $itemMenu->getMenuFontColor() ?>;">
						<img class="logo-menu" src="<?= icons . $itemMenu->getMenuNameIcone(); ?>" alt="logo" />
						<?= $itemMenu->getMenuName()  ?>

						<?php if ($itemMenu->getIsSubMenu() == 1) : ?>
							<i class="fa-solid fa-plus icon-cog" id="btn-plus-sous-menu"></i>
						<?php endif ?>

						<!-- <i class="fa fa-angle-right pull-right"></i> -->
					</a>
					<!-- <span class="underline-element"></span> -->
					<?php if ($itemMenu->getIsSubMenu() == 1) {
						$sql2 = "SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title , template.TPL_LIBELLE as url_sub_menu, template.TPL_RESSOURCES as ressource_sub_menu FROM sous_rubrique INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID INNER JOIN template   ON template.TPL_ID = sous_rubrique.TPL_ID WHERE sous_rubrique.RUB_ID = " . $itemMenu->getMenuId() . " AND sous_rubrique.STA_ID = 1 ORDER BY SRU_ORDRE";
						$query = $pdo->query($sql2);
						$subMenus = $query->fetchAll(PDO::FETCH_CLASS, SousMenu::class);
					?>

						<div class="sous-menu <?php echo $itemMenu->getMenuBackgroud() ?> ">
							<div class="container-sous-menu-grid">
								<ul class="element-sous-menu link-navbar">
									<?php foreach ($subMenus as $itemSousMenu) : ?>
										<li class=" <?= $itemMenu->getMenuFontColor() ?>">
											<a class="" href="<?= $router->url($itemMenu->getMenuTemplate(), array('id' => $itemSousMenu->getSubMenuId(), 'slug' => $itemMenu->getMenuId())) ?>">
												<?php echo $itemSousMenu->getSubMenuTitle(); ?>

											</a>
										</li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
					<?php
					}
					$i++; ?>
				<?php endforeach ?>
				</li>
		</ul>
	</nav>
	<div class="fas fa-bars" id="menu-btn">
	</div>
</header>
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Dropdown
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled">Disabled</a>
				</li>
			</ul>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav> -->
<?php
$db->sql("SET NAMES 'utf8'");
$sql = "SELECT * FROM `V_Menu_Princepal`";
$db->sql($sql);
$result = $db->getResult();


$menus = $result;

?>

<header class="header_container">
	<div class="header_image">
		<img src="./images/logo/logo_wcg.png" srcset="./images/icons/logo_smal_mobile.png 450w," alt="logo wcg" />
	</div>
	<nav class="header_nav_container">
		<?php 
		foreach ($menus as $menu) {
			echo '<a href="" style="background-color:' . $row['RUB_BACKGROUND'] . '>'. $menu['RUB_LIBELLE'].'</a>';
		}
			?>
	</nav>
		<!-- <a href="#" class="color-expertise w20"><img class="logo-menu" src="./images/logo/logo_home.png"
					alt="logo home" /></a> -->

		<!-- Expertise header -->
		<!-- <a href="./pages/expertise.html" class="color-expertise"><img class="logo-menu"
					src="./images/logo/logo_cerveau.png" alt="logo" />
				Expertises</a> -->
		<!-- Innovations -->
		<!-- <a href="./pages/innovation.html" class="color-innovention"><img class="logo-menu"
					src="./images/logo/logo_ampoule.png" alt="logo" /> Innovations</a> -->
		<!-- Recrutement -->
		<!-- <a href="./pages/recrutement.html" class="color-recrutement"><img class="logo-menu"
					src="./images/logo/logo_loupe.png" alt="logo" />
				Recrutement</a> -->
		<!-- Ressources -->
		<!-- <a href="./pages/ressources.html" class="color-ressource"><img class="logo-menu"
					src="./images/logo/logo_ressource.png" alt="logo" /> Ressources</a> -->
		<!-- Secteurs -->
		<!-- <a href="./pages/secteur.html" class="color-secteur"><img class="logo-menu"
					src="./images/logo/logo_secteur.png" alt="logo" />
				Secteurs</a> -->
		<!-- Actualités -->
		<!-- <a href="./pages/actualites.html" class="color-actualite"><img class="logo-menu"
					src="./images/logo/logo_actualite.png" alt="logo" />Actualités</a> -->
		<!-- Actualités -->
		<!-- <a href="#" class="color-expertise"><i class="fa-brands fa-tiktok"></i> Actualités</a> -->
	<!-- </nav> -->
	<div class="fas fa-bars" id="menu-btn">
		
	</div>
</header>

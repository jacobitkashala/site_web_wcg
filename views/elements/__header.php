<?php
// On inclut les fichiers de configuration et d'accès aux données
include_once '../config/Database.php';
include_once '../config/include.php';

include_once '../models/SousMenu.php';
include_once '../models/ItmeSousMenu.php';

$sql = "SELECT * FROM `V_Menu_Princepal`";
$db->sql($sql);
$result = $db->getResult();

$menus = $result;

// $dataMenu = ["id" => 0];

class SousRubrique
{
	public float $longueur;
	public float $largeur;
	public $idSousRubrique;
	public $nomSousRubrique;
	public $urlSousRubrique;
	public $idMenu;
	public $titreRubrique;
}


$dataSRubrique = [];


// $surface = $sRubrique->longueur * $sRubrique->largeur;

// var_dump($surface);
// echo $itemSousMenu->id; 

// echo '<pre>';
// print_r($itemSousMenu->id);
// echo '</pre>';
?>

<header class="header_container">
	<div class="header_image">
		<img src="./images/logo/logo_wcg.png" srcset="./images/icons/logo_smal_mobile.png 450w," alt="logo wcg" />
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
						// $newSRubrique = new SousRubrique;
						// $newSRubrique->titreRubrique = $menu['RUB_LIBELLE'];
						$sql2 = "SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title 
								  FROM sous_rubrique 
								  INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID 
								  WHERE sous_rubrique.RUB_ID = " . $menu['RUB_ID'] . " AND sous_rubrique.STA_ID =1
								  ORDER BY SRU_ORDRE";
						$db->sql($sql2);
						$resultSousMenu = $db->getResult();
						// $sousMenuItem = [];
						// array_push($sousMenuItem, $resultSousMenu);
						// $newSRubrique->nomSousRubrique = $sousMenuItem;
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
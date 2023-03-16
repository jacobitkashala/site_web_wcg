<!-- Le header -->
<header class="header_container ">
	<div class="header_image">
		<a class="" href="index.php?template=home&id=<?= urlencode(1) ?>">
			<img src="./media/logo/logo_wcg.png" alt="logo wcg" />
		</a>
	</div>

	<nav class="header_nav_container ">
		<ul class="link-navbar bg-color-shadox" id="main-menu">
			<li menu-index = 1 active=false clickedMenu(this) class="menu  link-menu-grid overMenu " style="background-color:#BF24C0">
				<a class="menu-show-no-mo " href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFFFF ">
					<img class="logo-menu " src="./media/icons/expertise_menu.png" alt="logo" />
					Expertises
				</a>
				<i class="fa-solid fa-plus icon-cog" id="btn-plus-sous-menu"></i>

				<div class="grid-item sous-menu  " style="background-color:#701475">
					<div class="underlin">
					</div>
					<div class="container-sous-menu-grid">
						<ul class="element-sous-menu link-navbar">
							<li class="sub-menu">
								<a href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFF">
									CONSULTING
								</a>
							</li>
							<li class="sub-menu">
								<a href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFF">
									CLOUD & DATA
								</a>
							</li>
							<li class="sub-menu">
								<a href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFF">
									DIGITAL & INNOVATION
								</a>
							</li>
							<li class="sub-menu">
								<a href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFF">
									DESIGN
								</a>
							</li>
							<li class="sub-menu">
								<a href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFF">
									TELECOM
								</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li menu-index = 2 active=false clickedMenu(this) class="menu link   " style="background-color:#3F079C">
				<a class="" href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFFFF ">
					<img class="logo-menu" src="./media/icons/secteur_menu.png" alt="logo" />
					Secteurs
				</a>
			</li>
			<li menu-index = 3 active=false clickedMenu(this) class="menu link " style="background-color:#2592F9">
				<a class="" href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFFFF ">
					<img class="logo-menu " src="./media/icons/innovation_menu.png" alt="logo" />
					Innovations
				</a>
			</li>
			<!--   -->
			<li menu-index = 4 active=false clickedMenu(this) class="menu link " style="background-color:#14D1B3">
				<a class="" href="index.php?template=Recrutement&id=<?= urlencode(1) ?>" style="color:#FFFFFF ">
					<img class="logo-menu" src="./media/icons/recrutement_menu.png" alt="logo" />
					Recrutements
				</a>
			</li>
			<li menu-index = 5 active=false clickedMenu(this)  class="menu link  " style="background-color:#FFB400">
				<a class="" href="index.php?template=Expertise&id=<?= urlencode(1) ?>" style="color:#FFFFFF ">
					<img class="logo-menu " src="./media/icons/ressource_menu.png" alt="logo" />
					Ressources
				</a>
			</li>
			<li menu-index = 6 active=false clickedMenu(this)  class="menu link " style="background-color:#FF0000">
				<a class="" href="index.php?template=actualite&id=<?= urlencode(1) ?>" style="color:#FFFFFF ">
					<img class="logo-menu" src="./media/icons/actualite_menu.png" alt="logo" />
					Actualités
				</a>
			</li>

		</ul>
	</nav>
	<div class="fas fa-bars" id="menu-btn">
	</div>
</header>
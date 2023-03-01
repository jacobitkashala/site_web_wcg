<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-smile'></i>

	</a>
	<ul class="side-menu top">
		<li class="active">
			<a href="#">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class='bx bxs-shopping-bag-alt'></i>
				<span class="text">Menu</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class='bx bxs-doughnut-chart'></i>
				<span class="text">Journalisation</span>
			</a>
		</li>

		<li>
			<a href="#">
				<i class='bx bxs-message-dots'></i>
				<span class="text">Newsletter</span>
			</a>
		</li>
		<li>
			<a href="<?= $router->url("ressources") ?>">
				<i class='bx bxs-group'></i>
				<span class="text">Mes ressources</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class='bx bxs-doughnut-chart'></i>
				<span class="text">Partenaire</span>
			</a>
		</li>
	</ul>
	<ul class="side-menu">
		<li>
			<a href="#">
				<i class='bx bxs-cog'></i>
				<span class="text">Parametre</span>
			</a>
		</li>
		<li>
			<a href="#" class="logout">
				<i class='bx bxs-log-out-circle'></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section>
<!-- SIDEBAR -->
<?php require_once  'navbar.php'; ?>
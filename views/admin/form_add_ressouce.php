<?php

// use App\MODEL\Ressources;

// use App\Connection;

// $pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);
// $slqRessources = "SELECT m.MED_LIBELLE as libelle, m.MED_RESSOURCE ressources,m.MED_INFOBULLE  as infobulle ,m.MED_META as metadesc ,tm.TYM_LIBELLE as nomtype FROM  media m inner join type_media tm ON tm.TYM_ID=m.TYM_ID LIMIT 10;";
// $queryRessources = $pdo->query($slqRessources);
// $ressources = $queryRessources->fetchAll(PDO::FETCH_CLASS, Ressources::class);
// echo '<pre>';
// var_dump($ressources);
// echo '</pre>';
// exit();
?>
<main>
	<div class="head-title">
		<div class="left">
			<h1>Ajouter une ressource</h1>
			<ul class="breadcrumb">
				<li>
					<a class="active" href="<?= $router->url("ressources") ?>">Ressources</a>
				</li>
				<li><i class='bx bx-chevron-right'></i></li>
				<li>
					<a href="#">Ajouter une ressource</a>
				</li>
			</ul>
		</div>

	</div>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Ajouter une ressource</h3>
			</div>
			<h1> Formulaire ajouter une ressource</h1>
		</div>

	</div>
</main>

</section>
<!-- CONTENT -->
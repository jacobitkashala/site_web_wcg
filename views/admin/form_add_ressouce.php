<?php

// use App\MODEL\Ressources;

// use App\Connection;
// list($base, $menu, $para) = explode(':', $uri);
// echo '<pre>';
// var_dump($uri);
// echo '</pre>';
// exit();

// $pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);
// $slqRessources = "SELECT m.MED_LIBELLE as libelle, m.MED_RESSOURCE ressources,m.MED_INFOBULLE  as infobulle ,m.MED_META as metadesc ,tm.TYM_LIBELLE as nomtype FROM  media m inner join type_media tm ON tm.TYM_ID=m.TYM_ID LIMIT 10;";
// $queryRessources = $pdo->query($slqRessources);
// $ressources = $queryRessources->fetchAll(PDO::FETCH_CLASS, Ressources::class);

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
			<form method="post" enctype="multipart/form-data">
				<div class="row text-center">
					<div class="col-log-6 col-md-5 col-sm-10 ">
						<!-- <div class="form-outline mb-4">
							<input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
							<label class="form-label" for="typeEmailX-2">Email ou non d'utilisateur</label>
						</div>
						<div class="form-outline mb-4">
							<input type="password" name="userPassword" id="typePasswordX-2" class="form-control form-control-lg" />
							<label class="form-label" for="typePasswordX-2">Password</label>
						</div> -->
						<!-- Checkbox -->
						<!-- <div class="form-check d-flex justify-content-start mb-4"> -->
						<!-- <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
							<label class="form-check-label" for="form1Example3"> Remember password </label>
						</div>
						<button class="btn btn-primary btn-lg btn-block" name="btnLogin" type="submit">Login</button> -->

					</div>
				</div>


				<hr class="my-4">
			</form>
		</div>

	</div>
</main>

</section>
<!-- CONTENT -->
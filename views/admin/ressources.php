<?php

use App\MODEL\Ressources;

use App\Connection;

$pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);
$slqRessources = "SELECT m.MED_LIBELLE as libelle, m.MED_RESSOURCE ressources,m.MED_INFOBULLE  as infobulle ,m.MED_META as metadesc ,tm.TYM_LIBELLE as nomtype FROM  media m inner join type_media tm ON tm.TYM_ID=m.TYM_ID LIMIT 10;";
$queryRessources = $pdo->query($slqRessources);
$ressources = $queryRessources->fetchAll(PDO::FETCH_CLASS, Ressources::class);
// echo '<pre>';
// var_dump($ressources);
// echo '</pre>';
// exit();
?>
<main>
	<div class="head-title">
		<div class="left">
			<h1>Resources</h1>
			<ul class="breadcrumb">
				<li>
					<a class="active" href="#">Dashboard</a>
				</li>
				<li><i class='bx bx-chevron-right'></i></li>
				<li>
					<a href="#">ressources</a>
				</li>
			</ul>
		</div>
		<a href="<?= $router->url("form_add_ressource") ?>" class="btn-download">
			<i class='bx bxs-cloud-download'></i>
			<span class="text">Ajouter une ressource</span>
		</a>
	</div>

	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Liste de ressources</h3>
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>Type </th>
						<th>Ressources</th>
						<th>Libeller</th>
						<th>Infobulle</th>
						<th>Description</th>
						<th>Visualisation</th>
						<th>actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- <tr>
						<td>
							<img src=" ">
							<p>John Doe</p>
						</td>
						<td>01-10-2021</td>
						<td><span class="status completed">Completed</span></td>
					</tr> -->
					<?php $i = 1;
					foreach ($ressources as $ressource) : ?>
						<tr>
							<td>
								<?= $i++ ?></td>
							</td>
							<td>
								<?= $ressource->getNomtype() ?? "Manque info" ?></td>
							</td>
							<td>
								<?= $ressource->getRessources() ?? "Manque info" ?></td>
							</td>
							<td>
								<?= $ressource->getLibelle() ?? "Manque info" ?></td>
							</td>
							<td>
								<?= $ressource->getInfobulle() ?? "Manque info" ?></td>
							</td>
							<td>
								<?= $ressource->getMetadesc() ?? "Manque info" ?></td>
							</td>
							<td>
								<img src="<?= ephoto . $ressource->getRessources() ?>">
							</td>
							<td>
								<button type="button" class="btn btn-primary">Primary</button>
								<button type="button" class="btn btn-danger">Danger</button>
							</td>
						<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<!-- <div class="todo">
			<div class="head">
				<h3>Todos</h3>
				<i class='bx bx-plus'></i>
				<i class='bx bx-filter'></i>
			</div>
			<ul class="todo-list">
				<li class="completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded'></i>
				</li>
				<li class="completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded'></i>
				</li>
				<li class="not-completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded'></i>
				</li>
				<li class="completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded'></i>
				</li>
				<li class="not-completed">
					<p>Todo List</p>
					<i class='bx bx-dots-vertical-rounded'></i>
				</li>
			</ul>
		</div> -->
	</div>
</main>

</section>
<!-- CONTENT -->
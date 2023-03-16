<?php
$title = "Recrutement";

ob_start();
?>
<main>
	<!-- Section d'en tête -->
	<section class="container-fluid">
		<div class="row header-box">
			<h4 class="col-lg-12 col-md-12 col-sm-12">Rejoignez-nous !</h4>
		</div>
	</section>
	<!-- Section liste des offres    -->
	<section class="container">
		<h4 class="mx-5">OFFRES D’EMPLOI</h4>
		<div class="row box-content my-5 pb-5">
			<div class="col-log-12 col-md-12 col-sm-12  mt-5 px-5">
				<h3 class="title__recrutement mb-4">RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)</h3>
				<p class="desc__recrutement">
					Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
					recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
					l'évolution et l'intégration des API.
				</p>
				<div class=" row d-flex justify-content-between d-flex-sm-colum-revrse align-items-cente">
					<a class="col-md-2 col-sm-11 mt-sm-3 btn btn-primary" href="index.php?template=detail_recrutement&id=<?= urlencode(1) ?>"> En
						savoir
						plus</a>
					<p class="col-md-6  col-sm-11  date__recrutement">Ouverture : 04-11-2022 / Clôture :
						26-12-2022</p>
				</div>
				<div class="d-flex justify-content-end my-3 mr-3">
					<div class="card-rouge"></div>
					<div class="card-vert mx-2"></div>
					<div class="card-jaune"></div>
				</div>
				<div class="item_inline"></div>
			</div>
			<div class="col-log-12 col-md-12 col-sm-12  mt-5 px-5">
				<h3 class="title__recrutement mb-4">RECRUTEMENT CHEF DE PROJET (H/F)</h3>
				<p class="desc__recrutement">
					Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
					recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
					l'évolution et l'intégration des API.
				</p>
				<div class=" row d-flex justify-content-between d-flex-sm-colum-revrse align-items-cente">
					<a class="col-md-2 col-sm-11 mt-sm-3 btn btn-primary" href="index.php?template=detail_recrutement&id=<?= urlencode(1) ?>"> En
						savoir
						plus</a>
					<p class="col-md-6  col-sm-11  date__recrutement">Ouverture : 04-11-2022 / Clôture :
						26-12-2022</p>
				</div>
				<div class="d-flex justify-content-end my-3 mr-3">
					<div class="card-rouge"></div>
					<div class="card-vert mx-2"></div>
					<div class="card-jaune"></div>
				</div>
				<div class="item_inline"></div>
			</div>
			<div class="col-log-12 col-md-12 col-sm-12  mt-5 px-5">
				<h3 class="title__recrutement mb-4">RECRUTEMENT CHEF DE PROJET (H/F)</h3>
				<p class="desc__recrutement">
					Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
					recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
					l'évolution et l'intégration des API.
				</p>
				<div class=" row d-flex justify-content-between d-flex-sm-colum-revrse align-items-cente">
					<a class="col-md-2 col-sm-11 mt-sm-3 btn btn-primary" href="index.php?template=detail_recrutement&id=<?= urlencode(1) ?>"> En
						savoir
						plus</a>
					<p class="col-md-6  col-sm-11  date__recrutement">Ouverture : 04-11-2022 / Clôture :
						26-12-2022</p>
				</div>
				<div class="d-flex justify-content-end my-3 mr-3">
					<div class="card-rouge"></div>
					<div class="card-vert mx-2"></div>
					<div class="card-jaune"></div>
				</div>
				<div class="item_inline"></div>
			</div>
	</section>
</main>
<?php $contentPage = ob_get_clean(); ?>

<?php require('layout.php') ?>
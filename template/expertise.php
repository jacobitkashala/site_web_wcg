<?php
$title = "Expertise";

ob_start();
?>

<style>
	.container-content-expertise {
		background-image: url("../media/photo/consulting.png ");
		background-repeat: no-repeat;
	}
</style>

<main>
	<section class=" container-fluid container-content-expertise">
		<div class="row content-expertise">
			<h3 class="col-log-11 col-md-11 col-sm-11">
				CONSULTING
			</h3>
			<p class=" col-log-10 col-md-10 col-sm-10 mb-2">
				World Corp Group accompagne ses clients dans leur transformation technique et/ou dans l’optimisation
				de<br>
				leur stratégie technique très en amont en tirant parti de dernières innovations technologiques et
				en<br>
				tenant compte d’impacts au niveau de leur système d’information.<br>
				Notre savoir-faire se décline à travers une gamme de prestations de services pour accompagner
				nos<br>
				clients et partenaires :<br>
				<br>
				- Audit ;<br>
				- Etude de faisabilité :<br>
				nouveaux usages, prototypes et benchmark, études de marché, accompagnement au changement,<br>
				recommandations stratégiques, optimisation, etc. ;<br>

				- AMOA et conception :<br>
				identification et conception des services, recommandations technologiques (architecture,
				optimisation,<br>
				etc.), analyse de l’existant, cadrage de besoins, rédaction de cahiers de charges, etc. ;<br>

				-Implémentation des prototypes (POC) ;<br>
				-Pilotage des projets complexes de bout en bout ;<br>
				-Etc.<br>
			</p>
		</div>


	</section>
</main>

<?php $contentPage = ob_get_clean(); ?>

<?php require('layout.php') ?>
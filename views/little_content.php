<?php
$titlePage = 'Little content';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

$idMenu=$params['id'];
$idParent=$params['slug'];

if($idParent === 0){

}

// $pdo =Connection::getPDO(); 
// $carouselSlq="SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";
// $query = $pdo->query($carouselSlq);
// $carousels = $query->fetchAll(PDO::FETCH_CLASS, Carousel::class);
// echo '<pre>';
// echo print_r($carousels);
// echo '<pre>';

echo '<style>
.container_content_expertise{
 
   background-image: url('.ephoto.'/expertises_fond.png);
}
</style>';

//  echo '<pre>';
//  echo print_r(dirname(__DIR__));
//  echo '<pre>'
?>


<section class="container_content_expertise">
	<h4>CONSULTING</h4>
	<p>World Corp Group accompagne ses clients dans leur transformation technique et/ou dans l’optimisation de
		leur stratégie technique très en amont en tirant parti de dernières innovations technologiques et en
		tenant compte d’impacts au niveau de leur système d’information.
	</p>
	<p>
		Notre savoir-faire se décline à travers une gamme de prestations de services pour accompagner nos
		clients et partenaires : <br>
		<br>
		- Audit :<br>
		- Etude de faisabilité :<br>
		nouveaux usages, prototypes et benchmark, études de marché, accompagnement au changement,
		recommandations stratégiques, optimisation, etc. ;<br>
		<br>
		- AMOA et conception :<br>
		identification et conception des services, recommandations technologiques (architecture, optimisation,
		etc.), analyse de l’existant, cadrage de besoins, rédaction de cahiers de charges, etc. ;<br>
		<br>
		-Implémentation des prototypes (POC) ;<br>
		-Pilotage des projets complexes de bout en bout ;<br>
		-Etc.<br>
	</p>
</section>
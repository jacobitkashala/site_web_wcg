<?php
// use App\MODEL\Carousel;
// use App\Connection;

$titlePage = 'News';
$descriptionPage = 'World Corp Group est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud)';

// $pdo =Connection::getPDO(db_host,db_user,db_pass,db_name); 
// $carouselSlq="SELECT media.MED_ID, media.MED_RESSOURCE ,sous_rubrique.SRU_ORDRE FROM  media Inner JOIN sous_rubrique ON sous_rubrique.SRU_IMG_ID = media.MED_ID Inner JOIN site ON sous_rubrique.SIT_ID = site.SIT_ID WHERE  sous_rubrique.SRU_UNE = 1 AND site.SIT_ID=1";
// $query = $pdo->query($carouselSlq);
// $carousels = $query->fetchAll(PDO::FETCH_CLASS, Carousel::class);
// echo '<pre>';
// echo print_r($carousels);
// echo '<pre>';
// echo ephoto;

echo "
<style>
.bg-image{
   background-image:  url(.". ephoto."cloud_data.png ) ;
   background-repeat: no-repeat;
}
</style>
 ";
?>
<main>

	<div class="bg-image">
		<div class="row">
			<div class="col-5">
				<p>
					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
				</p>
				<div>
					<a class="btn" href="#"></a>
				</div>

			</div>
		</div>
	</div>

</main>
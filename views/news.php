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
   background-image:  url(." . ephoto . "cloud_data.png ) ;
   background-repeat: no-repeat;
}
.bg-image-new{
	background-image:  url(." . ephoto . "new.jpg ) ;
	background-repeat: no-repeat;
 }
</style>
 ";
?>
<main>
	<div class="row bg-image mb-4">
		<div class="col-log-3 col-md-3 col-sm-9 contenair-new">
			<p>
				Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
			</p>
			<a class="btn" href="#">En savoir plus</a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row  d-flex justify-content-center mb-4">
			<div class="card col-log-4 col-md-3 col-sm-9  " style="width: 19rem">
				<img src="<?= "." . ephoto . "business.jpg" ?>" class="img-fluid" alt="...">
				<div class="card-body">
					<p class="card-text"> title and make up the bulk of the card's content. Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					</p>
					<a href="#" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
			<div class="card mx-2  col-log-3 col-md-3 col-sm-9 ">
				<img src="<?= "." . ephoto . "business.jpg" ?>" class="img-fluid" alt="...">
				<div class="card-body">
					<p class="card-text"> title and make s content. Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					</p>
					<a href="#" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
			<div class="card col-log-3 col-md-3 col-sm-9 " style="width: 19rem">
				<img src="<?= "." . ephoto . "business.jpg" ?>" class="img-fluid" alt="...">
				<div class="card-body">
					<p class="card-text"> title and make up the bulk of the card's content. Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					</p>
					<a href="#" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row bg-image-new mb-4 d-flex justify-content-end ">
		<div class="col-log-4 col-md-3 col-sm-9 ">
			<div class="">
				<p>
					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
				</p>
			</div>
		</div>
	</div>
</main>
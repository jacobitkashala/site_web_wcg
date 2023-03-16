<?php
$title = "Actualite";

ob_start();
?>
<style>
	.bg-image-new {
		background-image: url("./media/photo/pile-piles-journaux-.png");
		background-repeat: no-repeat;
	}

	;

	.bg-image-new1 {
		background-image: url("./media/photo/pile-piles-journaux-.png");
		background-repeat: no-repeat;
	}

	;
</style>
<main>
	<!-- 1er section description video -->
	<section class="row margin-15 mb-5">
		<div class="bloc-mood ">
			<video playsinline="" autoplay="autoplay" loop="infinite" muted="muted">
				<source src="../media/video/safari_beach.mp4" type="video/mp4">
			</video>
			<div class="col-log-3 col-md-3 col-sm-9 mx-5 p-5 box-description-video">
				<p>
					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
				</p>
				<a class="btn fw-normal" href="#">En savoir plus</a>
			</div>
		</div>
	</section>
	<!-- 2eme section Liste de card -->
	<section class="container-fluid mb-5">
		<div class="row  d-flex justify-content-center mb-4">
			<div class="card m-1 col-xl-3 col-lg-4 mx-sm-1  " style="width: 19rem">
				<img src="../media/photo/image_vignette_cloud_data.png" class="img-fluid" alt="...">
				<div class="card-body">
					<p class="card-text"> title and make up the bulk of the card's content. Lorem Ipsum Lorem Ipsum
						Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					</p>
					<a href="#" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
			<div class="card m-1 col-xl-3 col-lg-4 " style="width: 19rem">
				<img src="../media/photo/image_vignette_cloud_data.png" class="img-fluid" alt="...">
				<div class="card-body">
					<p class="card-text"> title and make s content. Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
						Lorem Ipsum Lorem Ipsum
					</p>
					<a href="#" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
			<div class="card m-1 col-xl-3 col-lg-4 " style="width: 19rem">
				<img src="../media/photo/image_vignette_cloud_data.png" class="img-fluid" alt="...">
				<div class="card-body">
					<p class="card-text"> title and make up the bulk of the card's content. Lorem Ipsum Lorem Ipsum
						Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					</p>
					<a href="#" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
		</div>
	</section>
	<!-- 3eme section -->
	<section class="bg-image-new row  mb-4 d-flex justify-content-end ">
		<div class="col-log-4 col-md-3 col-sm-9 d-flex flex-sm-column justify-content-sm-center ">

			<p class="box-text">
				Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
				Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
			</p>

		</div>
	</section>

	<section class="container-fluid">
		<div class="row d-flex justify-content-between mb-4">
			<div class="col-log-5 col-md-4 col-sm-9 ">
				<img src="../media/photo/Actualité.jpg" class="img-fluid" alt="...">
			</div>
			<div class="col-log-5 col-md-5 col-sm-9 ">
				<h1 class="fw-semibold">Lorem Ipsum Lorem </h1>
				<p>
					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum

					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum

					Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
					Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
				</p>

			</div>
		</div>
	</section>
</main>
<?php $contentPage = ob_get_clean(); ?>

<?php require('layout.php') ?>
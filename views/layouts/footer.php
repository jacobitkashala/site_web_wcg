<?php
use App\MODEL\LogoFooter;
use App\Connection;


$pdo = Connection::getPDO();
$query9 = $pdo->query("SELECT sous_rubrique.SRU_ID, media.MED_RESSOURCE, sous_rubrique.SRU_LIBELLE FROM sous_rubrique INNER JOIN media ON media.MED_ID = sous_rubrique.SRU_ICONE_ID WHERE sous_rubrique.SRU_LIBELLE = 'footer' LIMIT 9");
$dataLogoFooter = $query9->fetchAll(PDO::FETCH_CLASS, LogoFooter::class);

// echo '<pre>';
// echo print_r($dataLogoFooter);
// echo '<pre>';
?>

<footer class="container-footer">
	<div class="container-footer-one">
		<div class="one-content">
			<div class="content-element">
				<h4>Newsletter</h4>
				<div class="element-input">
					<input type="input" value="" placeholder="Votre adresse mail">
					<button>S'inscrire</button>
				</div>

			</div>
		</div>
	</div>
	<div class="container-footer-two">
		<div class="container_element">
			<div class="box_element">
				<a href="#">A propos</a>
				<a href="#">Mentions légales</a>
				<a href="#">Gestion des cookies</a>
				<a href="#">Politique de confidentialité</a>
				<a href="#">CGU</a>
				<a href="#">@2020WCG</a>
			</div>
		</div>
		<div class="content-icone">
			<div class="content-icone-item">
				<?php foreach ($dataLogoFooter as $item) :?>
				<div class="content-icon"><a href="#"><img src="<?= icons.$item->getNameRessource() ?>" alt="logo" srcset=""></a></div>
				<?php endforeach ?>
				<!-- <div class="content-icon"><a href="#"><img src="<?= icons.'appel.png'?>" alt="logo" srcset=""></a>
				</div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'face.png'?>" alt="logo" srcset=""></a>
				</div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'lindin.png'?>" alt="logo" srcset=""></a>
				</div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'mail.png'?>" alt="logo" srcset=""></a>
				</div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'youtube.png'?>"alt="logo" srcset=""></a></div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'maison_bleu.png'?>" alt="logo" srcset=""></a></div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'twitter.png'?>" alt="logo" srcset=""></a></div>
				<div class="content-icon"><a href="#"><img src="<?= icons.'Insta.png'?>" alt="logo" srcset=""></a> -->
				</div>
			</div>
		</div>

	</div>
</footer>
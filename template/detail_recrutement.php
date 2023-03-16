<?php
$title = "Detail Recrutement";

ob_start();
?>
<main>
	<!-- Section d'en tête -->
	<section class="container-fluid">
		<div class="row header-box">
			<h4 class="col-lg-12 col-md-12 col-sm-12">Rejoignez-nous !</h4>
		</div>
	</section>
	<!-- Section liste des offres -->
	<section class="container">
		<h4 class="mx-md-5 mx-sm-3">OFFRES D’EMPLOI</h4>
		<div class="row box-content my-md-5 my-sm-3 px-md-5 px-sm-3  p-md-3 p-sm-1 pb-5">
			<div class="col-12 my-5 ">
				<h4 class="title__recrutement text-start ">RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)</h4>
			</div>
			<div class="col-12 ">
				<p class="desc__recrutement">
					Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à
					recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement,
					l'évolution et l'intégration des API.
					Candidatez en nous envoyant votre CV à rh@worldcorpgroup.fr.
				</p>
				<div class="item_inline"></div>
			</div>
			<div class="col-12">
				Vous interviendrez sur :<br>
				- L'analyse et la conception technique :<br>
				- Le développement de nouvelles fonctionnalités :<br>
				- La livraison des développements en production :<br>
				- La maintenance corrective et évolutive des développements :<br>
				- La réalisation de tests unitaires :<br>
				- La rédaction de documents techniques :<br>
				- La stack technique : JAVA/J2E, Spring, Spring Boot/Sécurity,
				Hibernate, Angular, JavaScript, Tomcat, Eclipse, REST, SOAP,
				Docker, Maven, Jenkins, GIT.<br>
				<br>
				De formation universitaire ou école d'ingénieurs, vous devez<br>
				disposer d'une expérience significative dans le développement des API.<br>
				</p>
				<div class="item_inline"></div>
			</div>
			<div class="col-12">
				<p class="my-2 m-3 text-danger">En plus de qualités techniques, vous devez avoir : </p>
				- Le goût pour la technique et le travail en équipe ;<br>
				- La capacité à travailler à distance (Télétravail) ;<br>
				- L'Autonomie et l'intérêt pour la veille technologique ;<br>
				- La capacité à comprendre les besoins et enjeux métiers ;<br>
				- Le bon relationnel,Vous devez être rigoureux, pro-actif et curieux.<br>
				<br>
				Votre rémunération sera définie en fonction de votre profil.<br>
				<br>
				Pour toute candidature :<br>
				<br>
				<span class="font-weight-bold">contact@wcg-rdc.com</span>
				</p>
				<div class="item_inline"></div>
				<p class="mt-5 ">Pour postuler en ligne</p>
				<a class="col-md-2 col-sm-11 mt-sm-3 btn btn-primary" href="./formulaire_recrutement.html"> En
					savoir
					plus</a>

			</div>

	</section>
</main>
<?php $contentPage = ob_get_clean(); ?>

<?php require('layout.php') ?>
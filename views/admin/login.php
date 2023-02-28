<?php
// Verification l'autentification de l'utilisateur
use App\Helpers\Text;
use App\Connection;
use App\MODEL\User;

// echo '<pre>';
// var_dump(($querySelectNameUser));
// var_dump(($resultNameUser));
// var_dump(count($resultNameUser));
// echo '</pre>';
// exit();
$text = new Text;
$messageError = null;
$success = null;
$pdo = Connection::getPDO(db_host, db_user, db_pass, db_name);

$options = [
	'cost' => 12,
];
// echo password_hash("admin", PASSWORD_BCRYPT, $options);

if (isset($_POST['btnLogin'])) {
	$username = $text->xss_clean($_POST['username']);
	$password = $text->xss_clean($_POST['userPassword']);

	// définir l'heure d'expiration de la session
	$currentTime = time() + 25200;
	$expired = 3600;
	// Verifier si le mot de pass de l'utilisateur  
	if (empty($username)) {
		$messageError = "Veuillez renseigner votre adresse mail ou le nom d'utilisateur ";
	}
	// Verifier si le mot de pass de l'utilisateur est vide  
	if (empty($password)) {
		$messageError = "Veuillez renseigner votre mot de pass ";
	}
	if (!empty($password) && !empty($username)) {
		if ($text->is_valide_mail($username)) {
			$querySelectNameUser = $pdo->query("SELECT  * FROM  users  WHERE USR_LAST_NAME = '" . $username . "'");
			$resultNameUser = $querySelectNameUser->fetchAll(PDO::FETCH_CLASS, User::class);

			if (count($resultNameUser) > 0) {
				if (password_verify($password, $resultNameUser[0]->getUSR_PWD())) {
					// set time for session timeout

					// $_SESSION['id'] = $res[0]['id'];
					// $_SESSION['role'] = $res[0]['role'];
					$_SESSION['user'] = "jaco";
					$_SESSION['timeout'] = $currentTime + $expired;
					//Redirection dashboard
					header("Location:" . $router->url("admin"));
				} else {
					$messageError = 'Veuillez verifiez votre login ou mot de pass';
				}
			} else {
				$messageError = 'Veuillez verifiez votre login ou mot de pass';
			}
		} else {
			$querySelectNameUser = $pdo->query("SELECT  * FROM  users  WHERE USR_LOGIN = '" . $username . "'");
			$resultNameUser = $querySelectNameUser->fetchAll(PDO::FETCH_CLASS, User::class);

			if (count($resultNameUser) > 0) {
				if (password_verify($password, $resultNameUser[0]->getUSR_PWD())) {
					// $_SESSION['id'] = $res[0]['id'];
					// $_SESSION['role'] = $res[0]['role'];
					$_SESSION['user'] = "jaco";
					$_SESSION['timeout'] = $currentTime + $expired;
					//Redirection dashboard
					header("Location:" . $routerAdmin->url("admin"));
				} else {
					$messageError = 'Veuillez verifiez votre login ou mot de pass';
				}
			} else {
				$messageError = 'Veuillez verifiez votre login ou mot de pass';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- swiper -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- CSS -->
	<link rel='stylesheet' type='text/css' media='screen' href="<?= pathCss . "admin.css" ?>">

	<title>Admin</title>
</head>

<body>
	<main>
		<section class="vh-100" style="background-color: #508bfc;">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="card shadow-2-strong" style="border-radius: 1rem;">
							<div class="card-body p-5 text-center">
								<h3 class="mb-5">Se connecter</h3>
								<?php if ($messageError) : ?>
									<h4 class="text-center text-danger mb-3"><?= $messageError  ?></h4>
								<?php elseif ($success) : ?>
									<h4 class="text-center text-success mb-3"><?= $success  ?></h4>
								<?php endif ?>
								<form method="post" enctype="multipart/form-data">
									<div class="form-outline mb-4">
										<input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
										<label class="form-label" for="typeEmailX-2">Email ou non d'utilisateur</label>
									</div>
									<div class="form-outline mb-4">
										<input type="password" name="userPassword" id="typePasswordX-2" class="form-control form-control-lg" />
										<label class="form-label" for="typePasswordX-2">Password</label>
									</div>

									<!-- Checkbox -->
									<div class="form-check d-flex justify-content-start mb-4">
										<input class="form-check-input" type="checkbox" value="" id="form1Example3" />
										<label class="form-check-label" for="form1Example3"> Remember password </label>
									</div>

									<button class="btn btn-primary btn-lg btn-block" name="btnLogin" type="submit">Login</button>

									<hr class="my-4">

									<!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button> -->
									<!-- <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="<?= pathJs . "admin.js" ?>"></script>

</html>
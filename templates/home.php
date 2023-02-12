<p>Bienvenue sur ma page </p>
<a href="<?= $router->generate('contact') ?>"> Nous contacter </a> <br>
<a href="<?= $router->generate('article', ['id' => 20, 'slug' => "importquoi"]) ?>"> Voir l'article </a>
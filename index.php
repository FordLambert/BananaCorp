
<!DOCTYPE html>
  <html lang="fr">
    <head>
      <title>Banana Corporation - Serveur Rust Français</title>
      <meta name="description" content="Bienvenue sur le site du serveur Rust BananaCorp ! Ici vous trouverez entre autre la liste des plugins, les règles, la carte et bien sur l'ip du serveur ! ">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="pictures/logo.png" /><!--banana logo in title-->
      <link rel="apple-touch-icon" href="pictures/logo-apple.png"/>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Mada" rel="stylesheet"> 
    </head>
    <body>
      <div class="container-fluid row"><!--Start of contain everything (see footer for end)-->
        <header class="col-xs-12 text-center">
          <nav class="row">
            <h1 class="col-md-offset-1 col-md-2 col-xs-6"><a href="index.php">Accueil</a></h1>
            <h1 class="col-md-2 col-xs-6"><a href="carte.php">Carte du serveur</a></h1>                    
            <h1 class="col-md-offset-2 col-md-2 col-xs-6"><a href="regles.php">Règles du serveur</a></h1>
            <h1 class="col-md-2 col-xs-6"><a href="pluginsfr.php">Plugins du serveur</a></h1>
            <div class="col-md-1">
              <a href="index.php" class="col-md-1 col-xs-6"><img src="pictures/fr.png" alt="FR"></a>
              <br>
              <a href="home.php" class="col-md-1 col-xs-6"><img src="pictures/eng.png" alt="ENG"></a>
            </div>
          </nav>
          <div class="carousel slide hidden-xs " data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="item active"><img src="pictures/carou1.jpg" alt="image_rust"></div>
              <div class="item"><img src="pictures/carou3.jpg" alt="image_rust"></div>
              <div class="item"><img src="pictures/carou2.jpg" alt="image_rust"></div>
              <div class="item"><img src="pictures/carou4.jpg" alt="image_rust"></div>
            </div>
            <img src="pictures/banana.png" alt="logo" class="block logoBanana">
          </div>
        </header>
<!--Part specific to this page-->
		<section>
		  <div class="row">
		    <aside class="col-sm-2">
		      <p class="banner hidden-sm text-center">Ip du nouveau serveur :<br>94.23.205.157:28315</p>
		    </aside>
		  <article class="col-md-8 col-xs-12">
		      <img src="pictures/rust-transparent.png" alt="rust_logo" class="center-block logo hidden-xs">
		      <h2 class="text-center">Quoi de neuf sur Rust papa ?</h2>
		        <div class="row">

		<!-- devblog zone .....................................................................................................................devblog zone-->
			        <div class="col-md-offset-1 col-md-10">
			            <h3><a href="http://rust.facepunch.com/blog/">Blog des devellopeurs du jeu</a></h3>
			            <p>Les comptes rendu des mises à jour et un apreçu des créations de la communautée</p>
			            <a href="http://rust.facepunch.com/blog/" class="hidden-xs"><img src="pictures/classic.jpg" class="hidden-xs dev-pictures" alt="devblog_picture"></a>
			            <p>Les mises à jour sortent chaque jeudi soir, les plugins sont généralement fonctionnel au plus tard le lendemain matin</p>
			            <p><a href="http://france-rust.fr/category/maj/" class="redirect">Le site de France Rust propose les devblogs en français !<br>
			            Merci à eux pour la traduction (un peu de délai généralement).</a></p>
			        </div>
		<!-- raid zone ......................................................................................................................... raid zone-->
			        <div class="col-md-offset-1 col-md-10">
			            <h3><a href="raidfr.php">Guide de Survie Elementaire</a></h3>
			            <p>Le 31 Mai 2017 par Ultralapin</p>
			            <a href="raidfr.php" class="hidden-xs"><img src="pictures/raid.jpg" class="hidden-xs dev-pictures" alt="devblog_picture"></a>
			            <p>Vous venez d'arriver sur Rust et vous ne savez pas vous protegez ?<br>
			            Vous êtes la depuis longtemps mais vous vivez dans l'angoisse de l'envahisseur ?<br>
			            Vous voulez vivre en autarcie et tirer sur les égarés qui passent près de chez vous ? Et bien allons y gaiement !</p>
			        </div>
		<!-- rustafied zone ................................................................................................................rustafied zone-->
			        <div class="col-md-offset-1 col-md-10">
			            <h3><a href="http://www.rustafied.com/">Le site Rustafied</a></h3>
			            <p>Site non officiel sur Rust</p>
			            <a href="http://www.rustafied.com/" class="hidden-xs"><img src="pictures/anotherGun.jpg" class="hidden-xs dev-pictures" alt="devblog_picture"></a>
			            <p>Dévoile en partie les devblogs en avance ainsi que plusieurs articles bien faits (en anglais)</p>
			        </div>
		<!-- Veys zone ................................................................................................................Veys zone-->
		          	<div class="col-md-offset-1 col-md-10">
		              	<h3><a href="https://www.rustaforum.com/profile/14535-veys/">Artworks de Veys</a></h3>
		              	<p>Veys est l'artiste derrière les artworks du caroussel.<br>
		              	Si vous aimez son travail vous pouvez en voir plus sur rustafied ou le Steam workshop</p>
		             	<a href="https://www.rustaforum.com/profile/14535-veys/" class="hidden-xs"><img src="pictures/veys.jpg" class="hidden-xs dev-pictures" alt="veys_picture"></a>
		             	<p><a href="http://steamcommunity.com/id/veyskara/">Workshop de Veys</a></p>
		             	<p><a href="https://www.artstation.com/artist/veyselkara">Site de Veys</a></p>
		          	</div>

		        </div>
		    </article>
		  </div>
		</section>
<!--End of the page-->

<?php include("parts/footerFr.php"); ?>

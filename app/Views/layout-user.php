<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>EEDF Annonay</title>
	<meta name="Content-Type" content="UTF-8">
	<meta name="Content-Langage" content="fr">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/bootstrap.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style-user.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/styles.css') ?>" />
	<!-- logo de l'onglet-->
	<link rel="shortcut icon" href="<?= $this->assetUrl('img/logo-onglet1.png') ?>"> 
</head>
<body>
	<header class="masthead">
		<div class="container">
			<div class="text-center" id="logohaut">
				<a href="<?= $this->url('default_accueil') ?>" id="logo">
					<img src="<?= $this->assetUrl('img/logo2.png') ?>" alt="logo EEDF">
				</a>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 text-center">
			<h1 class="vignets">Bienvenue</h1>
			<h2 class="vignets2">Sur le site des Éclaireuses et Éclaireurs d'Annonay</h2>
		</div>
		

		<div class="container-fluid">
			</div><!--/.container  Scroll limite de la modification de la navbar -->		
	</header>
		<!-- NAVBAR-->
		<!-- Fixed navbar -->
		<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="<?php echo ($this->url('default_accueil') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
							<a href="<?= $this->url('default_accueil') ?>">Accueil <span class="sr-only">(current)</span></a>
						</li>
						<li class="<?php echo ($this->url('events_events') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
							<a href="#section2" id="evenement">Evénements</a>
						</li>
						<?php if($w_user !== null){?>
						<li class="<?php echo ($this->url('photo_users_photos') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
							<a href="#section3">Photos</a>
						</li>
						<?php
					}
					?>
					<li class="<?php echo ($this->url('default_documents') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
						<a href="#section4">Documents</a>
					</li>
					<li class="<?php echo ($this->url('default_quisommesnous') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
						<a href="#section5">L'association</a>
					</li>
					<li class="<?php echo ($this->url('default_contact') == $_SERVER['REQUEST_URI']) ? 'active' : ''; ?>">
						<a href="#section6">Contact</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?= $this->section('login') ?>
					<?= $this->section('memberspacebtn') ?>
				</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div><!--/.navbar -->

	
	<?= $this->section('main_content') ?>
	
 	<footer>
 		<div class="footer container text-center">
			<div class="row">
				<div class="col-sm-5 col-xs-6">
					&copy; EEDF Annonay 2017
				</div>
				<div class="col-sm-2 col-xs-1">
					<div id="retourhaut">
					 	<a href="#logohaut"><span class="glyphicon glyphicon-chevron-up"></span></a>
					</div>
				</div>
				<div class="col-sm-5 col-xs-4">
					<a href="<?= $this->url('default_contact') ?>">Nous contacter</a>
				</div>

			</div>
		</div>
	</footer>
	<!--Si un utilisateur est connecté -->
	<?php if($w_user != 0): ?>
	<?= $this->section('memberspacemodal') ?>
	<?php endif ?>

	<?= $this->section('script') ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>-->
	<script src="<?= $this->assetUrl('js/scripts.js') ?>"></script>

</body>
</html>


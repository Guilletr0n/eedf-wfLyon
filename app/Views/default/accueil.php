<?php $this->layout('layout-user', ['title' => 'EEDF Annonay']) ?>

<?php $this->start('login') ?>
	<ul class="nav navbar-nav navbar-right">
		<?php if(!isset($user)): ?>
		<li>
			<a href="<?= $this->url('userManagement_inscription') ?>">S'inscrire</a>
		</li>
		<li>
			<a href="<?= $this->url('userManagement_connexion') ?>">Se connecter</a>
		</li>
	<?php endif ?>
	<?php if(isset($user)): ?>
		<li><a href="#">Salut <?= $user['username'] ?></a></li>
		<li><a href="<?= $this->url('admin_deconnexion'); ?>">Deconnexion</a></li>
	<?php endif ?>
</ul>
<?php $this->stop('login') ?>

<?php $this->start('main_content') ?>

<!-- TEXTE INTRO -->
<section id="texteintro">
	<div class="container">

		<h4 class="textdesc">Les Éclaireuses et Éclaireurs de France s'inspirent des principes et méthodes </h4>
		<h4 class="textdesc">du Scoutisme pour les adapter à chaque tranche d'âges.</h4>
		<div class="col-sm-7" id="bloctext">
			<ul><h4>Cette pédagogie privilégie :</h4>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> La vie en pleine nature.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> L'éducation par l'action et le jeu.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> La vie en petites équipes où chacun prend des responsabilités.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> Une pratique quotidienne de la citoyenneté à travers les "conseils" et la règle de vie.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> L'apprentissage de l'engagement et une démarche de progression.</li>
				<div id="btnsavoirplus">
					<a href="#" id="savoirplus">En savoir plus...</a>
				</div>
			</ul>
		</div>
		<div class="col-sm-5" id="paperplane">
			<img src="<?= $this->assetUrl('img/avionpapier.png') ?>" class="img-responsive">
		</div>
	</div>
</section>


<!-- CAROUSEL-->
<?php if(isset($user)): ?>
<section id="carousel">
	<div class="container">

		<div class="row">
			<h3 class="text-center">Evénements passés</h3>
		</div>
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<a href="indexeedf.php">
								<img src="<?= $this->assetUrl('img/sortie2.jpg') ?>" alt="...">
								<div class="carousel-caption">
									<h3>Rivière Kwai - 22/05/2017</h3>
									<p>Sortie à la rivière Kwai avec les ainés et les louveteaux. Activités : kayaks et canoës</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="indexeedf.php">
								<img src="<?= $this->assetUrl('img/sortie1.jpg') ?>" alt="...">
								<div class="carousel-caption">
									<h3>Visite de la Basilique Michel</h3>
									<p>Journée à Pau pour visiter la Basilique et ses catacombes avec les louveteaux.</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="indexeedf.php">
								<img src="<?= $this->assetUrl('img/patinoire.jpg') ?>" alt="...">
								<div class="carousel-caption">
									<h3>Patinoire - 02/05/2017</h3>
									<p>Après-midi à la patinoire Baraban avec les ainés et les louveteaux.</p>
								</div>
							</a>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</section>
<?php endif ?>
<?php $this->stop('main_content') ?>

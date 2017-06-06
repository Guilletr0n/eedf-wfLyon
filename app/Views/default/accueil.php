<?php $this->layout('layout-user', ['title' => 'EEDF Annonay']) ?>

<?php $this->start('main_content') ?>

<!-- TEXTE INTRO -->
<section id="texteintro" class="bar">
	<div class="container">

		<h4 class="textdesc">Les Éclaireuses et Éclaireurs de France s'inspirent des principes et méthodes </h4>
		<h4 class="textdesc">du Scoutisme pour les adapter à chaque tranche d'âges.</h4>
		<div class="col-sm-7" id="bloctext">
			<ul><h3>Cette pédagogie privilégie :</h3>
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
<section id="carousel">
	<div class="container">
		<div class="row col-md-3" id="imgscout">
			<img src="<?= $this->assetUrl('img/scout.png') ?>" alt="" class="scoutanim">
		</div>
		<div class="row col-md-7">
			<h2>Evénements passés</h2>
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
</section>

<!-- EVENEMENTS PROCHAINS -->
<section id="evenements">
	<div class="container">
		<div class="col-md-2">
		</div>
		<div class="row col-md-6">
			<h2>Evénements prochains</h2>
			<div id="prochainevent">
				<div class="trait">
					<h3>Sortie au parc - 02/04/2017</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur.</p>
				</div>
				<div class="trait">
					<h3>Sortie au cimetière - 15/04/2017</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate.</p>
				</div>
				<div>
					<h3>Sortie à la maison de retraite - 22/04/2017</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla.</p>
				</div>
			</div>
		</div>
		<div class="row col-md-4 text-right" id="imgscout2">
			<img src="<?= $this->assetUrl('img/scout2.png') ?>" alt="" class="scoutanim">
		</div>
	</div>
</section>

<?php $this->stop('main_content') ?>
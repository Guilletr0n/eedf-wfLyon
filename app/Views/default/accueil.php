<?php $this->layout('layout-user', ['title' => 'EEDF Annonay']) ?>

<?php $this->start('main_content') ?>


<!-- Begin page content -->
<!-- <div class="divider" id="section1"></div> -->

<!-- TEXTE INTRO -->
<section id="texteintro" class="bar">
	<div class="container">
		<h2 class="textdesc text-center">Les Éclaireuses et Éclaireurs de France </h2>
		<h3 class="textdesc text-center title-lg divider_line-down viewport_check">s'inspirent des principes et méthodes du Scoutisme <br /> pour les adapter à chaque tranche d'âges.</h3>

		<div class="col-sm-3"></div>
		<div class="col-sm-8">
			<ul class="bar"><h4>Cette pédagogie privilégie :</h4>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> La vie en pleine nature.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> L'éducation par l'action et le jeu.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> La vie en petites équipes où chacun prend des responsabilités.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> Une pratique quotidienne de la citoyenneté à travers les "conseils" et la règle de vie.</li>
				<li><img src="<?= $this->assetUrl('img/feuille.png')?>"> L'apprentissage de l'engagement et une démarche de progression.</li>
				<div id="btnsavoirplus" class="text-right">
					<a href="#" id="savoirplus">En savoir plus</a>
				</div>
			</ul>
		</div>
	</div>
</div>
</section>
<!-- END TEXTE INTRO -->

<div class="divider"></div>

<section class="bg-1">
	<div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>

<div class="divider" id="section2"></div>
<!-- EVENEMENTS PROCHAINS -->
<section id="evenements" class="bar">
	<div class="container">
		<div class="col-md-2">
		</div>
		<div class="row col-md-6">
			<h2>Prochains événements</h2>
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
					<div class="col-md-3">
					</div>
				</div>
			</div>
		</section>


		<section class="bg-3">
			<div class="container">
				<div class="responsiveCal"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Evénements</h2>
					<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=800&amp;wkst=1&amp;hl=fr&amp;bgcolor=%23ffffff&amp;src=nordine.sebih%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border:solid 1px #777" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
		</section>

		<div class="divider"></div>
		<!-- FIN EVENEMENTS PROCHAINS -->

		<?php if($w_user != 0): ?> <!-- seulement vu par les adhérents -->

		<!-- Gallerie -->
		<div class="divider" id="section3"></div>
		<div class="bg-4">
			<div class="container">
				<h2 class="text-center">Galerie photo</h2>
				<div class="row">
					<div class="col-sm-4 col-xs-6">

						<div class="panel panel-default">
							<div class="panel-thumbnail"><a href="#" title="Renovations"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire42.jpg')?>" class="img-responsive"></a></div>
							<div class="panel-body">
								<p>Patinoire</p>
								<p></p>

							</div>
						</div><!--/panel-->
					</div><!--/col-->

					<div class="col-sm-4 col-xs-6">

						<div class="panel panel-default">
							<div class="panel-thumbnail"><a href="#" title="Academic Institutions"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire34.jpg')?>" class="img-responsive"></a></div>
							<div class="panel-body">
								<p>Parc naturel</p>
								<p></p>

							</div>
						</div><!--/panel--> 
					</div><!--/col-->

					<div class="col-sm-4 col-xs-6">

						<div class="panel panel-default">
							<div class="panel-thumbnail"><a href="#" title="Interiors"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire05.jpg')?>" class="img-responsive"></a></div>
							<div class="panel-body">
								<p>Plongée sous marine</p>
								<p></p>

							</div>
						</div><!--/panel--> 

					</div><!--/col--> 

					<div class="col-sm-4 col-xs-6">

						<div class="panel panel-default">
							<div class="panel-thumbnail"><a href="#" title="New Construction"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire33.jpg')?>" class="img-responsive"></a></div>
							<div class="panel-body">
								<p>New Construction</p>
								<p></p>

							</div>
						</div><!--/panel--> 

					</div><!--/col--> 

					<div class="col-sm-4 col-xs-6">

						<div class="panel panel-default">
							<div class="panel-thumbnail"><a href="#" title="Site Planning"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire15.jpg')?>" class="img-responsive"></a></div>
							<div class="panel-body">
								<p>Site Planning</p>
								<p></p>

							</div>
						</div><!--/panel--> 

					</div><!--/col--> 

					<div class="col-sm-4 col-xs-6">

						<div class="panel panel-default">
							<div class="panel-thumbnail"><a href="#" title="Churches"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire37.jpg')?>" class="img-responsive"></a></div>
							<div class="panel-body">
								<p>Churches</p>
								<p></p>

							</div>
						</div><!--/panel--> 

					</div><!--/col--> 

				</div><!--/row-->
			</div><!--/container-->
		</div>
		<!-- Fin Gallerie -->

		<?php endif ?>


		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 text-center">

				<ul class="list-inline center-block">
				</ul>

			</div><!--/col-->
		</div><!--/container-->

	</div><!--/wrap-->
	<?php $this->stop('main_content') ?>

	<?php $this->start('login') ?>
	<?php if(!isset($w_user)): ?>
		<li>
			<a href="<?= $this->url('userManagement_inscription') ?>">S'inscrire</a>
		</li>
		<li>
			<a href="<?= $this->url('userManagement_connexion') ?>">Se connecter</a>
		</li>
	<?php endif ?>
	<?php if($w_user != 0): ?>
		<li><a href="#">Salut <?= $w_user['username'] ?></a></li>
		<li><a href="<?= $this->url('admin_deconnexion'); ?>">Deconnexion</a></li>
	<?php endif ?>
	<?php $this->stop('login') ?>


	<?php $this->start('memberspacebtn') ?>
	<?php if($w_user != 0): ?>
		<li>
			<button type="button" class="btn btn-info navbar-btn" id="memberBtn">Espace membre</button>
			<li>
			<?php endif ?>
			<?php $this->stop('memberspacebtn') ?>

			<?php $this->start('memberspacemodal') ?>
			<?php if($w_user != 0): ?>
				<!-- Modal -->
				<div class="modal fade" id="Modalmember" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Espace Scout</h4>
							</div>
							<div class="modal-body">
								<div class="container">
									<button class="btn btn-info navbar-btn" data-toggle="modal" data-target="#myModal">Ajouter un membre</button>
								</div>
								<div class="container">
									<h3>Vos membres</h3>
									<ul class="list-inline" >
										<li><a href="#">Nom</a></li>
										<li><a href="#">Prénom</a></li>
										<li><a href="#">Totem</a></li>
										<li><a href="#">section</a></li>
									</ul>
									<ul class="list-inline">
										<li><a href="#">Name1</a></li>
										<li><a href="#">Firstame1</a></li>
										<li><a href="#">Totem1</a></li>
										<li><a href="#">Responsable</a></li>
									</ul>
									<ul class="list-inline">
										<li><a href="#">Poubelle</a></li>
										<li><a href="#">Patrik</a></li>
										<li><a href="#">TOTEM2</a></li>
										<li><a href="#">Ainé</a></li>
									</ul>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			<?php endif ?>
			<?php $this->stop('memberspacemodal') ?>
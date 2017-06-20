<?php $this->layout('layout-user', ['title' => 'EEDF Annonay']) ?>

<?php $this->start('main_content') ?>


<!-- Begin page content -->
<div class="divider" id="section1"></div>

<!-- TEXTE INTRO -->
<section id="texteintro" class="bar">
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
					<div class="col-md-3">
					</div>
				</div>
			</div>
		</section>

		<?php if($w_user != 0): ?>

		<!-- CAROUSEL-->
		<section id="carousel" class="bar">
			<div class="container">
				<div class="row col-md-3" id="imgscout">
					<img src="<?= $this->assetUrl('img/scout.png') ?>" alt="">
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
	<?php endif ?>

	<section class="bg-3">
		<div class="container">
			<div class="responsiveCal"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Evénements</h2>
				<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=800&amp;wkst=1&amp;hl=fr&amp;bgcolor=%23ffffff&amp;src=nordine.sebih%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border:solid 1px #777" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
	</section>

	<div class="divider"></div>
	<!-- FIN EVENEMENTS PROCHAINS -->

	<!-- Gallerie -->
	<div class="divider" id="section3"></div>
	<div class="bg-4">
		<div class="container">
			<h1>Gallerie</h1>
			<div class="row">
				<div class="col-sm-4 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-thumbnail"><a href="#" title="Renovations"><img src="//placehold.it/600x400/444/F8F8F8" class="img-responsive"></a></div>
						<div class="panel-body">
							<p>Renovations</p>
							<p></p>

						</div>
					</div><!--/panel-->
				</div><!--/col-->

				<div class="col-sm-4 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-thumbnail"><a href="#" title="Academic Institutions"><img src="//placehold.it/600x400/454545/FFF" class="img-responsive"></a></div>
						<div class="panel-body">
							<p>Academic Institutions</p>
							<p></p>

						</div>
					</div><!--/panel--> 
				</div><!--/col-->

				<div class="col-sm-4 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-thumbnail"><a href="#" title="Interiors"><img src="//placehold.it/600x400/555/F2F2F2" class="img-responsive"></a></div>
						<div class="panel-body">
							<p>Interiors</p>
							<p></p>

						</div>
					</div><!--/panel--> 

				</div><!--/col--> 

				<div class="col-sm-4 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-thumbnail"><a href="#" title="New Construction"><img src="//placehold.it/600x400/555/FFF" class="img-responsive"></a></div>
						<div class="panel-body">
							<p>New Construction</p>
							<p></p>

						</div>
					</div><!--/panel--> 

				</div><!--/col--> 

				<div class="col-sm-4 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-thumbnail"><a href="#" title="Site Planning"><img src="//placehold.it/600x400/555/EEE" class="img-responsive"></a></div>
						<div class="panel-body">
							<p>Site Planning</p>
							<p></p>

						</div>
					</div><!--/panel--> 

				</div><!--/col--> 

				<div class="col-sm-4 col-xs-6">

					<div class="panel panel-default">
						<div class="panel-thumbnail"><a href="#" title="Churches"><img src="//placehold.it/600x400/666/F4F4F4" class="img-responsive"></a></div>
						<div class="panel-body">
							<p>Churches</p>
							<p></p>

						</div>
					</div><!--/panel--> 

				</div><!--/col--> 

			</div><!--/row-->
		</div><!--/container-->
	</div>
	<div class="divider"></div>
	<!-- Fin Gallerie -->


	<!-- Documents -->
	<div class="divider" id="section4"></div>
	<div class="container">
		<h1>Documents</h1>
	</div>
	<div class="divider"></div>
	<!-- Fin Documents -->	

	<!-- Qui sommes nous ? -->
	<div class="divider" id="section5"></div>
	<div id="quisommesnous">
		<div class="container" id="containerassoc">
			<div class="bar">
				<div class="row">
					<h1 class="text-center">L'association EEDF</h1>
				</div>
				<div id="textehaut" class="col-md-8">
					<p>Au fil de l'année ou lors du camp, les enfants et les jeunes découvrent, agissent et vivent des <strong>aventures adaptées à leur âge</strong>. Partir en randonnée, cuisiner un "repas trappeur", dormir à la belle étoile, monter un spectacle, réaliser un four solaire, suivre la piste au trésor, découvrir des ruines mystérieuses, échanger avec des enfants du bout du monde, l'aventure du Scoutisme réserve bien des surprises !</p>
					<br />
					<p>En fonction de son âge, on apprend peu à peu à devenir <strong>autonome, responsable et solidaire</strong>. Après les premières découvertes des Lutins (6 à 8 ans), les Louveteaux (8 à 11 ans) s'organisent pour jouer et vivre les premières aventures collectives. <br />
						Ensuite, les Éclés (11 à 15 ans) prennent des responsabilités dans l'équipage et les Aînés (15 à 18 ans) apprennent à s'engager dans des actions et des projets plus ambitieux en faisant l’apprentissage de l’autonomie individuelle et collective.</p>
						<br />
						<p>A partir de 17 ans, ceux qui le souhaitent peuvent préparer le BAFA et devenir respons pour avoir le plaisir de faire découvrir les Éclés à des plus jeunes.</p>
					</div>
					<aside class="col-md-4">
						<div id="branches">
							<ul><h3>Dans notre groupe, il existe deux branches :</h3>
								<li><h4><img src="<?= $this->assetUrl('img/puce.png')?>"> Les lutins/louveteaux (6-11 ans) :</h4>
									<p>Les années lutins/louveteaux sont celles des premiers départs sans les parents, l'apprentissage de la vie en collectivité et de la découverte du monde qui nous entoure.</p></li>

									<li><h4><img src="<?= $this->assetUrl('img/puce.png')?>"> Les éclaireurs/éclaireuses (11-15 ans) :</h4>
										<p>Les "Éclés" correspondent à l’âge ou l'on commence à prendre des responsabilités et à créer des projets. Les Éclés sont organisés  en équipage, chacun y a un rôle à tenir, coordinateur, secrétaire, etc.</p></li>
									</ul>
								</div>
							</aside>
						</div>
						<div class="bar">
							<div id="textebas"> 
								<h3 class="lobster">Présentation du mouvement EEDF</h3>		 
								<h4><strong>Les EEDF, un mouvement de scoutisme laïque</strong></h4>
								<p>Les Eclaireuses Eclaireurs de France sont un mouvement de scoutisme LAIQUE, fort de 31 000 adhérents, qui fait vivre et qui anime la proposition éducative du scoutisme : engagement personnel, prise en charge de son propre développement, possibilité de vivre la responsabilité et de conduire sa relation aux autres au travers de la vie en équipe, l’éducation par l’action et le jeu. Cette proposition est partagée par 35 millions de filles et de garçons, de femmes et d’hommes dans plus de 160 pays. </p>
								<h4><strong>Les EEDF, association reconnue d’utilité publique et complémentaire de l’école publique</strong></h4>
								<p>Reconnue d’utilité publique et agréée par le ministère de la Jeunesse, de l’Education Nationale et de la Recherche en tant qu’association de jeunesse et d’éducation populaire, l’association est fondée sur le bénévolat et le volontariat. Indépendante et non politique, ouverte à toutes et à tous, sans distinction d’origines ou de croyance, son action complète les autres formes d’éducation (la famille, l’école, les amis, etc.). L’une des forces de l’association est dans sa capacité à remettre en question ses méthodes éducatives pour qu’elles répondent aux attentes de tous les jeunes, appliquant ainsi les principes du scoutisme, tout en tenant compte d’une réalité qui a profondément évolué avec le temps.</p>

								<p>L’association, laïque comme l’Ecole publique, diffuse ses propositions pédagogiques en direction des écoles, collèges et lycées. Elle intervient, en particulier, dans la formation des délégués de classe et l’organisation de sorties et de classes découvertes autour de la thématique de l’éducation à l’environnement.</p>
							</div>
						</div>
					</div>
					<div class="nocontainer">
						<div class="bar text-right" id="scoutisme">
							<div id="textedroite">
								<h3 class="lobster">Notre scoutisme</h3>
								<p>Notre association a pour objet de former des citoyens volontaires, désireux et capables de s’intégrer de façon active dans la société de demain ; des citoyens capables de lutter individuellement contre toute forme d’asservissement, d’intégrisme, de racisme ; des citoyens s’engageant à promouvoir les valeurs de liberté, d’égalité et de fraternité dans une dimension tant nationale qu’internationale.</p>
								<p>Les Eclaireuses Eclaireurs de France, en faisant le choix du scoutisme, proposent de faire vivre toutes leurs valeurs au quotidien dans de petites sociétés de jeunes adaptées à l’âge des uns et des autres et ouvertes sur le monde qui les entoure : en développant l’engagement volontaire et le sens du respect des règles librement acceptées ; en donnant le désir de participer plutôt que de regarder, comme celui d’agir pour apprendre ; en libérant chez chacun l’imaginaire pour stimuler sa capacité à créer, à inventer, à émerveiller ; en étant attentif aux progrès personnels accomplis par rapport au point de départ plutôt qu’à la comparaison ou à la compétition avec les autres ; en faisant l’expérience, au contact de la nature, de l’interdépendance des éléments naturels et de la nécessité de les respecter.</p>
								<p>Ces propositions éducatives sont animées par des adultes qui ont en commun le respect des enfants et des adolescents qui leur sont confiés, l’adhésion aux valeurs et méthodes du scoutisme EEDF et un réel souci de formation et d’éducation permanente.</p>
							</div>
						</div>
						<div class="bar" id="valeurs">
							<div id="textegauche">
								<ul><h3 class="lobster">Nos valeurs</h3>
									<li><img src="<?= $this->assetUrl('img/feuille2.png')?>"> En affirmant le respect fondamental de l’homme dans sa diversité, lutter contre toute forme de discrimination et d’intolérance, c’est le choix de la laïcité.</li>
									<li><img src="<?= $this->assetUrl('img/feuille2.png')?>"> En s’éduquant réciproquement les uns par les autres, en éduquant en commun les filles et les garçons, c’est l’affirmation de la coéducation.</li>
									<li><img src="<?= $this->assetUrl('img/feuille2.png')?>"> En faisant le choix de relations égalitaires, en permettant à chacun avec ses droits et ses devoirs de participer à l’élaboration de projets communs et de prendre des responsabilités, en vivant la citoyenneté, c’est la volonté d’être une école de démocratie.</li>
									<li><img src="<?= $this->assetUrl('img/feuille2.png')?>"> En étant ouvert au monde et à l’autre, en développant un état d’esprit, d’échange, de partage, d’écoute, de construction commune c’est faire vivre ouverture et solidarité.</li>
									<li><img src="<?= $this->assetUrl('img/feuille2.png')?>"> En apprenant à connaître et à comprendre le monde, en agissant pour protéger et faire respecter équilibre et harmonie, c’est notre engagement pour l’environnement.</li></ul>
								</div>
							</div>
						</div>
					</div>

					<div class="divider"></div>
					<!-- Fin Qui sommes nous ? -->

					<!-- Contact -->
					<div class="divider" id="section6"></div>  
					<div class="container" id="containercontact">
						<div class="row">
							<h1 class="text-center bar">Où nous trouver ?</h1>
						</div>
						<div class="localisation">
							<div class="col-md-6 bar" id="carte">
								<div class="adress">
									<ul class="text-center">
										<h2 class="text-center">Notre adresse</h2>	
										<li>Eclaireuses et Eclaireurs de France</li>
										<li>Groupe Jean Maron</li>
										<li>20, chemin de la Carrière</li>
										<li>07100 ANNONAY</li><br />
										<li><strong><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 06.95.42.63.48</strong></li>
									</ul>					
								</div>
								<div class="text-center">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.8714950085746!2d4.668762215457518!3d45.250391279099055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f513a54634ff03%3A0xfcc636aa6773d1e1!2s20+Chemin+de+la+Carri%C3%A8re%2C+07100+Annonay!5e0!3m2!1sfr!2sfr!4v1496587786295" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
								</div>
								<div class="col-md-5 bar" id="contact">
									<h2 class="text-center">Nous contacter</h2>
									<form id="" method="post" action="<?= $this->url('default_contact2') ?>" enctype="multipart/form-data">
										<div class="form-group">
											<input type="text" class="form-control well-lg" name="name" id="name" value="" placeholder="Nom et Prénom" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control well-lg" name="pseudo" id="pseudo" value="" placeholder="Pseudo (si adhérent)">
										</div>
										<div class="form-group">
											<input type="email" class="form-control well-lg" name="mail" id="mail" value="" placeholder="Email" required>
										</div>
										<div class="form-group">
											<textarea id="commentaire" class="form-control well-lg" name="commentaire" placeholder="Commentaire" required></textarea>
										</div>
										<div class="form-group text-center">
											<button type="submit" class="btn btn-success" id="btnsend">Envoyer</button>
										</div>
									</form>
								</div> <!-- class="contact"-->
							</div> <!-- class="localisation"-->
						</div>

						<div class="divider"></div>
						<!--Fin Contact -->

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
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Gestion des adhérent</h4>
							</div>
							<div class="modal-body">
								<div class="container">
									<button class="btn btn-info navbar-btn" data-toggle="modal" data-target="#myModal">Ajouter un membre</button>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-sm-2">Section</div>
										<div class="col-sm-2">Nom</div>
										<div class="col-sm-2">Prénom</div>
										<div class="col-sm-2">Totem</div>
										<div class="col-sm-2">Enregistrer</div>
									</div>
															<?php //var_dump($listsections[0]['rank']); 
															foreach ($usermembers as $key => $usermembers) {
																?> 
																<div class="row">
																<div class="col-sm-2"><?= $listsections[$usermembers['id_section']-1]['rank']?></div>
																<div class="col-sm-2"><?= $usermembers['name'] ?></div>
																<div class="col-sm-2"><?= $usermembers['firstname'] ?></div>
																<div class="col-sm-2"><?= $usermembers['totem'] ?></div>
																<!--	<td><?= $usermembers['infosup'] ?></td>	-->
																<div class="col-sm-2"><input type="checkbox" <?= ($usermembers['register']==1) ? 'checked' : ''; ?> data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0" disabled="disabled"></div>
																</div>
																<?php
															}
															?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<?php endif ?>
			<?php $this->stop('memberspacemodal') ?>
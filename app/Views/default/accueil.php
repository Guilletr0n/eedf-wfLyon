<?php $this->layout('layout-user', ['title' => 'EEDF Annonay']) ?>

<?php $this->start('main_content') ?>

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
<?php endif ?>
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>Accueil</h1>
    </div>

    <p class="lead text-center">The Firm has been providing Professional Design Services in the England area since 1923.</p> 
    
    <hr>
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>
  
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Qui sommes nous ?</h1>
      
      <hr>
     
      <p>
	  The Firm has had a great deal of experience and is highly regarded for its expertise in the areas of design, construction administration, construction management, tight cost control and scheduling.
	  </p> 
      <p>
	  We have been involved in a wide range of building projects, including college facilities, banks, schools, nursing homes, office buildings, churches, industrial buildings and major urban development projects.
      </p> 
      <p>
	  The various projects have included new construction, renovation and adaptive re-use as a way of providing new space for the various clients. Tessier Associates provides in-house programming, master planning, architectural design, construction documentation, project administration and interior design services. Sustainable design, as appropriate for each client, is incorporated in cost effective ways to benefit the long term value of the buildings created by the firm.
	  </p> 
      <p>
	  Together with selected consultants, The Firm provides complete professional services including landscape architecture, structural engineering, electrical and mechanical engineering and site planning.
	  </p> 
      
      <hr>
      
      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
<div class="divider" id="section3"></div>
  <section class="bg-3">
    <div class="container">
      <div class="responsiveCal"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Evénements</h2>
      <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=800&amp;wkst=1&amp;hl=fr&amp;bgcolor=%23ffffff&amp;src=nordine.sebih%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FParis" style="border:solid 1px #777" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </section>
  
<div class="divider" id="section4"></div>
  
<div class="bg-4">
  <div class="container">
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

<div class="divider" id="section5"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div class="row">
  
  <div class="col-sm-10 col-sm-offset-1">
      <h1>Location</h1>
  </div>   
       
  <div class="col-sm-10 col-sm-offset-1" id="map-canvas"></div>
  
  <hr>
  
  <div class="col-sm-8"></div>
  <div class="col-sm-3 pull-right">

      <address>
        The Firm, Inc.<br>
        <span id="map-input">
        1500 Main Street<br>
        Springfield, MA 01115</span><br>
        P: (413) 700-5999
      </address>
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:#">first.last@example.com</a>
      </address>          
  </div>
  
</div><!--/row-->
  
<div class="divider" id="section6"></div>  

<div class="row">
  
  <hr>
  
  <div class="col-sm-9 col-sm-offset-1">
      
      <div class="row form-group">
        <div class="col-md-12">
        <h1>Nous contacter</h1>        
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control well-lg" name="name" id="name" value="" placeholder="Votre Nom" required>
        </div>
        <div class="col-xs-6">
          <input type="text" class="form-control well-lg" name="name" id="name" value="" placeholder="Votre Prénom" required>
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="text" class="form-control" name="pseudo" id="pseudo" value="" placeholder="Pseudo (si adhérent)">
          </div>
          <div class="col-xs-5">
          <input type="email" class="form-control well-lg" name="mail" id="mail" value="" placeholder="Email" required>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <textarea class="form-control" placeholder="Commentaire"></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right">Nous contacter</button>
          </div>
      </div>
    
  </div>
  
</div><!--/row-->
  
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
		<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
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
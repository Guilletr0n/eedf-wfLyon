<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<?= $this->section('googleapis') ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/vendor/sb-admin-2.min.css') ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/admin.css') ?>">

	<?= $this->section('style') ?>

</head>
<body>
	<header>
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= $this->url('admin_dashboard'); ?>">Administration :: <?= $this->e($title) ?></a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right" id="navright">
				<li>
					<a class=""  href="<?= $this->url('admin_dashboard'); ?>">
						Accueil
					</a>
				</li>
				<li><a href="<?= $this->url('default_home'); ?>">Déconnexion</a></li>
			</ul>
			<!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?= $this->url('default_home');?>">Accueil</a>
						</li>
						<li>
							<a href="<?= $this->url('document_documents'); ?>" class="text-uppercase"><i class="fa fa-dashboard fa-fw"></i> Document</a>
							<ul>
								<li>
									<a href="<?= $this->url('document_add_documents'); ?>">Ajout Document <i class="fa fa-plus-circle fa-lg"></i></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?= $this->url('photo_photos'); ?>" class="text-uppercase"><i class="fa fa-dashboard fa-fw"></i> Photos</a>
							<ul>
								<li>
									<a href="<?= $this->url('photo_add_photos'); ?>">Ajout Photos <i class="fa fa-plus-circle fa-lg"></i></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?= $this->url('admin_dashboard'); ?>" class="text-uppercase"><i class="fa fa-dashboard fa-fw"></i> Evenements</a>
							<ul>
								<li>
									<a href="<?= $this->url('events_add_event'); ?>">Ajout Evenement <i class="fa fa-plus-circle fa-lg"></i></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?= $this->url('member_members'); ?>" class="text-uppercase"><i class="fa fa-dashboard fa-fw"></i>Adhérents</a>
							<ul>
								<li>
									<a href="<?= $this->url('member_addMember'); ?>">Ajout Adhérent <i class="fa fa-plus-circle fa-lg"></i></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?= $this->url('member_members'); ?>" class="text-uppercase"><i class="fa fa-dashboard fa-fw"></i>Adhérents</a>
							<ul>
								<li>
									<a href="<?= $this->url('member_addMember'); ?>">Ajout Adhérent <i class="fa fa-plus-circle fa-lg"></i></a>
								</li>
							</ul>
						</li>
						<li><a href="<?= $this->url('userManagement_inscription');?>">Inscription</a>
						</li>
						<li>
							<a href="<?= $this->url('userManagement_get_logged_user');?>">Voir connexion</a></li>
						<li>
							<a href="<?= $this->url('admin_deconnexion');  ?>">deconnexion</a>
						</li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>

	</header>
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<section>
					<?= $this->section('main_content') ?>
				</section>
			</div>
		</div>
	</div>
	<footer>
	</footer>
	<script type="text/javascript" href="<?= $this->assetUrl('js/vendor/sb-admin-2.min.js') ?>">
	</script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/ajax.js') ?>"  ></script>
	<?= $this->section('script') ?>



</body>
</html>

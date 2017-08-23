<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/usersDashboard.css'); ?>">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
	<?php $this->e($title) ?>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title"><?= $this->e($title) ?></span>
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<div class="demo-avatar-dropdown">
					<?= $this->section('sidenav_greetings') ?>
				</div>
			</header>

				<!-- Start NAV-->
				<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<ul id="menuvertical">
					<li><a class="mdl-navigation__link" href="<?= $this->url('admin_dashboard'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">home</i>Accueil</a></li>
					<li><a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Admins</a>
						<ul>
							<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Admin</a></li>
							<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">supervisor_account</i>Liste Admin</a></li>
						</ul>
					</li>
					<li><a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Utilisateurs</a>
						<ul>
							<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Liste Utilisateurs</a></li>
						</ul>
					</li>
					<li><a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">face</i>Adhérents</a>
						<ul>
							<li><a class="mdl-navigation__link" href="<?= $this->url('member_members'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Liste Adhérent</a></li>
							<li><a class="mdl-navigation__link" href="<?= $this->url('member_addMember'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Adhérent</a></li>
						</ul>
					</li>
					<li><a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">event</i>Evénements</a>
						<ul>
							<li><a class="mdl-navigation__link" href="<?= $this->url('events_events_admin'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">event</i>Liste Evénement</a></li>
							<li><a class="mdl-navigation__link" href="<?= $this->url('events_add_event'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Evénement</a></li>
						</ul>
					</li>
					<li><a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">photo_camera</i>Photos</a>
						<ul>
							<li><a class="mdl-navigation__link" href="<?= $this->url('photo_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">photo_camera</i>Liste Photos</a></li>
							<li><a class="mdl-navigation__link" href="<?= $this->url('photo_add_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Photos</a></li>
						</ul>
					</li>
					<li><a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">insert_drive_file</i>Documents</a>
						<ul>
							<li><a class="mdl-navigation__link" href="<?= $this->url('document_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">insert_drive_file</i>Liste Documents</a></li>
							<li><a class="mdl-navigation__link" href="<?= $this->url('document_add_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Document</a></li>
						</ul>
					</li>
					<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person</i>Inscription</a></li>
					<li><a class="mdl-navigation__link" href="<?= $this->url('admin_deconnexion'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">exit_to_app</i>Deconnexion</a></li>
				</ul>
				</nav>
			<!-- END NAV -->

		</div>
		<main class="mdl-layout__content mdl-color--grey-100">
			<?= $this->section('main_content') ?>
		</main>

	</div>
	</div>

	<?= $this->section('script') ?>

	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>

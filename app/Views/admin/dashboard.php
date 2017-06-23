<?php $this->layout('layout-user-management',['title'=>'Dashboard']); ?>

<?php $this->start('sidenav_content') ?>

<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
	<ul id="menuvertical">
		<li><a class="mdl-navigation__link" href="<?= $this->url('admin_dashboard'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">home</i>Accueil</a></li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">supervisor_account</i>Admins</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Admin</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Utilisateurs</a></li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('member_members'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">face</i>Adhérents</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('member_addMember'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Adhérent</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">person_add</i>Inscription</a></li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('events_events_admin'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">event</i>Evénements</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('events_add_event'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Evénement</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('photo_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">photo_camera</i>Photos</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('photo_add_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Photos</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('document_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">insert_drive_file</i>Documents</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('document_add_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Document</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('admin_deconnexion'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">exit_to_app</i>Deconnexion</a></li>
	</ul>
</nav>
<?php $this->stop('sidenav_content') ?>

<?php $this->start('main_content') ?>
<div id="homepage">
<!-- EVENMENTS -->
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div id="blocevent">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-calendar-o fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Evénements</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('events_events_admin');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- PHOTOS -->
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div id="blocphoto">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-picture-o fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Photos</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('photo_photos');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- DOCUMENTS -->
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div id="blocdoc">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-file-text fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Documents</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('document_documents');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- INSCRIPTION -->
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div id="blocinscription">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-sign-in fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Inscriptions</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('userManagement_list_users');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- LISTE ADHERENT -->
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div id="blocadherent">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-address-book fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Adhérents</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('member_members');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

	<!-- LISTE ADMIN -->
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div id="blocadmin">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-user fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">Admins</div>
						</div>
					</div>
				</div>
				<a href="<?= $this->url('userManagement_list_admins');?>">
					<div class="panel-footer">
						<span class="pull-left">Voir les détails</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
	Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
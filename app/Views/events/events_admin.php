<?php $this->layout('layout-user-management', ['title' => 'Evénements']) ?>

<?php $this->start('sidenav_content') ?>
<!--
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
-->
<?php $this->stop('sidenav_content') ?>

<?php $this->start('main_content') ?>

<div class="row" id="events">
	<h3 class="text-center">Gestion des Evénements</h3>
	<div id="listevents" class="panel-body">
		<div class="table-responsive col-md-12">
				<table class="table">
					<thead>
						<tr class="info">
							<th>Titre</th>
							<th>Du</th>
							<th>Au</th>
							<th>Description</th>
							<th>Matériel à emmener</th>
							<th>Activités proposées</th>
							<th>Informations disverses</th>
						</tr>
					</thead>
		<?php foreach ($events as $key => $events) {
			?>
					<tbody>
						<tr class="active">
							<td><?= $events['title'] ?></td>
							<td><?= $events['startdate'] ?></td>
							<td><?= $events['enddate'] ?></td>
							<td><?= $events['description'] ?></td>
							<td><?= $events['materials'] ?></td>
							<td><?= $events['activity'] ?></td>
							<td><?= $events['Infos'] ?></td>
							<!-- <td><input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0"></td> -->
							<td><?= '
					<a href="'. $this->url('events_edit_event', ['id' => $events['id']]).'" class="btn btn-xs btn-success">Modifier</a>
					<a href="'. $this->url('events_edit_event', ['id' => $events['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>';
?>								</td>
						</tr>
					</tbody>
			<?php
			 }
			 ?>
		</div>

	</div>
</div>
<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
	Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
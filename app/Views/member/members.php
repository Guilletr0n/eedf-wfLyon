<?php $this->layout('layout-user-management', ['title' => 'Adhérents']) ?>
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

	<div class="panel panel-default">
		<div class="panel-heading">
                <h3 class="text-center">Gestion des Adhérents</h3>
            </div>
				<div class="panel-body">
                    <div class="table-responsive">        
					<table class="table table-striped">
						<thead>
							<tr class="info">
								<th>#</th>
								<th>Section</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Totem</th>
								<th>infosup</th>
								<th>Enregistrer</th>
								<th>Action</th>
							</tr>
						</thead>
			<?php /*var_dump($members);*/ foreach ($members as $key => $members) {
				?>       
						<tbody>
							<tr class="active">
								<td><?= $members['id_user'] ?></td>
								<td><?= $listsections[$members['id_section']-1]['rank']?></td>
								<td><?= $members['name'] ?></td>
								<td><?= $members['firstname'] ?></td>
								<td><?= $members['totem'] ?></td>
								<td><?= $members['infosup'] ?></td>
								<td><input type="checkbox" <?= ($members['register']==1) ? 'checked' : ''; ?> data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0" disabled="disabled"></td>
								<td><?= '
				 		<a href="'. $this->url('member_editMember', ['id' => $members['id']]).'" class="btn btn-xs btn-success">Modifier</a>
				 		<a href="'. $this->url('member_deleteMembers', ['id' => $members['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>';
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
<?php $this->layout('layout-user-management', ['title' => 'Documents']) ?>

<?php $this->start('header_content') ?>
<?php $this->stop('header_content') ?>

<?php $this->start('sidenav_content') ?>

<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
  <ul id="menuvertical">
    <li><a class="mdl-navigation__link" href="<?= $this->url('admin_dashboard'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">home</i>Accueil</a></li>
    <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Admins</a>
      <ul>
        <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Admin</a></li>
      </ul>
    </li>
    <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Utilisateurs</a></li>
    <li><a class="mdl-navigation__link" href="<?= $this->url('member_members'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Adhérents</a>
      <ul>
        <li><a class="mdl-navigation__link" href="<?= $this->url('member_addMember'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Adhérent</a></li>
      </ul>
    </li>
    <li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">person</i>Inscription</a></li>
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
	<div class="row" id="zonenoire">
		<h3 class="text-center">Documents d'inscription</h3>
		<div id="docprincipaux">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '1'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $document['docname'].'<br />';?> </h4>
					<h5><?= $document['docdescription'].'<br />';?></h5>
						<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btndoc>
						<a href="'. $this->url('document_edit_documents', ['id' => $document['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('document_delete_documents', ['id' => $document['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	<div class="row" id="zoneblanche">
		<h3 class="text-center">Documents de sortie</h3>
		<div id="docsecondaires">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '2'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $document['docname'].'<br />';?></h4>
					<h5><?= $document['docdescription'].'<br />';?></h5>
					<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btndoc>
						<a href="'. $this->url('document_edit_documents', ['id' => $document['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('document_delete_documents', ['id' => $document['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	
<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
	Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
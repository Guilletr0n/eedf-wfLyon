<?php $this->layout('layout-user-management', ['title'=>'Ajout d\'événement']); ?>

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
<div class="container-fluid">
<h3 id="titreElem" class="text-center"> Ajout d'événement</h3>
<div id="formulaireElem">
  <div class="col-md-3"></div>
  <form class="col-md-6 jumbotron" action="<?= $this->url('events_add_event') ?>" method="post" enctype="multipart/form-data" id="ajoutElemForm">
      <div class="form-group text-center" id="formElem2">
          <label for="title" class="control-label text-center">Titre de l'événement</label>
          <input type="text" class="form-control" name="title" id="title" value="" required>
      </div>
      <div class="form-group text-center" id="formElem2">
          <label for="title" class="control-label text-center">Sous titre</label>
          <input type="text" class="form-control" name="subtitle" id="subtitle" value="" required>
      </div>
      <div class="form-group text-center" id="startdate">
          <label for="startdate" class="control-label text-center">Date de début</label>
          <input type="date" class="form-control" name="startdate" name="startdate" value="" required>
      </div>
      <div class="form-group text-center" id="enddate">
          <label for="enddate" class="control-label text-center">Date de fin</label>
          <input type="date" class="form-control" name="enddate" name="enddate" value="" required>
      </div>

      <div class="form-group text-center">
          <label for="description" class="control-label">Description de l'événement</label>
          <textarea id="description" class="form-control" name="description"></textarea>
      </div>

      <div class="form-group text-center">
          <label for="materiel" class="control-label">Matériel à emmener</label>
          <textarea id="materiel" class="form-control" name="materials"></textarea>
      </div>
      <div class="form-group text-center">
          <label for="activites" class="control-label">Activitées proposées</label>
          <textarea id="activites" class="form-control" name="activity"></textarea>
      </div>
     <div class="form-group text-center">
          <label for="activites" class="control-label">Informations</label>
          <textarea id="activites" class="form-control" name="infos"></textarea>
      </div>
      <div class="form-group text-center">
                        <label for="online" class="mr-sm-2">Online</label>
                        <input type="checkbox" name="online" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                    </div>
      <div class="form-group text-center">
          <div class="">
              <button type="submit" class="btn btn-success" id="AddEvent">Ajouter</button>
          </div>
      </div>
  </form>
  </div>
</div>
<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
  Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
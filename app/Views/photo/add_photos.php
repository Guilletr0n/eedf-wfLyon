<?php $this->layout('layout-user-management', ['title'=>'Ajouter les Photos']); ?>

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
<div class="container-fluid">
<h3 id="titrephoto" class="text-center">Ajouter les Photos</h3>
<div class="col-md-3"></div>
<div id="formulairephoto">

  <form class="col-md-6 jumbotron" action="<?= $this->url('photo_add_photos') ?>" method="post" enctype="multipart/form-data" id="ajoutphotoform">
      <div class="form-group text-center" id="formphoto2">
          <label for="photoname" class="control-label text-center">Titre</label>
          <input type="text" class="form-control" name="photoname" id="photoname" value="" required>
    </div>
    <div class="form-group text-center">
          <label for="photodescription" class="control-label">Description</label>
          <textarea id="photodescription" class="form-control" name="photodescription"></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_gallery" class="control-label">Gallerie</label>
        <div>
           <select id="id_gallery" name="id_gallery" class="form-control" required>
              <option disabled selected required>-- Sélectionner gallerie --</option>
              <option value="1" id="id_gallery" required>Photo gallerie</option>
            </select>
        </div>
    </div>
    <!-- Ajout photo -->
    <div class="form-group text-center">
          <label for="photofile" class="control-label">Photo</label>
          <input type="file" name="photofile" class="form-control" id="photofile" required>
    </div>
    <!-- -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnaddphoto">Ajouter</button>
        </div>
  </div>
  </form>
  </div>
  <div class="col-md-2"></div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('sidenav_greetings') ?>
  Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
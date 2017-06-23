<?php $this->layout('layout-user-management', ['title'=>'Ajout de document']); ?>

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
<div class="container-fluid">
<h3 id="titredoc" class="text-center"> Ajout de document</h3>
<div id="formulairedoc">
  <div class="col-md-3"></div>
  <form class="col-md-6 jumbotron" action="<?= $this->url('document_add_documents') ?>" method="post" enctype="multipart/form-data" id="ajoutdocform">
      <div class="form-group text-center" id="formdoc2">
          <label for="docname" class="control-label text-center">Titre du document</label>
          <input type="text" class="form-control" name="docname" id="docname" value="" required>
    </div>
    <div class="form-group text-center">
          <label for="docdescription" class="control-label">Description du document</label>
          <textarea id="docdescription" class="form-control" name="docdescription"></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_categorie" class="control-label">Catégorie de document</label>
        <div>
           <select id="id_categorie" name="id_categorie" class="form-control" required>
              <option disabled selected required>-- Sélectionner un type de doc --</option>
              <option value="1" id="id_categorie" required>Document principal</option>
              <option value="2" id="id_categorie" required>Document de sortie</option>
            </select>
        </div>
    </div>
    <!-- Ajout fichier -->
    <div class="form-group text-center">
          <label for="docfile" class="control-label">Fichier</label>
          <input type="file" name="docfile" class="form-control" id="docfile" required>
    </div>
    <!-- -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnadddoc">Ajouter</button>
        </div>
  </div>
  </form>
  </div>
</div>
<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
  Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>

<?php $this->layout('layout-admin', ['title'=>'Supprimer les Photos']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 id="titresupphoto" class="text-center">Supprimer les Photos</h3>
<div id="formulairesupphoto">

  <form class="col-md-6 jumbotron" action="<?= $this->url('photo_delete_photos') ?>" method="post" enctype="multipart/form-data" id="supphotoform">
      <div class="form-group text-center" id="formsupphoto2">
          <label for="photoname" class="control-label text-center">Titre de la photo</label>
          <input type="text" class="form-control" name="photoname" id="photoname" value="" required>
    </div>
    <div class="form-group text-center">
          <label for="photodescription" class="control-label">Description de la photo</label>
          <textarea id="photodescription" class="form-control" name="photodescription"></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_gallery" class="control-label">Catégorie de gallerie</label>
        <div>
           <select id="id_gallery" name="id_gallery" class="form-control" required>
              <option disabled selected required>-- Sélectionner gallerie --</option>
              <option value="1" id="id_gallery" required>Photo gallerie</option>
              <option value="2" id="id_gallery" required>Photo gallerie</option>
            </select>
        </div>
    </div>
    <!-- Supprime photo -->
    <div class="form-group text-center">
          <label for="photofile" class="control-label">Photo</label>
          <input type="file" name="photofile" class="form-control" id="photofile" required>
    </div>
    <!-- -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-danger" id="btnsupphoto">Supprimer</button>
        </div>
  </div>
  </form>
  </div>
</div>
<?php $this->stop('main_content') ?>


<?php $this->layout('layout-admin', ['title'=>'Ajouter les Photos']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 id="titrephoto" class="text-center">Ajouter les Photos</h3>
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
</div>
<?php $this->stop('main_content') ?>


<?php $this->layout('layout-admin', ['title'=>'Modification photos']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center" id="titremodifphoto">Modifier photos</h3>
<div id="formulairemodifphoto">
  <form class="col-md-7 jumbotron" action="<?= $this->url('photo_edit_photos', ['id' => $photos['id']]) ?>" method="POST" enctype="multipart/form-data" id="modifphotoform">
      <div class="form-group text-center" id="formmodifphoto2">
          <label for="photoname" class="control-label text-center">Titre de la photo</label>
          <input type="text" class="form-control" name="photoname" id="photoname" value="<?php echo $photos['photoname']?>" required>
    </div>
    <div class="form-group text-center">
          <label for="photodescription" class="control-label">Description de la photo</label>
          <textarea id="photodescription" class="form-control" name="photodescription"><?php echo $photos['photodescription']?></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_gallery" class="control-label">Gallerie</label>
        <div>
           <select id="id_gallery" name="id_gallery" class="form-control">
              <option disabled>-- Sélectionner gallerie --</option>
                 <option value="1" id="id_gallery" <?= $photos['id_gallery'] == 1 ? 'selected' : ''; ?>>Gallerie</option>
                 <option value="2" id="id_gallery" <?= $photos['id_gallery'] == 2 ? 'selected' : ''; ?>>Gallerie</option>
            </select>
        </div>
    </div>
    <!-- Ajout fichier -->
    <div class="form-group text-center">
    	<a href="<?= $this->assetUrl($photos['photofile']) ?>" target="_blank"><i class="material-icons">cloud_download</i></a>
          <label for="photofile" class="control-label">Fichier</label>
          <input type="file" name="photofile" class="form-control" id="photofile" value="">
    </div>
    <!-- -->
    <div class="form-group text-center">
          <div class="">
              <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
              <button type="submit" class="btn btn-success" id="btnaddphoto">Modifier</button>
        </div>
  </div>
  </form>
</div>
</div>
<?php $this->stop('main_content') ?>


<?php $this->layout('layout-admin', ['title'=>'Ajouter les Photos']); ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">
<h3 class="text-center"> Ajouter les Photos</h3>
  
  <!-- Ajouter les photos -->
  How to Add Photos
  <form class="col-md-7 jumbotron text-center" action="<?= $this->url('photo_add_photos') ?>" method="post" enctype="multipart/form-data" id="ajoutphotos">
      <div class="form-group text-center" id="ajoutphotos2">
          <label for="docname" class="control-label text-center">Titre d'Album</label>
          <input type="text" class="form-control" name="docname" id="docname" value="" required>
    </div>
    <div class="form-group text-center">
          <label for="docdescription" class="control-label">Description d'Album</label>
          <textarea id="docdescription" class="form-control" name="docdescription"></textarea>
    </div>
    <div class="form-group text-center">
        <label for="id_categorie" class="control-label">Catégorie d'Album</label>
        <div>
           <select id="id_categorie" name="id_categorie" class="form-control">
              <option value="">-- Sélectionner les photos --</option>
                 <option value="1" id="id_categorie">Photo 1</option>
                 <option value="2" id="id_categorie">Photo 2</option>
            </select>
        </div>
    </div>
    <!-- Ajout fichier -->
    How to add Photos
    <div class="form-group text-center">
          <label for="docfile" class="control-label">Photo</label>
          <input type="file" name="docfile" class="form-control" id="photofile" required>
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
<?php $this->stop('main_content') ?>
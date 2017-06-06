

<?php $this->layout('layout-admin', ['title'=>'Ajout d\'événement']); ?>

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
          <textarea id="materiel" class="form-control" name="materiel"></textarea>
      </div>

      <div class="form-group text-center">
          <label for="activites" class="control-label">Activitées proposées</label>
          <textarea id="activites" class="form-control" name="activites"></textarea>
      </div>

      <div class="form-group text-center">
        <label for="id_member" class="control-label text-center">Participants</label>
        <input type="text" class="form-control" name="id_member" id="id_member" value="0" required>
      </div>

      <div class="form-group text-center">
        <label for="galleryname" class="control-label text-center">Nom de la gallerie associée</label>
        <input type="text" class="form-control" name="galleryname" id="galleryname"required>
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

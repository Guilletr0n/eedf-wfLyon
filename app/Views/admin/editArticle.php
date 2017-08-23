<?php $this->layout('layout-user-management',['title'=>'Modifier l\'article']); ?>

<?php $this->start('main_content') ?>
  <form class="form-horizontal" action="<?= $this->url('blog_EditArticle',['id'=>article['id']]) ?>" method="post">
    <div class="form-group">
      <label for="titre" class="col-sm-2 control-label">Titre</label>
      <input type="text" class="form-control" name="titre" id="titre" value="<?php print $article['titre'] ?>">
    </div>
    <div class="form-group">
      <label for="contenu" class="col-sm-2 control-label">Contenu</label>
      <textarea id="contenu" class="form-control" name="contenu"><?php print $article['contenu']?></textarea>
    </div>
    <div class="form-group">
      <div class="">
        <input type="hidden" name="date" value="<?= date('Y-m-d h:i:s'); ?>">
        <button type="submit" class="btn btn-succcess">Ajouter</button>
      </div>
    </div>
  </form>
<?php $this->stop('main_content') ?>

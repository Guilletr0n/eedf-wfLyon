<?php $this->layout('layout-material-design', ['title' => 'Nouvelle Mot de Pass']) ?>

<?php $this->start('main_content') ?>
<hgroup>
<h1>Nouvelle Mot de Passe</h1>

</hgroup>

<form id="form" method="POST" action="<?= $this->url('userManagement_inscription') ?>">
  <?php if(isset($msg)){
    var_dump($msg);
  }?>
  <?php if(isset($id)){
    print $id;
  }?>
  <?php if($token=='notoken'): ?>
    <!-- EMAIL -->
    <div class="group">
      <input type="text" name="password"><span class="highlight"></span><span class="bar"></span>
      <label>Entrez votre addresse email</label>
    </div>
  <?php endif ?>

  

	<button id="buttonSubmit" type="button" class="button buttonBlue">Changer
		<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
	</button>
</form>
<?php $this->stop('main_content') ?>

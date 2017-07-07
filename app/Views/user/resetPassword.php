<?php $this->layout('layout-material-design', ['title' => 'Nouvelle Mot de Pass']) ?>

<?php $this->start('main_content') ?>
<hgroup>
<h1>Nouvelle Mot de Passe</h1>

</hgroup>

<form id="form" method="POST" action="<?= $this->url('userManagement_reset_password') ?>">
  <?php
  if(isset($msg)){
    print $msg;
  }
   ?>
  <?php if(isset($token)): ?>
    <!-- PASSWORD -->
    <div class="group">
      <input type="text" name="password"><span class="highlight"></span><span class="bar"></span>
      <label>Entrez votre nouvelle mot de passe</label>
    </div>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="hidden" name="token" value="<?=$_GET['token']?>">
    <button id="buttonSubmit" type="button" class="button buttonBlue">Changer
  		<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  	</button>
  <?php endif ?>




</form>
<?php $this->stop('main_content') ?>

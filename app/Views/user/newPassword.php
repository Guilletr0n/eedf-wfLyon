<?php $this->layout('layout-material-design', ['title' => 'Nouvelle Mot de Pass']) ?>

<?php $this->start('main_content') ?>
<hgroup>
<h1>Demander une Nouvelle Mot de Passe</h1>

</hgroup>

<form id="form" method="POST" action="<?= $this->url('userManagement_ask_new_password') ?>">

    <!-- EMAIL -->
    <div class="group">
      <input type="text" name="email"><span class="highlight"></span><span class="bar"></span>
      <label>Entrez votre addresse email</label>
    </div>

	<button id="buttonSubmit" type="button" class="button buttonBlue">Envoyer
		<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
	</button>
</form>
<?php $this->stop('main_content') ?>

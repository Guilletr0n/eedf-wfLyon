<?php $this->layout('layout-material-design', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>
		<hgroup>
		<h1>Connexion</h1>
	</hgroup>
	<form id="form" method="POST" action="<?= $this->url('userManagement_connexion') ?>">
		<div class="group">
			<input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
			<label>Username</label>
		</div>
		<div class="group">
			<input type="email" name="password"><span class="highlight"></span><span class="bar"></span>
			<label>Password</label>
		</div>
		<button id="buttonSubmit" ype="button" class="button buttonBlue">Se Connecter
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		</button>
	</form>
<?php $this->stop('main_content') ?>

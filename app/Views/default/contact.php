<?php $this->layout('layout-user', ['title' => 'contact']) ?>
<?php $this->start('main_content') ?>
<?php 
echo $message;
if(isset($message)){
	echo $message;
}?>
<div class="container" id="containercontact">
	<div class="row">
		<h1 class="text-center bar">Où nous trouver ?</h1>
	</div>
	<div class="localisation">
		<div class="col-md-6 bar" id="carte">
			<div class="adress">
				<ul class="text-center">
					<h2 class="text-center">Notre adresse</h2>	
					<li>Eclaireuses et Eclaireurs de France</li>
					<li>Groupe Jean Maron</li>
					<li>20, chemin de la Carrière</li>
					<li>07100 ANNONAY</li><br />
					<li><strong><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 06.95.42.63.48</strong></li>
				</ul>					
			</div>
			<div class="text-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.8714950085746!2d4.668762215457518!3d45.250391279099055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f513a54634ff03%3A0xfcc636aa6773d1e1!2s20+Chemin+de+la+Carri%C3%A8re%2C+07100+Annonay!5e0!3m2!1sfr!2sfr!4v1496587786295" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		</div>
		<div class="col-md-5 bar" id="contact">
			<h2 class="text-center">Nous contacter</h2>
			<form id="" method="post" action="<?= $this->url('default_contact2') ?>" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control well-lg" name="name" id="name" value="" placeholder="Nom et Prénom" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control well-lg" name="pseudo" id="pseudo" value="" placeholder="Pseudo (si adhérent)">
				</div>
				<div class="form-group">
					<input type="email" class="form-control well-lg" name="mail" id="mail" value="" placeholder="Email" required>
				</div>
				<div class="form-group">
					<textarea id="commentaire" class="form-control well-lg" name="commentaire" placeholder="Commentaire" required></textarea>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-success" id="btnsend">Envoyer</button>
				</div>
			</form>
		</div> <!-- class="contact"-->
	</div> <!-- class="localisation"-->
</div>

<?php $this->stop('main_content') ?>

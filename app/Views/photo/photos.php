<?php $this->layout('layout-admin', ['title' => 'Photos']) ?>

<?php $this->start('main_content') ?>
	<div class="row" id="zonenoirephoto">
		<h3 class="text-center">Photo</h3>
		<div id="photoprincipaux">
			<?php foreach ($photos as $key => $photo) {
				if($photo['id_gallery'] == '1'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $photo['photoname'].'<br />';?> </h4>
					<h5><?= $photo['photodescription'].'<br />';?></h5>
						<?= '<a href="'. $this->assetUrl($photo['photofile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btnphoto>
						<a href="'. $this->url('photo_edit_photos', ['id' => $photo['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="photos"  onclick="return confirm(\'Voulez-vous vraiment supprimer le photo ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	<div class="row" id="zoneblanchephoto">
		<h3 class="text-center">Galleries</h3>
		<div id="photosecondaires">
			<?php foreach ($photos as $key => $photo) {
				if($photo['id_gallery'] == '2'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $photo['photoname'].'<br />';?></h4>
					<h5><?= $photo['photodescription'].'<br />';?></h5>
					<?= '<a href="'. $this->assetUrl($photo['photofile']).'" target="_blank"><i class="material-icons">cloud_download</i></a>
						<br />
						<div id=btnphoto>
						<a href="'. $this->url('photo_edit_photos', ['id' => $photo['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="photos"  onclick="return confirm(\'Voulez-vous vraiment supprimer le photo ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			} 
			?>
		</div>
	</div>
	
<?php $this->stop('main_content') ?>

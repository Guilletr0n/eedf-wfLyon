<?php $this->layout('layout-user-management', ['title' => 'Photos']) ?>

<?php $this->start('sidenav_content') ?>

<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
	<ul id="menuvertical">
		<li><a class="mdl-navigation__link" href="<?= $this->url('admin_dashboard'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">home</i>Accueil</a></li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_admins'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">supervisor_account</i>Admins</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_add_user_admin_form'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Admin</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_list_users'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">people</i>Utilisateurs</a></li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('member_members'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">face</i>Adhérents</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('member_addMember'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Adhérent</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('userManagement_inscription'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">person_add</i>Inscription</a></li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('events_events_admin'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">event</i>Evénements</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('events_add_event'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Evénement</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('photo_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">photo_camera</i>Photos</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('photo_add_photos'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Photos</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('document_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">insert_drive_file</i>Documents</a>
			<ul>
				<li><a class="mdl-navigation__link" href="<?= $this->url('document_add_documents'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">add</i>Ajout Document</a></li>
			</ul>
		</li>
		<li><a class="mdl-navigation__link" href="<?= $this->url('admin_deconnexion'); ?>"><i class="mdl-color-text--blue-grey-300 material-icons" role="presentation">exit_to_app</i>Deconnexion</a></li>
	</ul>
</nav>
<?php $this->stop('sidenav_content') ?>

<?php $this->start('main_content') ?>
	<div class="row" id="zonenoirephoto">
		<h3 class="text-center">Photos</h3>
		
		<!--Beginning photos-->
			<div id="photoprincipaux">
			<?php foreach ($photos as $key => $photo) {
				if($photo['id_gallery'] == '1'){ ?>
				<div class="col-md-6 text-center">
					<h4><?= $photo['photoname'].'<br />';?> </h4>
					<h5><?= $photo['photodescription'].'<br />';?></h5>
						<?= '<a href="'. $this->assetUrl($photo['photofile']).'" target="_blank"> </a>
						<br />
						<div id=btnphoto>
						<a href="'. $this->url('photo_edit_photos', ['id' => $photo['id']]).'" class="btn btn-xs btn-success">Modifier</a>
						<a href="'. $this->url('photo_delete_photos', ['id' => $photo['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>
						</div>';
					?></div><?php
				}
			}
		?>

		</div>
		
		<!--End photos <div id="photoprincipaux"> -->
		
	</div>
	<div class="row" id="zoneblanchephoto">
		<h3 class="text-center">Galleries</h3>
		<div id="photogallery">
	
		<!-- Beginning test gallery code -->
		<?php
		/** settings **/	
		$images_dir = 'photos/';
		$thumbs_dir = 'photos/';
		$thumbs_width = 100;
		$images_per_row = 5;

		// function make_thumb($src,$dest,$desired_width) {
		/* read the source image */

		// $source_image = imagecreatefromjpeg($src);
		// $width = imagesx($source_image);
		// $height = imagesy($source_image);
		/* find the "desired height" of this thumbnail, relative to the desired width  */
		// $desired_height = floor($height*($desired_width/$width));
		/* create a new, "virtual" image */
		// $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
		/* copy source image at a resized size */
		// imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
		//var_dump($virtual_image);
		/* create the physical thumbnail image to its destination */
		// imagejpeg($virtual_image,$dest);
		// }

		/* function:  returns files from dir */
		function get_files($images_dir,$exts = array('jpg')) {
		$files = array();
		if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

		/* function:  returns a file's extension */
		function get_file_extension($file_name) {
		return substr(strrchr($file_name,'.'),1);
	}

		/** generate photo gallery **/
		$image_files = get_files('assets/'.$images_dir);
		if(count($image_files)) {
		$index = 0;
			foreach($image_files as $index=>$file) {
		$index++;
		$src = $this->assetUrl($thumbs_dir.$file);
		$thumbnail_image = $this->assetUrl($thumbs_dir.'thumb/');

		// if(!file_exists($thumbnail_image)) {
		// 	$extension = get_file_extension($thumbnail_image);
		// 	if($extension) {
		// 		make_thumb($src,$thumbnail_image,$thumbs_width);
		// 	}
		// }
		echo '<a href="'.$src.'" class="photo-link smoothbox" rel="gallery"><img class="img-responsive" src="'.$src.'" /></a>';
		if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
	}
		echo '<div class="clear"></div>';
	}
	else {
	echo '<p>No images in this gallery.</p>';
	};
	?>
	
		<!-- End test gallery code -->
	
	
		</div>
	</div>

	
	
<?php $this->stop('main_content') ?>
<?php $this->start('sidenav_greetings') ?>
	Salut, <?= $w_user['username'] ?>
<?php $this->stop('sidenav_greetings') ?>
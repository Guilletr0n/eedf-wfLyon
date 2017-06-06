<?php $this->layout('layout-admin', ['title' => 'Photos']) ?>

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
						<a href="photos"  onclick="return confirm(\'Voulez-vous vraiment supprimer le photo ?\');" class="btn btn-xs btn-danger">Supprimer</a>
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

	
		<!-- Beginning test gallery code -->
		<?php
		/** settings **/	
		$images_dir = 'assets/photos/';
		$thumbs_dir = 'assets/photos/';
		$thumbs_width = 100;
		$images_per_row = 5;

		function make_thumb($src,$dest,$desired_width) {
		/* read the source image */
		$source_image = imagecreatefromjpeg($src);
		$width = imagesx($source_image);
		$height = imagesy($source_image);
		/* find the "desired height" of this thumbnail, relative to the desired width  */
		$desired_height = floor($height*($desired_width/$width));
		/* create a new, "virtual" image */
		$virtual_image = imagecreatetruecolor($desired_width,$desired_height);
		/* copy source image at a resized size */
		imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
		/* create the physical thumbnail image to its destination */
		imagejpeg($virtual_image,$dest);
		}

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
		$image_files = get_files($images_dir);
		if(count($image_files)) {
		$index = 0;
			foreach($image_files as $index=>$file) {
		$index++;
		$thumbnail_image = $thumbs_dir.$file;
		if(!file_exists($thumbnail_image)) {
			$extension = get_file_extension($thumbnail_image);
			if($extension) {
				make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
			}
		}
		echo '<a href="',$images_dir.$file,'" class="photo-link smoothbox" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
		if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
	}
		echo '<div class="clear"></div>';
	}
	else {
	echo '<p>There are no images in this gallery.</p>';
	};
	?>
	
		<!-- End test gallery code -->
	
	
		
	</div>

	
	
<?php $this->stop('main_content') ?>

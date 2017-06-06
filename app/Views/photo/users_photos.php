<?php $this->layout('layout-user', ['title' => 'Photos']) ?>

<?php $this->start('main_content') ?>

<div class="container" id="zoneblanchephoto">
	<h3 class="text-center">Galleries</h3>
	<div id="photogallery">
	<div class="col-md-3">

		<!-- Beginning gallery code -->
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

		<!-- End gallery code -->

		</div>
	</div>
</div>



<?php $this->stop('main_content') ?>

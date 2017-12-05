<?php $this->layout('layout-user', ['title' => 'Photos']) ?>

<?php $this->start('main_content') ?>

<div class="container" id="zoneblanchephoto">
	<h3 class="text-center">Galleries</h3>
	<div id="photogallery">

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
		echo '<div class="col-md-2"><a href="'.$src.'" class="photo-link smoothbox" rel="gallery"><img class="img-responsive" src="'.$src.'" /></a></div>';
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

	<div class="container">
		<h3 class="text-center">Galerie photo</h3>
		<div class="row">

			<div class="col-md-4 col-sm-6 col-xs-6">

				<div class="panel panel-default">
					<div class="panel-thumbnail"><a href="#" title="Academic Institutions"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire34.jpg')?>" class="img-responsive" alt="sortie 2"></a></div>
					<div class="panel-body">
						<p>Parc naturel</p>
						<p></p>
					</div>
				</div><!--/panel--> 
			</div><!--/col-->

			<div class="col-md-4 col-sm-6 col-xs-6">

				<div class="panel panel-default">
					<div class="panel-thumbnail"><a href="#" title="Interiors"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire05.jpg')?>" class="img-responsive" alt="sortie 3"></a></div>
					<div class="panel-body">
						<p>Plongée sous marine</p>
						<p></p>
					</div>
				</div><!--/panel--> 
			</div><!--/col--> 

			<div class="col-md-4 col-sm-6 col-xs-6">

				<div class="panel panel-default">
					<div class="panel-thumbnail"><a href="#" title="New Construction"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire33.jpg')?>" class="img-responsive" alt="sortie 4"></a></div>
					<div class="panel-body">
						<p>New Construction</p>
						<p></p>
					</div>
				</div><!--/panel--> 
			</div><!--/col--> 

			<div class="col-md-4 col-sm-6 col-xs-6">

				<div class="panel panel-default">
					<div class="panel-thumbnail"><a href="#" title="Site Planning"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire15.jpg')?>" class="img-responsive" alt="sortie 5"></a></div>
					<div class="panel-body">
						<p>Site Planning</p>
						<p></p>
					</div>
				</div><!--/panel--> 
			</div><!--/col--> 

			<div class="col-md-4 col-sm-6 col-xs-6">

				<div class="panel panel-default">
					<div class="panel-thumbnail"><a href="#" title="Churches"><img src="<?= $this->assetUrl('images/2016-01_EEDF_Patinoire37.jpg')?>" class="img-responsive" alt="sortie 6"></a></div>
					<div class="panel-body">
						<p>Churches</p>
						<p></p>
					</div>
				</div><!--/panel--> 
			</div><!--/col--> 
		</div><!--/row-->
	</div><!--/container-->


<?php $this->stop('main_content') ?>

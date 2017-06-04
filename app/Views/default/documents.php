<?php $this->layout('layout-user', ['title' => 'Documents']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row" id="zonedocs1">
		<h3 class="text-center">Documents principaux</h3>
		<div id="docprincipaux">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '1'){ ?>
				<div class="col-md-6 text-center">
					<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="fa fa-file-pdf-o"></i></a>';
					?>
					<h4><?= $document['docname'].'<br />';?> </h4>
					<h5><?= $document['docdescription'].'<br />';?></h5>	
				</div>
				<?php
				}
			} 
			?>
		</div>
	</div>
	<div class="row" id="zonedocs2">
		<h3 class="text-center">Documents secondaires</h3>
		<div id="docsecondaires">
			<?php foreach ($documents as $key => $document) {
				if($document['id_categorie'] == '2'){ ?>
				<div class="col-md-6 text-center">
					<?= '<a href="'. $this->assetUrl($document['docfile']).'" target="_blank"><i class="fa fa-file-pdf-o"></i></a>';
					?>
					<h4><?= $document['docname'].'<br />';?></h4>
					<h5><?= $document['docdescription'].'<br />';?></h5>
				</div>
				<?php
				}
			} 
			?>
		</div>
	</div>
</div>

<?php $this->stop('main_content') ?>

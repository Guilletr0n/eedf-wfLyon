<?php $this->layout('layout-user-page', ['title' => 'Adhérent']) ?>

<?php $this->start('main_content') ?>

	<?php
	echo 'usermember =';
	var_dump($usermembers);
	if (isset($usermembers)) {
	?>
	<div class="container">
		<div class="panel-heading">
                 Gestion des adhérent
                        </div>
				<div class="panel-body">
                    <div class="table-responsive">        
					<table class="table table-striped">
						<thead>
							<tr class="info">
								<th>Section</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Totem</th>
								<th>infosup</th>
								<th>Enregistrer</th>
							</tr>
						</thead>

			<?php //var_dump($listsections[0]['rank']); 
			foreach ($usermembers as $key => $usermembers) {
				?>       
						<tbody>
							<tr class="active">
								<td><?= $listsections[$usermembers['id_section']-1]['rank']?></td>
								<td><?= $usermembers['name'] ?></td>
								<td><?= $usermembers['firstname'] ?></td>
								<td><?= $usermembers['totem'] ?></td>
								<td><?= $usermembers['infosup'] ?></td>
								<td><input type="checkbox" <?= ($usermembers['register']==1) ? 'checked' : ''; ?> data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0" disabled="disabled"></td>
							</tr>
						</tbody>				 		
				<?php
				 }
				 ?>
			</div>
			
		</div>
	</div>
	<?php
	}
	?>

<?php $this->stop('main_content') ?>
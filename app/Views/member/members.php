<?php $this->layout('layout-admin', ['title' => 'Adhérent']) ?>

<?php $this->start('main_content') ?>

	<div class="row">
		<h3 class="text-center">Liste des adhérents</h3>
		<p>Description</p> 
		<div id="listmember">
			<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr>
								<th>Section</th>
								<th>id_user</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Totem</th>
								<th>infosup</th>
								<th>Enregistrer</th>
								<th>Action</th>
							</tr>
						</thead>
			<?php foreach ($members as $key => $members) {
				?>       
						<tbody>
							<tr>
								<td><?php echo $members['id_section'] ?></td>
								<td><?php echo $members['id_user'] ?></td>
								<td><?php echo $members['name'] ?></td>
								<td><?php echo $members['firstname'] ?></td>
								<td><?php echo $members['totem'] ?></td>
								<td><?php echo $members['infosup'] ?></td>
								<td><input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0"></td>
								<td><?= '
				 		<a href="'. $this->url('member_editMember', ['id' => $members['id']]).'" class="btn btn-xs btn-success">Modifier</a>
				 		<a href="'. $this->url('member_deleteMembers', ['id' => $members['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>';
?>								</td>
							</tr>
						</tbody>				 		
				<?php
				 }
				 ?>
			</div>
			
		</div>
	</div>
<?php $this->stop('main_content') ?>
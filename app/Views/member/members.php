<?php $this->layout('layout-admin', ['title' => 'Adhérent']) ?>

<?php $this->start('main_content') ?>

	<div class="row" id="members">
		<h3 class="text-center">Gestion des adhérent</h3>
		<div id="listmember">
			<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr class="info">
								<th>id_user</th>
								<th>Section</th>
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
							<tr class="active">
								<td><?= $members['id_user'] ?></td>
								<td><?= $listsections[$members['id_section']-1]['rank']?></td>
								<td><?= $members['name'] ?></td>
								<td><?= $members['firstname'] ?></td>
								<td><?= $members['totem'] ?></td>
								<td><?= $members['infosup'] ?></td>
								<td><input type="checkbox" <?= ($members['register']==1) ? 'checked' : ''; ?> data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0"></td>
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
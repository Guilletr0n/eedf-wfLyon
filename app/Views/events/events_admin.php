<?php $this->layout('layout-admin', ['title' => 'Evénements']) ?>

<?php $this->start('main_content') ?>

<div class="row" id="events">
	<h3 class="text-center">Gestion des Evénements</h3>
	<div id="listevents">
		<div class="table-responsive">
				<table class="table">
					<thead>
						<tr class="info">
							<th>Titre</th>
							<th>Du</th>
							<th>Au</th>
							<th>Description</th>
							<th>Matériel à emmener</th>
							<th>Activités proposées</th>
							<th>Liste des participants</th>
						</tr>
					</thead>
		<?php foreach ($events as $key => $events) {
			?>
					<tbody>
						<tr class="active">
							<td><?= $events['title'] ?></td>
							<td><?= $events['startdate'] ?></td>
							<td><?= $events['enddate'] ?></td>
							<td><?= $events['description'] ?></td>
							<td><?= $events['materiel'] ?></td>
							<td><?= $events['activites'] ?></td>
							<td><?= $events['id_member'] ?></td>
							<!-- <td><input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" value="0"></td> -->
							<td><?= '
					<a href="'. $this->url('events_edit_event', ['id' => $events['id']]).'" class="btn btn-xs btn-success">Modifier</a>
					<a href="'. $this->url('events_edit_event', ['id' => $events['id']]).'"  onclick="return confirm(\'Voulez-vous vraiment supprimer le fichier ?\');" class="btn btn-xs btn-danger">Supprimer</a>';
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

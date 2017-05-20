<div id="listing">
	<table class="table">
		<thead>
			<tr>
				<th><strong>Titre</strong></th>
				<th><strong>Artiste</strong></th>
				<th><strong>Support</strong></th>
				<th><strong>Procédé</strong></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($allMySong as $value): ?>
			<tr>
				<td><?= $value->title ?></td>
				<td><?= $value->author ?></td>
				<td><?= $value->type ?></td>
				<td><?= $value->process ?></td>
			</tr>
			<?php endforeach; ?> 
		</tbody>		
	</table>
</div>
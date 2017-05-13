<div class="form">
	<table>
		<tr>
			<td><strong>Titre : </strong></td>
			<td> <?= $search->title ?></td>
		</tr>
		<tr>
			<td><strong>Artiste : </strong></td>
			<td> <?= $search->author ?></td>
		</tr>
		<tr>
			<td><strong>Date : </strong></td>
			<td> <?= $search->releaseDate ?></td>
		</tr>
		<tr>
			<td><strong>Support : </strong></td>
			<td> <?= $search->type ?></td>
		</tr>
		<tr>
			<td><strong>Propriétaire : </strong></td>
			<td> <?= $search->name ?></td>
		</tr>
		<tr>
			<td><strong>Procédé : </strong></td>
			<td> <?= $search->process ?></td>
		</tr>
	</table>		
</div>
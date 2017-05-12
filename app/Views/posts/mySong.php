<style>
	table{
		color: #FFFFFF;
		width: 90%;
		border: 1px solid black;
		margin: auto;
	}
	td{
		border: 1px solid black;
		text-align: center;
		padding: 1px;
	}
</style>
<table style="color:#FFFFFF; width: 90%; border: 1px solid black">
	<tr>
		<td>Propriétaire</td>
		<td>Titre</td>
		<td>Artiste</td>
		<td>Date</td>
		<td>Support</td>
		<td>Procédé</td>
	</tr>
<?php foreach ($allMySong as $value): ?>
	<tr>
		<td><?= $value->name ?></td>
		<td><?= $value->title ?></td>
		<td><?= $value->author ?></td>
		<td><?= $value->releaseDate ?></td>
		<td><?= $value->type ?></td>
		<td><?= $value->process ?></td>
	</tr>
<?php endforeach; ?> 		
	
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
		<td><strong>Propriétaire</strong></td>
		<td><strong>Titre</strong></td>
		<td><strong>Artiste</strong></td>
		<td><strong>Support</strong></td>
		<td><strong>Procédé</strong></td>
	</tr>
<?php foreach ($allMySong as $value): ?>
	<tr>
		<td><?= $value->name ?></td>
		<td><?= $value->title ?></td>
		<td><?= $value->author ?></td>
		<td><?= $value->type ?></td>
		<td><?= $value->process ?></td>
	</tr>
<?php endforeach; ?> 		
	
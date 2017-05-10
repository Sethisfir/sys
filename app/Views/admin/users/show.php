<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>E-MAIL</th>
			<th>NIVEAU DE DROIT</th>
			<th>ACTIONS</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $key => $value): ?>
	<tr>
		<td><?= $value->id; ?></td>
		<td><?= $value->name; ?></td>
		<td><?= $value->mail; ?></td>
		<td><?= $value->rights; ?></td>
		<td>
			<form action="index.php?p=admin.admins.delete" method="POST">
				<input type="hidden" name="id" value="<?=$value->id?>">
				<input class="btn btn-danger" type="submit" value="Bannir (définitif)">
			</form>
		</td>
	</tr>
	<?php endforeach ?>
	</tbody>
</table>
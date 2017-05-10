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
				<?php if ($value->isBan == false): ?>
					<input class="btn btn-danger" type="submit" value="Bannir">
				<?php else : ?>
				<input class="btn btn-danger" type="submit" value="Débannir">
				<?php endif ?>
			</form>
		</td>
		<td>
			<form action="index.php?p=admin.admins.kick" method="POST">
				<input type="hidden" name="id" value="<?=$value->id?>">
				<?php if ($value->isKick == false): ?>
					<input class="btn btn-success" type="submit" value="Kicker">
				<?php else : ?>
				<input class="btn btn-success" type="submit" value="DéKicker">
				<?php endif ?>
			</form>
		</td>
	</tr>
	<?php endforeach ?>
	</tbody>
</table>
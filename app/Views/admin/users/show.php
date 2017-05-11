<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>AVATAR</th>
			<th>NAME</th>
			<th>E-MAIL</th>
			<th>NIVEAU DE DROIT</th>
			<th>BANNIR</th>
			<th>KICK</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $key => $value): ?>
	<tr>
		<td><?= $value->id; ?></td>
		<td><img src="<?=$value->src?>" width="50" height="50" alt="ProfilPicture"></td>
		<td><?= $value->name; ?></td>
		<td><?= $value->mail; ?></td>
		<td>
			<form action="index.php?p=admin.admins.rights" method="POST" class="form-group">
				<input type="hidden" name="id" value="<?=$value->id?>">
				<select name="rights" class="form-control" require>
				<?php for ($i=0; $i < 3; $i++) : ?>
					<?php if ($i == $value->rights): ?>
						<option selected value="<?=$value->rights?>"><?=$value->rights?></option>
					<?php else : ?>
						<option value="<?=$i?>"><?=$i?></option>
					<?php endif ?>
				<?php endfor?>
				</select>
				<input type="submit" value="Appliquer" class="btn">
			</form>
		</td>
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
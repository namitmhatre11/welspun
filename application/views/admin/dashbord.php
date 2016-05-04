
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header">Listed Players</h2>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Player Name</th>
					</tr>
				</thead>
				<?php foreach ($players as $player): ?>
					<tbody>
						<tr>
							<td><?php echo $player['id']; ?></td>
							<td><?php echo $player['name']; ?></td>
						</tr>
					</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>

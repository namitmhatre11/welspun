<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Add New Player <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Analytics</a></li>
				<li><a href="#">Export</a></li>
			</ul>
		</div>
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

	</div>
</div>


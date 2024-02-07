<!-- RIGHT PANE -->
<div class="pull-right rightPane">
	<?php
	if (user_logged_in() === true) {
		include 'layout/widgets/myaccount.php';
		if (is_admin($user_data)) include 'layout/widgets/admin.php';
	} else {
		include 'layout/widgets/login.php';
	}
	include 'layout/widgets/charactersearch.php';
	include 'layout/widgets/topplayers.php';
	//include 'layout/widgets/highscore.php';
	include 'layout/widgets/serverinfo.php';
	if ($follow["enabled"]): ?>
	
	<?php endif;
	/*
		<div class="well">
			<div class="header">
				Events
			</div>
			<div class="body">
				<table>
					<tr><td>Event Name</td><td><i class="fa fa-clock-o"></i> 2h 5m 10s</td></tr>
					<tr><td>Event Name</td><td><i class="fa fa-clock-o"></i> 2h 5m 10s</td></tr>
					<tr><td>Event Name</td><td><i class="fa fa-clock-o"></i> 2h 5m 10s</td></tr>
					<tr><td>Event Name</td><td><i class="fa fa-clock-o"></i> 2h 5m 10s</td></tr>
					<tr><td>Event Name</td><td><i class="fa fa-clock-o"></i> 2h 5m 10s</td></tr>
				</table>
			</div>
		</div>

		<div class="well">
			<div class="header">
				Top 10 Players
			</div>
			<div class="body">
				<table>
					<tr><td>#</td><td>Name</td></tr>
					<tr><td>1</td><td>Name</td></tr>
					<tr><td>2</td><td>Name</td></tr>
					<tr><td>3</td><td>Name</td></tr>
					<tr><td>4</td><td>Name</td></tr>
					<tr><td>5</td><td>Name</td></tr>
					<tr><td>6</td><td>Name</td></tr>
					<tr><td>7</td><td>Name</td></tr>
					<tr><td>8</td><td>Name</td></tr>
					<tr><td>9</td><td>Name</td></tr>
					<tr><td>10</td><td>Name</td></tr>
				</table>
			</div>
		</div>
	*/
	?>
</div>
<!-- RIGHT PANE END -->
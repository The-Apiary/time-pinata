<?php

include('core/init.inc.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Piñata</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="The internet time-capsule">
		
		<!-- Le Styles -->
		<link href="ext/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding: 80px 20px 40px 20px;
				background: #DFDF66;
			}
		</style>
	</head>
	
	<body>
		<!-- Nav Bar -->
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container" style="width: auto; padding: 0 20px;">
					<a class="brand" href="index.php">Piñata</a>
					<ul class="nav">
						<li><a href="#about">About</a></li>
						<li><a href="#users">My Piñatas</a></li>
						<li><a href="#upload">Upload</a></li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "{$_SESSION['email']}"?><b class="caret"></b></a>
							<ul class="dropdown-menu span3">
								<li><a href="#">Action</a></li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Action</a></li>
								<li><a href="logout.php"><span class="muted">Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Le Pinata Board -->
		<div class="container">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#public" data-toggle="tab">Public Piñatas</a></li>
					<li><a href="#personal" data-toggle="tab">My Piñatas</a></li>
					<li><a href="#shared" data-toggle="tab">Shared Piñatas</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="public">
						<div class="alert alert-info">Public</div>
					</div>
					<div class="tab-pane" id="personal">
						<div class="alert">Personal</div>
					</div>
					<div class="tab-pane" id="shared">
						<div class="alert alert-error">Shared</div>
					</div>
				</div>
			</div>
			
			<hr>
			<p>&copy; Purple Dwarf Studios 2012</p>			
		</div>

		<!-- Le Javascript -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="ext/js/bootstrap.js"></script>
	</body>
</html>

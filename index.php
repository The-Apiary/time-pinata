<?php

include('core/init.inc.php');

if(isset($_SESSION['email'])){
	header('Location: protected.php');
	die();
}

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
					<a class="brand" href="#">Piñata</a>
					<ul class="nav">
						<li><a href="#about">About</a></li>
						<li><a href="#users">My Piñatas</a></li>
						<li><a href="#upload">Upload</a></li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
							<ul class="dropdown-menu span3">
								<li>
									<form class="navbar-form pull-left" method="post" action="login.php">
										<input type="text" class="span2" id="email" name="email" placeholder="Email">
										<input type="password" class="span2" id="password" name="password" placeholder="Password">
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</li>
								<li><a href="register.php"><span class="text-info">Sign me up!</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Le Welcome Message -->
		<div class="container">
			<div class="hero-unit">
				<h1>Hola, Interwebs!</h1>
				<p>Piñata blah blah blah blah...</p>
				<p>
					<a class="btn btn-primary btn-large">Ok, thanks!</a>
					<a href="register.php" class="btn btn-large">Sign Up</a>
				</p>
			</div>
			<hr>
			<p>&copy; Purple Dwarf Studios 2012</p>			
		</div>

		<!-- Le Javascript -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="ext/js/bootstrap.js"></script>
	</body>
</html>

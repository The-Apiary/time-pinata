<?php

include('core/init.inc.php');

$errors = array();

if(isset($_POST['email'], $_POST['password'])){
	if(empty($_POST['email'])){
		$errors[] = 'The email cannot be empty.';
	}
	
	if(empty($_POST['password'])){
		$errors[] = 'The password cannot be empty.';
	}
	
	if(empty($errors) && valid_credentials($_POST['email'], $_POST['password']) === false){
		$errors[] = 'Email / Password incorrect.';
	}
	
	if(empty($errors) && is_active($_POST['email']) === false){
		$errors[] = 'This account has not yet been activated.';
	}
	
	if(empty($errors)){
		$_SESSION['email'] = htmlentities($_POST['email']);
		
		header('Location: protected.php');
		die();
	}
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
					<a class="brand" href="index.php#">Piñata</a>
					<ul class="nav">
						<li><a href="index#about">About</a></li>
						<li><a href="index#users">My Piñatas</a></li>
						<li><a href="index#upload">Upload</a></li>
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

		<div class="container">
			<!-- Le Login Form and Stuff -->
			<div class="hero-unit">
				<h1>Login!</h1>
				<p>
					Enter your email and password!
				</p>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span7">
							<form class="form-horizontal" method="post" action="login.php">
								<div class="control-group">
									<label class="control-label" for="email">Email</label>
									<div class="controls">
										<input type="text" id="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="password">Password</label>
									<div class="controls">
										<input type="password" id="password" name="password" placeholder="Password">
									</div>
								</div>
								<div class="form-actions">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
									<button class="btn btn-primary" type="submit">Submit</button>
								</div>
							</form>
						</div>
						<div class="span4 offset1">
							<?php
							
							if(empty($errors) === false){
								foreach($errors as $error){
									
							?>
								
								<div class="alert alert-error">
									<?php echo "{$error}"?>
								</div>
								
							<?php
							
								}						
							}
							
							?>
						</div>
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

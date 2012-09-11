<?php

include('core/init.inc.php');

$errors = array();

if(isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['repeat_password'])){
	if(empty($_POST['username'])){
		$errors[] = 'The username cannot be empty.';
	}
	
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
		$errors[] = 'The email address you entered does not appear to be valid.';
	}
	
	if(empty($_POST['password']) || empty($_POST['repeat_password'])){
		$errors[] = 'The password cannot be empty.';
	}
	
	if($_POST['password'] !== $_POST['repeat_password']){
		$errors[] = 'Passwords don\'t match!';
	}
	
	if(user_exists($_POST['email'])){
		$errors[] = 'The email you entered is already taken.  Did you already make an account?';
	}

	if(empty($errors)){
		add_user($_POST['username'], $_POST['email'], $_POST['password']);
		
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
						<li><a href="index.php#about">About</a></li>
						<li><a href="index.php#users">My Piñatas</a></li>
						<li><a href="index.php#upload">Upload</a></li>
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
			<!-- Le Register Form and Stuff -->
			<div class="hero-unit">
				<h1>Get started!</h1>
				<p>
					Complete the following form to register with Pinata.
				</p>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span7">
							<form class="form-horizontal" method="post" action="register.php">
								<div class="control-group">
									<label class="control-label" for="username">Name</label>
									<div class="controls">
										<input type="text" id="username" name="username" placeholder="Name">
									</div>
								</div>
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
								<div class="control-group">
									<label class="control-label" for="repeat_password">Re-type Password</label>
									<div class="controls">
										<input type="password" id="repeat_password" name="repeat_password">
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

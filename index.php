<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Piñata</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="The internet time-capsule">
		
		<!-- Le Styles -->
		<link href="./css/bootstrap.css" rel="stylesheet">
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
						<li><a href="#pinatas">My Piñatas</a></li>
						<li><a href="#upload">Upload</a></li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
							<ul class="dropdown-menu span3">
								<li><form class="navbar-form pull-left"><input type="text" class="span2" placeholder="Email"></form></li>
								<li>
									<form class="navbar-form pull-left">
										<input type="text" class="span2" placeholder="Password">
										<button type="submit" class="btn">Submit</button>
									</form>
								</li>
								<li><a href="#signupModal" data-toggle="modal"><span class="text-info">Sign me up!</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- Le Welcome Message -->
			<div class="hero-unit">
				<h1>Hola, Interwebs!</h1>
				<p>Piñata blah blah blah blah...</p>
				<p>
					<a class="btn btn-primary btn-large">Ok, thanks!</a>
					<a href="#signupModal" class="btn btn-large" data-toggle="modal">Sign Up</a>
				</p>
			</div>
			
			<!-- Le Signup Modal -->
			<div class="modal hide" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="Sign Up" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>Create Account</h3>
				</div>
				<div class="modal-body">
					There are things written here.  Cool!
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-primary">Submit</button>
				</div>
			</div>
			<hr>
			<p>&copy; Purple Dwarf Studios 2012</p>
		</container>
		<!-- Le Javascript -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="./js/bootstrap.js"></script>
	</body>
</html>

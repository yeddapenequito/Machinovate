<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			#top-header #login-button {
			background: none;
			border: 1px solid white;
			border-radius: 1.25em;
			}
			#top-header #login-button:hover, 
			#top-header #login-button:focus {
			background-color: #153a7e;
			}
			#top-header #login-button:active {
			color: black;
			border-color: black;
			}
			#bottom-header {
			background-color: #153a7e;
			height: 5em;
			}
			#bottom-header .navbar-header .navbar-brand img{
			width: 6em;
			height: 2em;
			}
			#bottom-header .right-inner-addon {
		    position: relative;
			}
			#bottom-header .right-inner-addon input {
				padding-right: 30px;    
			}
			#bottom-header .right-inner-addon i {
				position: absolute;
				right: 0px;
				padding: 10px 12px;
				pointer-events: none;
			}
		</style>
	</head>
	<body>
		<header id="top-header" class="container-fluid">
			<address id="contact-us">
				Contact Us
				<span class="glyphicon glyphicon-earphone"></span>	
				<span>+632 404 6676</span>/
				<span>+632 623 2988</span>
			</address>
			<div id="employee-login">
				<span id="are-you-an-employee">Are you an employee?</span>
				<a id="login-button" href="./login.php/" class="btn btn-primary btn-sm" role="button">Login</a> 
			</div>
		</header>
		
		<!-- Static navbar -->
		<nav id="bottom-header" class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="#">
						<img src="./images/machinovate-logo-1.png" alt="machinovate logo 1">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Products and Services</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Sitemap</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<div class="form-group">
							<div class="right-inner-addon ">
								<i class="glyphicon glyphicon-search"></i>
								<input type="search"
									   class="form-control" 
									   placeholder="Search" />
							</div>
						</div>

					</ul>
				</div> <!-- /.navbar-collapse -->
			</div>  <!-- /.container-fluid -->
		</nav>
		
		<script type="text/javascript" src="./scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>

	</body>
</html>									
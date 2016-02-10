<html>
<head>
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<style type="text/css">


	/*header styles
	=================================================================*/

	header {
		background-color: #153a7e;
		border: 1px solid white;
	}
	header #logo {
		height: 125px;
		width: 350px;
	}

	/*navbar styles
	=================================================================*/
	.navbar {
		font-size: .9em;
		background-color: #132c55;
		color: white;
		border: 1px solid white;
		border-radius: 0;
	}


	/*change navbar height
	----------------------------------------------------------------*/

	.navbar .navbar-nav > li > a,
	.navbar .navbar-toggle {
		line-height: 50px;
	    height: 50px;
	    padding-top: 0;
	}

	/*navbar tabs styles for all screen sizes
	----------------------------------------------------------------*/

	.navbar .navbar-nav > li > a {
		color: white;
		letter-spacing: 1px;
	}
	.navbar .navbar-nav > li > a:hover, 
	.navbar .navbar-nav > li > a:active {
		background-color: #bdc3c7;
	}
	.navbar .navbar-nav #employee-login:hover {
		background-color: transparent; 
	}
	/*center navbar tabs
	----------------------------------------------------------------
	this code is obtained from http://stackoverflow.com/questions/18777235/center-content-in-responsive-bootstrap-navbar*/ 
	
	@media (min-width: 768px) {
	    .navbar .navbar-nav {
	        display: inline-block;
	        float: none;
	        vertical-align: text-bottom;
	    }

	    .navbar .navbar-collapse {
	        text-align: center;
	    }

		/*navbar tabs styles for large devices only
		----------------------------------------------------------------*/

		.navbar .navbar-nav > li > a {
			border-right: 1px solid white;
		}
		.navbar .navbar-nav #home {
			border-left: 1px solid white;
		}
		.navbar .navbar-nav > li > a:hover {
			border-bottom: 7px solid #bdc3c7;
			color: #bdc3c7;
		}
		.navbar .navbar-nav > li > a:active {
			border-bottom: 7px solid gray;
			color: gray;
		}
		.navbar .navbar-nav > li > a:hover,
		.navbar .navbar-nav > li > a:active {
			background-color: #132c55;
		}
	}


	/*navbar toggle styles
	----------------------------------------------------------------*/

	.navbar .navbar-toggle {
		border: none;
	}
	.navbar .navbar-toggle:hover,
	.navbar .navbar-toggle:active,
	.navbar .navbar-toggle:focus {
		background-color: transparent;
	}
	.navbar.navbar-toggle .icon-bar:hover {
		color: white;
	}

	/*employee login styles
	----------------------------------------------------------------*/
	.navbar #employee-login {
		border: none;
	}
	.navbar #employee-login:hover,
	.navbar #employee-login:active {
		color: white;
	}
	.navbar #employee-login #are-you-an-employee {
		font-style: italic;
		font-size: .85em;
		margin-right: .5em;
	}
	.navbar #login-button,
	.navbar #logout-button {
		text-transform: uppercase;
		letter-spacing: 1px;
		background-color: #bdc3c7;
		color: #153a7e;
		border: 1px solid transparent;
		border-radius: 0;
		font-weight: bold;
		font-size: .85em;
	}
	.navbar #login-button:hover, 
	.navbar #logout-button:hover {
		background-color: transparent;
		border: 1px solid silver;
		color: silver;
	}
	.navbar #login-button:active,
	.navbar #logout-button:active {
		background-color: transparent;
		border: 1px solid gray;
		color: gray;
	}
	</style>
</head>
<body>
	<header class="hidden-xs">
		<div class="container-fluid">
			<img id="logo" src="./images/machinovate-logo-white-no-border.png">
		</div>
	</header>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a id="home" href="index.php">Home</a></li>
					<li><a id="machines" href="machines.php">Machines</a></li>
					<li><a id="order-now" href="order_now.php">Order Now</a></li>
					<li><a id="events" href="events.php">Events</a></li>
					<li><a id="contact-us" href="contact_us.php">Contact Us</a></li>
					<li><a id="agents" href="agents.php">Agents</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a id="employee-login">
							<span id="are-you-an-employee">Are you an employee?</span>
							<button id="login-button" href="login.php" class="btn btn-primary btn-sm" role="button">Login</button> 
						</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>

	<script type="text/javascript" src="./scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
</body>
</html>
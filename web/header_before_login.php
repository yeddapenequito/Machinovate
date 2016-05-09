<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">
				<a href="index.php"><img src="./images/machinovate-logo-white-no-border.png"></a>
			</div>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a id="home" href="index.php">Home</a></li>
				<li><a id="machines" href="machines.php">Machines</a></li>
				<li><a id="events" href="events.php">Events</a></li>
				<li><a id="contact-us" href="contact_us.php">Contact Us</a></li>
				<li><a id="agents" href="agents.php">Agents</a></li>
			</ul>
			<div class="nav navbar-nav navbar-right">
				<a href="cart_summary.php" type="button" class="btn btn-default btn-lg" id="primary-btn" style="background-color:#16a085;color:white">
					<span class="badge">
						<?php if(session_status() == PHP_SESSION_NONE) {
						   	echo "0";
						   } else {
					    	echo count($_SESSION["cart"]);
						   }; ?></span> <i  class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> Your Shopping Cart</a>
				<span>Are you an employee?</span>
                <a href="admin/index.inc.php" type="button" class="btn btn-default btn-lg" id="primary-btn">
                	<i class="glyphicon glyphicon-log-in" aria-hidden="true"></i> Login</a>
            </div>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>

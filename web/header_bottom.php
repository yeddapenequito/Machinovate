<nav id="bottom-header" class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="./index.php">
				<img src="./images/machinovate-logo-1.png" alt="machinovate logo 1">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<!--Menu items BEFORE login-->
				<li class="before-login" id="home"><a href="./index.php">Home</a></li>
				<li class="dropdown" id="machines">
				<a href="./our_machines.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Machines <span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="./slitter.php">Slitter</a></li>
					  <li><a href="./sheeter.php">Sheeter</a></li>
					  <li><a href="./cuttter.php">Cutter</a></li>
					  <li><a href="./other_products.php">Others</a></li>
					</ul>
				</li>
				<li class="before-login" id="events"><a href="./events.php">Events</a></li>
				<li class="before-login" id="contact-us"><a href="./contact-us.php">Contact Us</a></li>
				<li class="before-login" id="agents"><a href="./agents.php">Agents</a></li>

				<!--Menu items AFTER login-->
				<li class="after-login" id="dashboard"><a href="./dashboard.php">Dashboard</a></li>
				<li class="after-login" id="inventory"><a href="./inventory.php">Inventory</a></li>
				<li class="after-login" id="orders"><a href="./orders.php">Orders</a></li>
			</ul>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<div class="after-login">
					<a id="create-new-account" href="./add_employee.php" class="btn btn-primary" role="button">Create New Account</a> 
				</div>
			</ul>
		</div> <!-- /.navbar-collapse -->
	</div>  <!-- /.container-fluid -->
</nav>
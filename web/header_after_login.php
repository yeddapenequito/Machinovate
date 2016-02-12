<nav class="navbar navbar-default">
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
				<li><a id="dashboard" href="dashboard.php">Dashboard</a></li>
				<li><a id="events" href="events.php">Events</a></li>
				<li><a id="reports" href="reports.php">Reports</a></li>
				<li><a id="employee" href="add_employee.php">Add New Employee</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a id="employee-logout">
						<span id="hello-user">Hello, admin</span>
						<button id="logout-button" href="login.php" class="btn btn-primary btn-sm" role="button">Logout</button> 
					</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>
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
				<a href="index.php"><img src="../images/machinovate-logo-white-no-border.png"></a>
			</div>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a id="dashboard" href="dashboard.php">Dashboard</a></li>
				<li><a id="order-list" href="order-list.php">Order List</a></li>
				<li><a id="reports" href="generate-reports.php">Generate Reports</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<div id="employee-logout">
						<span id="hello-user">Hello, admin</span>
						<a id="logout-btn" href="login.php" class="btn btn-sm" role="button">Logout</a> 
					</div>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>
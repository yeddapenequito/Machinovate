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
				<a href="index.php"><img src="../images/machinovate-logo-colored-with-border.png"></a>
			</div>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a id="order-list" href="order_list.php">Order List</a></li>
				<li><a id="generate-reports" href="generate_reports.php">Generate Reports</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Website <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="add_agents.php">Add Agents</a></li>
						<li><a href="#">Add [Something]</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<div id="employee-logout">
						<span id="hello-user">Hello, admin</span>
						<a id="logout-btn" href="index.php" class="btn btn-sm" role="button">Logout</a> 
					</div>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>
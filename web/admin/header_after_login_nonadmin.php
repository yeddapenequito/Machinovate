<html>
	<head>
		<title><?php echo $page_title; ?></title>
	</head>

	<body>
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
						<a href="order_list.php"><img src="../images/machinovate-logo-colored-with-border.png"></a>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a id="order-list" href="order_list.php">Order List</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Website <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="add_agents.php">Add Agents</a></li>
								<li><a href="add_events.php">Add Events</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" id="edit-account" data-toggle="dropdown">Manage Account <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="edit_account.php">Change Password</a></li>
							</ul>
						</li>
						<li><a id="faq" href="faq_admin.php">Help/FAQ</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<div id="employee-logout">
								<span id="hello-user" class="hidden-xs">Hello, admin</span>
								<a id="logout-btn" href="logout.php" class="btn btn-lg" role="button">
									<i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Logout</a> 
							</div>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
	</body>
</html>

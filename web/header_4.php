<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title></title>
	</head>
	<style>
		@font-face {
        font-family: Roboto-Regular;
        src: url(fonts/Roboto-Regular.ttf);
		}
		@font-face {
		font-family:IOS8-Icons-Regular;
        src: url(fonts/IOS8-Icons-Regular.tff);
		}
		
		.header{
		background-color:#153a7e;
		color:white;
		padding:0px; 
		width:100%;
		position:absolute;
		width:1360px;
		margin-left:-100px;
		}
		.header2{
		background-color:#132c55;
		color:white;
		padding:0px; 
		width:100%;
		width:1360px;
		margin-left:-100px;
		height:80px;
		position:absolute;
		margin-top:40px;
		}
		.contact{
		text-align:left;
		display:inline-block;
		margin-left: 50px;
		margin-top: 10px;
		}
		#employee-logout{
		text-align:right;
		display:inline-block;
		margin-top:-80px;
		margin-left: 700px;
		}
		.logout{
		display:inline-block;
		text-align:right;
		display:inline-block;
		margin-top: -40px;
		margin-right: -10px;
		}
		.header_buttons{
		display:inline-block;
		margin-left: 200px;
		font-color:white;
		margin-top:0px;
		}
		.header_buttons a {
		color:white;
		}
		.navbar{
		margin-top:-10px;
		margin-left:150px;
		
		
		}
		.new{
		display:inline-block;
		text-align:right;
		display:inline-block;
		margin-top:20px;
		margin-right: -10px;
		margin-left:490px;
		
		}
		.right{
		position:absolute;
		margin-top:70px;
		margin-left:500px;
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
	<div id="employee-logout">
		<span id="hello-admin">Hello admin, </span>
		<a></a>
		<a id="logout-button" href="./index.php/" class="btn btn-primary btn-sm" role="button">Logout</a> 
	</div>
</header>
			<nav id="bottom-header" class="navbar navbar-inverse" role="navigation">
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
				<li id="home"><a href="index_login.php">Home</a></li>
				<li id="inventory"><a href="inventory.php">Inventory</a></li>
				<li id="orders"><a href="order.php">Orders</a></li>
			</ul>
			
		</div> <!-- /.navbar-collapse -->
	</div>  <!-- /.container-fluid -->
</nav>
				
				
					
				<script type="text/javascript" src="./scripts/jquery-2.1.4.min.js"></script>
				<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
			</body>
		</html>		
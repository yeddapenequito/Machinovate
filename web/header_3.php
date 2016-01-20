<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' href='/bootstrap/css/bootstrap.min.css'/>
<link rel="stylesheet" href='/bootstrap/css/bootstrap.css'/>
<link rel="stylesheet" href='/bootstrap/css/bootstrap-responsive'/>
<link rel="stylesheet" href='/bootstrap/css/bootstrap-responsive.min'/>
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

	width:1360px;
	margin-left:-190px;
}
.header2{
    background-color:#132c55;
    color:white;
    padding:0px; 
	width:100%;
	width:1360px;
	margin-left:-190px;
	height:80px;
	
}
.contact{
	text-align:left;
	display:inline-block;
	margin-left: 50px;
	margin-top: 10px;
}
.employee{
	text-align:right;
	display:inline-block;
	margin-top: -40px;
	margin-left: 700px;
}-->
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
	margin-top: -20px;
	margin-right: -10px;
	margin-left:290px;
	
}
.right{
	position:absolute;
	margin-top:70px;
	margin-left:500px;
}
</style>
</head>
<body>
<div class="container">
<div class="row">

<div class="header">
	<div class="contact"><p><span>Contact Us</span> <img id="s-Telephone_Image" alt="image" src="/images/phone.png" width="12" height="12"/> +632 404 6676/+632 623 2988</p>

	</div>
	<div class="employee">
	<p><i>Hello, admin </i></p> 
	</div>
	<div class="logout">
	<a>..
	<a href="/web/login.php/" class="btn btn-info" role="button">Logout</a>
	</div>


</div>
<div class="header2">

	<img src="/images/logo.png" href="/web/index.php/" alt="Machinovate Logo" style="width:180px;height:100px;margin-left:50px;margin-top:-10px;"/>
	 <div class="header_buttons">
	  <div class="navbar">	         
	 <a href="/web/index_login.php/"  role="button">Home</a>
	 <a style="font-size:20px;"><b>|</b> 
	 <a href="index.html"  role="button">Inventory</a>
	 <a style="font-size:20px;"><b>|</b> 
	 <a href="/web/events.php/"  role="button">Others</a>
	
	 	<div class="new">
		<a href="#" class="btn btn-info" role="button">Add New Employee</a> 
		</div>
	</div>
	</div>
</div>


	
</div>
</div>

<script type="text/javascript" src="./scripts/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title>Machinovate | Events</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

		<div id="events-content" class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<div>
						<p>Upcoming event this 2015..</p>
						<div id="image1"><img src="/images/GeneratedCross-4.png" alt="Logo" style="width:50px;
						height:50px; margin-top:10px; margin-left:auto;"></div>
						
					</div>
					<div>
						<p><b>What</b>: Paperex India 2015</p>
						<p><b>When</b>: Day 00 Month</p>
						<p><b>Where</b>: Pragati, Maidan, New Delhi India</p>
						<b>________________________________</b>
					</div>
					<div>
						<p>Look at the past events here..</p>
						<p>2014-Event Name</p>
						<p>2013-Event Name</p>
						<p>2012-Event Name</p>
						<p>2011-Event Name</p>
						<p>2010-Event Name</p>
						<p>2009-Event Name</p>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-9">
					<header>
						<h1 class="page-header">Event Name</h1>
						<small>Event Description</small>
					</header>
					<img src="./images/GeneratedCross-0.png" alt="Logo">
					<img src="./images/GeneratedCross-0.png" alt="Logo">
					<img src="./images/GeneratedCross-0.png" alt="Logo">
					<p>
						Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
					</p>
					<p>
						Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
					</p>
				</div>
			</div>
		</div>	

		<?php include 'footer.php'; ?>

		<script type="text/javascript" src="./scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("events").className = "active";
			$(".after-login").remove();
		</script>
	</body>
</html>
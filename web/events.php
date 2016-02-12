<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Events</title>
	<style type="text/css">
	#event-content #event-img-sm {
		height: 65px;
		width: 65px;
	}
	#event-content ul li:first-child {
		font-size: .8em;
	}
	#event-content ul li {
		border: 1px solid silver;
		border-radius: 5px;
		
	}
	#event-content table td, 
	#event-content table th {
		border: none;
	}
	#event-content table td {
		padding-left: .5em;
	}
	#event-content table td:first-child {
		font-weight: bold;
	}
	#event-content h5 {
		color: white;
		font-style: italic;
	}
	#event-content .tab-content img {
		float: left;
		margin-right: 1em;
		height: 200px;
		width: 350px;
	}	
	#event-content .nav-pills {
		width: 25em;
	}
	</style>
</head>
<body>
	<?php include 'header_before_login.php';?>

	<div id="event-content" class="container">
		<div class="row">
			<ul class="nav nav-pills nav-stacked col-xs-12 col-sm-4">
				<li class="active">
					<a data-toggle="pill" href="#home">
						<table class="table table-condensed row">
							<thead class="col-xs-4">
								<th colspan="2">
									<img id="event-img-sm" src="images/GeneratedCross-0.png" alt="upcoming event picture">
								</th>
							</thead>
							<tbody class="col-xs-8">
								<tr>
									<td>What</td>
									<td>Paperex India 2015</td>
								</tr>
								<tr>
									<td>When</td>
									<td>Friday, 12 February</td>
								</tr>
								<tr>
									<td>Where</td>
									<td>Pragati, Maidan, New Delhi India</td>
								</tr>
							</tbody>
						</table>
					</a>
				</li>
				<li><a data-toggle="pill" href="#menu1">2014 - Event Name</a></li>
				<li><a data-toggle="pill" href="#menu2">2013 - Event Name</a></li>
				<li><a data-toggle="pill" href="#menu3">2012 - Event Name</a></li>
				<li><a data-toggle="pill" href="#menu4">2011 - Event Name</a></li>
				<li><a data-toggle="pill" href="#menu5">2010 - Event Name</a></li>					
			</ul> <!-- /.nav -->

			<div class="tab-content col-xs-12 col-sm-8">
				<div id="home" class="tab-pane fade in active">
					<div class="page-header">
						<h3>Paperex India 2015<span class="label label-success">Upcoming</span></h3>
					</div>

					<img id="events-img-md" src="images/GeneratedCross-0.png" alt="upcoming event picture">

					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo. Nam sit amet facilisis eros. Nullam maximus nunc dolor, quis hendrerit arcu rutrum sed. Maecenas eu lobortis arcu. Pellentesque egestas lectus et egestas vestibulum. Morbi placerat nunc eget tincidunt condimentum. In cursus varius ultricies. Phasellus commodo neque eu odio ullamcorper tempus. Curabitur finibus metus ac suscipit aliquet. Mauris sit amet convallis massa. Curabitur scelerisque a odio et hendrerit. Duis fringilla, massa eu cursus consectetur, massa eros eleifend dolor, in aliquam urna eros ac leo.</p>

					<p class="text-justify">Nullam vestibulum est nisi, at molestie sapien pretium nec. Nulla enim massa, consequat ac lobortis nec, vestibulum nec augue. Pellentesque quis velit nec risus semper congue. Sed tincidunt in dui pulvinar bibendum. Maecenas lacinia blandit libero, eget cursus orci semper vel. Cras iaculis auctor enim a commodo. Vestibulum tincidunt ornare leo in lobortis. Etiam bibendum ornare nunc, nec iaculis nulla eleifend id. Nulla et odio laoreet odio consectetur luctus eu eget quam. Nulla ac blandit ex. Praesent lorem justo, tincidunt efficitur pharetra a, luctus eget mi.</p>
				</div>
				<div id="menu1" class="tab-pane fade">
					<div class="page-header">
						<h3>2014 - Event Name</h3>
					</div>

					<img id="events-img-md" src="images/GeneratedCross-0.png" alt="upcoming event picture">

					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo. Nam sit amet facilisis eros. Nullam maximus nunc dolor, quis hendrerit arcu rutrum sed. Maecenas eu lobortis arcu. Pellentesque egestas lectus et egestas vestibulum. Morbi placerat nunc eget tincidunt condimentum. In cursus varius ultricies. Phasellus commodo neque eu odio ullamcorper tempus. Curabitur finibus metus ac suscipit aliquet. Mauris sit amet convallis massa. Curabitur scelerisque a odio et hendrerit. Duis fringilla, massa eu cursus consectetur, massa eros eleifend dolor, in aliquam urna eros ac leo.</p>

					<p class="text-justify">Nullam vestibulum est nisi, at molestie sapien pretium nec. Nulla enim massa, consequat ac lobortis nec, vestibulum nec augue. Pellentesque quis velit nec risus semper congue. Sed tincidunt in dui pulvinar bibendum. Maecenas lacinia blandit libero, eget cursus orci semper vel. Cras iaculis auctor enim a commodo. Vestibulum tincidunt ornare leo in lobortis. Etiam bibendum ornare nunc, nec iaculis nulla eleifend id. Nulla et odio laoreet odio consectetur luctus eu eget quam. Nulla ac blandit ex. Praesent lorem justo, tincidunt efficitur pharetra a, luctus eget mi.</p>
				</div>
				<div id="menu2" class="tab-pane fade">
					<div class="page-header">
						<h3>2013 - Event Name</h3>
					</div>

					<img id="events-img-md" src="images/GeneratedCross-0.png" alt="upcoming event picture">

					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo. Nam sit amet facilisis eros. Nullam maximus nunc dolor, quis hendrerit arcu rutrum sed. Maecenas eu lobortis arcu. Pellentesque egestas lectus et egestas vestibulum. Morbi placerat nunc eget tincidunt condimentum. In cursus varius ultricies. Phasellus commodo neque eu odio ullamcorper tempus. Curabitur finibus metus ac suscipit aliquet. Mauris sit amet convallis massa. Curabitur scelerisque a odio et hendrerit. Duis fringilla, massa eu cursus consectetur, massa eros eleifend dolor, in aliquam urna eros ac leo.</p>

					<p class="text-justify">Nullam vestibulum est nisi, at molestie sapien pretium nec. Nulla enim massa, consequat ac lobortis nec, vestibulum nec augue. Pellentesque quis velit nec risus semper congue. Sed tincidunt in dui pulvinar bibendum. Maecenas lacinia blandit libero, eget cursus orci semper vel. Cras iaculis auctor enim a commodo. Vestibulum tincidunt ornare leo in lobortis. Etiam bibendum ornare nunc, nec iaculis nulla eleifend id. Nulla et odio laoreet odio consectetur luctus eu eget quam. Nulla ac blandit ex. Praesent lorem justo, tincidunt efficitur pharetra a, luctus eget mi.</p>
				</div>
				<div id="menu3" class="tab-pane fade">
					<div class="page-header">
						<h3>2012 - Event Name</h3>
					</div>

					<img id="events-img-md" src="images/GeneratedCross-0.png" alt="upcoming event picture">

					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo. Nam sit amet facilisis eros. Nullam maximus nunc dolor, quis hendrerit arcu rutrum sed. Maecenas eu lobortis arcu. Pellentesque egestas lectus et egestas vestibulum. Morbi placerat nunc eget tincidunt condimentum. In cursus varius ultricies. Phasellus commodo neque eu odio ullamcorper tempus. Curabitur finibus metus ac suscipit aliquet. Mauris sit amet convallis massa. Curabitur scelerisque a odio et hendrerit. Duis fringilla, massa eu cursus consectetur, massa eros eleifend dolor, in aliquam urna eros ac leo.</p>

					<p class="text-justify">Nullam vestibulum est nisi, at molestie sapien pretium nec. Nulla enim massa, consequat ac lobortis nec, vestibulum nec augue. Pellentesque quis velit nec risus semper congue. Sed tincidunt in dui pulvinar bibendum. Maecenas lacinia blandit libero, eget cursus orci semper vel. Cras iaculis auctor enim a commodo. Vestibulum tincidunt ornare leo in lobortis. Etiam bibendum ornare nunc, nec iaculis nulla eleifend id. Nulla et odio laoreet odio consectetur luctus eu eget quam. Nulla ac blandit ex. Praesent lorem justo, tincidunt efficitur pharetra a, luctus eget mi.</p>
				</div>
				<div id="menu4" class="tab-pane fade">
					<div class="page-header">
						<h3>2011 - Event Name</h3>
					</div>

					<img id="events-img-md" src="images/GeneratedCross-0.png" alt="upcoming event picture">

					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo. Nam sit amet facilisis eros. Nullam maximus nunc dolor, quis hendrerit arcu rutrum sed. Maecenas eu lobortis arcu. Pellentesque egestas lectus et egestas vestibulum. Morbi placerat nunc eget tincidunt condimentum. In cursus varius ultricies. Phasellus commodo neque eu odio ullamcorper tempus. Curabitur finibus metus ac suscipit aliquet. Mauris sit amet convallis massa. Curabitur scelerisque a odio et hendrerit. Duis fringilla, massa eu cursus consectetur, massa eros eleifend dolor, in aliquam urna eros ac leo.</p>

					<p class="text-justify">Nullam vestibulum est nisi, at molestie sapien pretium nec. Nulla enim massa, consequat ac lobortis nec, vestibulum nec augue. Pellentesque quis velit nec risus semper congue. Sed tincidunt in dui pulvinar bibendum. Maecenas lacinia blandit libero, eget cursus orci semper vel. Cras iaculis auctor enim a commodo. Vestibulum tincidunt ornare leo in lobortis. Etiam bibendum ornare nunc, nec iaculis nulla eleifend id. Nulla et odio laoreet odio consectetur luctus eu eget quam. Nulla ac blandit ex. Praesent lorem justo, tincidunt efficitur pharetra a, luctus eget mi.</p>
				</div>
				<div id="menu5" class="tab-pane fade">
					<div class="page-header">
						<h3>2010 - Event Name</h3>
					</div>

					<img id="events-img-md" src="images/GeneratedCross-0.png" alt="upcoming event picture">

					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo. Nam sit amet facilisis eros. Nullam maximus nunc dolor, quis hendrerit arcu rutrum sed. Maecenas eu lobortis arcu. Pellentesque egestas lectus et egestas vestibulum. Morbi placerat nunc eget tincidunt condimentum. In cursus varius ultricies. Phasellus commodo neque eu odio ullamcorper tempus. Curabitur finibus metus ac suscipit aliquet. Mauris sit amet convallis massa. Curabitur scelerisque a odio et hendrerit. Duis fringilla, massa eu cursus consectetur, massa eros eleifend dolor, in aliquam urna eros ac leo.</p>

					<p class="text-justify">Nullam vestibulum est nisi, at molestie sapien pretium nec. Nulla enim massa, consequat ac lobortis nec, vestibulum nec augue. Pellentesque quis velit nec risus semper congue. Sed tincidunt in dui pulvinar bibendum. Maecenas lacinia blandit libero, eget cursus orci semper vel. Cras iaculis auctor enim a commodo. Vestibulum tincidunt ornare leo in lobortis. Etiam bibendum ornare nunc, nec iaculis nulla eleifend id. Nulla et odio laoreet odio consectetur luctus eu eget quam. Nulla ac blandit ex. Praesent lorem justo, tincidunt efficitur pharetra a, luctus eget mi.</p>
				</div>
			</div> <!-- /.tab-content -->
		</div> <!-- /.row -->
	</div>	<!-- /.container -->

	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
	document.getElementById("events").className = "active";
	</script>
</body>
</html>
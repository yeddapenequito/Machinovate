<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1.0, width=device-width" />
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title>Machinovate | Contact Us</title>
		  <link rel="stylesheet" type="text/css"
		    href="https://js.api.here.com/v3/3.0/mapsjs-ui.css" />
		  <script type="text/javascript" charset="UTF-8"
		    src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
		  <script type="text/javascript" charset="UTF-8"
		    src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
		  <script type="text/javascript" charset="UTF-8"
		    src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
		  <script type="text/javascript" charset="UTF-8"
		    src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
			</head>
	<body>
		<?php include 'header_before_login.php';?>

		<div id="contact-us-content" class="container">
			<div class="row">
				<address class="col-sm-12 col-md-4">
					<h2 class="page-header">Contact Information</h2>
					<table class="table">
						<tbody>
							<tr>
								<td>Address</td>
								<td>1645 G. San Roque St., Arty 3 Subdivision, Lawang Bato, Valenzuela City, Philippines</td>
							</tr>
							<tr>
								 
								<td>Telephone</td>
								<td>
									<ul class="list-unstyled">
										<li>(02) 404 6676</li>
										<li>(02) 355 4635</li>
										
									</ul>
								</td>
							</tr>
							<tr>
								<td>E-mail</td>
								<td><a href="mailto:machinovate.international@gmail.com">machinovate.international@gmail.com</a></td>
							</tr>
						</tbody>
					</table>
				</address>
				
				<div class="col-sm-12 col-md-8">
					<!-- 
					 <iframe src="https://embed.waze.com/iframe?zoom=12&lat=14.724387&
lon=120.985198" width="420" height="300"></iframe>  -->
					 <!-- <iframe src="https://maps.here.com/iframe?zoom=12&lat=14.724387&
lon=120.985198" width="520" height="300"></iframe> -->
 <!-- <iframe src="https://maps.here.com/iframe?zoom=12&lat=14.724387&
lon=120.985198" width="520" height="300"></iframe> -->
				<img src="images/maps.png">
					<!-- <div id="mapdiv">
					<div class="row">
						<div align=center style="width:100%; height:100%;">
						  <div id="map"></div>
						  <div id="panel"></div>
						</div>
						  <script  type="text/javascript" charset="UTF-8" >

						var platform = new H.service.Platform({
							//Demo ID to dont change. Nawawala app id
						  app_id: 'DemoAppId01082013GAL',
						  app_code: 'AJKnXv84fjrb0KIHawS0Tg',
						  useCIT: true,
						  useHTTPS: true
						  
						});
						var defaultLayers = platform.createDefaultLayers();
						
						var map = new H.Map(document.getElementById('map'), defaultLayers.normal.map, {
						  //change zoom and center you know the way uhuh uhuh you like it
						  zoom: 17.5,
						  center: {lat: 14.724387, lng: 120.985198}
						});
						
						
						var locationsContainer = document.getElementById('panel');
						
						var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
						// Create the default UI components
						var ui = H.ui.UI.createDefault(map, defaultLayers);
						function addMarkersToMap(map) {
						  var machinovateMarker = new H.map.Marker({lat:14.724705, lng:120.985323});
						  map.addObject(machinovateMarker);
						}
						addMarkersToMap(map);
						  </script>
					</div> -->
			</div>
					
				</div>
			</div>
		</div>	
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="./scripts/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("contact-us").className = "active";
		</script>
	</body>
</html>
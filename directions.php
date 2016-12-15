<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />  
		<meta name=viewport content= 'width=device-width, initial-scale=1'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel='stylesheet' href='css/main.css'>
		<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon' >		
				<link rel="icon" href="favicon.ico">
		<title>Historic New Castle, Delaware</title>
	</head>
	<body>
		<header>
			<?php include 'nav.php'?>
		</header>
		
		<main>
			<div class='container'>
				<div class='jumbotron'>

					<h1>My First Google Map</h1>

					<div id="map" style="width:100%;height:500px"></div>

					<script>

						function myMap() {
						  var myCenter = new google.maps.LatLng(39.6620,-75.5668);
						  var mapCanvas = document.getElementById("map");
						  var mapOptions = {center: myCenter, zoom: 14};
						  var map = new google.maps.Map(mapCanvas, mapOptions);
						  var marker = new google.maps.Marker({position:myCenter});
						  marker.setMap(map);
						}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>





				</div>
			</div>
		</main>
		
		<footer>
			<?php include 'footer.php'?>
		</footer>
		
		
		<!-- Latest compiled and minified JavaScript -->
		<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>
</html>

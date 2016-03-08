<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="map_canvas" style="width:100%;height:500px;border:2px solid blue;"></div>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnImMHG_x_onIeh4GreC0BfVn9DOPiKQU&callback=initMap" async defer></script>
	<script>

	function initMap() {
		var myLatLng = {lat: 24.8241443, lng: -107.369999};
		var map = new google.maps.Map(document.getElementById('map_canvas'), {
			center: myLatLng,
			zoom: 16,
			scrollwheel: false
		});

		var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: 'Lucky Grill'
			});
		marker.setMap(map);
	}
	</script>
</body>
</html>
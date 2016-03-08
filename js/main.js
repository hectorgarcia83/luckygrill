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
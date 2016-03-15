function initMap() {
	var myLatLng = {lat: 24.8241443, lng: -107.369999};
	var map = new google.maps.Map(document.getElementById('map_canvas'), {
		center: myLatLng,
		zoom: 16,
		scrollwheel: false
	});

	google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center); 
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Lucky Grill'
	});
	marker.setMap(map);
}

function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
    	return false;
    }
    return true;
}
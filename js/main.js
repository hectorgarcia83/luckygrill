$(document).ready(function(){
  //google.maps.event.addDomListener(window, "load", initMap);
});
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map_canvas'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8,
    scrollwheel: false
  });
}

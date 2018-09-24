new WOW();

function init_map() {

    var var_location = new google.maps.LatLng(40.725118, -73.997699);

    var var_mapoptions = {
        center: var_location,
        zoom: 14,
        disableDefaultUI: true
    };

    var var_map = new google.maps.Map(document.getElementById("map-container-4"), var_mapoptions);

}

google.maps.event.addDomListener(window, 'load', init_map);

function getNaviaddress(container, naviaddress, version = '1.5') {
    let url = 'https://staging-api.naviaddress.com/api/v1.5/Addresses/' + container + '/' + naviaddress + '?lang=ru';
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, false);
    xhr.send();

    return JSON.parse(xhr.responseText).result;
}

function createNaviaddress(lat, lng, version = '1.5') {
    let url = 'https://swagger.naviaddress.com/api/v'+version+'/Addresses';

    var xhr = new XMLHttpRequest();
    xhr.open('POST', url, false);
    xhr.send();

    return JSON.parse(xhr.responseText);
}

var startPos;
  var geoSuccess = function(position) {
    startPos = position;
    console.log( startPos.coords.latitude );
    console.log( startPos.coords.longitude );
  };
  navigator.geolocation.getCurrentPosition(geoSuccess);

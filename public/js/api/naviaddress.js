function getNaviaddress(container, naviaddress, version = '1.5') {
    let url = 'https://staging-api.naviaddress.com/api/v1.5/Addresses/' + container + '/' + naviaddress + '?lang=ru';
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, false);
    xhr.send();

    return JSON.parse(xhr.responseText).result;
}

getNaviaddress('7495', '0001');

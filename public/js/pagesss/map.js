function init_map() {

    var var_location1 = new google.maps.LatLng(55.7556410, 37.6203284);
    var var_location2 = new google.maps.LatLng(55.7525154 ,37.6230937);

    var var_mapoptions = {
        center: var_location1,
        zoom: 14,
        disableDefaultUI: true
    };

    var var_map = new google.maps.Map(document.getElementById("map-container-4"), var_mapoptions);

    var contentString1 =  '<div class="card booking-card infoMarker"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><div class="carousel-item active"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_HFSJJLNCML.jpg" alt="First slide"></div><div class="carousel-item"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_QIDIDXUJHM.jpg" alt="Second slide"></div><div class="carousel-item"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_GZMJOVNOGN.png" alt="Third slide"></div></div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="card-body"><h4 class="card-title font-weight-bold"><span data-toggle="modal" data-target="#basicExampleModal"><a data-toggle="tooltip" data-placement="right" title="Show direction text-truncate">ГАСТРОНОМ №1 <i class="fa fa-angle-right mx-1" aria-hidden="true"></i></a></span><div class="float-right h5 chip deep-purple white-text mr-0"><i class="fa fa-clock-o"></i> Круглосуточно</h4><hr><p class="mb-2"> Магазин <span class="float-right"><i class="fa fa-map-marker" aria-hidden="true"></i> [7495] 0001</span></p><p class="card-text">Гастроном №1 появился в 2008 году и мгновенно стал любимцем посетителей ГУМа. Объяснение простое: новый гастроном очень походил на легендарный советский, о чём свидетельствуют фотографии на стенах в торговом зале. Даже названия отделов перекочевали сюда из прошлого.</p><hr class="my-4"><p class="lead"><strong>Sheduled visiting days</strong></p><ul class="list-unstyled list-inline d-flex justify-content-between mb-0"><li class="list-inline-item mr-0"><div class="chip mr-0">Суббота, 19:00</div></li></ul><hr><p class="card-text"><i class="fa fa-location-arrow" aria-hidden="true"></i> Нулевой км, пр-д Воскресенские Ворота, Москва, Россия, 109012</p><hr><div class="row justify-content-center"><div class="col-lg-4 col-md-4 text-center"><a href="#" class="btn aqua-gradient white-text btn-sm waves-effect waves-light">planogram</a></div><div class="col-lg-4 col-md-4 text-center"><a href="#" class="btn blue-gradient white-text btn-sm waves-effect waves-light">Assortment</a></div><div class="col-lg-4 col-md-4 text-center"><a href="#" class="btn btn-danger white-text btn-sm waves-effect waves-light" id="closeInfo" onclick="closeInfo()">Close</a></div></div></div><div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Planogram</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel"><div class="carousel-inner" role="listbox"><div class="carousel-item active"><div class="view"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_IPGLIZPDVE.jpg" alt="First slide"><div class="mask rgba-black-light"></div><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Этап 1</h3><p>Выход из метро "Площадь Революции" (синяя ветка)</p></div></div><div class="carousel-item"><div class="view"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_EOPWKFREUI.jpg" alt="Second slide"><div class="mask rgba-black-strong"></div><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Этап 2</h3><p>Идите прямо и вверх по ступенькам</p></div></div><div class="carousel-item"><!--Mask color--><div class="view"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_PVCWFFOQWN.jpg" alt="Third slide"><div class="mask rgba-black-slight"></div><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Этап 3</h3><p>Поверните направо в арку</p></div></div><div class="carousel-item"><!--Mask color--><div class="view"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_LUOLRZVXDV.jpg" alt="Fourth slide"><div class="mask rgba-black-slight"></div><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Этап 4</h3><p>Вверх по ступенькам и направо</p></div></div><div class="carousel-item"><!--Mask color--><div class="view"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_GXNWQYZUSG.jpg" alt="Third slide"><div class="mask rgba-black-slight"></div><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Этап 5</h3><p>Пройдите в арку и поверните направо</p></div></div><div class="carousel-item"><!--Mask color--><div class="view"><img class="d-block w-100" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_JSZLYOXOTV.jpg" alt="Third slide"><div class="mask rgba-black-slight"></div><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Этап 6</h3><p>Двигайтесь прямо</p></div></div></div></div></div></div></div></div><script>$(function () {$(\'[data-toggle="tooltip"]\').tooltip()})</script>';

    var marker1 = getNaviaddress('7495', '3');
    console.log(marker1);

    var covers = '';
    for (var i = 0; i < Object.keys(marker1.cover).length; i++) {
        covers += i == 0 ? 
        '<div class="carousel-item active">'+
            '<img class="d-block w-100" src="'+ marker1.cover[i].image +'">'+
        '</div>' :
        '<div class="carousel-item">'+
            '<img class="d-block w-100" src="'+ marker1.cover[i].image +'">'+
        '</div>';
    }

    var contentString2 =
    '<div class="card booking-card infoMarker">'+
        '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">'+
            '<div class="carousel-inner">'+covers+'</div>'+
            '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">'+
                '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
                '<span class="sr-only">Previous</span>'+
            '</a>'+
            '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">'+
                '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
                '<span class="sr-only">Next</span>'+
            '</a>'+
        '</div>'+
        '<div class="card-body">'+
            '<h4 class="card-title font-weight-bold text-truncate">'+marker1.name+
                '<div class="float-right h5 chip deep-purple white-text mr-0">'+
                    '<i class="fa fa-clock-o"></i> Круглосуточно'+
                '</div>'+
            '</h4>'+
            '<hr>'+
            '<p class="mb-2">'+marker1.category.name+'<span class="float-right"><i class="fa fa-map-marker" aria-hidden="true"></i> ['+marker1.container+'] '+marker1.naviaddress+'</span></p>'+
            '<p class="card-text">'+marker1.description+'</p>'+
            '<hr class="my-4">'+
            '<p class="lead"><strong>Sheduled visiting days</strong></p>'+
            '<ul class="list-unstyled list-inline d-flex justify-content-between mb-0">'+
                '<li class="list-inline-item mr-0">'+
                    '<div class="chip mr-0">Суббота, 19:00</div>'+
                '</li>'+
            '</ul>'+
            '<hr>'+
            '<p class="card-text"><i class="fa fa-location-arrow" aria-hidden="true"></i> '+marker1.postal_address+'</p>'+
            '<hr>'+
                '<div class="row justify-content-center">'+
                    '<div class="col-lg-4 col-md-4 text-center">'+
                        '<a href="#" class="btn aqua-gradient white-text btn-sm waves-effect waves-light">planogram</a>'+
                    '</div>'+
                    '<div class="col-lg-4 col-md-4 text-center">'+
                        '<a href="#" class="btn blue-gradient white-text btn-sm waves-effect waves-light">Assortment</a>'+
                    '</div>'+
                    '<div class="col-lg-4 col-md-4 text-center">'+
                        '<a href="#" class="btn btn-danger white-text btn-sm waves-effect waves-light" id="closeInfo" onclick="closeInfo()">Close</a>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>';

    var var_marker1 = new google.maps.Marker({
        position: var_location1,
        map: var_map,
        title: "Гум"
    });
    var var_marker2 = new google.maps.Marker({
        position: var_location2,
        map: var_map,
        title: "Храм Василия Блаженого"
    });
    var_marker1.addListener('click', function() {
        $("#infoMarker").html(contentString1);
        $("#infoMarker").fadeIn(150);
    });
    var_marker2.addListener('click', function() {
        $("#infoMarker").html(contentString2);
        $("#infoMarker").fadeIn(150);
    });

    var_marker1.setMap(var_map);
    var_marker2.setMap(var_map);

}

google.maps.event.addDomListener(window, 'load', init_map);

function closeInfo() {
    $("#infoMarker").fadeOut(150, function () {
        $(this).html('');
    });
}

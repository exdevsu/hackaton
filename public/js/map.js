function init_map() {

    var var_location = new google.maps.LatLng(40.725118, -73.997699);

    var var_mapoptions = {
        center: var_location,
        zoom: 14,
        disableDefaultUI: true
    };

    var var_map = new google.maps.Map(document.getElementById("map-container-4"), var_mapoptions);

    var contentString =  '<div class="card booking-card infoMarker"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><div class="carousel-item active"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide"></div><div class="carousel-item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide"></div><div class="carousel-item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide"></div></div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="card-body"><h4 class="card-title font-weight-bold"><span data-toggle="modal" data-target="#basicExampleModal"><a data-toggle="tooltip" data-placement="right" title="Show direction">Point name <i class="fa fa-angle-right mx-1" aria-hidden="true"></i></a></span><div class="float-right h5 chip deep-purple white-text mr-0">9:00 - 22:00</div></h4><hr><p class="mb-2"> American, Restaurant<span class="float-right"><i class="fa fa-map-marker" aria-hidden="true"></i> 701900</span></p><p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p><hr class="my-4"><p class="lead"><strong>Sheduled visiting days</strong></p><ul class="list-unstyled list-inline d-flex justify-content-between mb-0"><li class="list-inline-item mr-0"><div class="chip mr-0">Sunday 5:30PM</div></li><li class="list-inline-item mr-0"><div class="chip mr-0">Monday 7:30PM</div></li><li class="list-inline-item mr-0"><div class="chip mr-0">Friday 8:00PM</div></li></ul><hr><p class="card-text"><i class="fa fa-bell" aria-hidden="true"></i> Vladimir Vladimirovich Putin, President</p><p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8(800)555-35-35</p><hr><div class="row justify-content-center"><div class="col-lg-4 col-md-4 text-center"><a href="#" class="btn aqua-gradient white-text btn-sm waves-effect waves-light">planogram</a></div><div class="col-lg-4 col-md-4 text-center"><a href="#" class="btn blue-gradient white-text btn-sm waves-effect waves-light">Assortment</a></div><div class="col-lg-4 col-md-4 text-center"><a href="#" class="btn btn-danger white-text btn-sm waves-effect waves-light" id="closeInfo" onclick="closeInfo()">Close</a></div></div></div><div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Planogram</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel"><div class="carousel-inner" role="listbox"><div class="carousel-item active"><div class="view"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide"><div class="mask rgba-black-light"></div></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Step 1</h3><p>Go fuck yourself</p></div></div><div class="carousel-item"><div class="view"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide"><div class="mask rgba-black-strong"></div></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Step 2</h3><p>Suck my disk</p></div></div><div class="carousel-item"><!--Mask color--><div class="view"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide"><div class="mask rgba-black-slight"></div></div><div class="modal-footer last-mile"><h3 class="h3-responsive">Step 3</h3><p>Maks pidor</p></div></div></div><a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div></div></div></div></div><script>$(function () {$(\'[data-toggle="tooltip"]\').tooltip()})</script>';

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
    });
    var_marker.addListener('click', function() {
        $("#infoMarker").html(contentString);
        $("#infoMarker").fadeIn(150);
    });

    var_marker.setMap(var_map);

}

google.maps.event.addDomListener(window, 'load', init_map);

function closeInfo() {
    $("#infoMarker").fadeOut(150, function () {
        $(this).html('');
    });
}

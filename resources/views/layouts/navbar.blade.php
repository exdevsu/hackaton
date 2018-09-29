<nav class="navbar fixed-top navbar-expand-lg blue navbar-map">
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mr-auto">
        <a class="navbar-brand h3-responsive white-text" href="{{ route('index') }}">NaviMerch</a>
    </div>

    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <li class="nav-item">
            <a class="nav-link waves-effect waves-light white-text" href="/map"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Map</span></a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item notifications-nav">
            <a class="nav-link waves-effect waves-light white-text" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i> <span class="d-none d-md-inline-block">Notifications</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light white-text"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Outlets</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light white-text" href="{{ route('routeList') }}" data-toggle="modal" data-target="#fullHeightModalBottom">
                <i class="fa fa-plane" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Route List</span>
            </a>
        </li>

    </ul>
    <!--/Navbar links-->
</nav>

<!-- Full Height Modal Right -->
<div class="modal fade bottom modal-content-clickable" data-backdrop="false" id="fullHeightModalBottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-bottom" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Route List</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body routelist scrollbar-deep-purple bordered-deep-purple thin">

  <!-- Grid row -->
  <div class="row">
      <div class="col-lg-6">
          <!-- Grid column -->
          <div class="row mx-5 my-5">
          <div class="col-6">


                <!-- Post title -->
                <h3 class="font-weight-bold mb-3 text-truncate"><strong>ГАСТРОНОМ №1</strong><p style="font-size: 14px;"><i class="fa fa-location-arrow" aria-hidden="true"></i> [7495] 0001</p></h3>

                <!-- Excerpt -->
                <p class="dark-grey-text text-truncate">Гастроном №1 появился в 2008 году и мгновенно стал любимцем посетителей ГУМа. Объяснение простое: новый гастроном очень походил на легендарный советский, о чём свидетельствуют фотографии на стенах в торговом зале. Даже названия отделов перекочевали сюда из прошлого.</p>

                <!-- Read more button -->
                <a class="btn btn-primary btn-md">Check-in</a>
                <a class="btn btn-primary btn-md">More</a>
            </div>


          <!-- Grid column -->


    <!-- Grid column -->
    <div class="col-6 text-right">

        <img class="img-fluid routelist" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_GZMJOVNOGN.png" alt="Sample image">
        <p class="mt-4 text-right"><i class="fa fa-clock-o"></i> Суббота, 28.09.18<br>19:00</p>

    </div>
    </div>
    <!-- Grid column -->
</div>

<div class="col-lg-6">
    <!-- Grid column -->
    <div class="row mx-5 my-5">
    <div class="col-6">


          <!-- Post title -->
          <h3 class="font-weight-bold mb-3"><strong>Храм Василия Блаженного</strong><p style="font-size: 14px;"><i class="fa fa-location-arrow" aria-hidden="true"></i> [7495] 3</p></h3>

          <!-- Excerpt -->
          <p class="dark-grey-text text-truncate">Собор Василия Блаженного, расположенный на Красной Площади возле Спасской башни, представляет собой симметричный ансамбль из восьми столпообразных церквей, окружающих девятый — самый высокий — храм, увенчанный шатром. Данный собор является не только одним из самых ярких и знаменитых памятников древнерусской архитектуры, но также является одним из самых узнаваемых монументов в мире. Уже в 16 веке он восхищал путешественников и гостей города, а для россиян стал символом отечественной истории и национального характера.</p>

          <!-- Read more button -->
          <a class="btn btn-primary btn-md">Check-in</a>
          <a class="btn btn-primary btn-md">More</a>
      </div>


    <!-- Grid column -->


<!-- Grid column -->
<div class="col-6 text-right">

  <img class="img-fluid routelist" src="https://navi-images.s3.eu-west-3.amazonaws.com/uploads/images2/1616/large_JTTDBAYPXC.jpg" alt="Sample image">
  <p class="mt-4 text-right"><i class="fa fa-clock-o"></i> Воскресенье, 29.09.18<br>16:00</p>

</div>
</div>
<!-- Grid column -->
</div>

  </div>
  <!-- Grid row -->

        </div>
      </div>
    </div>
  </div>
  <!-- Full Height Modal Right -->

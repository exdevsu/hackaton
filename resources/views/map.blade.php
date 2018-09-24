@extends('layouts.app')

@section('title', 'Map')

@section('content')

    <header>
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar blue navbar-map">
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <a class="navbar-brand h3-responsive white-text" href="{{ route('index') }}">NaviMerch</a>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto white-text">

                <!-- Dropdown -->
                <li class="nav-item notifications-nav">
                    <a class="nav-link waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge red">3</span> <i class="fa fa-bell"></i>
                        <span class="d-none d-md-inline-block">Notifications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Outlets</span></a>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!--Main layout-->
        <main class=" m-0 p-0">
            <div class="container-fluid m-0 p-0">

                <!--Google map-->
                <div id="map-container-4"></div>

            </div>
        </main>
        <!--Main layout-->
    </header>

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDAaSWkt189Y1acVfd-OcSKrB3BTojvzKM"></script>
@endsection

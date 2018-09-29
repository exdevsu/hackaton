@extends('layouts.app')

@section('title', 'Map')

@section('content')

    <header>

        {{ HTML::style('css/pages/map.css') }}

        @include('layouts.navbar')

        <!--Main layout-->
        <main class=" m-0 p-0">
            <div class="container-fluid m-0 p-0">

                <!--Google map-->
                <div id="map-container-4"></div>
                <div id="infoMarker" style="display: none"></div>

            </div>
        </main>
        <!--Main layout-->
    </header>
    <!--Carousel Wrapper-->

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDAaSWkt189Y1acVfd-OcSKrB3BTojvzKM"></script>
    {{ HTML::script('js/api/naviaddress.js') }}
    {{ HTML::script('js/pagesss/map.js') }}
@endsection

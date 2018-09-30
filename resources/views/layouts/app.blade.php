<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NaviMerch - @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/mdb.min.css') }}
    {{ HTML::style('css/style.css') }}
</head>
<body>

    @yield('content')

    <footer>
        {{ HTML::script('js/jquery-3.3.1.min.js') }}
        {{ HTML::script('js/popper.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/modules/wow.js') }}
        {{ HTML::script('js/modules/jarallax.js') }}
        {{ HTML::script('js/mdb.min.js') }}
        {{ HTML::script('js/modules/file-input.js') }}
        {{ HTML::script('js/pagesss/routelist.js') }}
        {{ HTML::script('js/pagesss/register.js') }}
        {{ HTML::script('js/app.js') }}
    </footer>
</body>
</html>

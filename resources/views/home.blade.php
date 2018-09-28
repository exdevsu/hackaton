@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <header>
        <!--Navbar-->
        <nav class="navbar no-shadow scrolling-navbar navbar-expand-lg my-5 fixed-top navbar-dark">
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand h1-responsive animated fadeInDownBig" href="{{ route('home') }}">NaviMerch</a>

                <!-- Collapse button -->
                <button class="navbar-toggler animated fadeInDownBig" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links left -->
                    <ul class="navbar-nav mr-auto"></ul>
                    <!-- Links left -->

                    <form class="form-inline">
                        <div class="md-form my-0">
                            <ul class="navbar-nav mr-auto h5-responsive animated fadeInDownBig">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->
        <!-- Full Page Intro -->
        <div class="view intro">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row mt-5">
                        <!--Grid column-->
                        <div class="col-md-10 my-5 mb-5 mt-md-0 mt-5 white-text text-center text-md-left center animated fadeInUp">
                            <div class="text-center">
                                <h1 class="h1-responsive">Welcome new merch with using <a href="https://naviaddress.com/" class="blue-text" target="_blank">NaviAddress</a>!</h1>
                                <hr class="hr-light">
                                <h6 class="mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
                                    nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                                    dolor molestiae, quisquam iste, maiores. Nulla.
                                </h6>
                            </div>
                        </div>
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mb-4 center">
                            <!--Form with header-->
                            <form class="card animated fadeInUp" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="card-body">
                                    <!--Header-->
                                    <div class="form-header blue-gradient">
                                        <h3><i class="fa fa-user mt-2 mb-2"></i> Log in</h3>
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix white-text"></i>
                                        <input type="text" id="loginForm-Email" name="email" class="form-control white-text" value="{{ old('email') }}" required>
                                        <label for="loginForm-Email" >Your email</label>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text"></i>
                                        <input type="password" id="loginForm-pass" name="password" class="form-control white-text" required>
                                        <label for="loginForm-pass">Your password</label>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn blue-gradient btn-lg">Sign in</button>
                                        <hr>
                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="p-2 m-2 fa-lg tw-ic" href="https://github.com/exdevsu/hackaton" target="_blank"><i class="fa fa-github white-text"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/Form with header-->
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
@endsection

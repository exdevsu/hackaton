@extends('layouts.app')

@section('title', 'Register')

@section('content')
{{ HTML::style('css/pages/register.css') }}
<header>
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
                <a class="nav-link waves-effect waves-light white-text" href="" data-toggle="modal" data-target="#fullHeightModalBottom">
                    <i class="fa fa-plane" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Route List</span>
                </a>
            </li>

        </ul>
        <!--/Navbar links-->
    </nav>
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
                    <div class="col-md-6 mb-4 center">
                        <!--Form with header-->
                        <form class="card animated fadeInUp" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="card-body">
                                <!--Header-->
                                <div class="form-header blue-gradient">
                                    <h3><i class="fa fa-user mt-2 mb-2"></i> Register</h3>
                                </div>
                                <!--Body-->
                                <!-- Stepper -->
                                <div class="steps-form">
                                    <div class="steps-row setup-panel">
                                        <div class="steps-step">
                                            <a href="#step-9" type="button" class="btn btn-indigo btn-circle">1</a>
                                            <p>Step 1</p>
                                        </div>
                                        <div class="steps-step">
                                            <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                            <p>Step 2</p>
                                        </div>
                                    </div>
                                </div>

                                <form role="form" action="" method="post">

                                    <!-- First Step -->
                                    <div class="row setup-content" id="step-9">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix white-text"></i>
                                                <input type="email" id="loginForm-Email" name="email" class="form-control white-text" value="{{ old('email') }}" required>
                                                <label for="loginForm-Email" >Email</label>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix white-text"></i>
                                                <input type="password" id="loginForm-Password" name="password" class="form-control white-text" value="{{ old('password') }}" required>
                                                <label for="loginForm-Password" >Password</label>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text"></i>
                                                <input type="password" id="loginForm-Password_confirmation" name="password_confirmation" class="form-control white-text" required>
                                                <label for="loginForm-Password_confirmation">Confirm Password</label>

                                                @if ($errors->has('password_confirmation'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <button class="btn btn-indigo btn-rounded nextBtn float-right" type="button">Next</button>
                                        </div>
                                    </div>

                                    <!-- Second Step -->
                                    <div class="row setup-content" id="step-10">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text"></i>
                                                <input type="text" id="loginForm-First_name" name="first_name" class="form-control white-text" value="{{ old('first_name') }}" required autofocus>
                                                <label for="loginForm-First_name">First Name</label>

                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text"></i>
                                                <input type="text" id="loginForm-Last_name" name="last_name" class="form-control white-text" value="{{ old('last_name') }}" required>
                                                <label for="loginForm-Last_name">Last Name</label>

                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-phone prefix white-text"></i>
                                                <input type="text" id="loginForm-Phone" name="phone" class="form-control white-text" value="{{ old('phone') }}" required>
                                                <label for="loginForm-Phone" >Phome</label>

                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <select class="mdb-select md-form colorful-select dropdown-primary white-text" style="padding: 0" name="group">
                                                <option value="1">Manager</option>
                                                <option value="2">Merchandiser</option>
                                                <option value="3">Admin</option>
                                            </select>
                                            @if ($errors->has('group'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('group') }}</strong>
                                                </span>
                                            @endif
                                            <div class="text-center">
                                                <button type="submit" class="btn blue-gradient btn-lg">Register</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- Steps form -->
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

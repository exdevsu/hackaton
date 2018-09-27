<nav class="navbar fixed-top navbar-expand-lg blue navbar-map">
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn mr-auto">
        <a class="navbar-brand h3-responsive white-text" href="{{ route('index') }}">NaviMerch</a>
    </div>

    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

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
            <a class="nav-link waves-effect waves-light white-text" href="{{ route('routeList') }}">
                <i class="fa fa-plane" aria-hidden="true"></i> <span class="clearfix d-none d-sm-inline-block">Route List</span>
            </a>
        </li>

    </ul>
    <!--/Navbar links-->
</nav>

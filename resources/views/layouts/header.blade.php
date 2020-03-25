<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo">
            <span>
                <img src="{{ URL::asset('assets/images/logoit2.png') }}" alt="" height="52">

            </span>
            <i>
                <img src="{{ URL::asset('assets/images/logoit2.png') }}" alt="" height="12">
            </i>
        </a>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right d-flex list-inline float-right mb-0">
            <li class="dropdown notification-list d-none d-md-block">

            </li>

            <!-- language-->
            <li class="dropdown notification-list d-none d-md-block">
            </li>

            <!-- full screen -->
            {{-- <li class="dropdown notification-list d-none d-md-block">
            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                <i class="mdi mdi-fullscreen noti-icon"></i>
            </a>
        </li> --}}

            <!-- notification -->
            <li class="dropdown notification-list">
            </li>

            <li class="dropdown notification-list">
                <div class="dropdown notification-list noti-icon">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        {{-- {{ Auth::user()->fullname }} <span class="caret"></span> --}}
                        <i class="mdi mdi-account-outline"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a class="dropdown-item" href="javascript:void(0);"><i
                                class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i>
                            {{ Auth::user()->fullname }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <li class="d-none d-sm-block">
                <div class="dropdown pt-3 d-inline-block">
                </div>
            </li>
        </ul>

    </nav>

</div>
<!-- Top Bar End -->
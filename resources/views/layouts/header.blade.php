<div class="app-header header d-flex navbar-collapse bg-warning">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{{route('dashboard')}}">
                <img src="{{ asset('assets/img/smk-bisa.png') }}" class="header-brand-img main-logo" alt="IndoUi logo"
                    style="width: 100px;">
            </a><!-- logo-->
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="fe fe-align-left"></i></a>
                <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
            </div>
            <div class="d-flex order-lg-2 ml-auto header-right">
                <div class="d-md-flex">
                    <a href="#" class="nav-link icon full-screen-link">
                        <i class="fe fe-minimize fullscreen-button"></i>
                    </a>
                </div>
                <div class="dropdown d-md-flex header-message">
                </div>
                <!--Navbar -->
                <div class="dropdown header-profile">
                    <a class="nav-link pr-0 leading-none d-flex pt-1" data-toggle="dropdown" href="#">
                        <span class="text-white">
                            | {{ Auth::user()->name }} &nbsp;&nbsp;

                        </span>
                        <span class="avatar avatar-md brround cover-image"
                            data-image-src="{{ asset('assets/img//undraw_profile.svg') }}"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-1">
                                    {{ Auth::user()->name }} &nbsp;&nbsp;
                                </h5>
                                <small class="text-muted">{{Auth::user()->user_role}}</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="{{route('profile')}}"><i class="dropdown-icon fe fe-user"></i>Profile</a>
                        <a class="dropdown-item" href="{{ route('logout-dashboard') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i
                                class="dropdown-icon fe fe-power"></i> Log Out</a>

                        <form id="logout-form" action="{{ route('logout-dashboard') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="app-header header d-flex navbar-collapse bg-success">
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
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-bell"></i>
                        <span class="nav-unread badge badge-danger badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item text-center" href="#">Notifications</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex pb-4" href="#">
                            <span
                                class="avatar mr-3 br-3 align-self-center avatar-md cover-image bg-primary-transparent text-primary"><i
                                    class="fe fe-mail"></i></span>
                            <div>
                                <span class="font-weight-bold"> Commented on your post </span>
                                <div class="small text-muted d-flex">
                                    3 hours ago
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-4" href="#">
                            <span
                                class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-secondary-transparent text-secondary"><i
                                    class="fe fe-download"></i>
                            </span>
                            <div>
                                <span class="font-weight-bold"> New file has been Uploaded </span>
                                <div class="small text-muted d-flex">
                                    5 hour ago
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-4" href="#">
                            <span
                                class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-warning-transparent text-warning"><i
                                    class="fe fe-user"></i>
                            </span>
                            <div>
                                <span class="font-weight-bold"> User account has Updated</span>
                                <div class="small text-muted d-flex">
                                    20 mins ago
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-4" href="#">
                            <span
                                class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-info-transparent text-info"><i
                                    class="fe fe-shopping-cart"></i>
                            </span>
                            <div>
                                <span class="font-weight-bold"> New Order Recevied</span>
                                <div class="small text-muted d-flex">
                                    1 hour ago

                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <div class="text-center dropdown-btn pb-3">
                            <div class="btn-list">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add
                                    New</a>
                                <a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View
                                    All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Navbar -->
                <div class="dropdown header-profile">
                    <a class="nav-link pr-0 leading-none d-flex pt-1" data-toggle="dropdown" href="#">
                        <span class="text-white">
                            | {{ Auth::user()->name }} &nbsp;&nbsp;

                        </span>
                        <span class="avatar avatar-md brround cover-image"
                            data-image-src="{{ asset('assets/img/user.png') }}"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-1">
                                    {{ Auth::user()->name }} &nbsp;&nbsp;
                                </h5>
                                <small class="text-muted">Web Developer</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i
                                class="dropdown-icon fe fe-power"></i> Log Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

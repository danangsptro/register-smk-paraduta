<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="IndoUi – Bootstrap 4 Admin Dashboard HTML Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="admin, admin dashboard template, admin panel template, admin template, best bootstrap admin template, bootstrap 4 admin template, bootstrap 4 dashboard template, bootstrap admin template, bootstrap dashboard template, html admin template, html5 dashboard template, html5 admin template, modern admin template, simple admin template, template admin bootstrap 4" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/css/frontend/assets/favicon.ico') }}" />

    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/brand/favicon.ico" />
    <!-- Title -->
    <title>Smk Paraduta Bangsa</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!--Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet">
    <!-- P-scrollbar css-->
    <link href="{{ asset('assets/css/p-scrollbar.css') }}" rel="stylesheet" />
    <!-- Sidemenu css -->
    <link href="{{ asset('assets/css/closed-sidemenu.css') }}" rel="stylesheet" />
    <!--Daterangepicker css-->
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet" />
    <!-- Rightsidebar css -->
    <link href="{{ asset('assets/css/sidebar/sidebar.css') }}" rel="stylesheet">
    <!-- Morris  Charts css-->
    <link href="{{ asset('assets/css/morris/morris.css') }}" rel="stylesheet" />
    <!---Icons css-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{asset('assets/js/dataTables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/js/dataTables/responsivebootstrap4.min.css')}}" rel="stylesheet" />


</head>

<body class="app sidebar-mini rtl">

    <div class="page">
        <div class="page-main">
            @include('layouts.header')
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            @include('layouts.sidebar')
            <!-- app-content-->
            <div class="app-content toggle-content">
                @yield('backend')

            </div>
            @include('layouts.footer')

        </div>
    </div>
    <!-- Jquery js-->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <!--Bootstrap.min js-->
    <script src="{{ asset('assets/js/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/bootstrap.min.js') }}"></script>
    <!--Jquery Sparkline js-->
    <script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
    <!-- Chart Circle js-->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
    <!-- Star Rating js-->
    <script src="{{ asset('assets/js/rating/jquery.rating-stars.js') }}"></script>
    <!--Moment js-->
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <!-- Daterangepicker js-->
    <script src="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!--Side-menu js-->
    <script src="{{ asset('assets/js/sidemenu/sidemenu.js') }}"></script>
    <!-- P-scrollbar js-->
    <script src="../../assets/plugins/p-scrollbar/p-scrollbar.js"></script>
    <script src="../../assets/plugins/p-scrollbar/p-scrollbar-leftmenu.js"></script>
    <!--Peitychart js -->
    <script src="../../assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="../../assets/plugins/peitychart/peitychart.init.js"></script>
    <!-- Rightsidebar js -->
    <script src="../../assets/plugins/sidebar/sidebar.js"></script>
    <!-- Charts js-->
    <script src="../../assets/plugins/chart/chart.bundle.js"></script>
    <script src="../../assets/plugins/chart/utils.js"></script>
    <!--Morris  Charts js-->
    <script src="../../assets/plugins/morris/raphael-min.js"></script>
    <script src="../../assets/plugins/morris/morris.js"></script>
    <!--Time Counter js-->
    <script src="../../assets/plugins/counters/jquery.missofis-countdown.js"></script>
    <script src="../../assets/plugins/counters/counter.js"></script>
    <!-- Custom-charts js-->
    <script src="{{ asset('assets/js/index1.js') }}"></script>
    <!-- Custom js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/datatable.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables/dataTables.responsive.min.js') }}"></script>


</body>

</html>

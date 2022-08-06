@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')
    <div class="side-app">

        <!-- page-header -->
        <div class="page-header">
            <h1 class="page-title"><span class="subpage-title">Welcome To</span> Dashboard SMK PARADUTA BANGSA TANGERANG
                SELATAN</h1>

        </div>
        <!-- End page-header -->
        <div class="jumbotron bg-white">
            <div class="container">
                <h1 class="display-3">Halo, Administrator</h1>
                <p class="lead m-0">Selamat Datang di <span class="text-dark">Web Aplikasi Penerimaan Calon Siswa
                        Baru</span></p>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <div class="feature">
                                    <div class="icon-service2 bg-primary br-3">
                                        <i class="fe fe-users text-white fs-30"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <p class="text-muted mb-1">
                                    Total Register
                                </p>
                                <h2 class="mt-2 mb-0 number-font">56,897</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <p class="mb-0"><span class=""><i
                                        class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 0.78%</span> last week</p>
                        </div>
                        <div class="float-right">
                            <i class="fa fa-line-chart text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <div class="feature">
                                    <div class="icon-service2  bg-secondary br-3">
                                        <i class="fe fe-bar-chart-2 text-white fs-30"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <p class="text-muted mb-1">
                                    Total Jurusan
                                </p>
                                <h2 class="mt-2 mb-0 number-font">{{$jurusan->count()}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <p class="mb-0"><span >
                                    Jurusan </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <div class="feature">
                                    <div class="icon-service2 bg-success br-3">
                                        <i class="fe fe-dollar-sign text-white fs-30"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <p class="text-muted mb-1">
                                    Total Siswa Register
                                </p>
                                <h2 class="mt-2 mb-0 number-font">$54,890</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <p class="mb-0"><span class=""><i
                                        class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 0.5%</span> last week</p>
                        </div>
                        <div class="float-right">
                            <i class="fa fa-line-chart text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <div class="feature">
                                    <div class="icon-service2 bg-warning br-3">
                                        <i class="fe fe-shopping-cart text-white fs-30"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-auto text-right">
                                <p class="text-muted mb-1">
                                    Total Calon Siswa Baru
                                </p>
                                <h2 class="mt-2 mb-0 number-font">78,965</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-left">
                            <p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i>
                                    1.87%</span> last week </p>
                        </div>
                        <div class="float-right">
                            <i class="fa fa-line-chart text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->

@endsection

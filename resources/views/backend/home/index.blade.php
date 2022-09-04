@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')
<style>
    .card-radius{
        border-radius: 1rem;
    }
    .card-footer{
        border-radius: 1rem !important;
        border: 8px solid whitesmoke;
    }

    .bg-dark{
        background: grey !important;
    }
</style>
    <div class="side-app">

        <!-- page-header -->
        <div class="page-header card py-3 card-radius">
            <h1 class="page-title"><span class="subpage-title">Welcome To</span> Dashboard SMK PARADUTA BANGSA TANGERANG
                SELATAN</h1>

        </div>
        <div class="page-header">
            <h1 class="page-title"><span class="subpage-title">Tahun Ajaran</span> 2022/2023</h1>
            <div class="ml-auto ">
                <div class="jam card py-2">
                    <div class="container jam-container">
                        <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-check-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg></span>&nbsp;
                        &nbsp;

                        <span class="f-blk" id="hari"></span>
                        ,
                        &nbsp;
                        <span class="f-blk" id="tanggal"></span>
                        &nbsp;

                        <span class="f-blk" id="bulan"></span>
                        &nbsp;

                        <span class="f-blk" id="tahun"></span>
                        &nbsp;

                        /
                        &nbsp;

                        <span class="f-blk" id="jam"></span>
                        :
                        <span a class="f-blk" id="menit"></span>
                        :
                        <span class="f-blk" id="detik"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page-header -->
        <div class="jumbotron bg-white card-radius">
            <div class="container">
                <h1 class="display-3">Halo, {{ $auth->name }} 👋</h1>
                <p class="lead m-0">Selamat Datang di <span class="text-dark">Web Aplikasi Penerimaan Calon Siswa
                        Baru</span></p>
            </div>
        </div>

        <!-- Row -->
        @if ($auth->user_role != 'siswa')
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6">
                    <div class="card card-radius">
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
                                        Total Pendaftaran
                                    </p>
                                    <h2 class="mt-2 mb-0 number-font">{{$jumlahPendaftaran->count()}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <div class="float-left">
                                <p class="mb-0"><span class="">Pendaftaran
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6">
                    <div class="card card-radius">
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
                                    <h2 class="mt-2 mb-0 number-font">{{ $jurusan->count() }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <div class="float-left">
                                <p class="mb-0"><span>
                                        Jurusan </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-6">
                    <div class="card card-radius">
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
                                        Total Kelas
                                    </p>
                                    <h2 class="mt-2 mb-0 number-font">{{$kelas->count()}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <div class="float-left">
                                <p class="mb-0"><span class="">Kelas
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @else
        @endif
    </div>

@endsection
@section('script')
    <script>
        // Hari
        arrHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
        Hari = new Date().getDay();
        document.getElementById("hari").innerHTML = arrHari[Hari];
        // Tanggal
        Tanggal = new Date().getDate();
        document.getElementById("tanggal").innerHTML = Tanggal;
        // Bulan
        arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
            "November", "Desember"
        ];
        Bulan = new Date().getMonth();
        document.getElementById("bulan").innerHTML = arrbulan[Bulan];
        // Tahun
        Tahun = new Date().getFullYear();
        document.getElementById("tahun").innerHTML = Tahun;
        // Jam
        window.setTimeout("waktu()", 1000);

        function addZero(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = addZero(waktu.getHours());
            document.getElementById("menit").innerHTML = addZero(waktu.getMinutes());
            document.getElementById("detik").innerHTML = addZero(waktu.getSeconds());
        }
        //   window.setTimeout("waktu()", 1000);
        // function waktu() {
        // 	var waktu = new Date();
        // 	setTimeout("waktu()", 1000);
        // 	document.getElementById("jam").innerHTML = waktu.getHours();
        // 	document.getElementById("menit").innerHTML = waktu.getMinutes();
        // 	document.getElementById("detik").innerHTML = waktu.getSeconds();
        // }
    </script>
@endsection

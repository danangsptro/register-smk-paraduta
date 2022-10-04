@extends('backend.masterBackend')
@section('title', 'Admin | Dashboard')

@section('backend')
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: rgb(218, 183, 160);
            background-repeat: no-repeat;
        }

        .card {
            z-index: 0;
            margin-top: 50px;
            margin-bottom: 90px;
            border-radius: 10px;
        }

        .top {
            padding-top: 40px;
            padding-left: 13% !important;
            padding-right: 13% !important;
        }

        /*Icon progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
            margin-top: 30px;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        #progressbar .step0:before {
            font-family: FontAwesome;
            content: "\f10c";
            color: #fff;
        }

        #progressbar li:before {
            width: 40px;
            height: 40px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            background: #C5CAE9;
            border-radius: 50%;
            margin: auto;
            padding: 0px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 12px;
            background: #C5CAE9;
            position: absolute;
            left: 0;
            top: 16px;
            z-index: -1;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: -50%;
        }

        #progressbar li:nth-child(2):after,
        #progressbar li:nth-child(3):after {
            left: -50%;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            position: absolute;
            left: 50%;
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: rgb(235, 87, 70);
        }

        #progressbar li.active:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        .icon {
            margin-right: 15px;
        }

        .icon-content {
            padding-bottom: 20px;
        }

        @media screen and (max-width: 992px) {
            .icon-content {
                width: 50%;
            }
        }
    </style>
    <div class="side-app">
        <div class="card container">
            <div class="justify-content-center">
                <div class=" text-center mt-4">
                    <h4>
                        Status : <span class="font-weight-bold">Register SMK PARADUTA BANGSA TANGERANG SELATAN</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="text-center">
                    <img src="{{ asset('assets/img/smk-bisa.png') }}" alt="img_not_found" width="20%">

                </div>
                <div class="card">
                    <div class="justify-content-between text-center top">
                        <div class="text-center">
                            <h3><strong>Status Pendaftaran</strong> <span class="text-primary font-weight-bold"></span></h3>
                        </div>
                        {{-- <div class="d-flex flex-column text-sm-right">
                            <p>Invoice <span class="font-weight-bold">234094567242423422898</span></p>
                        </div> --}}
                    </div>
                    <!-- Add class 'active' to progress -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <ul id="progressbar" class="text-center">
                                @if ($status[0]->status_id > 1)
                                    <li class="active step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold"><span>Sukses</span><br>Pembayaran Form Pendaftaran
                                            </p>
                                        </div>
                                    </li>
                                @else
                                    <li class="step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold"><span>Sukses</span><br>Pembayaran Form Pendaftaran
                                        </div>
                                    </li>
                                @endif

                                @if ($status[0]->status_id > 3)
                                    <li class="active step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Sukses<br>Register Pendaftran</p>
                                        </div>
                                    </li>
                                @else
                                    <li class="step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Sukses<br>Register Pendaftran</p>
                                        </div>
                                    </li>
                                @endif

                                @if ($status[0]->status_id > 5)
                                    <li class="active step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Sukses<br>Pembayran Pendaftaran</p>
                                        </div>
                                    </li>
                                @else
                                    <li class="step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Sukses<br>Pembayran Pendaftaran</p>
                                        </div>
                                    </li>
                                @endif

                                @if ($status[0]->status_id >6)
                                    <li class="active step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Selesai<br>Selamat Anda Diterima :)</p>
                                        </div>
                                    </li>
                                @else
                                    <li class="step0">
                                        <br>
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Selesai<br>Selamat Anda Diterima :)</p>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="row justify-content-between top">
                        <div class="row d-flex icon-content">
                            <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Sukses<br>Pembayaran Form Pendaftaran</p>
                            </div>
                        </div>
                        <div class="row d-flex icon-content">
                            <img class="icon" src="https://i.imgur.com/u1AzR7w.png">

                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Sukses<br>Register Pendaftran</p>
                            </div>
                        </div>
                        <div class="row d-flex icon-content">
                            <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Sukses<br>Pembayran Pendaftaran</p>
                            </div>
                        </div>
                        <div class="row d-flex icon-content">
                            <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                            <div class="d-flex flex-column">
                                <p class="font-weight-bold">Selesai<br>Selamat Anda Diterima :)</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

@endsection

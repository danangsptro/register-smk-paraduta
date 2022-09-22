@extends('frontend.masterFrontend')
@section('title', 'Admin | Dashboard')

@section('frontend')
    <div class="side-app">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/css/frontend/assets/img/smk.png') }}"
                        alt="..." width="55px" style="height:48px; border-radius:10px;" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Jurusan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('formlir-pendaftaran') }}">Formulir
                                Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container text-center">
                <div class="masthead-subheading" style="color: white!important">Welcome To SMK PARADUTA BANGSA!</div>
                <div class="masthead-heading text-uppercase" style="color: white!important">It's Nice To Meet You</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    {{-- <h3 class="section-subheading text-muted">SMK PARADUTA BANGSA.</h3> --}}
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item  active">
                                    <img src="{{ asset('assets/css/frontend/assets/img/278306244_719596979238658_795892041247698344_n.jpg') }}"
                                        class="d-block w-100" alt="..." style="border-radius: 2rem">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Smk Paraduta Bangsa</h5>
                                        <p>siswa dan siswi.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/css/frontend/assets/img/277045373_5753554384671468_5307121554197255147_n.jpg') }}"
                                        class="d-block w-100" alt="..." style="border-radius: 2rem">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Smk Paraduta Bangsa</h5>
                                        <p>Sedang ada kegiatan kunjungan dari Bank Artha Graha.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/css/frontend/assets/img/283426498_1640926599604039_3656090882430244205_n.jpg') }}"
                                        class="d-block w-100" alt="..." style="border-radius: 2rem">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Smk Paraduta Bangsa</h5>
                                        <p>Kegiatan Penjemputan Pkl.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin-top: 3rem; font-familiy:sans-serif;">
                        <h5>
                        SMK PARADUTA BANGSA adalah salah satu satuan pendidikan dengan jenjang SMK di Pondok Jagung Timur, Kec. Serpong Utara, Kota Tangerang Selatan, Banten. Dalam menjalankan kegiatannya, SMKS PARADUTA BANGSA berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.

                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-4">JURUSAN</h2>
                </div>
                <div class="row">
                    @foreach ($jurusan as $item)
                        <div class="col-lg-6 col-sm-6 mb-4">
                            <!-- Portfolio item 1-->
                            <div class="portfolio-item shadow ">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{ $item->kode_jurusan }}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{ $item->nama_jurusan }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Location</h2>
                    <h3 class="section-subheading text-muted">SMK PARADUTA BANGSA TANGERANG SELATAN</h3>
                </div>
                <div class="text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1771805727317!2d106.66362251535185!3d-6.24036446284589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbaaf0c3ff9d%3A0x66a111033346bbd7!2sSMK%20PARADUTA%20BANGSA!5e0!3m2!1sid!2sid!4v1659508978146!5m2!1sid!2sid"
                        width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">
                        <h6><strong>Kontak :</strong></h6>
                        <p>(021) 53124120
                        </p>
                        <h6><strong>Alamat :</strong></h6>
                        <p>Jalan Bayangkara Pusdiklantas No.5a
                            Pondok Jagung Timur
                            Banten 15436
                            Indonesia</p>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0 text-center">
                        {{-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                                class="fab fa-twitter"></i></a> --}}
                        <a class="btn btn-dark btn-social mx-2" href="https://m.facebook.com/SMK-Paraduta-Bangsa-Tangsel-265080615362977/?ref=page_internal" target="__blank" aria-label="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/smkparadutabangsa/"
                            target="_blank" aria-label="LinkedIn"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <h6><strong>Jam Buka :</strong></h6>
                        <a class="link-dark text-decoration-none">Sen: 08.30–03.00</a><br>
                        <a class="link-dark text-decoration-none">Sel: 08.30–03.00</a><br>
                        <a class="link-dark text-decoration-none">Rab: 08.30–03.00</a><br>
                        <a class="link-dark text-decoration-none">Kam: 08.30–03.00</a><br>
                        <a class="link-dark text-decoration-none">Jum: 08.30–00.00</a><br>
                        <a class="link-dark text-decoration-none">Sab: Tutup </a><br>
                        <a class="link-dark text-decoration-none">Min: Tutup </a>
                    </div>
                </div>
                <hr>
                <div class="text-center"><strong>Copyright <i> &copy; SMK PARADUTA BANGSA TANGERANG SELATAN
                            2022</i></strong>
                </div>

            </div>
        </footer>
    </div>
@endsection

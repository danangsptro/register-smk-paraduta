@extends('frontend.masterFrontend')
@section('title', 'Admin | Dashboard')

@section('frontend')
    <section style="background-color: #006755;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Register</span>
                                    </div>
                                    <form action="{{ route('store-siswa') }}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Nama Lengkap"  required name="name" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Email address"  required name="email" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Jenis Kelamin"  required name="jenis_kelamin" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Alamat"  required name="alamat" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Tempat Lahir"  required name="tempat_lahir" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="date" id="form2Example17" class="form-control form-control-md"
                                                placeholder="Tanggal Lahir"  required name="tanggal_lahir" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" class="form-control form-control-md"
                                                placeholder="Password"  required name="password" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-md btn-block" type="submit">Register</button>
                                        </div>
                                    </form>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a
                                            href="{{ route('login-smk-paraduta') }}" style="color: #393f81;">Login
                                            here</a></p>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://simulasippdb.makassarkota.go.id/public/assets/icons/iconsmp.png"
                                    alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

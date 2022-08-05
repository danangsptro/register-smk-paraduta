@extends('layouts.app')

@section('content')
    <div class="page">

        <!-- page-content -->
        <div class="page-content">
            <div class="container text-center text-dark">
                <div class="row">
                    <div class="col-lg-4 d-block mx-auto">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <div class="text-center mb-6">
                                        <img src="../../assets/images/brand/logo.png" class="header-brand-img main-logo" alt="IndoUi logo">
                                        <img src="../../assets/images/brand/logo-light.png" class="header-brand-img dark-main-logo" alt="IndoUi logo">
                                    </div> --}}
                                        <h3>Login</h3>
                                        <p class="text-muted">Sign In to your account</p>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="input-group mb-3">
                                                <span class="input-group-addon bg-white"><i class="fa fa-user"></i></span>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                                    placeholder="Email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-group mb-4">
                                                <span class="input-group-addon bg-white"><i
                                                        class="fa fa-unlock-alt"></i></span>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password"
                                                    placeholder="Passowrd">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-content end -->

    </div>
@endsection

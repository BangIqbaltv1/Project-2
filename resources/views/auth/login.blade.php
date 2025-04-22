@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/tech-background.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <div class="row justify-content-center align-items-center min-vh-100 m-0">
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 rounded-4" style="background: #0275d8; box-shadow: 0 0 30px rgba(0,255,255,0.2);">
                <div class="card-body p-4 text-white">
                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <div class="rounded-circle mx-auto" style="background: #006040; width: 200px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <h2 class="mb-0" style="font-family: 'Orbitron', sans-serif; color: #00ffff; text-shadow: 0 0 5px #00ffff;">
                                <i class="fas fa-microchip me-2"></i>iTECH
                                <span style="font-size: 0.5em; display: block; text-transform: uppercase;">EDUCATION</span>
                            </h2>
                        </div>
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Alamat E-mail anda">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password Anda">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Sign Up Link -->
                        <div class="mb-3 text-white">
                            Tidak punya akun? <a href="{{ route('register') }}" class="text-warning fw-bold text-decoration-none">Sign Up</a> dulu
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-success" style="background-color: #4CD964; border: none;">
                                Submit
                            </button>
                        </div>
                        
                        <!-- Google Login Button -->
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-light d-flex align-items-center justify-content-center gap-2" style="background-color: #fff; color: #333;">
                                <img src="{{ asset('images/google.webp') }}" alt="Google" style="height: 24px;">
                                Lanjutkan dengan Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

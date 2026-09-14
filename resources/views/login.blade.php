@extends('layouts.master')

@section('title', 'Orbit - Secure Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px; border-radius: 15px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold sitename" style="color: #106eea;">Orbit Log In</h2>
            <p class="text-muted">Akses Terbatas - Silahkan Masuk</p>
        </div>

        <!-- Memunculkan Notifikasi Peringatan Salah Password -->
        @if(session('gagal'))
            <div class="alert alert-danger text-center p-2 small" style="border-radius: 8px;">
                {{ session('gagal') }}
            </div>
        @endif

        <!-- Form Mengarah ke Route Proses POST -->
        <form action="{{ route('login.proses') }}" method="POST">
            @csrf <!-- Token wajib Laravel untuk mencegah peretasan CSRF -->
            
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <!-- Tambahkan atribut name="email" -->
                <input type="email" name="email" class="form-control" placeholder="admin@orbit.com" required autocomplete="off">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Password</label>
                <!-- Tambahkan atribut name="password" -->
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            
            <!-- Tombol Submit Form Nyata -->
            <button type="submit" class="btn w-100 mt-2 text-white fw-medium" style="background-color: #106eea; border-radius: 30px; padding: 10px; border: none;">
                Sign In
            </button>
        </form>
    </div>
</div>
@endsection

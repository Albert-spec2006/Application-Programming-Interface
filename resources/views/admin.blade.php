@extends('layouts.master')

@section('title', 'Orbit - Admin Dashboard')

@section('content')
<div class="d-flex">
    <!-- Sidebar Ringkas -->
    <div class="bg-dark text-white p-3" style="min-height: 100vh; width: 240px;">
        <h3 class="fw-bold px-2 text-info">Orbit Admin</h3>
        <hr>
        <ul class="nav flex-column gap-2">
            <li class="nav-item"><a href="#" class="nav-link text-white active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-folder me-2"></i> Projects</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white"><i class="bi bi-people me-2"></i> Team Experts</a></li>
            <hr>
            <li class="nav-item"><a href="{{ route('frontend') }}" class="nav-link text-danger"><i class="bi bi-box-arrow-left me-2"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Konten Utama Dashboard -->
    <div class="flex-grow-1 p-5 bg-light">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Selamat Datang di Halaman Admin</h2>
            <span class="badge bg-success p-2">Sesi Aktif</span>
        </div>
        
        <!-- Statistik Sederhana Menggunakan Gaya Orbit -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm border-0 bg-primary text-white">
                    <h1>150+</h1>
                    <p class="mb-0">Projects Launched</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm border-0 bg-info text-white">
                    <h1>40+</h1>
                    <p class="mb-0">Team Experts</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm border-0 bg-warning text-white">
                    <h1>98%</h1>
                    <p class="mb-0">Client Satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

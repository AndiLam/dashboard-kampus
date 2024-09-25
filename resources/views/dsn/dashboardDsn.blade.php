@extends('dashLayout.app')

@section('title', 'Dashboard Dosen - STAI Al-Masthuriyah')

@section('sidebar')
    @include('dsn.layouts.sidebarDsn')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-8 text-gray-800">Dashboard Dosen</h1>

<p class="text-lg mb-10">
    Halo!, <span class="text-green-700 font-semibold"><strong> Sopian Alviana, S.Kom., M.Kom</strong></span>
</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Card Jumlah Kelas -->
    <div class="card bg-red-500 rounded-xl shadow-lg p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <div class="flex-grow">
                <h2 class="font-serif text-xl mb-2 text-white">Jumlah Kelas Yang Diajar</h2>
                <p class="text-white text-3xl font-bold">1</p>
            </div>
            <div class="text-white text-5xl">
                <i class="fas fa-school"></i>
            </div>
        </div>
    </div>

    <!-- Card Jumlah Mahasiswa -->
    <div class="card bg-yellow-500 rounded-xl shadow-lg p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <div class="flex-grow">
                <h2 class="font-serif text-xl mb-2 text-white">Jumlah Mahasiswa Yang Diajar</h2>
                <p class="text-white text-3xl font-bold">100</p>
            </div>
            <div class="text-white text-5xl">
                <i class="fas fa-user-graduate"></i>
            </div>
        </div>
    </div>

    <!-- Card Jumlah Mata Kuliah -->
    <div class="card bg-green-500 rounded-xl shadow-lg p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <div class="flex items-center justify-between">
            <div class="flex-grow">
                <h2 class="font-serif text-xl mb-2 text-white">Jumlah Mata Kuliah Yang Diajar</h2>
                <p class="text-white text-3xl font-bold">7</p>
            </div>
            <div class="text-white text-5xl">
                <i class="fas fa-book"></i>
            </div>
        </div>
    </div>
</div>
@endsection

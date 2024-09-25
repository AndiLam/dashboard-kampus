@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
    <div class="flex flex-col items-center justify-center h-screen bg-gradient-to-br from-green-200 via-blue-200 to-purple-200">
        <!-- Construction Icon -->
        <div class="bg-white p-8 rounded-full shadow-lg mb-8">
            <svg xmlns="https://www.w3.org/2000/svg" class="h-24 w-24 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9v2h12V9M6 13v2h12v-2" />
            </svg>
        </div>

        <!-- Title and Message -->
        <h1 class="text-5xl font-bold text-gray-800 mb-4">Perpustakaan</h1>
        <p class="text-xl text-gray-700 mb-2">We’re working hard to bring you something amazing!</p>
        <p class="text-lg text-gray-600">Please check back soon. Our library page will be ready shortly.</p>

        <!-- Progress Bar -->
        <div class="w-full max-w-md mt-6 mb-6">
            <div class="w-full bg-gray-300 rounded-full h-4 overflow-hidden">
                <div class="bg-yellow-500 h-4 rounded-full" style="width: 80%;"></div>
            </div>
        </div>

        <!-- Button -->
        <a href="{{ route('dashboard') }}" class="mt-6 px-8 py-3 bg-green-700 text-white font-bold rounded-lg hover:bg-green-900 transition duration-300 ease-in-out transform hover:scale-105">
            Go Back
        </a>        
    </div>
@endsection

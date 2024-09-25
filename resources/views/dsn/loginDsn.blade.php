@extends('loginLayout.loginLayout')

@if(session('success'))
<div class="bg-green-400 text-center text-white mb-4">
    {{ session('success') }}
</div>
@endif

@section('content')
<form action="https://dashboard-kuliah-coral.vercel.app/login-dosen" method="post">
    @csrf
        <div class="mb-4">
            <input id="nidn" type="text" name="nidn" placeholder="NIDN" class="block w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-0">
            <input id="password" type="password" name="password" placeholder="Password" class="block w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="flex justify-end mb-6">
            <a href="{{ route('dsnReset') }}" class="text-sm text-blue-700 hover:underline">Lupa Password?</a>
        </div>
        <div class="flex items-center justify-between mb-2">
            <button type="submit" class="w-full bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Login Dosen</button>
        </div>
        <div class="text-center">
            <a href="{{ route('loginMhs') }}" class="inline-block w-full bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-lg hover:bg-custom-blue-dark transition duration-300">Login Sebagai Mahasiswa</a>
        </div>
    </form>
@endsection

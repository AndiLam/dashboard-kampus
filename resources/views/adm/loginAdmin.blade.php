@extends('loginLayout.loginLayout')

@if(session('success'))
<div class="bg-green-400 text-center text-white mb-4">
    {{ session('success') }}
</div>
@endif

@section('content')
<form action="https://dashboard-kuliah-coral.vercel.app/admin/login" method="post">
    @csrf
        <div class="mb-4">
            <input id="username" type="text" name="username" placeholder="Username" class="block w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
        </div>
        <div class="mb-0">
            <input id="password" type="password" name="password" placeholder="Password" class="block w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
        </div>
        <div class="flex justify-end mb-6">
            <a href="{{ route('admReset') }}" class="text-sm text-red-600 hover:underline">Lupa Password?</a>
        </div>
        <div class="flex items-center justify-between mb-2">
            <button type="submit" class="w-full bg-red-800 hover:bg-red-950 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Login Admin</button>
        </div>
    </form>
@endsection

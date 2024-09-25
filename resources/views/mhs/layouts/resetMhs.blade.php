@extends('loginLayout.resetPass')

@section('content')
        <div class="flex justify-start mb-2 ml-1">
            <p class="text-sm text-gray-500">Masukkan NIM Anda</p>
        </div> 

        <div class="mb-4">
            <input id="nim" type="text" name="nim" placeholder="NIM" class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
        </div>     

        <div class="flex items-center justify-between mb-6">
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                Reset Password
            </button>
        </div>
    </form>

@endsection

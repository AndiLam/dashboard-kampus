@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Nilai Mahasiswa</h1>

<!-- Filter -->
<div class="flex items-end space-x-4 mb-4">
    <div class="flex flex-col space-y-1">
        <label for="semester" class="text-sm font-medium">Pilih Semester</label>
        <select id="semester" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>1</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="ruangan" class="text-sm font-medium">Pilih Kelas</label>
        <select id="ruangan" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>PAI-A</option>
        </select>
    </div>
    <div class="flex self-end">
        <button class="bg-green-700 text-white hover:bg-green-900 px-4 py-2 rounded-md">Tampilkan</button>
    </div>
</div>
<h2 class="text-lg mb-5">List Mahasiswa</h2>
<table class="min-w-full">
    <thead>
        <tr class="bg-green-800 text-white">
            <th class="p-3 w-96 text-left">Semester</th>
            <th class="p-3 w-auto text-left">Program Studi</th>
            <th class="p-3 w-auto text-left">Kelas</th>
        </tr>
    </thead>
    <tbody>
        <tr class="hover:bg-green-100 hover:shadow-lg transition-shadow cursor-pointer border-b-2">
            <td class="p-3">Semester 1</td>
            <td class="p-3">Pendidikan Agama Islam</td>
            <td class="p-3">PAI-A</td>
        </tr>
        <tr class="hover:bg-green-100 hover:shadow-lg transition-shadow cursor-pointer border-b-2">
            <td class="p-3">Semester 1</td>
            <td class="p-3">Hukum Ekonomi Syariah</td>
            <td class="p-3">HES-A</td>
        </tr>
        <tr class="hover:bg-green-100 hover:shadow-lg transition-shadow cursor-pointer border-b-2">
            <td class="p-3">Semester 1</td>
            <td class="p-3">Komunikasi & Penyiaran Islam</td>
            <td class="p-3">KPI-A</td>
        </tr>
    </tbody>
</table>

@endsection
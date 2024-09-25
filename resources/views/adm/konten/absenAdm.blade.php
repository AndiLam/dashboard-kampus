@extends('dashLayout.app')
@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')
@section('sidebar')
    @include('adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Absensi Mahasiswa</h1>

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
            <option value="PAI-A">PAI-A</option>
            <option value="HES-A">HES-A</option>
            <option value="KPI-A">KPI-A</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="prodi" class="text-sm font-medium">Pilih Mata Kuliah</label>
        <select id="prodi" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>Ilmu Pendidikan Islam</option>
            <option>Pendidikan Kewarganegaraan</option>
            <option>Bahasa Arab</option>
            <option>Bahasa Indonesia</option>
            <option>Fiqih</option>
            <option>Sosiologi Pendidikan</option>
            <option>Baca Tulis Qur’an</option>
        </select>
    </div>
</div>

<h2 class="text-lg mb-5">List Mahasiswa</h2>
<table class="min-w-full border-collapse border border-green-800">
    <thead>
        <tr class="bg-green-800 text-white">
            <th class="p-3 text-left">Semester</th>
            <th class="p-3 text-left">Program Studi</th>
            <th class="p-3 text-left">Kelas</th>
            <th class="p-3 text-left">Dosen Pengampu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($semesters as $semester)
            @foreach ($semester['classes'] as $class)
                <tr class="hover:bg-green-100 hover:shadow-lg transition-shadow cursor-pointer border-b-2"
                    data-semester="{{ $semester['name'] }}"
                    data-kelas="{{ $class['name'] }}"
                    data-prodi="{{ $class['programStudy'] }}"
                    onclick="redirectToAbsen(this)">
                    <td class="p-3">{{ $semester['name'] }}</td>
                    <td class="p-3">{{ $class['programStudy'] }}</td>
                    <td class="p-3">{{ $class['name'] }}</td>
                    <td class="p-3">{{ $class['dosen'] }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
@endsection

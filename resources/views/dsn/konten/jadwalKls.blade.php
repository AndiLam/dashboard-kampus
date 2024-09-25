@extends('dashLayout.app')

@section('title', 'Dashboard Dosen - STAI Al-Masthuriyah')

@section('sidebar')
    @include('dsn.layouts.sidebarDsn')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Jadwal Mengajar</h1>

<!-- Filter -->
<div class="flex items-end space-x-4 mb-4">
    <div class="flex flex-col space-y-1">
        <label for="semester" class="text-sm font-medium">Pilih Semester</label>
        <select id="semester" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>1</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="ruangan" class="text-sm font-medium">Pilih Ruangan</label>
        <select id="ruangan" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>PAI-1</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="prodi" class="text-sm font-medium">Pilih Prodi/Jurusan</label>
        <select id="prodi" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>Pendidikan Agama Islam</option>
            <option>Hukum Ekonomi Syariah</option>
            <option>Komunikasi & Penyiaran Islam</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="mataKuliah" class="text-sm font-medium">Pilih Mata Kuliah</label>
        <select id="mataKuliah" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>Ilmu Pendidikan Islam</option>
            <option>Pendidikan Kewarganegaraan</option>
            <option>Bahasa Arab</option>
            <option>Bahasa Indonesia</option>
            <option>Fiqih</option>
            <option>Sosiologi Pendidikan</option>
            <option>Baca Tulis Qur’an</option>
        </select>
    </div>
    <div class="flex self-end">
        <button class="bg-green-700 text-white hover:bg-green-900 px-4 py-2 rounded-md">Tampilkan</button>
    </div>
</div>
<table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm"> 
    <thead>
        <tr class="bg-green-800 text-white">
            <th class="p-3 border">No</th>
            <th class="p-3 border">Kode Mata Kuliah</th>
            <th class="p-3 border">Mata Kuliah</th>
            <th class="p-3 border">SKS</th>
            <th class="p-3 border">Program Studi</th>
            <th class="p-3 border">Waktu</th>
            <th class="p-3 border">Ruangan</th>
            <th class="p-3 border">Kelas</th>
            <th class="p-3 border">Jumlah Mahasiswa</th>
        </tr>
    </thead>
    <tbody class="bg-white"> <!-- Buat biar jadwal mengikuti kelas -->
        <tr>
            <td class="p-3 border text-center">1</td>
            <td class="p-3 border text-center">00001</td>
            <td class="p-3 border">Ilmu Pendidikan Islam</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Jumat, 13:40-16:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
        <tr>
            <td class="p-3 border text-center">2</td>
            <td class="p-3 border text-center">00002</td>
            <td class="p-3 border">Pendidikan Kewarganegaraan</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Jumat, 13:40-16:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
        <tr>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border text-center">00003</td>
            <td class="p-3 border">Bahasa Arab</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Senin, 13:40-16:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
        <tr>
            <td class="p-3 border text-center">4</td>
            <td class="p-3 border text-center">00004</td>
            <td class="p-3 border">Bahasa Indonesia</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Senin, 07:40-10:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
        <tr>
            <td class="p-3 border text-center">5</td>
            <td class="p-3 border text-center">00005</td>
            <td class="p-3 border">Fiqih</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Selasa, 07:40-10:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
        <tr>
            <td class="p-3 border text-center">6</td>
            <td class="p-3 border text-center">00006</td>
            <td class="p-3 border">Sosiologi Pendidikan</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Rabu, 07:40-10:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
        <tr>
            <td class="p-3 border text-center">7</td>
            <td class="p-3 border text-center">00007</td>
            <td class="p-3 border">Baca Tulis Qur’an</td>
            <td class="p-3 border text-center">3</td>
            <td class="p-3 border">Pendidikan Islam Islam</td>
            <td class="p-3 border text-center">Rabu, 13:40-16:10</td>
            <td class="p-3 border text-center">PAI-1</td>
            <td class="p-3 border text-center">PAI-A/S1/I</td>
            <td class="p-3 border text-center">35</td>
        </tr>
    </tbody>
</table>
@endsection
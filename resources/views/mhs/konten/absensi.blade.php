@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
<h1 class="text-4xl mb-6">Kehadiran Mahasiswa di Perkuliahan</h1>

<!-- Filter dan Ganti Semester -->
<div class="flex items-center space-x-4 mb-4">
    <div class="flex items-center space-x-2">
        <label for="semester" class="text-sm font-medium">Semester</label>
        <select id="semester" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option>2024/2025 - Ganjil</option>
        </select>
    </div>
    <button class="bg-green-500 text-white hover:bg-green-900 px-4 py-2 rounded-md">Ganti Semester</button>
</div>


<!-- Keterangan -->
<span class="inline-block text-gray-600 mr-4">Keterangan:</span>
<div class="flex space-x-4 items-center">
    <span class="border border-black w-5 h-5 flex"></span>:
    <span>Belum tercatat</span>

    <span class="border border-black bg-white w-5 h-5 flex items-center justify-center">
        <i class="fas fa-check"></i>
    </span>:
    <span>Hadir</span>

    <span class="border border-black bg-yellow-300 w-5 h-5 flex items-center justify-center">
        <i class="fas fa-bed fa-xs"></i>
    </span>:
    <span>Sakit</span>

    <span class="border border-black bg-blue-500 w-5 h-5 flex items-center justify-center">
        <i class="fas fa-plane fa-xs"></i>
    </span>:
    <span>Ijin</span>

    <span class="border border-black bg-red-500 w-5 h-5 flex items-center justify-center">
        <i class="fas fa-times"></i>
    </span>:
    <span>Tanpa Keterangan</span>
</div>


<!-- Tabel Kehadiran Mahasiswa -->
<table class="min-w-full border-collapse border border-gray-400 text-sm">
    <thead class="bg-green-800 text-white">
        <tr>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">No</th>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">Kode & Nama Mata Kuliah</th>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">Waktu</th>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">Ruangan</th>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">Kelas</th>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">Dosen</th>
            <th colspan="16" class="px-4 py-2 text-center border border-gray-400">Minggu Perkuliahan</th>
            <th rowspan="2" class="px-4 py-2 text-center border border-gray-400">Total (%)</th>
        </tr>
        <tr>
            <!-- Loop untuk minggu perkuliahan -->
            @for ($i = 1; $i <= 16; $i++)
                <th class="px-2 py-1 text-center border border-gray-400">{{ $i }}</th>
            @endfor
        </tr>
    </thead>
    <!-- data kehadiran -->
    <tbody class="bg-white">
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">1</td>
            <td class="border border-gray-400 px-4 py-2">00001 - Ilmu Pendidikan Islam	 (3 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Jumat, 07:40-10:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">PAI-A/S1/I</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">2</td>
            <td class="border border-gray-400 px-4 py-2">00002 - Pendidikan Kewarganegaraan (3 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Jumat, 13:40-16:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">PAI-A/S1/I</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">3</td>
            <td class="border border-gray-400 px-4 py-2">00003 - Bahasa Arab (3 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Senin, 13:40-16:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">PAI-A/S1/I</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">4</td>
            <td class="border border-gray-400 px-4 py-2">00004 - Bahasa Indonesia (3 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Senin, 07:40-10:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">PAI-A/S1/VII</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">5</td>
            <td class="border border-gray-400 px-4 py-2">00005 - Fiqih (3 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Jumat, 07:40-10:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">PAI-A/S1/VII</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">6</td>
            <td class="border border-gray-400 px-4 py-2">00006 - Sosiologi Pendidikan (3 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Rabu, 07:40-10:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">IF-8/S1/VII</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
        <tr>
            <td class="border border-gray-400 px-4 py-2 text-center">7</td>
            <td class="border border-gray-400 px-4 py-2">00007 - Baca Tulis Qur’an (2 SKS)</td>
            <td class="border border-gray-400 px-4 py-2">Rabu, 13:40-16:10</td>
            <td class="border border-gray-400 px-4 py-2">PAI-1</td>
            <td class="border border-gray-400 px-4 py-2">PAI-A/S1/VII</td>
            <td class="border border-gray-400 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
            @for ($i = 1; $i <= 16; $i++)
                <td class="border border-gray-400 px-2 py-1 text-center"><i class="fas fa-check"></i></td>
            @endfor
            <td class="border border-gray-400 px-4 py-2 text-center">16 (100%)</td>
        </tr>
    </tbody>
</table>
@endsection

@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
    <h1 class="text-4xl mb-6">Jadwal Kuliah Mahasiswa</h1>
    <p class="mb-2">Semester: 20241 (2024/2025 Ganjil)</p>
    <!-- table jadwal -->
    <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm"> 
        <thead>
            <tr class="bg-green-800 text-white">
                <th class="p-3 border">No</th>
                <th class="p-3 border">Kode Mata Kuliah</th>
                <th class="p-3 border">Mata Kuliah</th>
                <th class="p-3 border">Waktu</th>
                <th class="p-3 border">Ruangan</th>
                <th class="p-3 border">Kelas</th>
                <th class="p-3 border">Dosen</th>
            </tr>
        </thead>
        <tbody class="bg-white"> <!-- Buat biar jadwal mengikuti kelas -->
            <tr>
                <td class="p-3 border text-center">1</td>
                <td class="p-3 border text-center">00001</td>
                <td class="p-3 border">Ilmu Pendidikan Islam	</td>
                <td class="p-3 border text-center">Jumat, 13:40-16:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">2</td>
                <td class="p-3 border text-center">00002</td>
                <td class="p-3 border">Pendidikan Kewarganegaraan</td>
                <td class="p-3 border text-center">Jumat, 13:40-16:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">00003</td>
                <td class="p-3 border">Bahasa Arab</td>
                <td class="p-3 border text-center">Senin, 13:40-16:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">4</td>
                <td class="p-3 border text-center">00004</td>
                <td class="p-3 border">Bahasa Indonesia</td>
                <td class="p-3 border text-center">Senin, 07:40-10:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">5</td>
                <td class="p-3 border text-center">00005</td>
                <td class="p-3 border">Fiqih</td>
                <td class="p-3 border text-center">Selasa, 07:40-10:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">6</td>
                <td class="p-3 border text-center">00006</td>
                <td class="p-3 border">Sosiologi Pendidikan</td>
                <td class="p-3 border text-center">Rabu, 07:40-10:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">7</td>
                <td class="p-3 border text-center">00007</td>
                <td class="p-3 border">Baca Tulis Qur’an</td>
                <td class="p-3 border text-center">Rabu, 13:40-16:10</td>
                <td class="p-3 border text-center">PAI-1</td>
                <td class="p-3 border text-center">PAI-A/S1/I</td>
                <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
            </tr>
        </tbody>
    </table>
@endsection
@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Absensi Mahasiswa untuk Kelas {{ $kelas }}</h1>
<!-- Tampilkan detail absensi sesuai kelas -->
<h2 class="text-lg mb-5">Daftar Mahasiswa Kelas {{ $kelas }}</h2>
<div class="flex items-end space-x-4 mb-4">
    <div class="flex flex-col space-y-1">
        <label for="mataKuliah" class="text-sm font-medium">Pilih Pertemuan</label>
        <select id="mataKuliah" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>Pertemuan 1</option>
            <option>Pertemuan 2</option>
            <option>Pertemuan 3</option>
            <option>Pertemuan 4</option>
            <option>Pertemuan 5</option>
            <option>Pertemuan 6</option>
            <option>Pertemuan 7</option>
            <option>Pertemuan 8</option>
            <option>Pertemuan 9</option>
            <option>Pertemuan 10</option>
            <option>Pertemuan 11</option>
            <option>Pertemuan 12</option>
            <option>Pertemuan 13</option>
            <option>Pertemuan 14</option>
            <option>Pertemuan 15</option>
            <option>Pertemuan 16</option>
        </select>
    </div>
    <div class="flex self-end">
        <button class="bg-green-700 text-white hover:bg-green-900 px-4 py-2 rounded-md">Tampilkan</button>
    </div>
</div>
<h2 class="text-lg mb-5">List Mahasiswa</h2>
<table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm"> 
    <thead>
        <tr class="bg-green-800 text-white">
            <th class="p-3 border">No</th>
            <th class="p-3 border">NIM</th>
            <th class="p-3 border">Nama</th>
            <th class="p-3 border">Semester</th>
            <th class="p-3 border">Kehadiran</th>
        </tr>
    </thead>
    <tbody> <!-- Buat biar jadwal mengikuti kelas -->
        <tr>
            <td class="p-3 border text-center">1</td>
            <td class="p-3 border text-center">112233</td>
            <td class="p-3 border">Andi Muhamad Nur Ilhami</td>
            <td class="p-3 border text-center">1</td>
            <td class="p-3 border text-center">
            <select id="kehadiran" class="pl-2 pr-10 py-1 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                <option value="1">Hadir</option>
                <option value="2">Sakit</option>
                <option value="3">Izin</option>
                <option value="4">Tanpa Keterangan</option>
            </select>
            </td>
        </tr>
    </tbody>
</table>
@endsection
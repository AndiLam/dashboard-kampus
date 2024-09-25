@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
    <h1 class="text-4xl mb-5">Dashboard Mahasiswa</h1>
        <p class="mb-2">Semester: 20241 (2024/2025 Ganjil)</p>
    <div class="card-container flex gap-5 flex-wrap">
        <div class="card bg-white rounded-lg shadow-md p-4 flex-1 transform transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-calendar-alt text-3xl text-konten-green mb-3"></i>
            <h2 class="font-serif text-2xl mb-2 text-gray-800">Pengisian Rencana Studi</h2>
            <p class="text-gray-600">19-08-2024 S.D 26-09-2024</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 flex-1 transform transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-thumbs-up text-3xl text-konten-green mb-3"></i>
            <h2 class="font-serif text-2xl mb-2 text-gray-800">Persetujuan Rencana Studi</h2>
            <p class="text-gray-600">19-08-2024 S.D 27-09-2024</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 flex-1 transform transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-users text-3xl text-konten-green mb-3"></i>
            <h2 class="font-serif text-2xl mb-2 text-gray-800">Pemilihan Kelas</h2>
            <p class="text-gray-600">19-08-2024 S.D 28-09-2024</p>
        </div>
    </div>
    <section class="content mt-5">
        <h3 class="text-2xl mb-4">Informasi Tagihan Biaya Kuliah</h3>
        <p>Pembayaran Biaya Kuliah bisa melalui transfer ke Bank BNI <strong>(11223344)</strong> atau tunai ke bagian keuangan</p>
        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th style="width: 20%" class="p-3 border">Histori Pembayaran</th>
                    <th style="width: 20%" class="p-3 border">Biaya Kuliah</th>
                    <th style="width: 30%" class="p-3 border">Metode Pembayaran</th>
                    <th style="width: 30%" class="p-3 border">Keterangan</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr>
                    <td style="width: 20%" class="p-3 border">Januari 2024</td>
                    <td style="width: 20%" class="p-3 border">Rp300.000</td>
                    <td style="width: 30%" class="p-3 border">Tunai</td>
                    <td style="width: 30%" class="p-3 border">Sudah Lunas</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="content mt-5">
        <h3 class="text-2xl mb-4">Indeks Prestasi</h2>
            <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                <thead class="bg-green-800 text-white">
                    <tr>
                        <th rowspan="2" style="width: 7%" class="border border-gray-300 p-2">SEMESTER</th>
                        <th rowspan="2" style="width: 5%" class="border border-gray-300 p-2">JUMLAH SKS</th>
                        <th rowspan="2" style="width: 5%" class="border border-gray-300 p-2">JUMLAH MATAKULIAH</th>
                        <th rowspan="2" style="width: 10%" class="border border-gray-300 p-2">INDEX PRESTASI<br>SEMESTER (IPS)</th>
                        <th colspan="6" style="width: 10%" class="border border-gray-300 p-2 text-center">JUMLAH NILAI<br>MATAKULIAH</th>
                    </tr>
                    <tr>
                        <th style="width: 7%" class="border border-gray-300 p-2">A</th>
                        <th style="width: 7%" class="border border-gray-300 p-2">B</th>
                        <th style="width: 7%" class="border border-gray-300 p-2">C</th>
                        <th style="width: 7%" class="border border-gray-300 p-2">D</th>
                        <th style="width: 7%" class="border border-gray-300 p-2">E</th>
                        <th style="width: 7%" class="border border-gray-300 p-2">T</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="border border-gray-300 p-2" style="width: 7%">20241</td>
                        <td class="border border-gray-300 p-2" style="width: 5%">20</td>
                        <td class="border border-gray-300 p-2" style="width: 5%">7</td>
                        <td class="border border-gray-300 p-2" style="width: 10%">4.00</td>
                        <td class="border border-gray-300 p-2" style="width: 7%">7</td>
                        <td class="border border-gray-300 p-2" style="width: 7%">0</td>
                        <td class="border border-gray-300 p-2" style="width: 7%">0</td>
                        <td class="border border-gray-300 p-2" style="width: 7%">0</td>
                        <td class="border border-gray-300 p-2" style="width: 7%">0</td>
                        <td class="border border-gray-300 p-2" style="width: 7%">0</td>
                    </tr>
                    <!-- semester lainnya -->
                </tbody>
            </table>                                    
    </section>
@endsection

@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
    <h1 class="text-4xl mb-6">Kartu Rencana Studi / Kartu Ujian</h1>
    
    <!-- History KRS -->
    <div class="content mt-5">
        <h2 class="text-2xl mb-4">History Kartu Rencana Studi</h2>
        <ul class="border p-4 rounded-t-lg bg-gray-100">
            <li><a href="#" class="text-blue-600 hover:underline">History KRS 20241</a></li>
        </ul>
    </div>

    <!-- Kartu Rencana Studi -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">Kartu Rencana Studi: 20241</h2>
        <div class="border p-4 rounded-b-lg bg-gray-50">
            <div class="flex justify-between items-center mb-6 border-b pb-2">
                <div class=" ml-5 flex items-center">
                    <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/STAI.png') }}" alt="STAI Almast" class="h-20 mr-4">
                </div>
                <div>
                    <h1 class="text-xl font-bold">SEKOLAH TINGGI AGAMA ISLAM</h1>
                    <h1 class=" text-center text-xl font-bold">AL- MASTHURIYAH</h1>
                </div>
                <div class=" text-right mr-5">
                    <h2 class="text-lg font-bold mb-5">KARTU RENCANA STUDI</h2>
                    <p class="text-sm italic">Untuk Mahasiswa</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-x-10 mb-4">
                <div>
                    <div class="flex items-center mb-2">
                        <p class=" w-28 font-bold">NIM</p>
                        <p class=" pr-2 font-bold">:</p>
                        <p>10121304</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <p class="w-28 font-bold">Nama</p>
                        <p class=" pr-2 font-bold">:</p>
                        <p>Andi Muhamad Nur Ilhami</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <p class="w-28 font-bold">Dosen Wali</p>
                        <p class=" pr-2 font-bold">:</p>
                        <p>Sopian Alviana, S.Kom., M.Kom</p>
                    </div>
                </div>
                <div>
                    <div class="flex items-center mb-2">
                        <p class="w-28 font-bold">Semester</p>
                        <p class=" pr-2 font-bold">:</p>
                        <p>Ganjil 2024/2025</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <p class="w-28 font-bold">Fakultas</p>
                        <p class=" pr-2 font-bold">:</p>
                        <p>-</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <p class="w-28 font-bold">Jurusan</p>
                        <p class=" pr-2 font-bold">:</p>
                        <p>Pendidikan Agama Islam</p>
                    </div>
                </div>
            </div>      

            <!-- Tabel Mata Kuliah -->
            <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                <thead>
                    <tr class="bg-green-800 text-white">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Kode Mata Kuliah</th>
                        <th class="p-3 border">Nama Mata Kuliah</th>
                        <th class="p-3 border">SKS</th>
                        <th class="p-3 border">Ruangan</th>
                        <th class="p-3 border">Hari</th>
                        <th class="p-3 border">Jam</th>
                        <th class="p-3 border">Dosen</th>
                    </tr>
                </thead>
                <tbody class="bg-white"> <!-- Buat biar mengikuti kelas -->
                    <tr>
                        <td class="p-3 border text-center">1</td>
                        <td class="p-3 border text-center">00001</td>
                        <td class="p-3 border">Ilmu Pendidikan Islam	</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Jumat</td>
                        <td class="p-3 border text-center">07:40-10:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">2</td>
                        <td class="p-3 border text-center">00002</td>
                        <td class="p-3 border">Pendidikan Kewarganegaraan</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Jumat</td>
                        <td class="p-3 border text-center">13:40-16:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">00003</td>
                        <td class="p-3 border">Bahasa Arab</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Senin</td>
                        <td class="p-3 border text-center">13:40-16:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">4</td>
                        <td class="p-3 border text-center">00004</td>
                        <td class="p-3 border">Bahasa Indonesia</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Senin</td>
                        <td class="p-3 border text-center">07:40-10:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">5</td>
                        <td class="p-3 border text-center">00005</td>
                        <td class="p-3 border">Fiqih</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Selasa</td>
                        <td class="p-3 border text-center">07:40-10:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">6</td>
                        <td class="p-3 border text-center">00006</td>
                        <td class="p-3 border">Sosiologi Pendidikan</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Rabu</td>
                        <td class="p-3 border text-center">07:40-10:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">7</td>
                        <td class="p-3 border text-center">00007</td>
                        <td class="p-3 border">Baca Tulis Qur’an</td>
                        <td class="p-3 border text-center">2</td>
                        <td class="p-3 border text-center">PAI-1</td>
                        <td class="p-3 border text-center">Rabu</td>
                        <td class="p-3 border text-center">13:40-16:10</td>
                        <td class="p-3 border">Sopian Alviana, S.Kom., M.Kom</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex justify-end mt-4 gap-4">
        <a href="#" class="bg-green-500 text-white hover:bg-green-950 px-4 py-2 rounded-md">
            Download Kartu Rencana Studi
        </a>
        <a href="#" class="bg-green-500 text-white hover:bg-green-950 px-4 py-2 rounded-md">
            Download Kartu Ujian
        </a>
    </div>
@endsection

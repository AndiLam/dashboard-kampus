@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
<h1 class="text-4xl mb-6">Laporan Status Aktif Mahasiswa</h1>
    <!-- Kartu Hasil Studi -->
    <div class="content mt-5">
        <div class="border p-4 rounded-md bg-gray-50">
            <div class="flex justify-between items-center mb-6 border-b pb-2">
                <div class=" ml-5 flex items-center">
                    <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/STAI.png') }}" alt="STAI Almast" class="h-20 mr-4">
                </div>
                <div>
                    <h1 class="text-xl font-bold">SEKOLAH TINGGI AGAMA ISLAM</h1>
                    <h1 class=" text-center text-xl font-bold">AL- MASTHURIYAH</h1>
                </div>
                <div class=" text-right mr-5">
                    <h2 class="text-lg font-bold mb-5">STATUS AKTIF MAHASISWA</h2>
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
            <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                <thead>
                    <tr class="bg-green-800 text-white">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Tahun Akademik</th>
                        <th class="p-3 border">Kelas</th>
                        <th class="p-3 border">Semester</th>
                        <th class="p-3 border">Status</th>
                        <th class="p-3 border">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="bg-white"> <!-- Buat biar mengikuti kelas -->
                    <tr>
                        <td class="p-3 border text-center">1</td>
                        <td class="p-3 border text-center">2024/2025</td>
                        <td class="p-3 border text-center">PAI-A</td>
                        <td class="p-3 border text-center">Ganjil</td>
                        <td class="p-3 border text-center">A</td>
                        <td class="p-3 border text-center">-</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                    </tr>
                    <!-- data status lainnya -->
                </tbody>
            </table>   
            <div class="flex justify-end mt-4">
                <button class="bg-green-500 text-white hover:bg-green-900 py-2 px-4 rounded-md mt-4 flex items-center">
                    <i class="fas fa-save mr-2"></i> Download PDF
                </button>
            </div>  
@endsection
@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
<h1 class="text-4xl mb-6">Kartu Hasil Studi</h1>

    <!-- History KHS -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">History Kartu Hasil Studi</h2>
        <ul class="border p-4 rounded-t-lg bg-gray-100">
            <li><a href="#" class="text-blue-600 hover:underline">Tahun 2024/2025 A - Semester Ganjil</a></li>
        </ul>
    </div>

    <!-- Kartu Hasil Studi -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">Kartu Hasil Studi: 20241</h2>
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
                    <h2 class="text-lg font-bold mb-5">KARTU HASIL STUDI</h2>
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
                <thead class=" border border-black">
                    <tr class="bg-green-800 text-white">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Kode Mata Kuliah</th>
                        <th class="p-3 border">Nama Mata Kuliah</th>
                        <th class="p-3 border">SKS</th>
                        <th class="p-3 border">Nilai</th>
                        <th class="p-3 border">SKS X Nilai</th>
                        <th class="p-3 border">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="bg-white"> <!-- buat biar otomatis -->
                    <tr>
                        <td class="p-3 border text-center">1</td>
                        <td class="p-3 border text-center">00001</td>
                        <td class="p-3 border">Ilmu Pendidikan Islam</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">12.00</td>
                        <td class="p-3 border text-center">A</td>
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">2</td>
                        <td class="p-3 border text-center">00002</td>
                        <td class="p-3 border">Pendidikan Kewarganegaraan</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">12.00</td>
                        <td class="p-3 border text-center">A</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">00003</td>
                        <td class="p-3 border">Bahasa Arab</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">12.00</td>
                        <td class="p-3 border text-center">A</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">4</td>
                        <td class="p-3 border text-center">00004</td>
                        <td class="p-3 border">Bahasa Indonesia</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">12.00</td>
                        <td class="p-3 border text-center">A</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">5</td>
                        <td class="p-3 border text-center">00005</td>
                        <td class="p-3 border">Fiqih</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">12.00</td>
                        <td class="p-3 border text-center">A</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">6</td>
                        <td class="p-3 border text-center">00006</td>
                        <td class="p-3 border">Sosiologi Pendidikan</td>
                        <td class="p-3 border text-center">3</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">12.00</td>
                        <td class="p-3 border text-center">A</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">7</td>
                        <td class="p-3 border text-center">00007</td>
                        <td class="p-3 border">Baca Tulis Qur’an</td>
                        <td class="p-3 border text-center">2</td>
                        <td class="p-3 border text-center">4.00</td>
                        <td class="p-3 border text-center">8.00</td>
                        <td class="p-3 border text-center">A</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>                    
                    </tr>
                    <tr>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border text-center">&nbsp;</td>
                        <td class="p-3 border">&nbsp;</td>
                        <td class="p-3 border text-center">20</td>
                        <td class="p-3 border text-center">25</td>
                        <td class="p-3 border text-center">80</td>
                        <td class="p-3 border text-center">&nbsp;</td>                    
                    </tr>
                </tbody>
            </table>

            <!-- Summary SKS and Kaprodi Section -->
            <div class="flex justify-between mt-6">
                <!-- SKS Table - 60% width -->
                <div class="w-3/5">
                    <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                        <thead>
                            <tr class="bg-green-800 text-white">
                                <th class="p-3 border">Uraian</th>
                                <th class="p-3 border">SKS Diikuti</th>
                                <th class="p-3 border">SKS Lulus</th>
                                <th class="p-3 border">Indeks Prestasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-3 border text-center">Semester Ini</td>
                                <td class="p-3 border text-center">20</td>
                                <td class="p-3 border text-center">20</td>
                                <td class="p-3 border text-center">4.00</td>
                            </tr>
                            <!-- tr untuk semester sebelumnya -->
                        </tbody>
                    </table>

                    <div class="mt-3">
                        <p><strong>Indeks Prestasi Kumulatif:</strong> 4.00</p>
                        <p><strong>Total SKS diambil:</strong> 20</p>
                    </div>
                </div>

                <!-- Kaprodi -->
                <div class="w-2/5 text-center">
                    <p>Sukabumi, 12-09-2024</p>
                    <p><strong>Ketua Program Studi</strong></p>
                    <br><br>
                    <p><strong>M. Nasir M.Ag.</strong></p>
                    <p>NIP: -</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end mt-4">
        <a href="#" class="bg-green-500 text-white hover:bg-green-900 px-4 py-2 rounded-t-lg">
            Download Kartu Hasil Studi
        </a>
    </div>
@endsection

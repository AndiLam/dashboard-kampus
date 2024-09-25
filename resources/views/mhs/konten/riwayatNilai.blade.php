@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
<h1 class="text-4xl mb-6">Riwayat Nilai</h1>

<div class="content mt-5 mb-5">
    <ul class="border p-4 rounded-md bg-gray-100">
        <h3 class="text-black"><i class="fas fa-user mr-2"></i>10121304 - Andi Muhamad Nur Ilhami</h3>
    </ul>
</div>


<div class="flex justify-start mb-4">
    <button id="btnSwitch1" class="border border-gray-600 tab-btn bg-green-700 text-white mr-1 py-2 px-4 rounded-l">
        Per Semester
    </button>
    <button id="btnSwitch2" class="border border-gray-600 tab-btn bg-white text-black hover:bg-gray-200 py-2 px-4 rounded-r">
        Transkrip
    </button>
</div>

<!-- Per Semester Section -->
<div id="switch1" class="content">
    <!-- Semester 2021/2022 Ganjil -->
    <h3 class="text-xl mb-2">Semester : 2024/2025 Ganjil</h3>
    <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm mb-5">
        <thead class="bg-green-800 text-white">
            <tr>
                <th class="p-3 border">Kode Mata Kuliah</th>
                <th class="p-3 border">Nama Mata Kuliah</th>
                <th class="p-3 border">SKS</th>
                <th class="p-3 border">Nilai</th>
                <th class="p-3 border">Bobot</th>
                <th class="p-3 border">Sub Total</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td class="p-3 border text-center">00001</td>
                <td class="p-3 border">Ilmu Pendidikan Islam</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00002</td>
                <td class="p-3 border">Pendidikan Kewarganegaraan</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00003</td>
                <td class="p-3 border">Bahasa Arab</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00004</td>
                <td class="p-3 border">Bahasa Indonesia</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00005</td>
                <td class="p-3 border">Fiqih</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00006</td>
                <td class="p-3 border">Sosiologi Pendidikan</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00007</td>
                <td class="p-3 border">Baca Tulis Qur’an</td>
                <td class="p-3 border text-center">2</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">8.00</td>
            </tr>
        </tbody>
        <tfoot class="bg-white">
            <tr>
                <td colspan="2" class="p-3 border text-right font-bold">Total</td>
                <td class="p-3 border text-center">&nbsp;</td>
                <td class="p-3 border text-center">&nbsp;</td>
                <td class="p-3 border text-center">&nbsp;</td>
                <td class="p-3 border text-center">80.00</td>
            </tr>
            <tr>
                <td colspan="5" class="p-3 border text-right font-bold">Indeks Prestasi Semester</td>
                <td class="p-3 border text-center">4.00</td>
            </tr>
        </tfoot>
    </table>

    <!-- tambahkan persemester -->
</div>

<!-- Transkrip -->
<div id="switch2" class="content hidden">
    <h3 class="text-xl mb-2">Transkrip Nilai</h3>
    <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm mb-5">
        <thead class="bg-green-800 text-white">
            <tr>
                <th class="p-3 border">Kode Mata Kuliah</th>
                <th class="p-3 border">Nama Mata Kuliah</th>
                <th class="p-3 border">SKS</th>
                <th class="p-3 border">Nilai</th>
                <th class="p-3 border">Bobot</th>
                <th class="p-3 border">Sub Total</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td class="p-3 border text-center">00001</td>
                <td class="p-3 border">Ilmu Pendidikan Islam</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00002</td>
                <td class="p-3 border">Pendidikan Kewarganegaraan</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00003</td>
                <td class="p-3 border">Bahasa Arab</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00004</td>
                <td class="p-3 border">Bahasa Indonesia</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00005</td>
                <td class="p-3 border">Fiqih</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00006</td>
                <td class="p-3 border">Sosiologi Pendidikan</td>
                <td class="p-3 border text-center">3</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">12.00</td>
            </tr>
            <tr>
                <td class="p-3 border text-center">00007</td>
                <td class="p-3 border">Baca Tulis Qur’an</td>
                <td class="p-3 border text-center">2</td>
                <td class="p-3 border text-center">A</td>
                <td class="p-3 border text-center">4.00</td>
                <td class="p-3 border text-center">8.00</td>
            </tr>            
        </tbody>
        <tfoot class="bg-white">
            <tr>
                <td colspan="2" class="p-3 border text-right font-bold">Jumlah / Total</td>
                <td class="p-3 border text-center">20</td>
                <td class="p-3 border text-center">&nbsp;</td>
                <td class="p-3 border text-center">&nbsp;</td>
                <td class="p-3 border text-center">80.00</td>
            </tr>
            <tr>
                <td colspan="5" class="p-3 border text-right font-bold">Indeks Prestasi Kumulatif</td>
                <td class="p-3 border text-center">4.00</td>
            </tr>
        </tfoot>
    </table>
                <!-- Summary SKS and Kaprodi Section -->
                <div class="flex justify-between mt-6">
                    <!-- SKS Table - 60% width -->
                    <div class="w-3/5">    
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
    
    <div class="flex justify-end mt-4 gap-4">
        <a href="#" class="bg-green-500 text-white hover:bg-green-900 px-4 py-2 rounded-md">
            Download Transkrip
        </a>
    </div>
</div>
@endsection

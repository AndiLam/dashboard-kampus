@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
<h1 class="text-4xl mb-6">Keuangan Mahasiswa</h1>

    <!-- Pembayaran -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">Pembayaran</h3>
        <table class="border-collapse w-full border border-gray-300 dark:border-gray-500 bg-white dark:bg-gray-800 text-sm shadow-md">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">Semester</th>
                    <th class="p-3 border">Bulan</th>
                    <th class="p-3 border">Nominal</th>
                    <th class="p-3 border">Nominal Bayar</th>
                    <th class="p-3 border">Metode Pembayaran</th>
                    <th rowspan="2" class="border border-hidden bg-gray-50"><a href="#" class="bg-green-500 text-white hover:bg-green-900 px-4 py-2 rounded-md">Bayar</a></th>
                </tr>
                <tr class="text-gray-700 bg-gray-50 hover:bg-gray-100 transition-all duration-300">
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">
                        <select id="bulan" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-700 sm:text-sm rounded-md text-gray-600">
                            <option value="" disabled selected hidden>Bulan</option>
                            <option value="januari">Januari</option>
                            <option value="februari">Februari</option>
                            <option value="maret">Maret</option>
                        </select>
                    </td>
                    <td class="p-3 border">Rp.300.000</td>
                    <td class="p-3 border">
                        <input type="number" id="nominal" name="nominal" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-green-700" placeholder="Masukkan Nominal">
                    </td>
                    <td class="p-3 border">
                        <select id="bayar" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-700 sm:text-sm rounded-md text-gray-600">
                            <option value="" disabled selected hidden>Pilih Pembayaran</option>
                            <option value="tunai">Tunai</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    
    <!-- Histori Pembayaran -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">Histori Pembayaran</h2>
        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">Tanggal</th>
                    <th class="p-3 border">Bulan</th>
                    <th class="p-3 border">Nominal</th>
                    <th class="p-3 border">Nominal Bayar</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Keterangan</th>
                    <th class="p-3 border">Catatan</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="text-gray-500">
                    <th class="p-3 border">01-09-2024</th>
                    <th class="p-3 border">September</th>
                    <th class="p-3 border">Rp300.000</th>
                    <th class="p-3 border">Rp300.000</th>
                    <th class="p-3 border">Diterima</th>
                    <th class="p-3 border">Lunas</th>
                    <th class="p-3 border">-</th>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Kartu Hasil Studi -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">Laporan Keuangan</h2>
        <div class="border p-4 rounded-b-lg bg-gray-50">
            <div class="flex justify-between items-center mb-6 border-b pb-2">
                <div class=" ml-5 flex items-center">
                    <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/STAI.png') }}" alt="STAI Almast" class="h-20 mr-4">
                </div>
                <div>
                    <h1 class="text-xl font-bold">SEKOLAH TINGGI AGAMA ISLAM</h1>
                    <h1 class=" text-xl font-bold">AL- MASTHURIYAH</h1>
                </div>
                <div class=" text-right mr-5">
                    <h2 class="text-lg font-bold mb-5">Laporan Keuangan Mahasiswa</h2>
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
            <div class="overflow-x-auto">
                <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                    <thead>
                        <tr class="bg-green-800 text-white">
                            <th rowspan="6" class="p-3"></th>
                            <th rowspan="2" class="p-3 border w-5">#</th>
                            <th rowspan="2" class="p-3 border w-24">Tahun</th>
                            <th rowspan="2" class="p-3 border w-24">Registrasi</th>
                            <th colspan="2" class="p-3 border">September</th>
                            <th colspan="2" class="p-3 border">Oktober</th>
                            <th colspan="2" class="p-3 border">November</th>
                            <th colspan="2" class="p-3 border">Desember</th>
                            <th colspan="2" class="p-3 border">Januari</th>
                            <th colspan="2" class="p-3 border">Februari</th>
                        </tr>
                        <tr class="bg-green-800 text-white">
                            <th class="p-3 border w-20">Tgl</th>
                            <th class="p-3 border w-24">biaya</th>
                            <th class="p-3 border w-20">Tgl</th>
                            <th class="p-3 border w-24">biaya</th>
                            <th class="p-3 border w-20">Tgl</th>
                            <th class="p-3 border w-24">biaya</th>
                            <th class="p-3 border w-20">Tgl</th>
                            <th class="p-3 border w-24">biaya</th>
                            <th class="p-3 border w-20">Tgl</th>
                            <th class="p-3 border w-24">biaya</th>
                            <th class="p-3 border w-20">Tgl</th>
                            <th class="p-3 border w-24">biaya</th>
                        </tr>
                    </thead>  
                    <tbody class="bg-white">
                        <tr>
                            <td class="bg-green-800 border-none"></td>
                            <td class="p-3 border">I</td>
                            <td class="p-3 border">2024/2025</td>
                            <td class="p-3 border">Rp100.000</td>
                            <td class="p-3 border">01/09/2024</td>
                            <td class="p-3 border">Rp300.000</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="bg-green-800 border-none"></td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="bg-green-800 border-none"></td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="bg-green-800 text-white border-none p-0 overflow-hidden relative">
                                <span class="absolute inset-0 flex items-center justify-center -rotate-90">Ganjil</span>
                            </td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="bg-green-800 border-none"></td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="bg-green-800 border-none"></td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="bg-green-800 border-none"></td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                            <td class="p-3 border">&nbsp;</td>
                        </tr>  
                        <thead>
                            <tr class="bg-green-800 text-white">
                                <th rowspan="6" class="p-3"></th>
                                <th rowspan="2" class="p-3 border">#</th>
                                <th rowspan="2" class="p-3 border">Tahun</th>
                                <th rowspan="2" class="p-3 border">Registrasi</th>
                                <th colspan="2" class="p-3 border">Maret</th>
                                <th colspan="2" class="p-3 border">April</th>
                                <th colspan="2" class="p-3 border">Mei</th>
                                <th colspan="2" class="p-3 border">Juni</th>
                                <th colspan="2" class="p-3 border">Juli</th>
                                <th colspan="2" class="p-3 border">Agustus</th>
                            </tr>
                            <tr class="bg-green-800 text-white">
                                <th class="p-3 border">Tgl</th>
                                <th class="p-3 border">biaya</th>
                                <th class="p-3 border">Tgl</th>
                                <th class="p-3 border">biaya</th>
                                <th class="p-3 border">Tgl</th>
                                <th class="p-3 border">biaya</th>
                                <th class="p-3 border">Tgl</th>
                                <th class="p-3 border">biaya</th>
                                <th class="p-3 border">Tgl</th>
                                <th class="p-3 border">biaya</th>
                                <th class="p-3 border">Tgl</th>
                                <th class="p-3 border">biaya</th>
                            </tr>
                        </thead>  
                        <tbody class="bg-white">
                            <tr>
                                <td class="bg-green-800 border-none"></td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bg-green-800 border-none"></td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bg-green-800 border-none"></td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bg-green-800 text-white border-none p-0 overflow-hidden relative">
                                    <span class="absolute inset-0 flex items-center justify-center -rotate-90">Genap</span>
                                </td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bg-green-800 border-none"></td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bg-green-800 border-none"></td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bg-green-800 border-none"></td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                                <td class="p-3 border">&nbsp;</td>
                            </tr>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
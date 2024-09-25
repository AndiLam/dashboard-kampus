@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
    <h1 class="text-4xl mb-5">Rencana Studi</h1>
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
    <p class="mt-2">Semester: 20241 (2024/2025 Ganjil)</p>

    <div class="border p-4 rounded-md bg-gray-50">
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
        
        <!-- buat pilih kelas -->
        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm mb-5">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">Pilih</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Kelas</th>
                    <th class="p-3 border">Semester</th>
                </tr>
            </thead>
            <tbody class="bg-white"> <!-- Buat biar mengikuti kelas -->
                <tr>
                    <td class="p-3 border text-center">
                        <input type="radio" name="matkul" value="PAIA1" data-target="pai, pkn, arab, indo, fiqih, sospen, btq">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">PAI-A</td>
                    <td class="p-3 border text-center">1</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="radio" name="matkul" value="FIQIHA1" data-target="fiqih, pkn">
                    </td>
                    <td class="p-3 border text-center">Tidak</td>
                    <td class="p-3 border text-center">FIqih-A</td>
                    <td class="p-3 border text-center">1</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="radio" name="matkul" value="PAIA2" data-target="fiqih,ilsos">
                    </td>
                    <td class="p-3 border text-center">Tidak</td>
                    <td class="p-3 border text-center">PAI-A</td>
                    <td class="p-3 border text-center">2</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="radio" name="matkul" value="PAIB2" data-target="ilsos">
                    </td>
                    <td class="p-3 border text-center">Tidak</td>
                    <td class="p-3 border text-center">PAI-B</td>
                    <td class="p-3 border text-center">2</td>
                </tr>
                <!-- data kelas lainnya -->
            </tbody>
        </table>

        <!-- buat pilih matkul -->
        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">Pilih</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Kode <br>Mata Kuliah</th>
                    <th class="p-3 border">Mata Kuliah</th>
                    <th class="p-3 border">Semester</th>
                    <th class="p-3 border">SKS</th>
                </tr>
            </thead>
            <tbody class="bg-white"> <!-- Buat biar mengikuti kelas -->
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="pai">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00001</td>
                    <td class="p-3 border">Ilmu Pendidikan Islam</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="pkn">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00002</td>
                    <td class="p-3 border">Pendidikan Kewarganegaraan</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="arab">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00003</td>
                    <td class="p-3 border">Bahasa Arab</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="indo">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00004</td>
                    <td class="p-3 border">Bahasa Indonesia</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="fiqih">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00005</td>
                    <td class="p-3 border">Fiqih</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="sospen">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00006</td>
                    <td class="p-3 border">Sosiologi Pendidikan</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="btq">
                    </td>
                    <td class="p-3 border text-center">Disetujui</td>
                    <td class="p-3 border text-center">00007</td>
                    <td class="p-3 border">Baca Tulis Qur’an</td>
                    <td class="p-3 border text-center">1</td>
                    <td class="p-3 border text-center">2</td>
                </tr>
                <tr>
                    <td class="p-3 border text-center">
                        <input type="checkbox" name="matkul" value="PAI" class="ilsos">
                    </td>
                    <td class="p-3 border text-center">Tidak</td>
                    <td class="p-3 border text-center">00008</td>
                    <td class="p-3 border">Ilmu Sosial</td>
                    <td class="p-3 border text-center">2</td>
                    <td class="p-3 border text-center">3</td>
                </tr>
                <!-- data matkul lainnya -->
            </tbody>
        </table>
        <div class="grid grid-cols-4 gap-3 mt-4">
            <div class="text-left">
                <p><strong>SKS Paket</strong></p>
                <p>20</p>
            </div>
            <div class="text-left">
                <p><strong>SKS Dipilih</strong></p>
                <p>20</p>
            </div>
        </div>
        <div class="mt-4">
            <div class="text-left">
                <p><strong>Mata Kuliah Dipilih</strong></p>
                <p>7</p>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button class="bg-green-500 text-white hover:bg-green-900 py-2 px-4 rounded-md mt-4 flex items-center">
                <i class="fas fa-save mr-2"></i> Simpan Rencana Studi
            </button>
        </div> 
    </div>

@endsection
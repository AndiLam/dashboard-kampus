@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('adm.layouts.sidebarAdm')
@endsection

@section('content')
<div class="flex justify-start mb-4">
    <button id="btnSwitch1" class="border border-gray-600 tab-btn bg-green-700 text-white mr-1 py-2 px-4 rounded-l">
        Profile
    </button>
    <button id="btnSwitch2" class="border border-gray-600 tab-btn bg-white text-black hover:bg-gray-200 py-2 px-4 rounded-r">
        Ganti Password
    </button>
</div>

<div id="switch1" class="content">
    <h3 class="text-2xl font-semibold mt-4 mb-2">Biodata</h3>
    <div class="border p-4 bg-gray-50">
        <div class="mb-4">
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Nama <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                <p class="mr-2 font-bold">:</p>
                <p>MULYONO</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Tempat Lahir <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                <p class="mr-2 font-bold">:</p>
                <p>SOLO</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Tanggal Lahir <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                <p class="mr-2 font-bold">:</p>
                <p>99-24-1900</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Jenis Kelamin <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="" disabled selected hidden>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Agama <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="" disabled selected hidden>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <!-- Kewarganegaraan -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Kewarganegaraan <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select id="pilihNegara" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="">Pilih Kewarganegaraan</option>
                </select>
            </div>
            <!-- NIK -->
            <div class="mb-4">
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">NIK <span class="text-red-500 text-xs ml-1">*</span></p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <label class="block bg-red-500 text-white p-2 rounded-md">
                    NIK (Nomor Induk Kependudukan), tertera pada KTP atau Kartu Keluarga
                </label>
            </div>

            <!-- NISN -->
            <div class="mb-4">
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">NISN <span class="text-red-500 text-xs ml-1">*</span></p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <label class="block bg-yellow-300 text-black p-2 rounded-md">
                    NIP (Nomor Induk Pegawai)
                </label>
                <p class="text-xs mt-1">
                    Untuk verifikasi NIP cek di
                    <i>
                        <a class="text-blue-500 underline" href="https://118.98.228.205/home/pencarian" target="_blank">
                            https://118.98.228.205/home/pencarian
                        </a>
                    </i>
                </p>
            </div>
            <!-- Alamat -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Alamat (Sesuai KTP)</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <!-- Provinsi -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Provinsi <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select id="pilihProvinsi" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="">Pilih Provinsi</option>
                </select>
            </div>

            <!-- Kabupaten -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Kabupaten/Kota <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select id="pilihKabupaten" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="">Pilih Kabupaten/Kota</option>
                </select>
            </div>

            <!-- Kecamatan -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Kecamatan <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select id="pilihKecamatan" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="">Pilih Kecamatan</option>
                </select>
            </div>
            <!-- Desa/Kelurahan -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Kelurahan/Desa <span class="text-red-500 text-xs ml-1">*</span></p>
                <p class="mr-2 font-bold">:</p>
                <select id="pilihKelurahan" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                    <option value="">Pilih Kelurahan/Desa</option>
                </select>
            </div>
            <!-- RT -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">RT</p>
                <p class="mr-2 font-bold">:</p>
                <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <!-- RW -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">RW</p>
                <p class="mr-2 font-bold">:</p>
                <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <!-- Kode Pos -->
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Kode Pos</p>
                <p class="mr-2 font-bold">:</p>
                <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
        </div>
    </div>

    <!-- akun dan kontak -->
    <h3 class="text-2xl font-semibold mt-4 mb-2">Akun & Kontak</h3>
    <div class="border p-4 rounded-b-lg bg-gray-100">
        <!-- e-Mail Section -->
        <div class="mb-2 border-b-2 border-gray-400 pb-4">
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">e-Mail</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Status e-Mail anda</p>
                <p class="mr-2 font-bold">:</p>
                <div class="flex items-center">
                    <p><i class="far fa-circle-check text-green-600"></i></p>
                    <p class="ml-2 text-green-600 font-semibold">WHITELIST</p>
                </div>
            </div>
            <button class="bg-green-700 text-white py-2 px-4 rounded-r-lg hover:bg-green-900">Update e-Mail</button>
        </div>
    
        <!-- No Handphone Section -->
        <div class="mb-2 border-b-2 border-gray-400 pb-4 mt-4">
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">No Handphone</p>
                <p class="mr-2 font-bold">:</p>
                <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="0111111222">
            </div>
            <button class="bg-green-700 text-white py-2 px-4 rounded-r-lg hover:bg-green-900">Update No Handphone</button>
            <div class="mt-2">
                <p>Status Nomor HP Anda:</p>
                <div class="flex items-center">
                    <p><i class="far fa-circle-check text-green-600"></i></p>
                    <p class="ml-2">SMS: No HP Anda bisa menerima SMS dari sistem ini</p>
                </div>
                <p class="mt-1">Untuk menerima notifikasi melalui Whatsapp silahkan kirim pesan (apa saja) ke Nomor: 0823-1789-0207</p>
            </div>
        </div>
    
        <!-- Akun Google Apps Section -->
        <div class="mb-6">
            <div class="flex items-center mb-2 mt-4">
                <p class="w-44 font-bold">Akun Google Apps</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700 bg-gray-100" value="admin@email.stai.ac.id">
            </div>
        </div>
    </div>    
</div>

<!-- Ubah Password -->
<div id="switch2" class="content hidden">
    <h3 class="text-2xl font-semibold mt-4 mb-2">Ganti Password</h3>
    <div class="border border-green-700 p-4 rounded-lg bg-gray-100">
        <!-- e-Mail Section -->
        <div class="mb-2 border-gray-400 pb-4">
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Password Lama</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Password Baru</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Konfirmasi Password Baru</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
            </div>
            <div class="flex justify-end mt-4">
                <button class="bg-green-700 text-white hover:bg-green-900 py-2 px-4 rounded-md mt-4 flex items-center">
                    <i class="fas fa-save mr-2"></i> Simpan Password
                </button>
            </div> 
        </div>
</div>
@endsection

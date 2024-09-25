@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
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
    <h3 class="text-2xl font-semibold mt-4 mb-2">Akademik</h3>
    <div class="border p-4 rounded-t-lg bg-gray-5">
        <div class="">
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Program Studi</p>
                <p class="mr-2 font-bold">:</p>
                <p>Pendidikan Agama Islam</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Jenjang Pendidikan</p>
                <p class="mr-2 font-bold">:</p>
                <p>S1</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Kelas/Tahun Masuk</p>
                <p class="mr-2 font-bold">:</p>
                <p>PAI-A/2024</p>
            </div>
            <div>
                <div class="flex items-center">
                    <p class="w-44 font-bold">Semester</p>
                    <p class="mr-2 font-bold">:</p>
                    <p>I</p>
                </div>
            </div>
        </div>
    </div>

    <h3 class="text-2xl font-semibold mt-4 mb-2">Biodata</h3>
    <div class="border p-4 bg-gray-50">
        <div class="mb-4">
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Nama <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                <p class="mr-2 font-bold">:</p>
                <p>ANDI MUHAMAD NUR ILHAMI</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Tempat Lahir <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                <p class="mr-2 font-bold">:</p>
                <p>SUKABUMI</p>
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Tanggal Lahir <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                <p class="mr-2 font-bold">:</p>
                <p>12-04-2003</p>
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
                    NISN (Nomor Induk Siswa Nasional)
                </label>
                <p class="text-xs mt-1">
                    Untuk verifikasi NISN cek di
                    <i>
                        <a class="text-blue-500 underline" href="https://nisn.data.kemdikbud.go.id/" target="_blank">
                            https://nisn.data.kemdikbud.go.id/
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
    
        <!-- Orang Tua -->
        <h3 class="text-2xl mt-4 mb-2 text-gray-400 border-b-2 border-gray-400 pb-3">Orang Tua Mahasiswa</h3>
            <!-- Data Ayah -->
            <div class="mb-4">
                <h4 class="text-gray-400 mb-2">AYAH</h4>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Nama Ayah</p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Tanggal Lahir Ayah</p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="date" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Pendidikan Ayah</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Jenjang Pendidikan Ayah</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Pascasarjana">Pascasarjana</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Pekerjaan Ayah</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Pekerjaan Ayah</option>
                        <option value="PNS">PNS</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Penghasilan Ayah</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Penghasilan Ayah</option>
                        <option value="< 1.000.000">Kurang dari Rp 1.000.000</option>
                        <option value="1.000.000 - 3.000.000">Rp 1.000.000 - Rp 3.000.000</option>
                        <option value="3.000.000 - 5.000.000">Rp 3.000.000 - Rp 5.000.000</option>
                        <option value="> 5.000.000">Lebih dari Rp 5.000.000</option>
                    </select>
                </div>
    
            <!-- Data Ibu -->
            <div class="mb-4">
                <h4 class="text-gray-400 mb-2">IBU</h4>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Nama Ibu Kandung <i class="fas fa-lock text-xs text-red-500 ml-1 cursor-help"></i></p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700 cursor-help" value="Andi Rohaya" readonly>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Tanggal Lahir Ibu</p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="date" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Pendidikan Ibu</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Jenjang Pendidikan Ibu</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Pascasarjana">Pascasarjana</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Pekerjaan Ibu</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Pekerjaan Ibu</option>
                        <option value="PNS">PNS</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Penghasilan Ibu</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Penghasilan Ibu</option>
                        <option value="< 1.000.000">Kurang dari Rp 1.000.000</option>
                        <option value="1.000.000 - 3.000.000">Rp 1.000.000 - Rp 3.000.000</option>
                        <option value="3.000.000 - 5.000.000">Rp 3.000.000 - Rp 5.000.000</option>
                        <option value="> 5.000.000">Lebih dari Rp 5.000.000</option>
                    </select>
                </div>
            </div>

            <h3 class="text-2xl mt-4 mb-2 text-gray-400 border-b-2 border-gray-400 pb-3">Orang Tua Wali</h3>
            <!-- Data Wali -->
            <div class="mb-4">
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Nama</p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Tanggal Lahir</p>
                    <p class="mr-2 font-bold">:</p>
                    <input type="date" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="">
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Pendidikan</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Jenjang Pendidikan</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Pascasarjana">Pascasarjana</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Pekerjaan</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Pekerjaan</option>
                        <option value="PNS">PNS</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="flex items-center mb-2">
                    <p class="w-44 font-bold">Penghasilan</p>
                    <p class="mr-2 font-bold">:</p>
                    <select class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700">
                        <option value="" disabled selected hidden>Pilih Penghasilan</option>
                        <option value="< 1.000.000">Kurang dari Rp 1.000.000</option>
                        <option value="1.000.000 - 3.000.000">Rp 1.000.000 - Rp 3.000.000</option>
                        <option value="3.000.000 - 5.000.000">Rp 3.000.000 - Rp 5.000.000</option>
                        <option value="> 5.000.000">Lebih dari Rp 5.000.000</option>
                    </select>
                </div>
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
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700 bg-gray-100" value="andi.10121304@mahasiswa.unikom.ac.id">
            </div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Status e-Mail anda</p>
                <p class="mr-2 font-bold">:</p>
                <div class="flex items-center">
                    <p><i class="far fa-circle-check text-green-600"></i></p>
                    <p class="ml-2 font-semibold">WHITELIST (Alamat email anda dapat digunakan untuk mengirim informasi)</p>
                </div>
            </div>
            <button class="bg-green-500 text-white py-2 px-4 rounded-r-lg hover:bg-green-900">Update e-Mail</button>
        </div>
    
        <!-- No Handphone Section -->
        <div class="mb-2 border-b-2 border-gray-400 pb-4 mt-4">
            <div class="flex items-center">
                <p class="w-44 font-bold">No Handphone</p>
                <p class="mr-2 font-bold">:</p>
                <input type="number" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700" value="085155131155">
            </div>
            <div class="text-red-400 mb-2">*Jika anda ingin mengganti nomor HP, pastikan nomor HP yang baru bisa menerima pesan konfirmasi melalui WhatsApp.</div>
            <div class="flex items-center mb-2">
                <p class="w-44 font-bold">Status Nomor HP Anda</p>
                <p class="mr-2 font-bold">:</p>
                <div class="flex items-center">
                    <p><i class="far fa-circle-check text-green-600"></i></p>
                    <p class="ml-2 font-semibold">WhatsApp: No HP Anda bisa menerima pesan WA dari sistem ini</p>
                </div>
            </div>
            <button class="bg-green-500 text-white py-2 px-4 rounded-r-lg hover:bg-green-900">Update No Handphone</button>
        </div>
    
        <!-- Akun Google Apps Section -->
        <div class="mb-6">
            <div class="flex items-center mb-2 mt-4">
                <p class="w-44 font-bold">Akun Google Apps</p>
                <p class="mr-2 font-bold">:</p>
                <input type="text" class="w-5/6 border border-gray-300 rounded-r-lg px-2 py-1 focus:ring-2 focus:ring-green-700 bg-gray-100" value="andi.10121304@mahasiswa.unikom.ac.id" readonly>
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
                <button class="bg-green-500 text-white hover:bg-green-900 py-2 px-4 rounded-md mt-4 flex items-center">
                    <i class="fas fa-save mr-2"></i> Simpan Password
                </button>
            </div> 
        </div>
</div>
@endsection

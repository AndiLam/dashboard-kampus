<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DsnController extends Controller
{
    // Menampilkan halaman dashboard dosen
    public function dashboardDsn()
    {
        return view('dsn.dashboardDsn');
    }

    // Menampilkan halaman untuk jadwal kelas
    public function jadwalKelas()
    {
        return view('dsn.konten.jadwalKls');
    }

    // Menampilkan halaman untuk absensi
    public function isiAbsensi()
    {
        return view('dsn.konten.absenDsn');
    }

    // Menampilkan halaman untuk pengisian niali mahasiswa
    public function isiNilai()
    {
        return view('dsn.konten.nilai');
    }

    // Menampilkan halaman profile dosen
    public function profileDosen()
    {
        return view('dsn.profileDsn');
    }
}

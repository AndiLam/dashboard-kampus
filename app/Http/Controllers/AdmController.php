<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    // Menampilkan halaman dashboard admin
    public function dashboardAdm()
    {
        return view('adm.dashboardAdm');
    }

    // Menampilkan halaman untuk absensi
    public function isiAbsensiAdm()
    {
        $semesters = [
            ['id' => 1, 'name' => 'Semester 1', 'classes' => [
                ['id' => 1, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 2, 'name' => 'HES-A', 'programStudy' => 'Hukum Ekonomi Syariah', 'dosen' => '-'],
                ['id' => 3, 'name' => 'KPI-A', 'programStudy' => 'Komunikasi & Penyiaran Islam', 'dosen' => '-'],
            ]],
        ];

        return view('adm.konten.absenAdm', compact('semesters'));
    }

    public function showAbsenAdm($semester, $kelas, $prodi)
    {
        return view('adm.konten.showAbsenAdm', compact('semester', 'kelas', 'prodi'));
    }

    
    // Menampilkan halaman untuk pengisian nilai mahasiswa
    public function isiNilaiAdm()
    {
        return view('adm.konten.nilaiAdm');
    }
    
    // Menampilkan halaman keuangan
    public function keuangAdm()
    {
        return view('adm.konten.keuanganAdm');
    }
    
    // Menampilkan halaman manajemen
    // Menampilkan halaman keuangan
    public function editDosenAdm()
    {
        return view('adm.konten.editDsnAdm');
    }

    // Menampilkan halaman keuangan
    public function editMahasiswaAdm()
    {
        return view('adm.konten.editMhsAdm');
    }

    // Menampilkan halaman keuangan
    public function editMatkulAdm()
    {
        return view('adm.konten.editMkAdm');
    }

    // Menampilkan halaman keuangan
    public function editJadwalKuliahAdm()
    {
        return view('adm.konten.jdwlKulAdm');
    }

    // Menampilkan halaman profile dosen
    public function profileAdmin()
    {
        return view('adm.profileAdm');
    }   
}

<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    // Halaman dashboard mahasiswa
    public function mahasiswaDashboard()
    {
        return view('mhs.dashboard');// View untuk dashboard mahasiswa
    }

    // Halaman dashboard dosen
    public function dosenDashboard()
    {
        return view('dsn.dashboardDsn'); // View untuk dashboard dosen
    }

    // Halaman dashboard admin
    public function adminDashboard()
    {
        return view('adm.dashboardAdm'); // View untuk dashboard admin
    }
}

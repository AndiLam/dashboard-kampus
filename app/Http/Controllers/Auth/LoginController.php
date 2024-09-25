<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Data login default (sebagai pengganti database)
    protected $mahasiswaUsers = [
        ['nim' => '112233', 'password' => '112233'],
    ];

    protected $dosenUsers = [
        ['nidn' => '445566', 'password' => '445566'],
    ];

    protected $adminUsers = [
        ['username' => 'admin', 'password' => 'admin123'],
    ];

    public function showMhsLoginForm()
    {
        return view('mhs.loginMhs')->with('loginRoute', route('loginMhs'));
    }

    public function showDsnLoginForm()
    {
        return view('dsn.loginDsn')->with('loginRoute', route('loginDsn'));
    }

    public function showAdminLoginForm()
    {
        return view('adm.loginAdmin')->with('loginRoute', route('loginAdmin'));
    }

    // Login Mahasiswa
    public function loginMhs(Request $request)
    {
        $nim = $request->input('nim');
        $password = $request->input('password');

        // Debug: Cek APP_URL
        $appUrl = env('APP_URL');
        logger("Current APP_URL: $appUrl"); // Menulis ke log

        foreach ($this->mahasiswaUsers as $user) {
            if ($user['nim'] === $nim && $user['password'] === $password) {
                // Arahkan ke dashboard mahasiswa
                $request->session()->put('user', ['role' => 'mahasiswa', 'nim' => $nim]);
                return redirect()->route('dashboard')->with('success', 'Login berhasil sebagai Mahasiswa');
            }
        }

        return back()->withErrors(['message' => 'Login gagal, NIM atau Password salah']);
    }

    // Login Dosen
    public function loginDsn(Request $request)
    {
        $nidn = $request->input('nidn');
        $password = $request->input('password');

        // Debug: Cek APP_URL
        $appUrl = env('APP_URL');
        logger("Current APP_URL: $appUrl");

        foreach ($this->dosenUsers as $user) {
            if ($user['nidn'] === $nidn && $user['password'] === $password) {
                $request->session()->put('user', ['role' => 'dosen', 'nidn' => $nidn]);
                return redirect()->route('dashboardDsn')->with('success', 'Login berhasil sebagai Dosen');
            }
        }

        return back()->withErrors(['message' => 'Login gagal, NIDN atau Password salah']);
    }

    // Login Admin
    public function loginAdmin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Debug: Cek APP_URL
        $appUrl = env('APP_URL');
        logger("Current APP_URL: $appUrl");

        foreach ($this->adminUsers as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $request->session()->put('user', ['role' => 'admin', 'username' => $username]);
                return redirect()->route('dashboardAdm')->with('success', 'Login berhasil sebagai Admin');
            }
        }

        return back()->withErrors(['message' => 'Login gagal, Username atau Password salah']);
    }
}
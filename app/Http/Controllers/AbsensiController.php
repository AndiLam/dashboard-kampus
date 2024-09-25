<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    // Contoh data
    protected $semesters = [
        ['id' => 1, 'name' => 'Semester 1', 'classes' => [
            ['id' => 1, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam', 'students' => [
                ['id' => 1, 'name' => 'Mahasiswa A'],
                ['id' => 2, 'name' => 'Mahasiswa B'],
            ]],
            ['id' => 2, 'name' => 'PAI-B', 'programStudy' => 'Pendidikan Agama Islam', 'students' => [
                ['id' => 3, 'name' => 'Mahasiswa C'],
                ['id' => 4, 'name' => 'Mahasiswa D'],
            ]],
        ]],
    ];

    public function index(Request $request)
    {
        $user = auth()->user(); // Ambil pengguna yang sedang login
        $role = $user->role; // Asumsi 'role' adalah kolom yang menyimpan jenis pengguna
    
        $selectedSemester = $request->input('semester');
        $selectedClass = $request->input('ruangan');
    
        // Ambil semua kelas atau kelas yang diampu dosen
        if ($role === 'admin') {
            $kelasList = $this->getAllClasses($selectedSemester); // Fungsi untuk mendapatkan semua kelas
        } else if ($role === 'dosen') {
            $kelasList = $this->getClassesByDosen($user->id, $selectedSemester); // Fungsi untuk mendapatkan kelas yang diampu dosen
        }
    
        $kelas = null;
    
        // Logika untuk mencari kelas yang dipilih
        foreach ($kelasList as $class) {
            if ($class['id'] == $selectedClass) {
                $kelas = $class;
                break;
            }
        }
    
        return view('absensi.index', ['kelasList' => $kelasList, 'kelas' => $kelas]);
    }
    
    // Contoh fungsi untuk mendapatkan semua kelas
    protected function getAllClasses($semester)
    {
        // Ambil semua kelas berdasarkan semester
        return [
            // Data kelas
        ];
    }
    
    // Contoh fungsi untuk mendapatkan kelas yang diampu dosen
    protected function getClassesByDosen($dosenId, $semester)
    {
        // Ambil kelas berdasarkan dosen
        return [
            // Data kelas yang diampu dosen
        ];
    }
}
<nav class="bg-gray-800 text-white w-64 p-6">
    <div class="text-center mb-3">
        <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/tes.jpg') }}" alt="profile-picture" class="h-24 w-24 rounded-full mx-auto mb-2">
        <h3 class="text-lg font-bold">Sopian Alviana, S.Kom., M.Kom</h3>
        <p class="text-gray-400 border-b-2 border-gray-400 pb-3">445566</p>
    </div>
    <ul>
        <li><a href="{{ route('dashboardDsn') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('dashboardDsn') ? 'bg-custom-green text-gray-900 font-semibold' : ' text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-home mr-2 fa-xs"></i> Home</a></li>
        <li><a href="{{ route('jadwalKls') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('jadwalKls') ? 'bg-custom-green text-gray-900 font-semibold' : ' text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-file-alt mr-3.5 fa-xs"></i> Jadwal Mengajar</a></li>
        <li><a href="{{ route('absen') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('absen') ? 'bg-custom-green text-gray-900 font-semibold' : ' text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-calendar mr-3 fa-xs"></i> Absensi Mahasiswa</a></li>
        <li><a href="{{ route('isiNilai') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('isiNilai') ? 'bg-custom-green text-gray-900 font-semibold' : ' text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-pencil-alt mr-2.5 fa-xs"></i> Nilai Mahasiswa</a></li>
    </ul>
</nav>

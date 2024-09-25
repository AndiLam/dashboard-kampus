<nav class="bg-gray-800 text-white md:w-64 w-16 p-6 transition-transform duration-300 ease-in-out top-0 left-0 h-full md:static hidden md:block">
    <div class="text-center mb-3">
        <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/tes.jpg') }}" alt="profile-picture" class="h-24 w-24 rounded-full mx-auto mb-2">
        <h3 class="text-lg font-bold">Andi Muhamad Nur Ilhami</h3>
        <p class="text-gray-400 border-b-2 border-gray-400 pb-3">112233</p>
    </div>
        <ul>
            <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('dashboard') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-home mr-1 fa-xs"></i><span class="ml-2">Home</span></a></li>
            <li><a href="{{ route('krs') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('krs') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-file-alt mr-2 fa-xs"></i><span class="ml-2">KRS/Kartu Ujian</span></a></li>
            <li><a href="{{ route('khs') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('khs') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-calendar mr-2 fa-xs"></i><span class="ml-2">Kartu Hasil Studi</span></a></li>
            <li><a href="{{ route('jadwal') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('jadwal') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-book mr-2 fa-xs"></i><span class="ml-2">Jadwal Kuliah</span></a></li>
            <li><a href="{{ route('prs') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('prs') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-pencil-alt mr-2 fa-xs"></i><span class="ml-2">Pengisian Rencana Studi</span></a></li>
            <li><a href="{{ route('status') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('status') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-chalkboard-teacher mr-1 fa-xs"></i><span class="ml-2">Status Aktif</span></a></li>
            <li><a href="{{ route('absensi') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('absensi') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-check-square mr-2 fa-xs"></i><span class="ml-2">Absensi</span></a></li>
            <li><a href="{{ route('riwayat') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('riwayat') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-question-circle mr-2 fa-xs"></i><span class="ml-2">Riwayat Nilai</span></a></li>
            <li><a href="{{ route('keuangan') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('keuangan') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-graduation-cap mr-1 fa-xs"></i><span class="ml-2">Keuangan</span></a></li>
            <li><a href="{{ route('perpustakaan') }}" class="block py-2 px-4 rounded-r-lg {{ request()->routeIs('perpustakaan') ? 'bg-custom-green text-gray-300 font-semibold' : 'text-gray-400 hover:bg-custom-green' }}"><i class="fas fa-users mr-1 fa-xs"></i><span class="ml-2">Perpustakaan</span></a></li>
        </ul>
</nav>
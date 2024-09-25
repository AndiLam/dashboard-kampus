<nav class="bg-gray-800 text-white w-64 p-6">
    <div class="text-center mb-6">
        <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/tes.jpg') }}" alt="profile-picture" class="h-24 w-24 rounded-full mx-auto mb-2">
        <h3 class="text-gray-400 border-b-2 border-gray-400 pb-3">Admin Kampus</h3>
    </div>
    <ul>
        <li><a href="{{ route('dashboardAdm') }}" class="block py-3 px-4 rounded-r-lg mb-2 {{ request()->routeIs('dashboardAdm') ? 'bg-custom-green text-white font-semibold shadow-lg' : 'text-gray-400 hover:bg-custom-green hover:text-white transition-colors duration-300' }}"><i class="fas fa-home mr-2"></i> Home</a></li>
        
        <li><a href="{{ route('absenAdm') }}" class="block py-3 px-4 rounded-r-lg mb-2 {{ request()->routeIs('absenAdm*') ? 'active bg-custom-green text-white font-semibold shadow-lg' : 'text-gray-400 hover:bg-custom-green hover:text-white transition-colors duration-300' }}"><i class="fas fa-calendar mr-3"></i> Absensi Mahasiswa</a></li>                
        
        <li><a href="{{ route('nilaiAdm') }}" class="block py-3 px-4 rounded-r-lg mb-2 {{ request()->routeIs('nilaiAdm') ? 'bg-custom-green text-white font-semibold shadow-lg' : 'text-gray-400 hover:bg-custom-green hover:text-white transition-colors duration-300' }}"><i class="fas fa-pencil-alt mr-2.5"></i> Nilai Mahasiswa</a></li>
        
        <li><a href="{{ route('uangAdm') }}" class="block py-3 px-4 rounded-r-lg mb-2 {{ request()->routeIs('uangAdm') ? 'bg-custom-green text-white font-semibold shadow-lg' : 'text-gray-400 hover:bg-custom-green hover:text-white transition-colors duration-300' }}"><i class="fas fa-dollar-sign mr-3.5"></i> Keuangan Mahasiswa</a></li>
        
        <!-- Dropdown Menu -->
        <li class="relative">
            <button id="menejAka" class="block w-full py-3 px-4 rounded-r-lg mb-2 {{ request()->routeIs('dosenAdm') || request()->routeIs('mhsAdm') || request()->routeIs('matkulAdm') || request()->routeIs('jadwalAdm') ? 'bg-custom-green text-white font-semibold shadow-lg' : 'text-gray-400 hover:bg-custom-green hover:text-white transition-colors duration-300' }} text-left flex items-center justify-between">
                <i class="fas fa-cogs mr-2.5"></i> Manajemen Akademik
                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                <i class="fas fa-times text-lg absolute right-4 opacity-0 transition-opacity duration-300"></i>
            </button>
            
            <ul id="menejAkaMenu" class="absolute left-0 w-full mt-2 rounded-lg shadow-lg bg-gray-200 hidden transition-all duration-300 transform origin-top">
                <li><a href="{{ route('dosenAdm') }}" class="block py-3 px-4 text-gray-600 hover:bg-custom-green hover:text-white transition-colors duration-300">Dosen</a></li>
                <li><a href="{{ route('mhsAdm') }}" class="block py-3 px-4 text-gray-600 hover:bg-custom-green hover:text-white transition-colors duration-300">Mahasiswa</a></li>
                <li><a href="{{ route('matkulAdm') }}" class="block py-3 px-4 text-gray-600 hover:bg-custom-green hover:text-white transition-colors duration-300">Mata Kuliah</a></li>
                <li><a href="{{ route('jadwalAdm') }}" class="block py-3 px-4 text-gray-600 hover:bg-custom-green hover:text-white transition-colors duration-300">Jadwal Mata Kuliah</a></li>
            </ul>
        </li>
    </ul>    
</nav>
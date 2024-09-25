<header class="bg-custom-green text-white flex items-center justify-between p-4 sticky top-0 z-10 shadow-md">
    <button class="text-white text-xl">
        <i class="fas fa-bars"></i>
    </button>
    <div class="text-lg font-semibold">MY ACADEMIC</div>
    <div class="relative">
        <div id="profileDropdownToggle" class="flex items-center cursor-pointer">
            <img src="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/STAI.png') }}" alt="User Profile" class="w-8 h-8 mr-2 object-fill rounded-full">
            <span>{{ session('user')['nim'] ?? session('user')['nidn'] ?? session('user')['username'] }}</span>
            <div class="relative ml-1 w-4 h-4">
                <i class="fas fa-chevron-down absolute top-0 left-0 transition-transform duration-300"></i>
                <i class="fas fa-times text-lg absolute top-0 left-0 opacity-0 transition-opacity duration-350"></i>
            </div>
        </div>
        <div id="profileDropdownMenu" class="absolute right-1 mt-2 w-48 bg-white text-black shadow-lg hidden">
            @if(session('user')['role'] === 'mahasiswa')
                <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a>
                <a href="{{ route('logout', ['role' => 'mahasiswa']) }}" id="logoutLink" class="text-red-600 block px-4 py-2 hover:bg-gray-200">Logout</a>
            @elseif(session('user')['role'] === 'dosen')
                <a href="{{ route('profileDsn') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a>
                <a href="{{ route('logout', ['role' => 'dosen']) }}" id="logoutLink" class="text-red-600 block px-4 py-2 hover:bg-gray-200">Logout</a>
            @elseif(session('user')['role'] === 'admin')
                <a href="{{ route('profileAdm') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a>
                <a href="{{ route('logout', ['role' => 'admin']) }}" id="logoutLink" class="text-red-600 block px-4 py-2 hover:bg-gray-200">Logout</a>
            @endif
        </div>
    </div>
</header>

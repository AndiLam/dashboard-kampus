document.addEventListener('DOMContentLoaded', function() {            
    // buat header
    const profileToggle = document.getElementById('profileDropdownToggle');
    const profileMenu = document.getElementById('profileDropdownMenu');
    const logoutLink = document.getElementById('logoutLink');
    const arrowIcon = profileToggle.querySelector('.fa-chevron-down');
    const xIcon = profileToggle.querySelector('.fa-times');

    if (profileToggle && profileMenu && arrowIcon && xIcon) {
        profileToggle.addEventListener('click', function() {
            profileMenu.classList.toggle('hidden');
            arrowIcon.classList.toggle('opacity-0');
            xIcon.classList.toggle('opacity-0');
            arrowIcon.classList.toggle('rotate-180');
        });

        document.addEventListener('click', function(e) {
            if (!profileToggle.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.classList.add('hidden');
                arrowIcon.classList.remove('opacity-0');
                arrowIcon.classList.remove('rotate-180');
                xIcon.classList.add('opacity-0');
            }
        });

        if (logoutLink) {
            logoutLink.addEventListener('click', (event) => {
                event.preventDefault();
                if (confirm('Apakah Anda yakin ingin logout?')) {
                    window.location.href = logoutLink.href;
                }
            });
        }
    }

    // buat halaman prs
    document.querySelectorAll('input[type="radio"][name="matkul"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Ambil data target dari radio yang dipilih
            var targets = this.getAttribute('data-target').split(',');
    
            // Uncheck semua checkbox terlebih dahulu
            document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
                checkbox.checked = false;
            });
    
            // Loop setiap target dan centang checkbox yang memiliki kelas sesuai
            targets.forEach(function(target) {
                document.querySelectorAll('.' + target.trim()).forEach(function(checkbox) {
                    checkbox.checked = true;
                });
            });
        });
    });


    // buat di halaman riwayat nilai dan profile
    function setActiveTab(buttonId, contentId) {
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.removeAttribute('disabled');
            btn.classList.remove('bg-green-700', 'text-white');
            btn.classList.add('bg-white', 'text-black', 'hover:bg-gray-200');
        });
        document.querySelectorAll('.content').forEach(content => {
            content.classList.add('hidden');
        });

        const activeButton = document.getElementById(buttonId);
        const activeContent = document.getElementById(contentId);

        activeButton.classList.remove('bg-white', 'text-black', 'hover:bg-gray-200');
        activeButton.classList.add('bg-green-700', 'text-white');
        activeButton.setAttribute('disabled', 'disabled');
        activeContent.classList.remove('hidden');
    }


    const btnSwitch1 = document.getElementById('btnSwitch1');
    const btnSwitch2 = document.getElementById('btnSwitch2');

    if (btnSwitch1 && btnSwitch2) {
        btnSwitch1.addEventListener('click', function() {
            setActiveTab('btnSwitch1', 'switch1');
        });

        btnSwitch2.addEventListener('click', function() {
            setActiveTab('btnSwitch2', 'switch2');
        });

        // Set default active tab
        setActiveTab('btnSwitch1', 'switch1');
    }


    // buat ambil data negara untuk ditampilkan di profile
    fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(negaraData => {
        const kewarganegaraanSelect = document.getElementById('pilihNegara');
        const indonesiaOption = { cca2: 'ID', name: { common: 'Indonesia' } };

        // Urutkan negara secara alfabet
        negaraData.sort((a, b) => a.name.common.localeCompare(b.name.common));

        // Pindahkan Indonesia ke atas
        const sortedCountries = [indonesiaOption, ...negaraData.filter(country => country.name.common !== 'Indonesia')];

        if (kewarganegaraanSelect) {
            sortedCountries.forEach(negara => {
                const option = document.createElement('option');
                option.value = negara.cca2;
                option.text = negara.name.common;
                kewarganegaraanSelect.appendChild(option);
            });
        }
    })
    .catch(error => console.error('Error fetching countries:', error));

    // Ambil data Provinsi
    fetch('https://ibnux.github.io/data-indonesia/provinsi.json')
        .then(response => response.json())
        .then(provinsiData => {
            const provinsiSelect = document.getElementById('pilihProvinsi');
            
            if (provinsiSelect) {
                // Urutkan provinsi secara alfabet
                provinsiData.sort((a, b) => a.nama.localeCompare(b.nama));

                provinsiData.forEach(provinsi => {
                    const option = document.createElement('option');
                    option.value = provinsi.id;
                    const provinsiNama = provinsi.nama.charAt(0).toUpperCase() + provinsi.nama.slice(1).toLowerCase();
                    option.text = `Prov. ${provinsiNama}`;
                    provinsiSelect.appendChild(option);
                });

                // Event listener untuk ketika provinsi berubah
                provinsiSelect.addEventListener('change', function() {
                    const selectedProvinsi = this.value;
                    if (selectedProvinsi) {
                        fetchKabupaten(selectedProvinsi);
                    }
                });
            }
        })
        .catch(error => console.error('Error fetching provinces:', error));

    // Ambil data Kabupaten
    function fetchKabupaten(provinsiId) {
        const kabupatenSelect = document.getElementById('pilihKabupaten');
        kabupatenSelect.innerHTML = '<option value="">Pilih Kabupaten/Kota</option>'; // Reset opsi
        const kecamatanSelect = document.getElementById('pilihKecamatan');
        kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>'; // Reset opsi
        const kelurahanSelect = document.getElementById('pilihKelurahan');
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan/Desa</option>'; // Reset opsi

        fetch(`https://ibnux.github.io/data-indonesia/kabupaten/${provinsiId}.json`)
            .then(response => response.json())
            .then(kabupatenData => {
                // Urutkan kabupaten secara alfabet
                kabupatenData.sort((a, b) => a.nama.localeCompare(b.nama));

                kabupatenData.forEach(kabupaten => {
                    const option = document.createElement('option');
                    option.value = kabupaten.id;
                    // Cek apakah nama kabupaten mengandung kata 'Kota'
                    if (kabupaten.nama.includes('KOTA')) {
                        const kotaNama = kabupaten.nama.replace('KOTA ', '');
                        option.text = `Kota ${kotaNama.charAt(0).toUpperCase() + kotaNama.slice(1).toLowerCase()}`;
                    } else {
                        const kabupatenNama = kabupaten.nama.replace('KAB. ', '');
                        option.text = `Kab. ${kabupatenNama.charAt(0).toUpperCase() + kabupatenNama.slice(1).toLowerCase()}`;
                    }

                    kabupatenSelect.appendChild(option);
                });

                // Event listener untuk ketika kabupaten berubah
                kabupatenSelect.addEventListener('change', function() {
                    const selectedKabupaten = this.value;
                    if (selectedKabupaten) {
                        fetchKecamatan(selectedKabupaten);
                    }
                });
            })
            .catch(error => console.error('Error fetching kabupaten:', error));
    }

    // Ambil data Kecamatan
    function fetchKecamatan(kabupatenId) {
        const kecamatanSelect = document.getElementById('pilihKecamatan');
        kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>'; // Reset opsi
        const kelurahanSelect = document.getElementById('pilihKelurahan');
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan/Desa</option>'; // Reset opsi

        fetch(`https://ibnux.github.io/data-indonesia/kecamatan/${kabupatenId}.json`)
            .then(response => response.json())
            .then(kecamatanData => {
                // Urutkan kecamatan secara alfabet
                kecamatanData.sort((a, b) => a.nama.localeCompare(b.nama));

                kecamatanData.forEach(kecamatan => {
                    const option = document.createElement('option');
                    option.value = kecamatan.id;
                    option.text = `Kec. ${kecamatan.nama}`;
                    kecamatanSelect.appendChild(option);
                });

                // Event listener untuk ketika kecamatan berubah
                kecamatanSelect.addEventListener('change', function() {
                    const selectedKecamatan = this.value;
                    if (selectedKecamatan) {
                        fetchKelurahan(selectedKecamatan);
                    }
                });
            })
            .catch(error => console.error('Error fetching kecamatan:', error));
    }

    // Ambil data Kelurahan
    function fetchKelurahan(kecamatanId) {
        const kelurahanSelect = document.getElementById('pilihKelurahan');
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan/Desa</option>'; // Reset opsi

        fetch(`https://ibnux.github.io/data-indonesia/kelurahan/${kecamatanId}.json`)
        .then(response => response.json())
        .then(kelurahanData => {

            // Urutkan kelurahan secara alfabet
            kelurahanData.sort((a, b) => a.nama.localeCompare(b.nama));

            kelurahanData.forEach(kelurahan => {
                const option = document.createElement('option');
                option.value = kelurahan.id;
                option.text = kelurahan.nama;
                kelurahanSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching kelurahan:', error));
    }

    //buat ADMIN
    const dropdownButton = document.getElementById('menejAka');
    const dropdownMenu = document.getElementById('menejAkaMenu');
    const dropdownArrow = dropdownButton.querySelector('.fa-chevron-down');
    const dropdownX = dropdownButton.querySelector('.fa-times');
    
    if (dropdownButton && dropdownMenu && dropdownX){
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
            dropdownArrow.classList.toggle('opacity-0');
            dropdownX.classList.toggle('opacity-0');
            dropdownArrow.classList.toggle('rotate-180');
        });
    
        document.addEventListener('click', function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
                dropdownArrow.classList.remove('rotate-180');
                dropdownArrow.classList.remove('opacity-0');
                dropdownX.classList.add('opacity-0');
            }
        });
    }

    window.redirectToAbsen = function(row) {
        const semester = row.getAttribute('data-semester');
        const kelas = row.getAttribute('data-kelas');
        const prodi = row.getAttribute('data-prodi');
        
        window.location.href = `/absen-adm/${semester}/${kelas}/${prodi}`;
    };
});
<nav id="main-navbar" class="fixed top-10 left-0 w-full z-40 flex items-center justify-between px-4 md:px-12 py-6 transition-all duration-300 bg-transparent">
    
    <div class="flex items-center gap-3">
        <img src="{{ isset($global_settings['logo_header']) ? asset('storage/' . $global_settings['logo_header']) : asset('logo.png') }}" alt="{{ $global_settings['nama_brand'] ?? 'Fattah Travel' }}" class="h-12 w-auto object-contain">
        @php
            $brand_name = $global_settings['nama_brand'] ?? 'Fattah Travel';
            $brand_parts = explode(' ', $brand_name);
            $last_word = count($brand_parts) > 1 ? array_pop($brand_parts) : '';
            $first_part = implode(' ', $brand_parts);
        @endphp
        <span class="text-white font-bold text-xl tracking-wider drop-shadow-md">
            {{ strtoupper($first_part) }} <span class="text-[#FFB300]">{{ strtoupper($last_word) }}</span>
        </span>
    </div>

    <ul class="hidden md:flex items-center gap-8 text-sm">
        
        <li>
            <a href="/" class="relative group py-1 {{ request()->is('/') ? 'text-[#FFB300] font-bold' : 'text-white/90 hover:text-white transition duration-300 font-medium' }}">
                Home
                <span class="absolute left-0 bottom-0 h-[2px] bg-[#FFB300] rounded-full transition-all duration-300 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>
        </li>

        <li>
            <a href="/paket-umrah" class="relative group py-1 {{ request()->is('paket-umrah') ? 'text-[#FFB300] font-bold' : 'text-white/90 hover:text-white transition duration-300 font-medium' }}">
                Paket Umrah
                <span class="absolute left-0 bottom-0 h-[2px] bg-[#FFB300] rounded-full transition-all duration-300 {{ request()->is('paket-umrah') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>
        </li>

        <li>
            <a href="/paket-haji" class="relative group py-1 {{ request()->is('paket-haji') ? 'text-[#FFB300] font-bold' : 'text-white/90 hover:text-white transition duration-300 font-medium' }}">
                Paket Haji
                <span class="absolute left-0 bottom-0 h-[2px] bg-[#FFB300] rounded-full transition-all duration-300 {{ request()->is('paket-haji') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>
        </li>

<li>
            <a href="/artikel" class="relative group py-1 {{ request()->is('artikel') ? 'text-[#FFB300] font-bold' : 'text-white/90 hover:text-white transition duration-300 font-medium' }}">
                Artikel
                <span class="absolute left-0 bottom-0 h-[2px] bg-[#FFB300] rounded-full transition-all duration-300 {{ request()->is('artikel') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>
        </li>

<li>
            <a href="/kontak" class="relative group py-1 {{ request()->is('kontak') ? 'text-[#FFB300] font-bold' : 'text-white/90 hover:text-white transition duration-300 font-medium' }}">
                Kontak
                <span class="absolute left-0 bottom-0 h-[2px] bg-[#FFB300] rounded-full transition-all duration-300 {{ request()->is('kontak') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>
        </li>
    </ul>

    <div class="hidden md:flex items-center text-white">
        <a href="https://wa.me/{{ $global_settings['nomor_wa'] ?? '6283133387676' }}?text=Assalamu'alaikum%20{{ urlencode($global_settings['nama_brand'] ?? 'Fattah Travel') }},%20saya%20ingin%20mendaftar%20paket%20keberangkatan."
           target="_blank"
           class="flex items-center gap-2 bg-[#FFB300] hover:bg-yellow-500 text-black font-bold py-2.5 px-6 rounded-full transition duration-300 shadow-lg hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 fill-current"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
            Daftar Sekarang
        </a>
    </div>

    <div class="md:hidden flex items-center text-white relative z-50">
        <button id="mobile-menu-button" class="text-[#FFB300] focus:outline-none pointer-events-auto">
            <svg class="w-8 h-8 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 bg-black/95 z-50 transform translate-x-full transition-transform duration-300 hidden md:hidden flex-col items-center justify-center">
    <button id="close-menu-button" class="absolute top-6 right-6 text-[#FFB300] focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    
    <ul class="flex flex-col items-center gap-8 text-xl">
        <li><a href="/" class="{{ request()->is('/') ? 'text-[#FFB300] font-bold' : 'text-white' }}">Home</a></li>
        <li><a href="/paket-umrah" class="{{ request()->is('paket-umrah') ? 'text-[#FFB300] font-bold' : 'text-white' }}">Paket Umrah</a></li>
        <li><a href="/paket-haji" class="{{ request()->is('paket-haji') ? 'text-[#FFB300] font-bold' : 'text-white' }}">Paket Haji</a></li>
        <li><a href="/artikel" class="{{ request()->is('artikel') ? 'text-[#FFB300] font-bold' : 'text-white' }}">Artikel</a></li>
        <li><a href="/kontak" class="{{ request()->is('kontak') ? 'text-[#FFB300] font-bold' : 'text-white' }}">Kontak</a></li>
        <li class="mt-4">
            <a href="https://wa.me/{{ $global_settings['nomor_wa'] ?? '6283133387676' }}" target="_blank" class="bg-[#FFB300] text-black font-bold py-3 px-8 rounded-full">
                Daftar Sekarang
            </a>
        </li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('mobile-menu-button');
        const closeBtn = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        function toggleMenu() {
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('flex');
                // Allow a small delay for display:block to apply before animating transform
                setTimeout(() => {
                    mobileMenu.classList.remove('translate-x-full');
                    mobileMenu.classList.add('translate-x-0');
                }, 10);
            } else {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('flex');
                }, 300); // match transition duration
            }
        }

        menuBtn.addEventListener('click', toggleMenu);
        closeBtn.addEventListener('click', toggleMenu);
    });
</script>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - {{ $global_settings['nama_brand'] ?? 'Fattah Travel' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom Scrollbar for Sidebar */
        .sidebar-scroll::-webkit-scrollbar { width: 4px; }
        .sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
        
        .nav-link {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link:hover {
            transform: translateX(4px);
        }
        .active-link {
            background: linear-gradient(to right, #1e293b, #0f172a);
            border-left: 4px solid #f59e0b;
            color: #f59e0b !important;
            box-shadow: inset 10px 0 15px -10px rgba(245, 158, 11, 0.2);
        }
        
        /* Interactive Elements */
        .btn-hover-effect {
            transition: all 0.2s ease;
        }
        .btn-hover-effect:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }
    </style>
</head>
<body class="bg-[#F8FAFC] font-sans antialiased flex h-screen overflow-hidden text-slate-900">

    <!-- Overlay Sidebar Mobile -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/60 z-30 hidden lg:hidden transition-opacity duration-300 opacity-0 cursor-pointer"></div>

    <aside id="sidebar" class="w-72 -translate-x-full lg:translate-x-0 fixed lg:static bg-[#0F172A] text-slate-300 flex flex-col h-full shadow-2xl z-40 shrink-0 border-r border-slate-800 transition-transform duration-300 ease-in-out">
        
        <div class="h-20 flex items-center px-6 border-b border-slate-800/50 shrink-0 bg-[#0c1222] justify-between lg:justify-start">
            <div class="flex items-center gap-3 group cursor-default">
                <div class="p-1.5 bg-white/5 rounded-xl border border-white/10 shadow-inner transition-all duration-500 group-hover:border-amber-500/50">
                    <img src="{{ isset($global_settings['logo_header']) ? asset('storage/' . $global_settings['logo_header']) : asset('logo.png') }}"
                         alt="Logo {{ $global_settings['nama_brand'] ?? 'Fattah Travel' }}" class="h-9 w-9 object-contain transition-transform duration-500 group-hover:rotate-10">
                </div>
                <div class="flex flex-col">
                    <h1 class="text-sm font-black tracking-tighter text-white uppercase leading-none mb-1">
                        @php
                            $brand = strtoupper($global_settings['nama_brand'] ?? 'FATTAH TRAVEL');
                            $name = str_replace('TRAVEL', '', $brand);
                        @endphp
                        {{ trim($name) }} <span class="text-amber-500">TRAVEL</span>
                    </h1>
                    <span class="text-[10px] text-amber-500 font-bold tracking-[0.2em] uppercase opacity-70">Control Panel</span>
                </div>
            </div>
        </div>

        <nav id="sidebarNav" class="flex-1 px-4 py-6 space-y-8 overflow-y-auto sidebar-scroll">
            
            <div>
                <a href="{{ route('admin.dashboard') }}"
                   class="nav-link flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800/50 group {{ request()->routeIs('admin.dashboard') ? 'active-link text-white shadow-lg' : '' }}">
                    <i class="fas fa-th-large w-5 text-amber-500/70 group-hover:text-amber-500 transition-colors"></i>
                    <span class="font-bold text-xs tracking-wider uppercase">Dashboard</span>
                </a>
            </div>

            <div class="space-y-1">
                <p class="px-4 text-[10px] font-black text-slate-600 uppercase tracking-[0.2em] mb-3">Manajemen Konten</p>
                
                <div class="space-y-1">
                    <div class="flex items-center justify-between px-4 py-2 text-[10px] font-black text-slate-500 uppercase cursor-default">
                        <span>Halaman Home</span>
                        <div class="h-px w-12 bg-slate-800"></div>
                    </div>
                    <div class="pl-2 space-y-0.5">
                        @php
                            $homeMenus = [
                                'admin.home.navbar' => ['icon' => 'fa-bars', 'label' => 'Konfigurasi Navbar'],
                                'admin.home.hero_banner' => ['icon' => 'fa-image', 'label' => 'Hero Banner'],
                                'admin.home.sponsor' => ['icon' => 'fa-handshake', 'label' => 'Sponsor & Mitra'],
                                'admin.home.about' => ['icon' => 'fa-info-circle', 'label' => 'Tentang Kami'],
                                'admin.home.pricing' => ['icon' => 'fa-tags', 'label' => 'Pilihan Paket'],
                                'admin.home.why_us' => ['icon' => 'fa-check-double', 'label' => 'Why Us'],
                                'admin.home.gallery' => ['icon' => 'fa-images', 'label' => 'Galeri Momen'],
                                'admin.home.testimonial' => ['icon' => 'fa-quote-left', 'label' => 'Testimoni'],
                                'admin.home.edukasi' => ['icon' => 'fa-graduation-cap', 'label' => 'Edukasi & Manasik']
                            ];
                        @endphp
                        @foreach($homeMenus as $route => $data)
                            <a href="{{ route($route) }}"
                               class="nav-link flex items-center gap-3 px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 group {{ request()->routeIs($route) ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">
                                <i class="fas {{ $data['icon'] }} w-4 text-[10px] transition-transform group-hover:scale-125"></i>
                                <span>{{ $data['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="space-y-1">
                <p class="px-4 text-[10px] font-black text-slate-600 uppercase tracking-[0.2em] mb-3">Layanan Travel</p>
                <div class="pl-2 space-y-4">
                    <div class="space-y-1">
                        <div class="px-4 py-1 text-[9px] font-bold text-amber-500/50 uppercase italic tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span> Umrah Service
                        </div>
                        <a href="{{ route('admin.umrah.banner') }}" class="nav-link block px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 {{ request()->routeIs('admin.umrah.banner') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">Banner & Header</a>
                        <a href="{{ route('admin.paket.index', ['type' => 'umrah']) }}" class="nav-link block px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 {{ request()->fullUrlIs(route('admin.paket.index', ['type' => 'umrah'])) ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">Kelola Paket Umrah</a>
                        <a href="{{ route('admin.umrah.faq') }}" class="nav-link block px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 {{ request()->routeIs('admin.umrah.faq') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">Keunggulan & FAQ</a>
                    </div>

                    <div class="space-y-1">
                        <div class="px-4 py-1 text-[9px] font-bold text-emerald-500/50 uppercase italic tracking-widest flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Haji Service
                        </div>
                        <a href="{{ route('admin.haji.banner') }}" class="nav-link block px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 {{ request()->routeIs('admin.haji.banner') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">Banner & Header</a>
                        <a href="{{ route('admin.paket.index', ['type' => 'haji']) }}" class="nav-link block px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 {{ request()->fullUrlIs(route('admin.paket.index', ['type' => 'haji'])) ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">Kelola Paket Haji</a>
                        <a href="{{ route('admin.haji.faq') }}" class="nav-link block px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 {{ request()->routeIs('admin.haji.faq') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">Keunggulan & FAQ</a>
                    </div>
                </div>
            </div>

            <div class="space-y-1">
                <p class="px-4 text-[10px] font-black text-slate-600 uppercase tracking-[0.2em] mb-3">Informasi Tambahan</p>
                <div class="pl-2 space-y-1">
                    <a href="{{ route('admin.articles.index') }}" class="nav-link flex items-center gap-3 px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 group {{ request()->routeIs('admin.articles.index') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">
                        <i class="fas fa-pen-fancy w-4 text-[11px] group-hover:rotate-12 transition-transform"></i> Artikel & Berita
                    </a>
                    <a href="{{ route('admin.kontak.profile') }}" class="nav-link flex items-center gap-3 px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 group {{ request()->routeIs('admin.kontak.profile') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">
                        <i class="fas fa-map-marked-alt w-4 text-[11px] group-hover:bounce transition-all"></i> Kontak & Lokasi
                    </a>
                    <a href="{{ route('admin.footer') }}" class="nav-link flex items-center gap-3 px-4 py-2 text-sm rounded-lg hover:bg-slate-800/40 group {{ request()->routeIs('admin.footer') ? 'text-amber-500 font-bold bg-slate-800/30' : 'text-slate-500 hover:text-slate-200' }}">
                        <i class="fas fa-window-maximize w-4 text-[11px]"></i> Pengaturan Footer
                    </a>
                </div>
            </div>

        </nav>

        <div class="p-4 border-t border-slate-800/50 bg-[#0c1222]">
            <div class="flex items-center gap-3 px-2 py-2 group">
                <div class="relative">
                    <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center border border-slate-700 overflow-hidden shadow-inner transition-transform group-hover:scale-110">
                        <i class="fas fa-user-shield text-slate-500 text-sm"></i>
                    </div>
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-[#0c1222] rounded-full"></span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-black text-white truncate uppercase tracking-tighter">{{ Auth::user()->name }}</p>
                    <p class="text-[9px] text-amber-500/80 font-bold truncate uppercase tracking-widest">Main Admin</p>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="shrink-0">
                    @csrf
                    <button type="submit" class="btn-hover-effect w-9 h-9 rounded-xl flex items-center justify-center bg-red-500/10 text-red-500 hover:bg-red-500 hover:text-white shadow-lg shadow-red-500/0 hover:shadow-red-500/30 transition-all">
                        <i class="fas fa-power-off text-xs"></i>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <div class="flex-1 flex flex-col h-full overflow-hidden">
        
        <header class="h-16 bg-white flex items-center justify-between px-4 lg:px-8 z-10 border-b border-slate-200 shrink-0 shadow-[0_1px_15px_-5px_rgba(0,0,0,0.05)] w-full">
            <div class="flex items-center gap-3">
                <!-- Hamburger Button (Mobile Only) -->
                <button id="btn-sidebar-toggle" class="lg:hidden text-slate-500 hover:text-amber-500 transition-colors p-2 rounded-lg bg-slate-50 hover:bg-amber-50">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="hidden sm:flex items-center gap-3 group cursor-default">
                    <div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400 group-hover:bg-amber-50 group-hover:text-amber-600 transition-colors">
                        <i class="fas fa-folder-open text-xs"></i>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Administrator</span>
                        <span class="text-slate-300">/</span>
                        <span class="text-[10px] font-black text-slate-800 uppercase tracking-widest max-w-[150px] truncate">@yield('title', 'Dashboard')</span>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center gap-4 lg:gap-6">
                <div class="flex flex-col items-end">
                    <p class="text-[10px] font-black text-slate-900 leading-none mb-1">Status Sistem</p>
                    <p class="text-[9px] font-bold text-emerald-500 leading-none flex items-center gap-1 uppercase tracking-tighter">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Secure Connection
                    </p>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[#F8FAFC] p-4 lg:p-8 pb-24">
            <div class="max-w-7xl mx-auto animate-in fade-in slide-in-from-bottom-5 duration-700 ease-out">
                @yield('content')
            </div>
        </main>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sidebar Toggle Logic
            const btnSidebarToggle = document.getElementById("btn-sidebar-toggle");
            const sidebar = document.getElementById("sidebar");
            const sidebarOverlay = document.getElementById("sidebar-overlay");

            function toggleSidebar() {
                sidebar.classList.toggle("-translate-x-full");
                
                if(sidebarOverlay.classList.contains("hidden")) {
                    sidebarOverlay.classList.remove("hidden");
                    // timeout short delay to allow block render before opacity transitions
                    setTimeout(() => sidebarOverlay.classList.remove("opacity-0"), 10);
                } else {
                    sidebarOverlay.classList.add("opacity-0");
                    setTimeout(() => sidebarOverlay.classList.add("hidden"), 300);
                }
            }

            if(btnSidebarToggle) {
                btnSidebarToggle.addEventListener("click", toggleSidebar);
            }
            if(sidebarOverlay) {
                sidebarOverlay.addEventListener("click", toggleSidebar);
            }

            const sidebarNav = document.getElementById("sidebarNav");
            
            // Ambil posisi scroll terakhir
            const scrollPos = sessionStorage.getItem("admin-sidebar-scroll");
            if (scrollPos) {
                sidebarNav.scrollTop = scrollPos;
            }

            // Simpan posisi scroll sebelum berpindah halaman
            const navLinks = document.querySelectorAll(".nav-link");
            navLinks.forEach(link => {
                link.addEventListener("click", function() {
                    sessionStorage.setItem("admin-sidebar-scroll", sidebarNav.scrollTop);
                });
            });
        });
    </script>
</body>
</html>
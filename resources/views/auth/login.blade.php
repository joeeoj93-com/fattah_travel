<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - {{ $global_settings['nama_brand'] ?? 'Fattah Travel' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .login-bg {
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), 
                        url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-up {
            animation: slideUp 0.6s ease-out forwards;
        }
    </style>
</head>
<body class="login-bg min-h-screen flex items-center justify-center p-6 font-sans">

    <div class="w-full max-w-md animate-slide-up">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center p-3 bg-amber-500 rounded-2xl shadow-xl shadow-amber-500/20 mb-4">
                <img src="{{ isset($global_settings['logo_header']) ? asset('storage/' . $global_settings['logo_header']) : asset('logo.png') }}" 
                     alt="Logo" class="h-12 w-12 object-contain">
            </div>
            <h1 class="text-2xl font-black text-white tracking-tight uppercase">
                @php
                    $brand = strtoupper($global_settings['nama_brand'] ?? 'FATTAH TRAVEL');
                    $name = str_replace('TRAVEL', '', $brand);
                @endphp
                {{ trim($name) }} <span class="text-amber-500">TRAVEL</span>
            </h1>
            <p class="text-slate-400 text-sm mt-1 uppercase tracking-widest font-medium">Administrator Panel</p>
        </div>

        <div class="glass-card rounded-[2.5rem] shadow-2xl overflow-hidden">
            <div class="p-8 md:p-10">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-slate-900">Selamat Datang</h2>
                    <p class="text-slate-500 text-sm mt-1">Silakan masuk untuk mengelola portal ibadah.</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="space-y-2">
                        <label for="email" class="text-[11px] font-black text-slate-400 uppercase tracking-wider ml-1">Email Address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="far fa-envelope text-slate-400 group-focus-within:text-amber-500 transition-colors"></i>
                            </div>
                            <input type="email" name="email" id="email" required autofocus
                                class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-2xl focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-500 transition-all"
                                placeholder="nama@email.com">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label for="password" class="text-[11px] font-black text-slate-400 uppercase tracking-wider">Password</label>
                            <a href="#" class="text-[10px] font-bold text-amber-600 hover:text-amber-700 uppercase tracking-tighter">Lupa Password?</a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-slate-400 group-focus-within:text-amber-500 transition-colors"></i>
                            </div>
                            <input type="password" name="password" id="password" required
                                class="block w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-2xl focus:outline-none focus:ring-2 focus:ring-amber-500/20 focus:border-amber-500 transition-all"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <div class="flex items-center ml-1">
                        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 text-amber-600 border-slate-300 rounded focus:ring-amber-500 cursor-pointer">
                        <label for="remember" class="ml-2 text-xs text-slate-500 font-medium cursor-pointer">Ingat perangkat ini</label>
                    </div>

                    <button type="submit" 
                        class="w-full bg-[#0F172A] hover:bg-slate-800 text-white font-bold py-4 rounded-2xl shadow-xl shadow-slate-900/20 transition-all duration-300 flex items-center justify-center gap-2 group transform active:scale-[0.98]">
                        <span>Masuk ke Dashboard</span>
                        <i class="fas fa-arrow-right text-xs text-amber-500 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>

            <div class="px-8 py-5 bg-slate-50 border-t border-slate-100 text-center">
                <p class="text-[10px] text-slate-400 font-medium uppercase tracking-[0.2em]">
                    &copy; {{ date('Y') }} {{ $global_settings['nama_brand'] ?? 'Fattah Travel' }} • Secured System
                </p>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="/" class="text-white/60 hover:text-white text-xs font-bold uppercase tracking-widest transition-colors flex items-center justify-center gap-2">
                <i class="fas fa-long-arrow-alt-left"></i> Kembali ke Website
            </a>
        </div>
    </div>

</body>
</html>
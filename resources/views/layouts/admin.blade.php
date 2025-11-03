<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Admin</title>
    
    {{-- MEMUAT TAILWIND CSS (DARI VITE) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- MEMUAT CSS KUSTOM (UNTUK BUTTON, FORM, DLL.) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    {{-- MEMUAT FONT AWESOME (UNTUK IKON) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
        /* Sisakan hanya style alert, karena sidebar sudah di-handle Tailwind */
        .alert-success {
            background-color: #d4edda; color: #155724; padding: 12px 15px; 
            border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da; color: #721c24; padding: 12px 15px; 
            border-radius: 5px; margin-bottom: 15px; border: 1px solid #f5c6cb;
        }
    </style>
    
    {{-- Blok <script> tailwind.config yang salah telah dihapus --}}
</head>
<body class="h-full"> {{-- Menghapus class "admin-body" --}}
    
    <div x-data="{ sidebarOpen: false }" class="flex h-full">
        
        <div x-show="sidebarOpen" class="fixed inset-0 flex z-40 md:hidden" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             x-cloak>
            
            <div @click="sidebarOpen = false" class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
            
            {{-- Menggunakan warna abu-abu gelap standar Tailwind --}}
            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full">
                
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <i class="fa-solid fa-times text-white"></i>
                    </button>
                </div>

                @include('layouts.partials.admin-sidebar')
            </div>
        </div>

        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col h-0 flex-1">
                    {{-- Menggunakan warna abu-abu gelap standar Tailwind --}}
                    <div class="flex flex-col flex-1 bg-gray-800">
                        @include('layouts.partials.admin-sidebar')
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            {{-- Top Bar (Header Konten) --}}
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <button @click.stop="sidebarOpen = true" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none md:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex items-center">
                        <h1 class="text-xl font-semibold text-gray-700 mb-0">@yield('title', 'Dashboard')</h1>
                    </div>
                    
                    <div class="ml-4 flex items-center md:ml-6">
                        {{-- Dropdown Profil (Desktop) --}}
                        <div x-data="{ dropdownOpen: false }" class="ml-3 relative">
                            <div>
                                <button @click="dropdownOpen = !dropdownOpen" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Buka menu user</span>
                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=FFFFFF&background=374151" alt="">
                                </button>
                            </div>
                            <div x-show="dropdownOpen" 
                                 @click.away="dropdownOpen = false"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="transform opacity-100 scale-100"
                                 x-transition:leave-end="transform opacity-0 scale-95"
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" 
                                 x-cloak>
                                
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil Saya</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); this.closest('form').submit();"
                                       class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Logout
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Area Konten Utama --}}
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="p-6"> 

                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sayang Dibuang') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-['Quicksand'] bg-[#FFFCF5]">
        @if (Session::has('message'))
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-indigo-900" x-data="{open: true}" x-show="open">
                <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between flex-wrap">
                        <div class="w-0 flex-1 flex items-center">
                            <span class="flex p-2 rounded-lg bg-indigo-800">
                                <!-- Heroicon name: outline/speakerphone -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                </svg>
                            </span>
                            <p class="ml-3 font-medium text-white truncate">
                                <span class="md:hidden"> {{ Session::get('message') }} </span>
                                <span class="hidden md:inline"> {{ Session::get('message') }} </span>
                            </p>
                        </div>
                        <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                            <button @click="open = false" type="button"
                                class="-mr-1 flex p-2 rounded-md hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                                <span class="sr-only">Dismiss</span>
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="min-h-full">
            <nav class="bg-white shadow-md sticky top-0 z-50">
                <div class="container mx-auto px-4 py-3 flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-20">
                        <span class="ml-3 text-xl font-semibold text-[#374375]">Patner</span>
                    </div>
                    <!-- Navigation Links -->
                    <div class="flex items-center">
                        <a href="#beranda" class="text-gray-800 font-semibold hover:text-[#895159] px-5 py-2">Beranda</a>
                        <div class="relative">
                            <img src="{{ asset('img/profleSeller.png') }}" alt="Profile" class="h-10 cursor-pointer" onclick="toggleDropdown()">
                            <!-- Dropdown -->
                            <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 hidden">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="bg-[#DFAEA1] w-full h-60 flex items-center justify-between">
                <div class="text-[#374375] ml-20 mt-20 flex-col">
                    <div class="text-3xl font-bold">SayangDibuang Patner</div>
                    <div>Nama Restoran</div>
                </div>
            </div>
            <div class="flex-col md:flex w-auto h-auto md:flex-row md:min-h-screen">
                <aside class="border-t-2 border-r-2 border-inherit text-black w-96 space-y-6 mt-10 ml-20">
                    <!-- Menu Items with Dropdown -->
                    <ul :class="{'block': open, 'hidden': !open}" class="space-y-2 mt-4">
                        <!-- Menu Item 1 with Dropdown -->
                        <li @click.away="open = false" x-data="{ open: false }">
                            <table class="w-full">
                                <tr>
                                    <td class="pl-4">
                                        <a href="#" class="block text-black text-2xl font-semibold">
                                            <span>Toko</span>
                                        </a>
                                    </td>
                                    <td class="text-right pr-4">
                                        <button @click="open = !open">
                                            <img src="{{ asset('img/arr-up.png') }}" alt="Dropdown" class="pt-2 h-6 cursor-pointer">
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            <!-- Dropdown Content -->
                            <ul x-show="open" class="pl-8 space-y-2">
                                <li><a href="{{ route('seller.store.profile') }}" class="block text-black text-xl font-normal">Profile Toko</a></li>
                                <li><a href="{{ route('seller.store.address') }}" class="block text-black text-xl font-normal">Alamat Toko</a></li>
                            </ul>
                        </li>
                        
                        <!-- Menu Item 2 with Dropdown -->
                        <li @click.away="open = false" x-data="{ open: false }">
                            <table class="w-full">
                                <tr>
                                    <td class="pl-4">
                                        <a href="#" class="block text-black text-2xl font-semibold">
                                            <span>Pesanan</span>
                                        </a>
                                    </td>
                                    <td class="text-right pr-4">
                                        <button @click="open = !open">
                                            <img src="{{ asset('img/arr-up.png') }}" alt="Dropdown" class="pt-2 h-6 cursor-pointer">
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            <!-- Dropdown Content -->
                            <ul x-show="open" class="pl-8 space-y-2">
                                <li><a href="#" class="block text-black text-xl font-normal">Pesanan Saya</a></li>
                            </ul>
                        </li>
                        
                        <!-- Menu Item 3 with Dropdown -->
                        <li @click.away="open = false" x-data="{ open: false }">
                            <table class="w-full">
                                <tr>
                                    <td class="pl-4">
                                        <a href="#" class="block text-black text-2xl font-semibold">
                                            <span>Produk</span>
                                        </a>
                                    </td>
                                    <td class="text-right pr-4">
                                        <button @click="open = !open">
                                            <img src="{{ asset('img/arr-up.png') }}" alt="Dropdown" class="pt-2 h-6 cursor-pointer">
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            <!-- Dropdown Content -->
                            <ul x-show="open" class="pl-8 space-y-2">
                                <li><a href="#" class="block text-black text-xl font-normal">Produk Saya</a></li>
                                <li><a href="#" class="block text-black text-xl font-normal">Tambah Produk Baru</a></li>
                            </ul>
                        </li>
                        
                        <!-- Menu Item 4 with Dropdown -->
                        <li @click.away="open = false" x-data="{ open: false }">
                            <table class="w-full">
                                <tr>
                                    <td class="pl-4">
                                        <a href="#" class="block text-black text-2xl font-semibold">
                                            <span>Menu 1</span>
                                        </a>
                                    </td>
                                    <td class="text-right pr-4">
                                        <button @click="open = !open">
                                            <img src="{{ asset('img/arr-up.png') }}" alt="Dropdown" class="pt-2 h-6 cursor-pointer">
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            <!-- Dropdown Content -->
                            <ul x-show="open" class="pl-8 space-y-2">
                                <li><a href="#" class="block text-black text-xl font-normal">Submenu 1</a></li>
                                <li><a href="#" class="block text-black text-xl font-normal">Submenu 2</a></li>
                            </ul>
                        </li>
                        
                        <!-- Add more menu items with dropdown as needed -->
                    </ul>
                </aside>
                
                <!-- Page Content -->
                <main class="border-t-2 border-inherit w-full mt-10">
                    {{ $slot }}
                </main>
            </div>           
        </div>
        <!-- Include your custom JavaScript file -->
        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeQ_KpZxmRnaWFlziMcRwEzTi_6rksP3c&libraries=places">
        </script>

        <!-- Include your custom JavaScript file -->
        <script src="{{ asset('js/googlemaps.js') }}"></script>
        <script>
            function toggleDropdown() {
                document.getElementById('dropdown').classList.toggle('hidden');
            }
    
            // Optional: Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.cursor-pointer')) {
                    var dropdowns = document.getElementsByClassName('absolute');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (!openDropdown.classList.contains('hidden')) {
                            openDropdown.classList.add('hidden');
                        }
                    }
                }
            }
        </script>
    </body>
</html>
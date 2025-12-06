<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trevio - Platform Travel Terpercaya</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            :root {
                --color-primary: #3465B8;
                --color-primary-dark: #213E8A;
                --color-secondary: #63B2FF;
                --color-white: #FFFFFF;
            }
        </style>
    @endif
</head>
<body class="bg-white text-gray-900">
    <!-- Header Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="text-2xl font-bold text-[#3465B8]">
                    Trevio
                </div>
                
                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-[#3465B8] font-medium hover:text-[#213E8A] transition-colors">Home</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Pesan Paket Wisata</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Pesanan Kamu</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Tentang Kami</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Profil</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg hover:bg-gray-100" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="#" class="text-[#3465B8] font-medium hover:text-[#213E8A] transition-colors">Home</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Pesan Paket Wisata</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Pesanan Kamu</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Tentang Kami</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Profil</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Banner Section -->
        <section class="relative h-96 md:h-[500px] bg-gradient-to-r from-[#3465B8] to-[#63B2FF] flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Trevio</h1>
                <p class="text-lg md:text-xl mb-8">Platform travel terpercaya untuk semua kebutuhan perjalanan Anda</p>
                <button class="bg-white text-[#3465B8] px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Mulai Perjalanan
                </button>
            </div>
            <!-- Placeholder for future image -->
            <div class="absolute inset-0 bg-black/20"></div>
        </section>

        <!-- Categories Section -->
        <section class="py-16 px-4">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Ayo pesan sesuai kebutuhanmu</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6">
                    <!-- Hotel -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Hotel</p>
                    </div>
                    
                    <!-- Apartemen -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Apartemen</p>
                    </div>
                    
                    <!-- Pesawat -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Pesawat</p>
                    </div>
                    
                    <!-- Kereta Api -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Kereta Api</p>
                    </div>
                    
                    <!-- Bus -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Bus</p>
                    </div>
                    
                    <!-- Rental -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Rental</p>
                    </div>
                    
                    <!-- Wisata -->
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-3 bg-gray-200 rounded-lg flex items-center justify-center group-hover:bg-[#3465B8] transition-colors">
                            <svg class="w-10 h-10 text-gray-500 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-gray-700">Wisata</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Discount Section -->
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Diskon udah nunggu, yuk booking!</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-48 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Promo 1</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-48 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Promo 2</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-48 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Promo 3</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-48 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Promo 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Premium Section -->
        <section class="py-16 px-4">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Pilih premium, rasakan bedanya!</h2>
                
                <div class="bg-gradient-to-r from-[#3465B8] to-[#63B2FF] rounded-lg shadow-lg overflow-hidden h-64 flex items-center justify-center">
                    <div class="text-center text-white">
                        <svg class="w-24 h-24 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <h3 class="text-2xl font-bold mb-2">Premium Experience</h3>
                        <p>Nikmati layanan eksklusif dan fasilitas terbaik</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recommendations Section -->
        <section class="py-16 px-4 bg-gray-50">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Bingung mau kemana? Nih, rekomendasi buat kamu!</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-64 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Destinasi 1</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-64 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Destinasi 2</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-64 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Destinasi 3</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden h-64 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p>Destinasi 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Articles Section -->
        <section class="py-16 px-4">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Artikel dan berita untuk kamu!</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-40 bg-gray-200 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Judul Artikel 1</h3>
                            <p class="text-sm text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="text-[#3465B8] text-sm font-medium hover:text-[#213E8A]">Baca selengkapnya →</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-40 bg-gray-200 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Judul Artikel 2</h3>
                            <p class="text-sm text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="text-[#3465B8] text-sm font-medium hover:text-[#213E8A]">Baca selengkapnya →</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-40 bg-gray-200 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Judul Artikel 3</h3>
                            <p class="text-sm text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="text-[#3465B8] text-sm font-medium hover:text-[#213E8A]">Baca selengkapnya →</a>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-40 bg-gray-200 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Judul Artikel 4</h3>
                            <p class="text-sm text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="#" class="text-[#3465B8] text-sm font-medium hover:text-[#213E8A]">Baca selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">Trevio</h3>
                    <p class="text-gray-400">Platform travel terpercaya untuk semua kebutuhan perjalanan Anda.</p>
                </div>
                
                <!-- Tentang Trevio -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tentang Trevio</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>
                
                <!-- Layanan Kami -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan Kami</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Paket Perjalanan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Hotel</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Villa dan Apartemen</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pesawat</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kereta Api</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sewa Mobil dan Motor</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Bus</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tempat Wisata</a></li>
                    </ul>
                </div>
                
                <!-- Ikuti Kami -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center text-gray-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                            </svg>
                            @travio.id
                        </a>
                        <a href="#" class="flex items-center text-gray-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                            @travio_id
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Trevio. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>

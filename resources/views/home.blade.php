<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trevio - Platform Travel Terpercaya</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3465B8',
                        'primary-dark': '#213E8A',
                        secondary: '#63B2FF',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900">
    <!-- Header Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="text-2xl font-bold text-[#3465B8]">
                    <a href="/" class="hover:text-[#213E8A] transition-colors duration-200">Trevio</a>
                </div>
                
                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-[#3465B8] font-medium hover:text-[#213E8A] transition-colors">Home</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Pesan Paket Wisata</a>
                    <a href="#" class="text-gray-700 hover:text-[#3465B8] transition-colors">Pesanan Kamu</a>
                    <a href="/about" class="text-gray-700 hover:text-[#3465B8] transition-colors">Tentang Kami</a>
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
                    <a href="/about" class="text-gray-700 hover:text-[#3465B8] transition-colors">Tentang Kami</a>
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
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <!-- Logo Section -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-6">Trevio</h3>
                </div>
                
                <!-- Tentang Trevio -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-4">Tentang Trevio</h4>
                    <ul class="space-y-3">
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors duration-200">Tentang Kami</a></li>
                    </ul>
                </div>
                
                <!-- Layanan Kami -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-4">Layanan Kami</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Paket Perjalanan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Hotel</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Villa dan Apartemen</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Pesawat</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Kereta Api</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Sewa Mobil dan Motor</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Bus</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Tempat Wisata</a></li>
                    </ul>
                </div>
                
                <!-- Ikuti Kami -->
                <div>
                    <h4 class="text-sm font-semibold text-gray-300 uppercase tracking-wider mb-4">Ikuti Kami</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-400 hover:text-white transition-colors duration-200">
                                <i class="fab fa-tiktok mr-3 text-lg"></i>
                                @trevio.id
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-400 hover:text-white transition-colors duration-200">
                                <i class="fab fa-instagram mr-3 text-lg"></i>
                                @trevio_id
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 pt-8">
                <div class="text-center text-gray-400">
                    <p>&copy; 2024 Trevio. Semua hak dilindungi undang-undang.</p>
                </div>
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

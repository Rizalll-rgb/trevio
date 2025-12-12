<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Trevio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3465B8',
                        secondary: '#213E8A',
                        accent: '#63B2FF'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-white text-gray-800 font-sans">
    <!-- Header Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-primary hover:text-secondary transition-colors duration-200">Trevio</a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-primary transition-colors duration-200">Home</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors duration-200">Pesan Paket Wisata</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors duration-200">Pesanan Kamu</a>
                    <a href="#" class="text-primary font-medium">Tentang Kami</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors duration-200">Profil</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button class="text-gray-700 hover:text-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Header Banner Section -->
    <section class="bg-gradient-to-r from-primary to-secondary py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 md:p-16 max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Tentang Kami</h1>
                <p class="text-xl md:text-2xl text-white/90 leading-relaxed">
                    Mengenal lebih dekat dengan Trevio, platform perjalanan terpercaya untuk petualangan impian Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Apa Itu Trevio Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-8">Apa Itu Trevio?</h2>
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                        Trevio adalah platform perjalanan digital yang menghubungkan para traveler dengan pengalaman wisata terbaik di Indonesia. 
                        Kami berkomitmen untuk memberikan kemudahan dalam merencanakan, memesan, dan menikmati setiap momen perjalanan Anda.
                    </p>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Dengan teknologi terdepan dan jaringan mitra terpercaya, Trevio hadir sebagai solusi lengkap untuk semua kebutuhan perjalanan Anda, 
                        mulai dari paket wisata, akomodasi, transportasi, hingga aktivitas menarik di destinasi impian.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <!-- Image Placeholder -->
                <div class="order-2 md:order-1">
                    <div class="bg-gradient-to-br from-primary/20 to-accent/20 rounded-2xl h-80 md:h-96 flex items-center justify-center">
                        <div class="text-center text-gray-500">
                            <i class="fas fa-image text-6xl mb-4"></i>
                            <p class="text-lg">Foto Visi</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Visi Kami</h2>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-primary">
                            <p class="text-gray-700 leading-relaxed">
                                [Konten visi akan diisi di sini - placeholder untuk visi utama perusahaan]
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <p class="text-gray-700 leading-relaxed">
                                [Konten visi tambahan akan diisi di sini - placeholder untuk visi pendukung]
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <!-- Content -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Misi Kami</h2>
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-secondary">
                            <p class="text-gray-700 leading-relaxed">
                                [Konten misi pertama akan diisi di sini - placeholder untuk misi utama]
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-primary">
                            <p class="text-gray-700 leading-relaxed">
                                [Konten misi kedua akan diisi di sini - placeholder untuk misi pendukung]
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-accent">
                            <p class="text-gray-700 leading-relaxed">
                                [Konten misi ketiga akan diisi di sini - placeholder untuk misi tambahan]
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Image Placeholder -->
                <div>
                    <div class="bg-gradient-to-br from-secondary/20 to-primary/20 rounded-2xl h-80 md:h-96 flex items-center justify-center">
                        <div class="text-center text-gray-500">
                            <i class="fas fa-image text-6xl mb-4"></i>
                            <p class="text-lg">Foto Misi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kenapa Pilih Kami Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                    Kenapa Pilih Kami untuk Rencana Perjalananmu?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Temukan alasan mengapa ribuan traveler mempercayai Trevio sebagai partner perjalanan mereka
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-star text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Keunggulan Pertama</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        [Konten keunggulan pertama akan diisi di sini - placeholder untuk benefit utama]
                    </p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-accent/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-shield-alt text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Keunggulan Kedua</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        [Konten keunggulan kedua akan diisi di sini - placeholder untuk benefit kedua]
                    </p>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="bg-secondary/10 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-heart text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Keunggulan Ketiga</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        [Konten keunggulan ketiga akan diisi di sini - placeholder untuk benefit ketiga]
                    </p>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Tentang Kami</a></li>
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
</body>
</html>

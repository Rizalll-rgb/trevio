<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trevio - Travel Recommendation App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-blue-600">Trevio</a>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                    <a href="/recommend" class="text-gray-700 hover:text-blue-600 transition">Find Trips</a>
                    <a href="/blog" class="text-gray-700 hover:text-blue-600 transition">Blog</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <p>&copy; 2024 Trevio. Travel Recommendation App. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

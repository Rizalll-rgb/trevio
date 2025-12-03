@extends('layouts.app')

@section('title', 'Travel Tips & Blog - Trevio')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Travel Tips & Blog</h1>
            <p class="text-xl text-gray-600">Discover amazing travel insights and tips for your next adventure</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-medium mb-2">Travel Tips</div>
                    <h3 class="text-xl font-semibold mb-3">10 Essential Packing Tips for Every Traveler</h3>
                    <p class="text-gray-600 mb-4">Learn how to pack smart and travel light with these essential tips that will make your journey more comfortable...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">March 15, 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-r from-green-400 to-green-600"></div>
                <div class="p-6">
                    <div class="text-sm text-green-600 font-medium mb-2">Destinations</div>
                    <h3 class="text-xl font-semibold mb-3">Hidden Gems: Indonesia's Best Kept Secrets</h3>
                    <p class="text-gray-600 mb-4">Explore the lesser-known destinations in Indonesia that offer unique experiences away from the crowds...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">March 10, 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-r from-purple-400 to-purple-600"></div>
                <div class="p-6">
                    <div class="text-sm text-purple-600 font-medium mb-2">Budget Travel</div>
                    <h3 class="text-xl font-semibold mb-3">How to Travel Southeast Asia on a Budget</h3>
                    <p class="text-gray-600 mb-4">Complete guide to exploring Southeast Asia without breaking the bank. Tips on accommodation, food, and transport...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">March 5, 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                </div>
            </article>

            <!-- Blog Post 4 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-r from-red-400 to-red-600"></div>
                <div class="p-6">
                    <div class="text-sm text-red-600 font-medium mb-2">Adventure</div>
                    <h3 class="text-xl font-semibold mb-3">Solo Travel: A Guide to Your First Adventure</h3>
                    <p class="text-gray-600 mb-4">Everything you need to know about traveling solo for the first time. Safety tips, destination ideas, and more...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">February 28, 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                </div>
            </article>

            <!-- Blog Post 5 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-r from-yellow-400 to-yellow-600"></div>
                <div class="p-6">
                    <div class="text-sm text-yellow-600 font-medium mb-2">Food & Culture</div>
                    <h3 class="text-xl font-semibold mb-3">Must-Try Local Foods in Bali</h3>
                    <p class="text-gray-600 mb-4">Discover the authentic flavors of Bali with our guide to traditional dishes and where to find them...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">February 20, 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                </div>
            </article>

            <!-- Blog Post 6 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-r from-indigo-400 to-indigo-600"></div>
                <div class="p-6">
                    <div class="text-sm text-indigo-600 font-medium mb-2">Planning</div>
                    <h3 class="text-xl font-semibold mb-3">Creating the Perfect Travel Itinerary</h3>
                    <p class="text-gray-600 mb-4">Step-by-step guide to planning your travel itinerary that balances adventure with relaxation...</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">February 15, 2024</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                </div>
            </article>
        </div>

        <div class="mt-12 text-center">
            <h2 class="text-2xl font-semibold mb-4">Stay Updated</h2>
            <p class="text-gray-600 mb-6">Get the latest travel tips and destination guides delivered to your inbox</p>
            <div class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Subscribe</button>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="/" class="text-blue-600 hover:text-blue-800 transition">
                ← Back to Home
            </a>
        </div>
    </div>
</div>
@endsection

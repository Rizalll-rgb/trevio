@extends('layouts.app')

@section('title', 'About Trevio')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h1 class="text-4xl font-bold text-center mb-8">About Trevio</h1>
            
            <div class="prose max-w-none">
                <div class="text-center mb-8">
                    <p class="text-xl text-gray-600">
                        Your intelligent travel recommendation companion
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
                        <p class="text-gray-700 leading-relaxed">
                            Trevio is dedicated to helping travelers discover the perfect destinations based on their unique preferences and budget. 
                            Using advanced Analytical Hierarchy Process (AHP) algorithms, we provide personalized recommendations that match your travel style.
                        </p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">How It Works</h2>
                        <p class="text-gray-700 leading-relaxed">
                            Simply tell us your budget, preferred duration, and travel type. Our system analyzes multiple criteria including 
                            price, accessibility, popularity, and facilities to rank and recommend the best travel packages for you.
                        </p>
                    </div>
                </div>

                <div class="bg-blue-50 rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-semibold mb-4">Why Choose Trevio?</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Personalized recommendations based on your budget and preferences</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Scientific AHP methodology for accurate ranking</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Curated travel packages from trusted providers</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Easy-to-use interface for quick trip discovery</span>
                        </li>
                    </ul>
                </div>

                <div class="text-center">
                    <h2 class="text-2xl font-semibold mb-4">Ready to Find Your Perfect Trip?</h2>
                    <p class="text-gray-600 mb-6">
                        Join thousands of travelers who have discovered their dream destinations with Trevio.
                    </p>
                    <a href="/recommend" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Start Your Journey
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

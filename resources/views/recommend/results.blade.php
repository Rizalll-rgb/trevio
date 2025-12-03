@extends('layouts.app')

@section('title', 'Your Recommended Trips - Trevio')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search Summary -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold mb-4">Your Recommended Trips</h1>
            <div class="text-gray-600">
                <p>Based on your preferences:</p>
                <ul class="mt-2 space-y-1">
                    <li>• Budget: IDR {{ number_format($searchCriteria['budget'], 0, ',', '.') }}</li>
                    @if($searchCriteria['duration_days'])
                        <li>• Duration: {{ $searchCriteria['duration_days'] }} days</li>
                    @endif
                    @if($searchCriteria['traveler_type'])
                        <li>• Travel Type: {{ ucfirst($searchCriteria['traveler_type']) }}</li>
                    @endif
                </ul>
            </div>
            <div class="mt-4">
                <a href="/recommend" class="text-blue-600 hover:text-blue-800 transition">
                    ← Modify Search
                </a>
            </div>
        </div>

        <!-- Results -->
        @if($noResults)
            <div class="bg-white rounded-lg shadow-md p-12 text-center">
                <div class="bg-gray-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold mb-4">No trips found</h2>
                <p class="text-gray-600 mb-6">
                    We couldn't find any trips matching your criteria. Try adjusting your budget or preferences.
                </p>
                <a href="/recommend" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Try Again
                </a>
            </div>
        @else
            @if($recommendedTrips->isEmpty())
                <div class="bg-white rounded-lg shadow-md p-12 text-center">
                    <h2 class="text-2xl font-semibold mb-4">No trips available</h2>
                    <p class="text-gray-600">
                        There are currently no trips in our system. Please check back later!
                    </p>
                </div>
            @else
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($recommendedTrips as $trip)
                        <x-trip-card :trip="$trip" />
                    @endforeach
                </div>
                
                @if($recommendedTrips->count() > 5)
                    <div class="mt-8 text-center">
                        <p class="text-gray-600 mb-4">
                            Showing top {{ $recommendedTrips->count() }} recommendations
                        </p>
                        <a href="/" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                            Browse All Trips
                        </a>
                    </div>
                @endif
            @endif
        @endif
    </div>
</div>
@endsection

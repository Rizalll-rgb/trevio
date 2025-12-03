@extends('layouts.app')

@section('title', $trip->name . ' - Trevio')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Trip Header -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            @if($trip->thumbnail_url)
                <img src="{{ $trip->thumbnail_url }}" alt="{{ $trip->name }}" class="w-full h-64 object-cover">
            @else
                <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            @endif
            
            <div class="p-8">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $trip->name }}</h1>
                        <p class="text-gray-600 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            {{ $trip->destination }}
                        </p>
                    </div>
                    <div class="text-right">
                        <div class="text-3xl font-bold text-blue-600">
                            IDR {{ number_format($trip->price, 0, ',', '.') }}
                        </div>
                        <div class="text-gray-500">
                            {{ $trip->duration_days }} days
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach(explode(',', $trip->suitable_for) as $type)
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                            {{ ucfirst(trim($type)) }}
                        </span>
                    @endforeach
                </div>
                
                @if($trip->description)
                    <div class="prose max-w-none">
                        <h3 class="text-lg font-semibold mb-3">Description</h3>
                        <p class="text-gray-700 leading-relaxed">{{ $trip->description }}</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Criteria Breakdown -->
        @if($trip->criteria->isNotEmpty())
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6">Trip Criteria Breakdown</h2>
                <div class="space-y-4">
                    @foreach($trip->criteria as $criteria)
                        <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                            <div>
                                <h3 class="font-semibold text-gray-900">{{ ucfirst($criteria->name) }}</h3>
                                <p class="text-sm text-gray-600">Weight: {{ number_format($criteria->weight, 3) }}</p>
                            </div>
                            <div class="text-right">
                                <div class="text-lg font-semibold text-blue-600">
                                    {{ number_format($criteria->pivot->value, 2) }}
                                </div>
                                <p class="text-sm text-gray-500">Score</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-6 pt-6 border-t">
                    <div class="flex justify-between items-center">
                        <div class="text-lg font-semibold">Total Score:</div>
                        <div class="text-2xl font-bold text-green-600">
                            {{ number_format($trip->criteria->sum(function($c) { return $c->weight * $c->pivot->value; }), 2) }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="mt-8 flex justify-between">
            <a href="/recommend" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition">
                ← Find More Trips
            </a>
            <a href="/" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Back to Home
            </a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Find Your Perfect Trip - Trevio')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-center mb-8">Find Your Perfect Trip</h1>
            
            <form action="/recommend" method="POST" class="space-y-6">
                @csrf
                
                <!-- Budget Field -->
                <div>
                    <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                        Budget (IDR) <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="number" 
                        id="budget" 
                        name="budget" 
                        required
                        min="100000"
                        step="50000"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="e.g., 1000000">
                    <p class="text-sm text-gray-500 mt-1">Minimum budget is IDR 100,000</p>
                </div>

                <!-- Duration Days Field -->
                <div>
                    <label for="duration_days" class="block text-sm font-medium text-gray-700 mb-2">
                        Duration (Days) <span class="text-gray-400">(Optional)</span>
                    </label>
                    <input 
                        type="number" 
                        id="duration_days" 
                        name="duration_days"
                        min="1"
                        max="30"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="e.g., 3">
                    <p class="text-sm text-gray-500 mt-1">Maximum 30 days</p>
                </div>

                <!-- Traveler Type Field -->
                <div>
                    <label for="traveler_type" class="block text-sm font-medium text-gray-700 mb-2">
                        Traveler Type <span class="text-gray-400">(Optional)</span>
                    </label>
                    <select 
                        id="traveler_type" 
                        name="traveler_type"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select traveler type</option>
                        <option value="solo">Solo Traveler</option>
                        <option value="family">Family</option>
                        <option value="friends">Friends</option>
                        <option value="couple">Couple</option>
                    </select>
                    <p class="text-sm text-gray-500 mt-1">Filter trips suitable for your travel type</p>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button 
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">
                        Find My Perfect Trip
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <a href="/" class="text-blue-600 hover:text-blue-800 transition">
                    ← Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@props(['trip'])

<div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-200 overflow-hidden">
    @if($trip->thumbnail_url)
        <img src="{{ $trip->thumbnail_url }}" alt="{{ $trip->name }}" class="w-full h-48 object-cover">
    @else
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
        </div>
    @endif
    
    <div class="p-6">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-xl font-semibold text-gray-900">{{ $trip->name }}</h3>
            @if(isset($trip->total_score))
                <div class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-medium">
                    Score: {{ number_format($trip->total_score, 2) }}
                </div>
            @endif
        </div>
        
        <p class="text-gray-600 mb-3">
            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            {{ $trip->destination }}
        </p>
        
        <div class="flex items-center justify-between mb-4">
            <div class="text-2xl font-bold text-blue-600">
                IDR {{ number_format($trip->price, 0, ',', '.') }}
            </div>
            <div class="text-gray-500">
                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                {{ $trip->duration_days }} days
            </div>
        </div>
        
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach(explode(',', $trip->suitable_for) as $type)
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">
                    {{ ucfirst(trim($type)) }}
                </span>
            @endforeach
        </div>
        
        <a href="/trips/{{ $trip->id }}" class="block w-full bg-blue-600 text-white text-center py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
            View Details
        </a>
    </div>
</div>

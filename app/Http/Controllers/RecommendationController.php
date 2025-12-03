<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AHPService;

class RecommendationController extends Controller
{
    protected $ahpService;

    public function __construct(AHPService $ahpService)
    {
        $this->ahpService = $ahpService;
    }

    /**
     * Show the recommendation form
     */
    public function showForm()
    {
        return view('recommend.form');
    }

    /**
     * Calculate and show recommendations
     */
    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'budget' => 'required|integer|min:100000',
            'duration_days' => 'nullable|integer|min:1|max:30',
            'traveler_type' => 'nullable|in:solo,family,friends,couple',
        ]);

        $budget = $validated['budget'];
        $durationDays = $validated['duration_days'] ?? null;
        $travelerType = $validated['traveler_type'] ?? null;

        // Get recommended trips
        $recommendedTrips = $this->ahpService->getRecommendations(
            $budget,
            $durationDays,
            $travelerType
        );

        // If no trips found, show message
        if ($recommendedTrips->isEmpty()) {
            return view('recommend.results', [
                'recommendedTrips' => collect(),
                'noResults' => true,
                'searchCriteria' => [
                    'budget' => $budget,
                    'duration_days' => $durationDays,
                    'traveler_type' => $travelerType,
                ]
            ]);
        }

        return view('recommend.results', [
            'recommendedTrips' => $recommendedTrips,
            'noResults' => false,
            'searchCriteria' => [
                'budget' => $budget,
                'duration_days' => $durationDays,
                'traveler_type' => $travelerType,
            ]
        ]);
    }
}

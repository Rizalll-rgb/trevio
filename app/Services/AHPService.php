<?php

namespace App\Services;

use App\Models\Trip;
use App\Models\Criteria;
use Illuminate\Support\Collection;

class AHPService
{
    /**
     * Get recommended trips based on user preferences
     *
     * @param int $budget
     * @param int|null $durationDays
     * @param string|null $travelerType
     * @return Collection
     */
    public function getRecommendedTrips(int $budget, ?int $durationDays = null, ?string $travelerType = null): Collection
    {
        // Get all trips with their criteria values and criteria weights
        $trips = Trip::with(['criteria' => function ($query) {
            $query->withPivot('value');
        }])->get();

        // Filter trips based on budget and traveler type
        $filteredTrips = $trips->filter(function ($trip) use ($budget, $durationDays, $travelerType) {
            // Budget filter
            if ($trip->price > $budget) {
                return false;
            }

            // Duration filter (optional)
            if ($durationDays && $trip->duration_days > $durationDays) {
                return false;
            }

            // Traveler type filter (optional)
            if ($travelerType && !$trip->isSuitableFor($travelerType)) {
                return false;
            }

            return true;
        });

        // Calculate total score for each trip
        $recommendedTrips = $filteredTrips->map(function ($trip) {
            $totalScore = $this->calculateTotalScore($trip);
            
            // Add total_score to trip object
            $trip->total_score = $totalScore;
            
            return $trip;
        });

        // Sort by total score descending
        return $recommendedTrips->sortByDesc('total_score')->values();
    }

    /**
     * Calculate total score for a trip using AHP weighted sum
     *
     * @param Trip $trip
     * @return float
     */
    private function calculateTotalScore(Trip $trip): float
    {
        $totalScore = 0;

        foreach ($trip->criteria as $criteria) {
            $weight = $criteria->weight;
            $value = $criteria->pivot->value;
            
            $totalScore += $weight * $value;
        }

        return $totalScore;
    }

    /**
     * Get all available criteria
     *
     * @return Collection
     */
    public function getAllCriteria(): Collection
    {
        return Criteria::orderBy('name')->get();
    }

    /**
     * Validate traveler type
     *
     * @param string $travelerType
     * @return bool
     */
    public function isValidTravelerType(string $travelerType): bool
    {
        $validTypes = ['solo', 'family', 'friends', 'couple'];
        return in_array($travelerType, $validTypes);
    }
}

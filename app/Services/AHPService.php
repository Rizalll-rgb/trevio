<?php

namespace App\Services;

use App\Models\Trip;
use App\Models\Criteria;
use Illuminate\Support\Collection;

class AHPService
{
    /**
     * Get recommended trips based on user preferences using AHP calculation
     *
     * @param int $budget
     * @param int|null $durationDays
     * @param string|null $travelerType
     * @return Collection
     */
    public function getRecommendations(int $budget, ?int $durationDays = null, ?string $travelerType = null): Collection
    {
        // 1. Load criteria with weights
        $criteria = $this->loadCriteria();
        
        // 2. Load trips with criteria values using relationships
        $trips = $this->loadTripsWithCriteriaValues();
        
        // 3. Filter trips based on user constraints
        $filteredTrips = $this->filterTrips($trips, $budget, $durationDays, $travelerType);
        
        // 4. Calculate AHP scores
        $scoredTrips = $this->calculateScores($filteredTrips, $criteria);
        
        // 5. Sort by descending total_score
        return $scoredTrips->sortByDesc('total_score')->values();
    }

    /**
     * Load all criteria with their weights
     *
     * @return Collection
     */
    private function loadCriteria(): Collection
    {
        return Criteria::all();
    }

    /**
     * Load trips with their criteria values using relationships
     *
     * @return Collection
     */
    private function loadTripsWithCriteriaValues(): Collection
    {
        return Trip::with(['criteriaValues.criteria'])->get();
    }

    /**
     * Filter trips based on budget, duration, and traveler type
     *
     * @param Collection $trips
     * @param int $budget
     * @param int|null $durationDays
     * @param string|null $travelerType
     * @return Collection
     */
    private function filterTrips(Collection $trips, int $budget, ?int $durationDays, ?string $travelerType): Collection
    {
        return $trips->filter(function (Trip $trip) use ($budget, $durationDays, $travelerType) {
            // Budget filter: trip.price <= budget
            if ($trip->price > $budget) {
                return false;
            }

            // Duration filter: if provided, trip.duration_days == durationDays
            if ($durationDays !== null && $trip->duration_days != $durationDays) {
                return false;
            }

            // Traveler type filter: if provided, trip.suitable_for contains the traveler type
            if ($travelerType !== null && !$this->isTripSuitableFor($trip, $travelerType)) {
                return false;
            }

            return true;
        });
    }

    /**
     * Calculate AHP scores for trips
     * total_score = Σ (criteria.weight × trip_criteria_value.value)
     *
     * @param Collection $trips
     * @param Collection $criteria
     * @return Collection
     */
    private function calculateScores(Collection $trips, Collection $criteria): Collection
    {
        return $trips->map(function (Trip $trip) use ($criteria) {
            $totalScore = 0;

            // Calculate weighted sum for each trip
            foreach ($trip->criteriaValues as $criteriaValue) {
                $weight = $criteria->firstWhere('id', $criteriaValue->criteria_id)?->weight ?? 0;
                $value = $criteriaValue->value;
                
                $totalScore += $weight * $value;
            }

            // Add computed total_score field
            $trip->total_score = $totalScore;

            return $trip;
        });
    }

    /**
     * Check if trip is suitable for given traveler type
     *
     * @param Trip $trip
     * @param string $travelerType
     * @return bool
     */
    private function isTripSuitableFor(Trip $trip, string $travelerType): bool
    {
        $suitableTypes = explode(',', $trip->suitable_for);
        return in_array($travelerType, array_map('trim', $suitableTypes));
    }

    /**
     * Get all available criteria (for admin/debug purposes)
     *
     * @return Collection
     */
    public function getAllCriteria(): Collection
    {
        return Criteria::orderBy('name')->get();
    }

    /**
     * Validate traveler type input
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

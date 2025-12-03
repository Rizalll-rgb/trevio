<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'name',
        'destination',
        'price',
        'duration_days',
        'description',
        'thumbnail_url',
        'suitable_for',
    ];

    /**
     * Relationship to trip criteria values (for AHP calculations)
     */
    public function criteriaValues()
    {
        return $this->hasMany(TripCriteriaValue::class);
    }

    /**
     * Relationship to criteria (for UI display)
     */
    public function criteria()
    {
        return $this->belongsToMany(Criteria::class, 'trip_criteria_values')
                    ->withPivot('value');
    }

    /**
     * Legacy method - kept for compatibility
     */
    public function isSuitableFor($travelerType)
    {
        return in_array($travelerType, explode(',', $this->suitable_for));
    }
}

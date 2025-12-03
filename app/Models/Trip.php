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

    public function tripCriteriaValues()
    {
        return $this->hasMany(TripCriteriaValue::class);
    }

    public function criteria()
    {
        return $this->belongsToMany(Criteria::class, 'trip_criteria_values')
                    ->withPivot('value');
    }

    public function isSuitableFor($travelerType)
    {
        return in_array($travelerType, explode(',', $this->suitable_for));
    }
}

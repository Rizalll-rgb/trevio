<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $table = 'criteria';
    
    protected $fillable = [
        'name',
        'weight',
    ];

    protected $casts = [
        'weight' => 'double',
    ];

    public function tripCriteriaValues()
    {
        return $this->hasMany(TripCriteriaValue::class);
    }

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'trip_criteria_values')
                    ->withPivot('value');
    }
}

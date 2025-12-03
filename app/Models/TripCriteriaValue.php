<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripCriteriaValue extends Model
{
    protected $table = 'trip_criteria_values';
    
    protected $fillable = [
        'trip_id',
        'criteria_id',
        'value',
    ];

    protected $casts = [
        'value' => 'double',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}

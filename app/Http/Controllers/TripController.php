<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    /**
     * Show trip details
     */
    public function show($id)
    {
        $trip = Trip::with(['criteria' => function ($query) {
            $query->withPivot('value');
        }])->findOrFail($id);

        return view('trips.show', compact('trip'));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = [
            [
                'name' => 'Bali Paradise Getaway',
                'destination' => 'Bali, Indonesia',
                'price' => 2500000,
                'duration_days' => 4,
                'description' => 'Experience the magical island of Bali with its stunning beaches, ancient temples, and vibrant culture. This package includes accommodation, guided tours, and traditional dance performances.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,couple,friends'
            ],
            [
                'name' => 'Yogyakarta Cultural Journey',
                'destination' => 'Yogyakarta, Indonesia',
                'price' => 1800000,
                'duration_days' => 3,
                'description' => 'Explore the cultural heart of Java with visits to Borobudur Temple, Prambanan Temple, and the Sultan\'s Palace. Includes traditional batik workshop and local cuisine experience.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,family,friends'
            ],
            [
                'name' => 'Lombok Island Adventure',
                'destination' => 'Lombok, Indonesia',
                'price' => 3200000,
                'duration_days' => 5,
                'description' => 'Discover the pristine beaches of Lombok, hike Mount Rinjani, and experience traditional Sasak culture. Perfect for adventure seekers and nature lovers.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,friends,couple'
            ],
            [
                'name' => 'Jakarta City Explorer',
                'destination' => 'Jakarta, Indonesia',
                'price' => 1200000,
                'duration_days' => 2,
                'description' => 'Explore Indonesia\'s vibrant capital with visits to historic Old Town, modern shopping centers, and iconic landmarks like National Monument and Istiqlal Mosque.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,family,friends'
            ],
            [
                'name' => 'Bandung Cool Escape',
                'destination' => 'Bandung, Indonesia',
                'price' => 1500000,
                'duration_days' => 3,
                'description' => 'Enjoy the cool climate of Bandung with factory outlet shopping, volcanic hot springs, and stunning tea plantations. Perfect for a quick getaway.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,couple,friends'
            ],
            [
                'name' => 'Komodo Dragon Expedition',
                'destination' => 'Komodo Island, Indonesia',
                'price' => 5500000,
                'duration_days' => 4,
                'description' => 'Witness the legendary Komodo dragons in their natural habitat. Includes island hopping, snorkeling in pristine waters, and trekking through dramatic landscapes.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,friends,couple'
            ],
            [
                'name' => 'Raja Ampat Paradise',
                'destination' => 'Raja Ampat, Indonesia',
                'price' => 8500000,
                'duration_days' => 6,
                'description' => 'Discover the underwater paradise of Raja Ampat with world-class diving spots, pristine beaches, and breathtaking karst islands. A true bucket-list destination.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,couple,friends'
            ],
            [
                'name' => 'Ubud Wellness Retreat',
                'destination' => 'Ubud, Bali',
                'price' => 2800000,
                'duration_days' => 4,
                'description' => 'Rejuvenate your mind, body, and soul in Ubud with yoga sessions, spa treatments, and healthy organic cuisine. Includes rice terrace trekking and traditional healing experiences.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,couple,family'
            ],
            [
                'name' => 'Sumatra Wildlife Safari',
                'destination' => 'Sumatra, Indonesia',
                'price' => 4200000,
                'duration_days' => 5,
                'description' => 'Encounter Sumatra\'s incredible wildlife including orangutans, elephants, and tigers in their natural habitat. Includes jungle trekking and river cruises.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,friends,family'
            ],
            [
                'name' => 'Maldives Honeymoon Package',
                'destination' => 'Maldives',
                'price' => 12000000,
                'duration_days' => 5,
                'description' => 'Experience ultimate luxury in the Maldives with overwater villa, private beach dinners, and world-class diving. Perfect for romantic getaways.',
                'thumbnail_url' => null,
                'suitable_for' => 'couple'
            ],
            [
                'name' => 'Singapore Family Fun',
                'destination' => 'Singapore',
                'price' => 6500000,
                'duration_days' => 4,
                'description' => 'Family-friendly adventure in Singapore with Universal Studios, Gardens by the Bay, Sentosa Island, and educational museums. Perfect for all ages.',
                'thumbnail_url' => null,
                'suitable_for' => 'family'
            ],
            [
                'name' => 'Thailand Backpacking Adventure',
                'destination' => 'Thailand',
                'price' => 3500000,
                'duration_days' => 7,
                'description' => 'Backpack through Thailand\'s highlights including Bangkok, Chiang Mai, and southern islands. Experience street food, temples, and vibrant nightlife.',
                'thumbnail_url' => null,
                'suitable_for' => 'solo,friends'
            ]
        ];

        foreach ($trips as $tripData) {
            $trip = Trip::create($tripData);
            $this->createTripCriteriaValues($trip);
        }
    }

    private function createTripCriteriaValues(Trip $trip): void
    {
        $criteria = DB::table('criteria')->get();
        
        foreach ($criteria as $criterion) {
            $value = $this->generateCriteriaValue($trip, $criterion);
            
            DB::table('trip_criteria_values')->insert([
                'trip_id' => $trip->id,
                'criteria_id' => $criterion->id,
                'value' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    private function generateCriteriaValue(Trip $trip, $criterion): float
    {
        // Generate realistic values based on trip characteristics
        switch ($criterion->name) {
            case 'price':
                // Lower price gets higher score (inverted)
                return max(0.1, 1.0 - ($trip->price / 15000000));
            
            case 'duration':
                // Medium duration gets highest score
                if ($trip->duration_days >= 3 && $trip->duration_days <= 5) {
                    return 0.9;
                } elseif ($trip->duration_days >= 6 && $trip->duration_days <= 7) {
                    return 0.8;
                } else {
                    return 0.6;
                }
            
            case 'accessibility':
                // Random but reasonable accessibility scores
                return rand(60, 95) / 100;
            
            case 'popularity':
                // Random popularity scores
                return rand(50, 90) / 100;
            
            case 'facilities':
                // Higher price trips tend to have better facilities
                return min(0.95, 0.5 + ($trip->price / 20000000));
            
            default:
                return 0.5;
        }
    }
}

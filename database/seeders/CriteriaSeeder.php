<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criteria = [
            ['name' => 'price', 'weight' => 0.35],
            ['name' => 'duration', 'weight' => 0.20],
            ['name' => 'accessibility', 'weight' => 0.15],
            ['name' => 'popularity', 'weight' => 0.15],
            ['name' => 'facilities', 'weight' => 0.15],
        ];

        foreach ($criteria as $criterion) {
            Criteria::create($criterion);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features   = [
            ' Elevator in building', 'Free Wifi', 'Free Parking', 'Air Conditioned', 'Online Ordering', ' Pet Friendly', ' Outdoor Seating', 'Wheelchair Friendly'
        ];

        foreach($features as $feature):
            Feature::create([
                'title' => $feature,
            ]);
        endforeach;
    }
}

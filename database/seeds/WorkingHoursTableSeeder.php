<?php

use App\Models\WorkingHour;
use Illuminate\Database\Seeder;

class WorkingHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days   = [
            'Monday', 'Tuesday', 'Wednesday', 'Thurday', 'Friday', 'Saturday', 'Sunday'
        ];

        foreach($days as $day) {
            WorkingHour::create([
                'day'   => $day,
            ]);
        }
    }
}

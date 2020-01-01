<?php

use Illuminate\Database\Seeder;
use App\Listing;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 1000 ; $i++):
            Listing::create([
                'title'         => "Listing $i",
                'rate'          => 5,
                'review'        => $i,
                'description'   => "Descripiton $i",
                'image'         => "http://citybook.kwst.net/images/all/$i.jpg"
            ]);
        endfor;
    }
}

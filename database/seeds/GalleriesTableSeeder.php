<?php

use App\Models\Gallery;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [
            [
                'listing_id'    => Listing::findOrFail(1)->id,
                'url'           => '/img/slides/7.jpg',
            ],
            [
                'listing_id'    => Listing::findOrFail(1)->id,
                'url'           => '/img/slides/8.jpg',
            ],
            [
                'listing_id'    => Listing::findOrFail(2)->id,
                'url'           => '/img/slides/9.jpg',
            ],
            [
                'listing_id'    => Listing::findOrFail(2)->id,
                'url'           => '/img/slides/10.jpg',
            ],
            [
                'listing_id'    => Listing::findOrFail(2)->id,
                'url'           => '/img/slides/11.jpg',
            ],
        ];

        foreach($galleries as $gallery) {
            Gallery::create([
                'listing_id'    => $gallery['listing_id'],
                'url'           => $gallery['url'],
            ]);
        }
    }
}

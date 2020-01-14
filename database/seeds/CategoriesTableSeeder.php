<?php

use App\Models\Category;
use App\Models\Listing;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'name'      => 'Hotels',
            ],
            [
                'name'      => 'Restuarants',
            ],
            [
                'name'      => 'Events',
            ],
        ];

        $faker      = Faker::create();
        $user       = User::first();
        foreach ($categories as $category)  {
            $cat = Category::create([
                'title'  => $category['name']
            ]);

            for ($i = 1; $i <= 3; $i++) {
                Listing::create([
                    'title'         => $faker->sentence(),
                    'description'   => $faker->text($maxNbChars = 200),
                    'phone'         => $faker->phoneNumber(),
                    'email'         => $faker->safeEmail(),
                    'address'       => $faker->address(),
                    'image'         => "/img/slides/" . $faker->randomElement([7, 8, 9, 10, 11]) . ".jpg",
                    'user_id'       => $user->id,
                    'category_id'   => $cat->id,
                ]);
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title'         => 'Category 1',
            'description'   => 'Description 1',
            'image'         => 'http://citybook.kwst.net/images/all/1.jpg',
            'active'        => 1
        ]);

        Category::create([
            'title'         => 'Category 2',
            'description'   => 'Description 2',
            'image'         => 'http://citybook.kwst.net/images/all/1.jpg',
            'active'        => 1
        ]);

        Category::create([
            'title'         => 'Category 3',
            'description'   => 'Description 3',
            'image'         => 'http://citybook.kwst.net/images/all/1.jpg',
            'active'        => 1
        ]);

        Category::create([
            'title'         => 'Category 4',
            'description'   => 'Description 4',
            'image'         => 'http://citybook.kwst.net/images/all/1.jpg',
            'active'        => 1
        ]);

        Category::create([
            'title'         => 'Category 5',
            'description'   => 'Description 5',
            'image'         => 'http://citybook.kwst.net/images/all/1.jpg',
            'active'        => 1
        ]);

        Category::create([
            'title'         => 'Category 6',
            'description'   => 'Description 6',
            'image'         => 'http://citybook.kwst.net/images/all/1.jpg',
            'active'        => 1
        ]);
    }
}

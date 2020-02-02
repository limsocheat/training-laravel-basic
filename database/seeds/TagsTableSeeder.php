<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags   = [
            'Hotel', 'Hostel', 'Guesthouse', 'Dom', 'Resort', 'Beoungkalo', 'House'
        ];

        foreach($tags as $tag)
        {
            Tag::create([
                'title' => $tag,
            ]);
        }
    }
}

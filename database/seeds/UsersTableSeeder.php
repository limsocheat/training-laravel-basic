<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user   = User::create([ 
            'name'  => 'Lim Socheat', 
            'email'  => 'limsocheat111@gmail.com', 
            'password' => bcrypt('12345678'), 
            'phone' => '078887323'
        ]);
    }
}

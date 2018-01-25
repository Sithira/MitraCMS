<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => "Sithia Munasinghe",
                'email' => 'sithiraac@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'id' => 2,
                'name' => "Sanura Wijayarathne",
                'email' => 'sanu.wijay@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'id' => 3,
                'name' => "Dinusha Jayashan",
                'email' => 'dinusha.jayashan01@gmail.com',
                'password' => bcrypt('123123')
            ]
        ]);
    }
}

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
        \App\Models\User::create([
            'name' => "Sithia Munasinghe",
            'email' => 'sithiraac@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}

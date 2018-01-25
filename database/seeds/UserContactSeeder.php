<?php

use Illuminate\Database\Seeder;

class UserContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_contacts')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'number' => 0712333356
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'number' => 0721341631
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'number' => 0711322531
            ]
        ]);
    }
}

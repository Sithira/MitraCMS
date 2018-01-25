<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'id' => 1,
                'description' => 'kaj jad aa',
                'rating' => 4.5,
                'account_id' => 1
            ],
            [
                'id' => 2,
                'description' => 'kad jad aa',
                'rating' => 3.5,
                'account_id' => 2
            ],
            [
                'id' => 3,
                'description' => 'kaj jaadd aa',
                'rating' => 5.0,
                'account_id' => 3
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            [
                'id' => 1,
                'amount' => 1200,
                'phase_id' => 1,
                'user_id' => 1
            ],
            [
                'id' => 2,
                'amount' => 4500,
                'phase_id' => 2,
                'user_id' => 2
            ],
            [
                'id' => 3,
                'amount' => 3200,
                'phase_id' => 3,
                'user_id' => 3
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'id' => 1,
                'name' => 'lkjnl',
                'description' => 'anbvsdlmkla',
                'user_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'adsa',
                'description' => 'aadafaadasda',
                'user_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'aerssa',
                'description' => 'aaaa asda',
                'user_id' => 3
            ]
        ]);
    }
}

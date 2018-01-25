<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'id' => 1,
                'name' => 'lkjnl',
                'submission_date' => 2018-01-31,
                'received_date' => 2018-01-19,
                'description' => 'anvs ssbvsda',
                'account_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'jhnl',
                'submission_date' => 2018-02-05,
                'received_date' => 2018-01-19,
                'description' => 'kaj jad aa',
                'account_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'ewiiwe',
                'submission_date' => 2018-02-15,
                'received_date' => 2018-01-11,
                'description' => 'jah vabvsda',
                'account_id' => 3
            ]
        ]);
    }
}

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
                'submission_date' => \Carbon\Carbon::now(),
                'received_date' => \Carbon\Carbon::now(),
                'status' => 1,
                'description' => 'anvs ssbvsda',
                'account_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'jhnl',
                'submission_date' => \Carbon\Carbon::now(),
                'received_date' => \Carbon\Carbon::now(),
                'status' => 1,
                'description' => 'kaj jad aa',
                'account_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'ewiiwe',
                'submission_date' => \Carbon\Carbon::now(),
                'received_date' => \Carbon\Carbon::now(),
                'status' => 0,
                'description' => 'jah vabvsda',
                'account_id' => 3
            ]
        ]);
    }
}

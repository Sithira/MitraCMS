<?php

use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phases')->insert([
            [
                'id' => 1,
                'name' => 'lkjnl',
                'status' => 0,
                'description' => 'anvs ssbvsda',
                'project_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'sfjnl',
                'status' => 1,
                'description' => 'aaas sda',
                'project_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'vssv',
                'status' => 0,
                'description' => 'adssbvsda',
                'project_id' => 3
            ]
        ]);
    }
}

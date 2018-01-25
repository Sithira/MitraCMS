<?php

use Illuminate\Database\Seeder;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_user')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'project_id' => 1
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'project_id' => 2
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'project_id' => 3
            ]
        ]);
    }
}

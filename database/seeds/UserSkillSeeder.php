<?php

use Illuminate\Database\Seeder;

class UserSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_skills')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'skill' => 'daafa aada'
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'skill' => 'afafa'
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'skill' => 'afafq qqfq'
            ]
        ]);
    }
}

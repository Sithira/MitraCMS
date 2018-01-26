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

        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'Admin'
            ],
            [
                'name' => 'human-resource-manager',
                'display_name' => 'hrm',
                'description' => 'Human Resource Manager'
            ],
            [
                'name' => 'resource-manager',
                'display_name' => 'rm',
                'description' => 'Resource Manager'
            ],
            [
                'name' => 'employee',
                'display_name' => 'employee',
                'description' => 'Employee'
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => "Sithia Munasinghe",
                'email' => 'sithiraac@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'name' => "Sanura Wijayarathne",
                'email' => 'sanu.wijay@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'name' => "Dinusha Jayashan",
                'email' => 'dinusha.jayashan01@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'name' => "Achala Jayashan",
                'email' => 'dinusha.jayashan02@gmail.com',
                'password' => bcrypt('123123')
            ]
        ]);

        \App\Models\User::find(1)->attachRoles([1]);

        \App\Models\User::find(2)->attachRoles([2]);

        \App\Models\User::find(3)->attachRoles([3]);

        \App\Models\User::find(4)->attachRoles([4]);

    }
}

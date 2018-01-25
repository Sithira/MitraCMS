<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTable::class);
        $this->call(AccountSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(PhaseSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProjectUserSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(UserContactSeeder::class);
        $this->call(UserSkillSeeder::class);
    }
}

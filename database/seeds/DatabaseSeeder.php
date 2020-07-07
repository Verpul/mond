<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DataTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(TokensTableSeeder::class);
        $this->call(EdsTableSeeder::class);
        $this->call(EdsTokensTableSeeder::class);
    }
}

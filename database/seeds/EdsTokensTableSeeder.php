<?php

use Illuminate\Database\Seeder;

class EdsTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Eds_tokens::class, 20)->create();
    }
}

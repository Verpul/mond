<?php

use Illuminate\Database\Seeder;

class EdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Eds::class, 10)->create();
    }
}

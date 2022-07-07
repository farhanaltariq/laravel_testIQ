<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // call N1 seeder
        // if n1 is empty
        if(\App\Models\Key_N1::count() == 0){
            $this->call(Key_N1Seeder::class);
        }
    }
}

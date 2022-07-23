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
        if(\App\Models\Key_V::count() == 0)
            $this->call(Key_VSeeder::class);

        if(\App\Models\Key_N1::count() == 0)
            $this->call(Key_N1Seeder::class);
        
        if(\App\Models\Key_N2::count() == 0)
            $this->call(Key_N2Seeder::class);

        if(\App\Models\Key_N3::count() == 0)
            $this->call(Key_N3Seeder::class);
        
        if(\App\Models\User::count() == 0)
            $this->call(UserSeeder::class);
    }
}

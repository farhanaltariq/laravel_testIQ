<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed admin user
        $user = new \App\Models\User;
        $user->name = 'Admin';
        $user->email = 'admin@bpi.co.id';
        $user->password = bcrypt('adminbpi2022');
        $user->save();
    }
}

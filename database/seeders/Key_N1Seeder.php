<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Key_N1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Key_N1')->insert([
            'ans1' => 'E',
            'ans2' => 'B',
            'ans3' => 'A',
            'ans4' => 'E',
            'ans5' => 'C',
            'ans6' => 'C',
            'ans7' => 'B',
            'ans8' => 'A',
            'ans9' => 'C',
            'ans10' => 'B',
            'ans11' => 'C',
            'ans12' => 'E',
            'ans13' => 'E',
            'ans14' => 'C',
            'ans15' => 'C',
            'ans16' => 'A',
            'ans17' => 'C',
            'ans18' => 'D',
            'ans19' => 'D',
            'ans20' => 'A',
            'ans21' => 'C',
            'ans22' => 'A',
            'ans23' => 'D',
            'ans24' => 'A',
            'ans25' => 'A',
        ]);
    }
}

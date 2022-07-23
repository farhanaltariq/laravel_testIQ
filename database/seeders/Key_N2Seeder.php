<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Key_N2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            ['no' => 1, 'answer' => 'A, B, D'],
            ['no' => 2, 'answer' => 'C'],
            ['no' => 3, 'answer' => 'A, C, D, E'],
            ['no' => 4, 'answer' => 'A, B, C, D, E'],
            ['no' => 5, 'answer' => 'C, D, E'],
            ['no' => 6, 'answer' => 'B'],
            ['no' => 7, 'answer' => 'C'],
            ['no' => 8, 'answer' => 'B, C'],
            ['no' => 9, 'answer' => 'A, D'],
            ['no' => 10, 'answer' => 'C'],
            ['no' => 11, 'answer' => 'B, D, E'],
            ['no' => 12, 'answer' => 'A, E'],
            ['no' => 13, 'answer' => 'B, C'],
            ['no' => 14, 'answer' => 'D, E'],
            ['no' => 15, 'answer' => 'D'],
            ['no' => 16, 'answer' => 'D'],
            ['no' => 17, 'answer' => 'A, D, E'],
            ['no' => 18, 'answer' => 'A, B, D'],
            ['no' => 19, 'answer' => 'B, C'],
            ['no' => 20, 'answer' => 'A, E'],
        ];
        DB::table('Key_N2')->insert($answers);
    }
}

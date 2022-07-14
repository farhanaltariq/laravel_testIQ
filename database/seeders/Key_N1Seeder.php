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
        $answers = [
            ['no' => 1, 'answer' => 'E'],
            ['no' => 2, 'answer' => 'B'],
            ['no' => 3, 'answer' => 'A'],
            ['no' => 4, 'answer' => 'E'],
            ['no' => 5, 'answer' => 'C'],
            ['no' => 6, 'answer' => 'C'],
            ['no' => 7, 'answer' => 'B'],
            ['no' => 8, 'answer' => 'A'],
            ['no' => 9, 'answer' => 'C'],
            ['no' => 10, 'answer' => 'B'],
            ['no' => 11, 'answer' => 'C'],
            ['no' => 12, 'answer' => 'E'],
            ['no' => 13, 'answer' => 'E'],
            ['no' => 14, 'answer' => 'C'],
            ['no' => 15, 'answer' => 'C'],
            ['no' => 16, 'answer' => 'A'],
            ['no' => 17, 'answer' => 'C'],
            ['no' => 18, 'answer' => 'D'],
            ['no' => 19, 'answer' => 'D'],
            ['no' => 20, 'answer' => 'A'],
            ['no' => 21, 'answer' => 'C'],
            ['no' => 22, 'answer' => 'A'],
            ['no' => 23, 'answer' => 'D'],
            ['no' => 24, 'answer' => 'A'],
            ['no' => 25, 'answer' => 'A'],
        ];
        DB::table('Key_N1')->insert($answers);
    }
}

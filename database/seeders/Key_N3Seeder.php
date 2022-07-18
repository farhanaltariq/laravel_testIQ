<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Key_N3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            ['no' => 1, 'answer' => 'D'],
            ['no' => 2, 'answer' => 'B'],
            ['no' => 3, 'answer' => 'C'],
            ['no' => 4, 'answer' => 'B'],
            ['no' => 5, 'answer' => 'B'],
            ['no' => 6, 'answer' => 'C'],
            ['no' => 7, 'answer' => 'A'],
            ['no' => 8, 'answer' => 'C'],
            ['no' => 9, 'answer' => 'C'],
            ['no' => 10, 'answer' => 'B'],
            ['no' => 11, 'answer' => 'B'],
            ['no' => 12, 'answer' => 'D'],
            ['no' => 13, 'answer' => 'C'],
            ['no' => 14, 'answer' => 'D'],
            ['no' => 15, 'answer' => 'A'],
            ['no' => 16, 'answer' => 'C'],
            ['no' => 17, 'answer' => 'C'],
            ['no' => 18, 'answer' => 'B'],
            ['no' => 19, 'answer' => 'C'],
            ['no' => 20, 'answer' => 'B'],
        ];
        DB::table('Key_N3')->insert($answers);
    }
}

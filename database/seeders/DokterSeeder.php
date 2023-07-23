<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'name' => 'Gullit Ramadhan',
                'phone' => '087567847584',
                'gender' => 'Laki - Laki',
                'specialist_id' => 1
            ],
            [
                'name' => 'Gullit Ramadhan',
                'phone' => '087567847584',
                'gender' => 'Laki - Laki',
                'specialist_id' => 2
            ],
            [
                'name' => 'Gullit Ramadhan',
                'phone' => '087567847584',
                'gender' => 'Laki - Laki',
                'specialist_id' => 3
            ],
            [
                'name' => 'Gullit Ramadhan',
                'phone' => '087567847584',
                'gender' => 'Laki - Laki',
                'specialist_id' => 5
            ],
            [
                'name' => 'Gullit Ramadhan',
                'phone' => '087567847584',
                'gender' => 'Laki - Laki',
                'specialist_id' => 1
            ],
            [
                'name' => 'Gullit Ramadhan',
                'phone' => '087567847584',
                'gender' => 'Laki - Laki',
                'specialist_id' => 4
            ]
        ]);
    }
}

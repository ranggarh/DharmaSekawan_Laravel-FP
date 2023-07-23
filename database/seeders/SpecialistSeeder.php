<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialists')->insert([
            [
                'code' => 'PG',
                'name' => 'Poli Gigi',
                'description' => 'Poli Spesialis Gigi'
            ],
            [
                'code' => 'PM',
                'name' => 'Poli Mata',
                'description' => 'Poli Spesialis Mata'
            ],
            [
                'code' => 'PU',
                'name' => 'Poli Umum',
                'description' => 'Poli Spesialis Umum'
            ],
            [
                'code' => 'PJ',
                'name' => 'Poli Jantung',
                'description' => 'Poli Spesialis Jantung'
            ],
            [
                'code' => 'PA',
                'name' => 'Poli Anak',
                'description' => 'Poli Spesialis Anak'
            ],
        ]);
    }
}

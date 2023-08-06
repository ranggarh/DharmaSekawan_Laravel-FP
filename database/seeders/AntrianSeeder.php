<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('antrians')->insert(
            [
                'no_antrian' => 'U1',
                'tanggal_antrian' => '2023-01-31',
                'user_id'    => 2,
                'nama'       => 'Gullit Ramadhan',
                'alamat'     => 'Senduro, Lumajang',
                'jenis_kelamin' => 'laki-laki',
                'no_hp'      => '091229248179',
                'no_ktp'     => '3303928049283',
                'poli'       => 1
            ]);
    }
}

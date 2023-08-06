<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Rangga Raditya Hariyanto',
                'email' => 'ranggarhoke@gmail.com',
                'password' => bcrypt('rangga123'),
                'roles' => 2
            ],
            [
                'name' => 'Iqmal Dzaky Y',
                'email' => 'iqmaldz@gmail.com',
                'password' => bcrypt('iqmal123'),
                'roles' => 2
            ],
            [
                'name' => 'Akmal Dwi U',
                'email' => 'akmaldwi@gmail.com',
                'password' => bcrypt('akmal123'),
                'roles' => 2
            ],
            [
                'name' => 'Aldy Ramadhan P',
                'email' => 'aldysatria@gmail.com',
                'password' => bcrypt('aldy123'),
                'roles' => 2
            ],
            [
                'name' => 'Suling Firdaus',
                'email' => 'sulingfirdaus@gmail.com',
                'password' => bcrypt('suling123'),
                'roles' => 1
            ]
            ]);
    }
}

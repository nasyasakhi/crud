<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buahs')->insert(array(
            array(
                'nama_buah' => 'Apel',
                'harga'     => '2000'
            ),
            array(
                'nama_buah' => 'Anggur',
                'harga'     => '6000'
            ),
            array(
                'nama_buah' => 'Manggis',
                'harga'     => '10000'
            ),
        ));
    }
}

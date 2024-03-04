<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vegetables')->insert(array(
            array(
                'nama_sayur' => 'Kol',
                'harga'     => '1000'
            ),
            array(
                'nama_sayur' => 'Bayam',
                'harga'     => '6000'
            ),
            array(
                'nama_sayur' => 'Kangkung',
                'harga'     => '10000'
            ),
        ));
    }
}

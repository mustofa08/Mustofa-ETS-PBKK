<?php

namespace Database\Seeders;

use App\Models\JenisBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('JenisBarang')->insert([
            ['name' => 'Makanan'],
            ['name' => 'Minuman'],
            ['name' => 'Elektronik'],
            ['name' => 'Pakaian']
        ]);
    }
}

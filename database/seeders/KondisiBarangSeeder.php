<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KondisiBArangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('JenisBarang')->insert([
            ['name' => 'Baik'],
            ['name' => 'Layak'],
            ['name' => 'Rusak']
        ]);
    }
}

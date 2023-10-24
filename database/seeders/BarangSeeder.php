<?php

namespace Database\Seeders;

use App\Models\JenisBarang;
use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::factory()->count(1)->for(Artist::factory()->state([
            'name' => 'Barang'
        ]))->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\kategori;

class kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kategori::create([
            'nama' => 'Makanan'
        ]);
        kategori::create([
            'nama' => 'Perlengkapan Rumah Tangga'
        ]);
        kategori::create([
            'nama' => 'Alat Belajar'
        ]);
    }
}

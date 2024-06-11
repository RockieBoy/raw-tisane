<?php

namespace Database\Seeders;

use App\Models\JenisBahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jeniss = [
            [
                'nama' => 'Akar',
            ],

            [
                'nama' => 'Bunga',
            ],

            [
                'nama' => 'Daun',
            ],

            [
                'nama' => 'Buah Kering',
            ],
        ];

        foreach ($jeniss as $jenisbahan) {
            
            $jenis = new JenisBahan();

            $jenis->nama = $jenisbahan['nama'];

            $jenis->save();
        }
    }
}

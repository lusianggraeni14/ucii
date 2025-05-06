<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaundrySeeder extends Seeder
{
    
    public function run(): void
    {
        $dataLaundry = [
            [
                'nama_pelanggan' => 'Danil',
                'no_telepon'     => '081234567890',
                'alamat'         => 'Jl. Merdeka No. 10',
                'berat'          => 5, 
                'harga'          => 25000
            ],
            [
                'nama_pelanggan' => 'lusi',
                'no_telepon'     => '081298765432',
                'alamat'         => 'Jl. Mawar No. 23',
                'berat'          => 3,
                'harga'          => 15000
            ]
        ];

        DB::table('laundries')->insert($dataLaundry);
    }
}

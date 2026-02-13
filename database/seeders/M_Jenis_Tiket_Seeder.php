<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class M_Jenis_Tiket_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'FIXED TICKET',
            'INSIDENSIAL TICKET',
        ];

        foreach ($data as $jenis) {

            DB::table('m_jenis_tiket')->updateOrInsert(
                ['jenis_tiket' => $jenis],
                [
                    'aktif' => 1,
                    'user_create' => 1,
                    'created_at' => now(),
                    'updated_at' => null
                ]
            );
        }
    }
}

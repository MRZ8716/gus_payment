<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class M_Privilege_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $privileges = [
            'SUPER ADMIN',
            'ADMIN',
            'OPERATOR',
            'KEUANGAN',
        ];

        foreach ($privileges as $privilege) {
            DB::table('m_privilege')->updateOrInsert(
                ['privilege' => $privilege],
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

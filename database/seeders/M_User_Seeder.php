<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class M_User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_user')->updateOrInsert(
            ['username' => 'superadmin'],
            [
                'uid' => (string) Str::uuid(),
                'nama' => 'Super Admin',
                'username' => 'superadmin',
                'password' => Hash::make('SuperAdmin123&*'),
                'email' => 'kho.alfuady@gmail.com',
                'nik' => '3525102206870002',
                'mfa_aktif' => 0,
                'mfa_google_secret_key' => null,
                'aktif' => 1,
                'user_create' => 1,
                'created_at' => now(),
                'updated_at' => null
            ]
        );
    }
}

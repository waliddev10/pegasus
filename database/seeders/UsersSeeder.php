<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'nama' => 'Ari Silviani Isvandiari, A.Md.Pnl.',
            'nip' => '20010117 202201 2 002',
            'jabatan' => 'Calon Auditor',
            'pangkat' => 'Pengatur',
            'golongan' => 'II/c',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 'admin'
        ]);
    }
}

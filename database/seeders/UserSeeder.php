<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'role' => 1,
            'tanggal_lahir' => '22-12-1992',
            'kota_lahir' => 'Nganjuk'
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@user.com',
            'password' => bcrypt('user1234'),
            'role' => 2,
            'tanggal_lahir' => '22-12-1992',
            'kota_lahir' => 'Nganjuk'
        ]);

        $user->assignRole('user');

        $user = User::create([
            'name' => 'Psikolog Role',
            'email' => 'psikolog@psikolog.com',
            'password' => bcrypt('psikolog'),
            'role' => 3,
            'tanggal_lahir' => '22-12-1992',
            'kota_lahir' => 'Nganjuk'
        ]);

        $user->assignRole('psikolog');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('name');
        //$table->string('email')->unique();
        //$table->timestamp('email_verified_at')->nullable();
        //$table->string('password');

        DB::table('users')->insert([
            'name'=>'Super Admin',
            'email'=> 'admin@admin.com',
            'email_verified_at'=> now(),
            'password'=> hash::make('admin'),
            'remember_token'=> Str::random(10),
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),

        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Abdul Mabud',
            // 'email' => 'admin@abdulmabud.com',
            'email' => 'tharun2123@gmail.com',
            'password' => Hash::make('admin@123')
            // 'name' => 'Tharun',
            // 'email' => 'tharun2123@gmail.com',
            // 'password' => Hash::make('tharun@123')
        ]);
    }
}

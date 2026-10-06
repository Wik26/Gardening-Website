<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(['name' => 'Max Smith', 'email' => 'm.smith@hud.ac.uk', 'password' => Hash::make('password1'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Albert Nowak', 'email' => 'a.nowak@hud.ac.uk', 'password' => Hash::make('password2'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Jennifer Brown', 'email' => 'j.brown@hud.ac.uk', 'password' => Hash::make('password3'), 'role_id' => 1]);
    }
}

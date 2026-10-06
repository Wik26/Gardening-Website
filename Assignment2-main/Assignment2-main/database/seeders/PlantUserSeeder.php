<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plant_user')->insert(['plant_id' => 1, 'user_id' => 3]);
        DB::table('plant_user')->insert(['plant_id' => 1, 'user_id' => 2]);
        DB::table('plant_user')->insert(['plant_id' => 2, 'user_id' => 3]);
        DB::table('plant_user')->insert(['plant_id' => 3, 'user_id' => 2]);
        DB::table('plant_user')->insert(['plant_id' => 4, 'user_id' => 1]);
        DB::table('plant_user')->insert(['plant_id' => 4, 'user_id' => 2]);
        DB::table('plant_user')->insert(['plant_id' => 5, 'user_id' => 1]);
        DB::table('plant_user')->insert(['plant_id' => 5, 'user_id' => 2]);
    }
}

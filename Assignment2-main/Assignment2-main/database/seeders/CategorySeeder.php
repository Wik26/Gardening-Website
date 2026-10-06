<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['title' => 'Tree']);
        DB::table('categories')->insert(['title' => 'Fruit']);
        DB::table('categories')->insert(['title' => 'Flower']);
    }
}

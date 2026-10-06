<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Flowers
        DB::table('plants')->insert(['product' => 'Daisy', 'price' => 3, 'description' => 'A nice flower.', 'category_id' => 3, 'filename' => 'daisy.jpg']);
        DB::table('plants')->insert(['product' => 'Pink Tulip', 'price' => 4, 'description' => 'A red flower.', 'category_id' => 3,'filename' => 'tulip.jpg']);
        DB::table('plants')->insert(['product' => 'Rose', 'price' => 6, 'description' => 'A romantic flower.', 'category_id' => 3,'filename' => 'rose.jpg']);
        DB::table('plants')->insert(['product' => 'Iris', 'price' => 7, 'description' => 'A beautiful flower.', 'category_id' => 3, 'filename' => 'iris.jpg']);
        DB::table('plants')->insert(['product' => 'Lavendar', 'price' => 4, 'description' => 'A fragrant flower.', 'category_id' => 3, 'filename' => 'lavendar.jpg']);
        // Trees
        DB::table('plants')->insert(['product' => 'Oak', 'price' => 7, 'description' => 'A nice tree.', 'category_id' => 1, 'filename' => 'oak.jpg']);
        DB::table('plants')->insert(['product' => 'Birch', 'price' => 8, 'description' => 'A black and white tree.', 'category_id' => 1, 'filename' => 'birch.jpg']);
        DB::table('plants')->insert(['product' => 'Willow', 'price' => 9, 'description' => 'A large tree.', 'category_id' => 1, 'filename' => 'willow.jpg']);
        DB::table('plants')->insert(['product' => 'Spruce', 'price' => 8, 'description' => 'A tree with needles.', 'category_id' => 1, 'filename' => 'spruce.jpg']);
        DB::table('plants')->insert(['product' => 'Walnut', 'price' => 11, 'description' => 'A walnut tree.', 'category_id' => 1, 'filename' => 'walnut.jpg']);
        // Fruit
        DB::table('plants')->insert(['product' => 'Strawberry', 'price' => 5, 'description' => 'A delicious fruit.', 'category_id' => 2, 'filename' => 'strawberry.jpg']);
        DB::table('plants')->insert(['product' => 'Raspberry', 'price' => 6, 'description' => 'A nutritious fruit.', 'category_id' => 2, 'filename' => 'raspberry.jpg']);
        DB::table('plants')->insert(['product' => 'Black Currant', 'price' => 6, 'description' => 'A purple berry.', 'category_id' => 2, 'filename' => 'currant.jpg']);
        DB::table('plants')->insert(['product' => 'Blueberry', 'price' => 7, 'description' => 'A  blue berry.', 'category_id' => 2, 'filename' => 'blueberry.jpg']);
        DB::table('plants')->insert(['product' => 'Grape', 'price' => 9, 'description' => 'A green grape.', 'category_id' => 2, 'filename' => 'grape.jpg']);
    }
}

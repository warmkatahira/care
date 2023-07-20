<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodCategory;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FoodCategory::create([
            'food_category_name' => '缶詰',
        ]);
        FoodCategory::create([
            'food_category_name' => 'カリカリ',
        ]);
        FoodCategory::create([
            'food_category_name' => 'トッピング（ふりかけ）',
        ]);
    }
}

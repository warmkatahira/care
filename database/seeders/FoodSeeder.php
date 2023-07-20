<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::create([
            'food_category_id' => 1,
            'food_brand' => 'デビフ',
            'food_name' => 'ささみ&レバーミンチ',
            'food_image_path' => '',
        ]);
        Food::create([
            'food_category_id' => 1,
            'food_brand' => 'デビフ',
            'food_name' => 'ささみ&チーズ',
            'food_image_path' => '',
        ]);
        Food::create([
            'food_category_id' => 2,
            'food_brand' => 'プロフェッショナル・バランス',
            'food_name' => '超小粒 1歳まで 子いぬ用',
            'food_image_path' => '',
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'food_id';
    // テーブル名を定義
    protected $table = 'foods';
    // 操作するカラムを許可
    protected $fillable = [
        'food_category_id',
        'food_brand',
        'food_name',
        'food_image_path',
    ];
    // 全て取得
    public static function getAll()
    {
        return self::orderBy('food_id', 'asc');
    }
    // food_categoriesテーブルとのリレーション
    public function food_category()
    {
        return $this->belongsTo(FoodCategory::class, 'food_category_id', 'food_category_id');
    }
}

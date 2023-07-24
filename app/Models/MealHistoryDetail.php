<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealHistoryDetail extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'meal_history_detail_id';
    // 操作するカラムを許可
    protected $fillable = [
        'meal_history_id',
        'food_id',
        'amount_of_food',
    ];
    // 指定したレコードを取得
    public static function getSpecify($meal_history_id)
    {
        return self::where('meal_history_id', $meal_history_id);
    }
    // foodsテーブルとのリレーション
    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id', 'food_id');
    }
}

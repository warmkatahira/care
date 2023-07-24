<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealHistory extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'meal_history_id';
    // 操作するカラムを許可
    protected $fillable = [
        'meal_date',
        'meal_time',
        'memo',
    ];
    // 指定したレコードを取得
    public static function getSpecify($meal_history_id)
    {
        return self::where('meal_history_id', $meal_history_id);
    }
    // meal_history_detailsテーブルとのリレーション
    public function meal_history_details()
    {
        return $this->hasMany(MealHistoryDetail::class, 'meal_history_id', 'meal_history_id');
    }
}

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
}

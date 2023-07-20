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
}

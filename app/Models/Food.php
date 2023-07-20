<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'food_id';
    // 操作するカラムを許可
    protected $fillable = [
        'food_category_id',
        'food_brand',
        'food_name',
        'food_image_path',
    ];
}

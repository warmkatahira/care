<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightHistory extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'weight_history_id';
    // 操作するカラムを許可
    protected $fillable = [
        'weight_date',
        'weight',
        'memo',
    ];
}

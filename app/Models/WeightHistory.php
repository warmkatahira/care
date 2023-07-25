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
    // 指定したレコードを取得
    public static function getSpecify($weight_history_id)
    {
        return self::where('weight_history_id', $weight_history_id);
    }
}

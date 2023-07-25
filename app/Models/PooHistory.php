<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PooHistory extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'poo_history_id';
    // 操作するカラムを許可
    protected $fillable = [
        'poo_date',
        'poo_time',
        'memo',
        'poo_status_id',
    ];
    // 指定したレコードを取得
    public static function getSpecify($poo_history_id)
    {
        return self::where('poo_history_id', $poo_history_id);
    }
    // poo_statusesテーブルとのリレーション
    public function poo_status()
    {
        return $this->belongsTo(PooStatus::class, 'poo_status_id', 'poo_status_id');
    }
}

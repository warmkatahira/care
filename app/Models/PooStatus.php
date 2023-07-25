<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PooStatus extends Model
{
    use HasFactory;
    // 主キーカラムを変更
    protected $primaryKey = 'poo_status_id';
    // 操作するカラムを許可
    protected $fillable = [
        'poo_status',
    ];
    // 全て取得
    public static function getAll()
    {
        return self::orderBy('poo_status_id', 'asc');
    }
}

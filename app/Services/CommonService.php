<?php

namespace App\Services;

use Carbon\CarbonImmutable;

class CommonService
{
    // 月切り替え用のボタン内容を取得
    public function getMonthChangeContent($month)
    {
        // 月指定がない場合
        if(is_null($month)){
            $prev = CarbonImmutable::today()->startOfMonth()->subMonth(1)->format('Y-m');
            $next = CarbonImmutable::today()->startOfMonth()->addMonth(1)->format('Y-m');
        }
        // 月指定がある場合
        if(!is_null($month)){
            $prev = CarbonImmutable::parse($month)->startOfMonth()->subMonth(1)->format('Y-m');
            $next = CarbonImmutable::parse($month)->startOfMonth()->addMonth(1)->format('Y-m');
        }
        return compact('prev', 'next');
    }
}
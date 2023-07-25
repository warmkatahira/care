<?php

namespace App\Http\Controllers\Poo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Poo\PooService;
use App\Services\CommonService;

class PooController extends Controller
{
    public function index(Request $request)
    {
        // インスタンス化
        $PooService = new PooService;
        $CommonService = new CommonService;
        // 月の日毎のうんち履歴を取得
        $date_arr = $PooService->getMonthPooHistory($request->month);
        // 月切り替え用のボタン内容を取得
        $month_change = $CommonService->getMonthChangeContent($request->month);
        return view('poo.index')->with([
            'date_arr' => $date_arr,
            'month_change' => $month_change,
        ]);
    }
}

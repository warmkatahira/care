<?php

namespace App\Http\Controllers\Weight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Weight\WeightService;
use App\Services\CommonService;

class WeightController extends Controller
{
    public function index(Request $request)
    {
        // インスタンス化
        $WeightService = new WeightService;
        $CommonService = new CommonService;
        // 月の日毎のたいじゅう履歴を取得
        $date_arr = $WeightService->getMonthWeightHistory($request->month);
        // 月切り替え用のボタン内容を取得
        $month_change = $CommonService->getMonthChangeContent($request->month);
        return view('weight.index')->with([
            'date_arr' => $date_arr,
            'month_change' => $month_change,
        ]);
    }
}

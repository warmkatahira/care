<?php

namespace App\Http\Controllers\Meal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Meal\MealService;
use App\Services\CommonService;

class MealController extends Controller
{
    public function index(Request $request)
    {
        // インスタンス化
        $MealService = new MealService;
        $CommonService = new CommonService;
        // 月の日毎のごはん履歴を取得
        $date_arr = $MealService->getMonthMealHistory($request->month);
        // 月切り替え用のボタン内容を取得
        $month_change = $CommonService->getMonthChangeContent($request->month);
        return view('meal.index')->with([
            'date_arr' => $date_arr,
            'month_change' => $month_change,
        ]);
    }

    public function XXX(){
        
    }
}

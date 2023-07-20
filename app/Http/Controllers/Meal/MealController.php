<?php

namespace App\Http\Controllers\Meal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\CarbonImmutable;

class MealController extends Controller
{
    public function index()
    {
        // 現在の日付を取得
        $today = CarbonImmutable::today();
        // 月初と月末の日付を取得
        $start_of_month = $today->startOfMonth()->toDateString();
        $end_of_month = $today->endOfMonth()->toDateString();
        // 月初の曜日番号を取得
        $start_of_month_week_num = CarbonImmutable::parse($start_of_month)->dayOfWeek;
        // 月初の週の日曜日の日付を取得
        $start_date = CarbonImmutable::parse($start_of_month)->subDays($start_of_month_week_num);
        // 月末の曜日番号を取得
        $end_of_month_week_num = CarbonImmutable::parse($end_of_month)->dayOfWeek;
        // 月末の週の土曜日の日付を取得
        $end_date = CarbonImmutable::parse($end_of_month)->addDays(6 - $end_of_month_week_num);
        // 開始日と終了日の日数差分を取得
        $start_end_diff_days = $start_date->diffInDays($end_date);
        // 日付情報を格納する配列をセット
        $date_arr = [];
        // 開始日から終了日まで1日ずつ日数を足しながらループ
        for($i = 0; $i <= $start_end_diff_days; $i++){
            // 開始日の日付をインスタンス化
            $date = new CarbonImmutable($start_date);
            // 配列に開始日の日付+日数の日付をセット
            $date_arr[$i] = $date->addDays($i)->toDateString();
        }

        return view('meal.index')->with([
            'date_arr' => $date_arr,
        ]);


        dd($today, $start_date, $end_date, $date_arr);
    }
}
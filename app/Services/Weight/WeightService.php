<?php

namespace App\Services\Weight;

use App\Models\WeightHistory;
use Carbon\CarbonImmutable;

class WeightService
{
    public function getMonthWeightHistory($month)
    {
        // 月指定がない場合
        if(is_null($month)){
            // 現在の日付を取得
            $today = CarbonImmutable::today();
        }
        // 月指定がある場合
        if(!is_null($month)){
            // 指定された月をインスタンス化
            $today = new CarbonImmutable($month);
        }
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
            // 日付を足す
            $date = $date->addDays($i);
            // 該当日付のたいじゅう履歴を取得
            $weight_history = WeightHistory::whereDate('weight_date', $date)->first();
            // たいじゅう履歴を格納する配列を初期化
            $param = [];
            // たいじゅう履歴があれば配列にセット
            if(!is_null($weight_history)){
                // たいじゅう履歴をセット
                $param[] = [
                    'weight_history_id' => $weight_history->weight_history_id,
                    'weight' => $weight_history->weight,
                ];
            }
            // 配列に開始日の日付+日数の日付をセット
            $date_arr[$date->format('Y-m-d')] = $param;
        }
        return $date_arr;
    }
}
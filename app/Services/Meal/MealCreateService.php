<?php

namespace App\Services\Meal;

use App\Models\MealHistory;
use App\Models\MealHistoryDetail;

class MealCreateService
{
    // ごはん履歴を作成
    public function createMealHistory($request)
    {
        $meal_history = MealHistory::create([
            'meal_date' => $request->meal_date,
            'meal_time' => $request->meal_time,
            'memo' => $request->memo,
        ]);
        return $meal_history;
    }

    // ごはん履歴詳細を作成
    public function createMealHistoryDetail($meal_history_id, $request)
    {
        foreach($request->food_id as $key => $value){
            // 値がnull以外だったら作成する
            if(!is_null($value)){
                MealHistoryDetail::create([
                    'meal_history_id' => $meal_history_id,
                    'food_id' => $request->food_id[$key],
                    'amount_of_food' => $request->amount_of_food[$key],
                ]);
            }
        }
        return;
    }
}
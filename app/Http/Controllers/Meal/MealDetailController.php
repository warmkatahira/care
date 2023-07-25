<?php

namespace App\Http\Controllers\Meal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MealHistory;
use App\Models\MealHistoryDetail;

class MealDetailController extends Controller
{
    public function index(Request $request)
    {
        // ごはん履歴を取得
        $meal_history = MealHistory::getSpecify($request->meal_history_id)->first();
        // ごはん履歴詳細を取得
        $meal_history_details = MealHistoryDetail::getSpecify($request->meal_history_id)->get();
        return view('meal_detail.index')->with([
            'meal_history' => $meal_history,
            'meal_history_details' => $meal_history_details,
        ]);
    }
}

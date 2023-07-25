<?php

namespace App\Http\Controllers\Meal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\CarbonImmutable;
use App\Models\Food;
use App\Services\Meal\MealCreateService;
use App\Http\Requests\Meal\MealHistoryCreateRequest;

class MealCreateController extends Controller
{
    public function index(Request $request)
    {
        // フードを取得
        $foods = Food::getAll()->get();
        return view('meal_create.index')->with([
            'foods' => $foods,
            'meal_date' => $request->meal_date,
        ]);
    }

    public function create(MealHistoryCreateRequest $request)
    {
        // インスタンス化
        $MealCreateService = new MealCreateService;
        // ごはん履歴を作成
        $meal_history = $MealCreateService->createMealHistory($request);
        // ごはん履歴詳細を作成
        $MealCreateService->createMealHistoryDetail($meal_history->meal_history_id, $request);
        return redirect()->route('meal.index');
    }
}

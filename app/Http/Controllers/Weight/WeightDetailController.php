<?php

namespace App\Http\Controllers\Weight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WeightHistory;

class WeightDetailController extends Controller
{
    public function index(Request $request)
    {
        // たいじゅう履歴を取得
        $weight_history = WeightHistory::getSpecify($request->weight_history_id)->first();
        return view('weight_detail.index')->with([
            'weight_history' => $weight_history,
        ]);
    }
}

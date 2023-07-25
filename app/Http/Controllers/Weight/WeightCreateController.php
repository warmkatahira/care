<?php

namespace App\Http\Controllers\Weight;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\CarbonImmutable;
use App\Services\Weight\WeightCreateService;
use App\Http\Requests\Weight\WeightHistoryCreateRequest;

class WeightCreateController extends Controller
{
    public function index(Request $request)
    {
        return view('weight_create.index')->with([
            'weight_date' => $request->weight_date,
        ]);
    }

    public function create(WeightHistoryCreateRequest $request)
    {
        // インスタンス化
        $WeightCreateService = new WeightCreateService;
        // たいじゅう履歴を作成
        $WeightCreateService->createWeightHistory($request);
        return redirect()->route('weight.index');
    }
}

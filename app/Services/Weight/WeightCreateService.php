<?php

namespace App\Services\Weight;

use App\Models\WeightHistory;

class WeightCreateService
{
    // たいじゅう履歴を作成
    public function createWeightHistory($request)
    {
        WeightHistory::create([
            'weight_date' => $request->weight_date,
            'weight' => $request->weight,
            'memo' => $request->memo,
        ]);
        return;
    }
}
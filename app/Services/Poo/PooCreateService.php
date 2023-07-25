<?php

namespace App\Services\Poo;

use App\Models\PooHistory;
use App\Models\PooHistoryDetail;

class PooCreateService
{
    // うんち履歴を作成
    public function createPooHistory($request)
    {
        $poo_history = PooHistory::create([
            'poo_date' => $request->poo_date,
            'poo_time' => $request->poo_time,
            'memo' => $request->memo,
            'poo_status_id' => $request->poo_status_id,
        ]);
        return;
    }
}
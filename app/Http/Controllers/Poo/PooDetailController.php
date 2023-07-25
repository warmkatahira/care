<?php

namespace App\Http\Controllers\Poo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PooHistory;

class PooDetailController extends Controller
{
    public function index(Request $request)
    {
        // うんち履歴を取得
        $poo_history = PooHistory::getSpecify($request->poo_history_id)->first();
        return view('poo_detail.index')->with([
            'poo_history' => $poo_history,
        ]);
    }
}

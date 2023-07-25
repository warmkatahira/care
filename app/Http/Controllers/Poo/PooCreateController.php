<?php

namespace App\Http\Controllers\Poo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\CarbonImmutable;
use App\Models\PooStatus;
use App\Services\Poo\PooCreateService;
use App\Http\Requests\Poo\PooHistoryCreateRequest;

class PooCreateController extends Controller
{
    public function index(Request $request)
    {
        // うんち状態を取得
        $poo_statuses = PooStatus::getAll()->get();
        return view('poo_create.index')->with([
            'poo_statuses' => $poo_statuses,
            'poo_date' => $request->poo_date,
        ]);
    }

    public function create(PooHistoryCreateRequest $request)
    {
        // インスタンス化
        $PooCreateService = new PooCreateService;
        // うんち履歴を作成
        $PooCreateService->createPooHistory($request);
        return redirect()->route('poo.index');
    }
}

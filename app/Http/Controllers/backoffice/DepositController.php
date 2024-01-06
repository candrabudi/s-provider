<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $date_start = empty($request->date_start) ? date('Y-m-d', strtotime(date('Y-m-d').' -3 day')) : addslashes($request->date_start);
        $date_end = empty($request->date_end) ? date('Y-m-d') : addslashes($request->date_end);

        $status = empty($request->status) ? 1 : $request->status;
        $status = is_numeric($status) ? $status :  1;
        
        $deposit = Transaksi::with('User')->with('DataBank')->where('type', 1)->whereBetween('created_at', [$date_start.' 00:00:00', $date_end.' 23:59:59']);
        
        if($status > 0){
            $deposit = $deposit->where('status', $status);
        }
        $deposit = $deposit->orderBy('id', 'desc')->get();

        $data_view = [
            'date_start' => $date_start,
            'date_end' => $date_end,
            'deposit' => $deposit,
        ];

        return view('backoffice.deposit.deposit', $data_view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

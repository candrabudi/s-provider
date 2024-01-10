<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game_api;
use Ixudra\Curl\Facades\Curl;
class UserWithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saldo = Saldo::where('user_id', Auth::user()->id)->first();
        $rek = User::where('id', Auth::user()->id)->first();
        return view('withdraw', compact('saldo', 'rek'));
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
        $saldo = Saldo::where('user_id', Auth::user()->id)->first();

        //check total saldo
        $saldo_total = $saldo->saldo + $saldo->bonus;

        //convert amount from coma
        $total_amount = is_numeric(str_replace(',', '',  $request->amount)) ? (int) str_replace(',', '',  $request->amount) : 0;
        if($total_amount > $saldo_total){
            return redirect()->back()->with('error', 'Nilai saldo kurang, check saldo kembali');
        }

        if ($request->withdrawType == 'existing') {
            $transaksi = new Transaksi();
            $transaksi->type = 2;
            $transaksi->status = 1;
            $transaksi->nominal = $total_amount;
            $transaksi->keterangan = $request->nama_bank . ' - An ' . $request->acc_name;
            $transaksi->rek_pengirim = $request->acc_no;
            $transaksi->user_id = Auth::user()->id;

            $transaksi->save();
        } else {
            $transaksi = new Transaksi();
            $transaksi->type = 2;
            $transaksi->status = 1;
            $transaksi->nominal = $total_amount;
            $transaksi->keterangan = $request->new_bank . ' - An ' . $request->acc_name;
            $transaksi->rek_pengirim = $request->acc_no;
            $transaksi->user_id = Auth::user()->id;
            $transaksi->save();
        }

        if ($saldo->bonus <= $total_amount) {
            $sisa = $total_amount - $saldo->bonus;
            $saldo->bonus = 0;
            $saldo->saldo = $saldo->saldo - $sisa;
        } else {
            $saldo->bonus = $saldo->bonus - $total_amount;
        }

        $game_api = new Game_api();
        $game_api->pragmatic_transfer($transaksi->user_id, -1 * $total_amount);
        $game_api->pgsoft_withdraw($transaksi->user_id, $total_amount);
        
        $saldo->save();



        return redirect()->back()->with('success', 'Data berhasil disimpan');
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
    public function aksi(string $id, Request $request)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->status = $request->status;
        $user = User::where('id', $transaksi->user_id)
            ->first();

        // ditaolak saldo kembali
        $saldo = Saldo::where('user_id', $transaksi->user_id)->first();
        if($request->status == 3){
            
            $saldo->saldo = $saldo->saldo + $transaksi->nominal;
            $saldo->save();
            
            $game_api = new Game_api();
            $game_api->game_transfer($transaksi->user_id, $transaksi->nominal);
        }

        $response = Curl::to('https://pp303.xyz/gs2c/html5/connection.do?cmd=transaksi&token=Wgvoh7u9lATfcLr&username='.$user->name.'&type=withdraw&amount='.$transaksi->nominal)
            ->get();

        $content = json_decode($response, true);
        if($content['msg'] == 'Saldo Member Minus') {
            return redirect()->back()->with('error', 'Data gagal diubah');
        }

        Saldo::where('user_id', $transaksi->user_id)
            ->update([
                'saldo' => $saldo->saldo - $transaksi->nominal
            ]);
        $transaksi->save();

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bonus;
use App\Models\DataBank;
use App\Models\Saldo;
use App\Models\Transaksi;
use App\Models\Game_api;
use App\Models\Setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Ixudra\Curl\Facades\Curl;
use App\Models\User;

class UserDepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bonus = Bonus::where('status', 1)->get();
        $bca = DataBank::where('id', 1)->first();
        $bni = DataBank::where('id', 4)->first();
        $mandiri = DataBank::where('id', 3)->first();
        $bri = DataBank::where('id', 2)->first();
        $dana = DataBank::where('id', 5)->first();
        $linkaja = DataBank::where('id', 6)->first();
        $ovo = DataBank::where('id', 7)->first();
        $gopay = DataBank::where('id', 8)->first();
        return view('deposit', compact('bonus', 'bca', 'bni', 'mandiri', 'bri', 'dana', 'linkaja', 'ovo', 'gopay'));
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
        // check last transaction & delay
        $setting = Setting::first();
        $delay_deposit = empty($setting->deposit_delay) ? 24 : $setting->deposit_delay;

        $trans = Transaksi::where([
            'user_id' => Auth::user()->id,
            'status' => 1
        ])->first();

        // tolak transaksi jika ada & delay lebih dari setting

        if(!empty($trans)){
            //check delay
            $hours_delay = floor(abs(strtotime($trans->created_at) - strtotime( date('Y-m-d H:i:s')))/3600);
            
            if($hours_delay < $delay_deposit){
                return redirect()->back()->with('error', 'Deposit sebelumnya sedang di proses, mohon menunggu admin untuk approval');
            }

            $trans->status = 3;
            $trans->save();
        }
        $transaksi = new Transaksi();
        $transaksi->type = $request->type;
        $transaksi->status = $request->status;
        $transaksi->bonus_id = $request->bonus_id;
        $transaksi->bonus_persentase = $request->bonus_persentase;
        $transaksi->nominal = str_replace(',', '', $request->nominal);
        $transaksi->bank_id = $request->bank_id;
        $transaksi->rek_pengirim = $request->rek_pengirim;
        $transaksi->keterangan = $request->keterangan;
        $transaksi->user_id = Auth::user()->id;

        if ($request->hasFile('bukti_transfer')) {
            $imgname = time() . '_' . $request->bukti_transfer->getClientOriginalName();
            $request->bukti_transfer->move(public_path() . '/storage/bukti_transfer/', $imgname);

            $transaksi->bukti_transfer = $imgname;
        }

        $transaksi->save();
        return redirect()->back()->with('success', 'Data berhasil diubah');
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
        $transaksi->alasan = $request->alasan;
        $member = User::where('id', $transaksi->user_id)
            ->first();

        // return $member;

        if($request->status == 2){  
            $transaksi->approved_at = date('Y-m-d H:i:s');
            $transaksi->approved_by = auth()->user()->id;
        }

        DB::beginTransaction();

        $transaksi->save();

        if ($request->status == 2) {
            // return "test";
            $bonus = $transaksi->nominal * $transaksi->bonus_persentase / 100;
            
            $saldo = Saldo::where('user_id', $transaksi->user_id)->first();

            $saldo->saldo = $saldo->saldo + $transaksi->nominal;
            $saldo->bonus = $saldo->bonus + $bonus;
           
            $saldo->save();
            
            // add saldo to game
            $game_api = new Game_api();
            $game_api->game_transfer($transaksi->user_id, $transaksi->nominal + $bonus);
            $nominal_deposit = $transaksi->nominal + $bonus;
            $response = Curl::to('https://pp303.xyz/gs2c/html5/connection.do?cmd=transaksi&token=Wgvoh7u9lATfcLr&username='. $member->name .'&type=deposit&amount='.$nominal_deposit)
                ->get();
        }
        
        // ditaolak saldo kembali
        if($request->status == 3 && $transaksi->type == 2){
           
            $saldo = Saldo::where('user_id', $transaksi->user_id)->first();
            
            $saldo->saldo = $saldo->saldo + $transaksi->nominal;
            $saldo->save();
            
            $game_api = new Game_api();
            $game_api->game_transfer($transaksi->user_id, $transaksi->nominal);
            $nominal_deposit = $transaksi->nominal;
            $response = Curl::to('https://pp303.xyz/gs2c/html5/connection.do?cmd=transaksi&token=Wgvoh7u9lATfcLr&username='. $member->name .'&type=deposit&amount='.$nominal_deposit)
                ->get();
        }

        $transaksi->save();
        
        // type : 1 - deposit , 2 - wd
        // $redirect =  $transaksi->type == 1 ? 'deposit' : 'withdraw';
        DB::commit();

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function get_saldo(){
        $user = auth()->user();
        $game_api = new Game_api();
        
        $game_api->pragmatic_get_balance_pp($user->id);
        $pgsoft = $game_api->pgsoft_get_balance_pp($user->id);
        
        $saldo = Saldo::where('user_id', $user->id)->first();
        header('Content-Type: application/json');
        echo json_encode([
            'error' => false,
            'balance' => $saldo->saldo + $saldo->bonus,
            'pgsoft' => $pgsoft
        ]);
    }
}

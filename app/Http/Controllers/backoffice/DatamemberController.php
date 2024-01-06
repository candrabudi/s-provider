<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Bank;
use App\Models\Saldo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DatamemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_member = User::where('level',null)->get();
        $data_bank = Bank::get();
        return view('backoffice.data_member.data_member',compact(['data_member', 'data_bank'], ));
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
        //check
        $check = User::where('name', $request->name)->get();
        if(count($check) > 0){
            return redirect()->back()->with('error', 'Data member sudah ada');
        }

        if(!empty($request->id)){
            $check = User::where('email', $request->email)->where('id', '!=', $request->id)->get();

            $data_user = User::where('id', $request->id)->first();
        }else{    
            $check = User::where('email', $request->email)->get();
            
            $data_user = new User();
            $data_user->name = $request->nama;
        }
        
        if(count($check) > 0){
            return redirect()->back()->with('error', 'Data email sudah ada');
        }
        
        $data_user->email = $request->email;
        $data_user->level = null;
        $data_user->telp = $request->telp;
        $data_user->ref_code = $request->ref_code;
        $data_user->nama_rek = $request->nama_rek;
        $data_user->bank = $request->bank;
        $data_user->no_rek = $request->no_rek;

        if(!empty($request->id)){
            if(!empty($request->password)){
                $data_user->password = Hash::make($request->password);
            }
        }else{
            $data_user->password = Hash::make($request->password);
        }

        $data_user->save();

        $msg = "Data member berhasil ditambahkan";
        if(empty($request->id)){
            $saldo = new Saldo();
            $saldo->user_id = $data_user->id;
            $saldo->saldo = 0;
            $saldo->bonus = 0;
    
            $saldo->save();
    
            $msg = "Data member berhasil Update";
        }
        return redirect()->back()->with('success', $msg);
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

<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\DataBank;
use Illuminate\Http\Request;

class DepositbankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bank = DataBank::all();
        // dd($bank);
        return view('backoffice.deposit_bank.deposit_bank', compact('bank'));
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
        $bank = DataBank::find($id);
        if ($request->status != null) {
            $bank->status = $request->status;
        } else {
            $bank->nama_bank = $request->bank;
            $bank->nama_penerima = $request->nama;
            $bank->no_rek = $request->no;
        }
        
        if ($request->hasFile('qr')) {
            $imgname = time() . '_' . $request->qr->getClientOriginalName();
            $request->qr->move(public_path() . '/storage/logo/', $imgname);

            $bank->image_qr = $imgname;
        }
        $bank->save();
        return redirect()->back()->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

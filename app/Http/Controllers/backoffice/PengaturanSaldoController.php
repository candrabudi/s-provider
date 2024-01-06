<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Saldo;
use Illuminate\Http\Request;

class PengaturanSaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $src = empty($request->search) ? "" : addslashes(base64_decode($request->search));
        $saldo = new Saldo();
        $saldo = $saldo->saldo_list($src, 1);
        return view('backoffice.pengaturan_saldo.pengaturan_saldo', [
            'saldo' => $saldo,
            'src' => $src
        ]);
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
        // dd($id, $request->all());
        $saldo_user = Saldo::find($id);

        if ($request->type == 1) {
            $saldo_user->saldo += $request->nominal;
        } elseif ($request->type == 2) {
            $saldo_user->saldo -= $request->nominal;
        } elseif ($request->type == 3) {
            $saldo_user->bonus += $request->nominal;
        } elseif ($request->type == 4) {
            $saldo_user->bonus -= $request->nominal;
        }


        $saldo_user->save();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

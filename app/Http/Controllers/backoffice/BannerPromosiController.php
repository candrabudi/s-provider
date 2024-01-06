<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BannerPromosi;
use Illuminate\Http\Request;

class BannerPromosiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $limit = 10;
        $banner_promosi = BannerPromosi::latest()->paginate($limit);
        return view(
            'backoffice.banner_promosi.banner_promosi',
            compact('banner_promosi')
        )->with('i', (request()->input('page', 1) - 1) * $limit);
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
        // TODO show validation error in view
        $request->validate(
            [
                'nama' => 'required|string|max:255',
                'gambar' => 'required|image|mimes:jpeg,jpg,png|file|max:2048'
            ]
        );
        try {
            $input = $request->all();
            $input['status'] = "2"; // set default status as nonactive

            if ($request->file('gambar')) {
                $imgname = time() . '.'.$request->file('gambar')->getClientOriginalExtension();
                $request->gambar->move(public_path() . '/storage/banner-promosi/', $imgname);
                $input['gambar'] = 'banner-promosi/'.$imgname;
            }

            BannerPromosi::create($input);

            return redirect()->back()->with('success', 'Data berhasil ditambah');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e);
        }
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
        $banner_promosi = BannerPromosi::find($id);
        if ($request->status != null) {
            $banner_promosi->status = $request->status;
        } else {

            $request->validate([
                'nama' => 'required',
                'gambar' => 'image|mimes:jpeg,jpg,png|file|max:2048'
            ]);

            $banner_promosi->nama = $request->nama;
            $banner_promosi->deskripsi = $request->deskripsi;
            $banner_promosi->kategori = $request->kategori;
            $banner_promosi->batas_waktu = $request->batas_waktu;


            if ($request->file('gambar')) {
                $name = now()->timestamp . ".{$request->file('gambar')->getClientOriginalExtension()}";
                $path = $request->file('gambar')->storeAs('banner-promosi', $name, 'public');
                $banner_promosi->gambar = "{$path}";
            }
        }

        $banner_promosi->save();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner_promosi = BannerPromosi::find($id);
        $banner_promosi->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}

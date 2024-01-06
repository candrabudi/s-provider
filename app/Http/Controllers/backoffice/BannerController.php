<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::all();
        return view('backoffice.banner.banner', compact('banner'));
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
        $data = new Banner;
        $data->nama = $request->nama;
        $data->status = $request->status;
        if ($request->hasFile('gambar')) {

            $file_path = public_path() . '/storage/banner/' . $data->gambar;
            // if (File::exists($file_path)) {
            //     unlink($file_path);
            // }

            $imgname = time() . '_' . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path() . '/storage/banner/', $imgname);

            $data->gambar = $imgname;
        }

        $data->save();
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
        $banner = Banner::find($id);
        if ($request->status != null) {
            $banner->status = $request->status;
        } else {
            $banner->nama = $request->nama;
            if ($request->hasFile('gambar')) {

                $file_path = public_path() . '/storage/banner/' . $banner->gambar;
                if (File::exists($file_path)) {
                    unlink($file_path);
                }

                $imgname = time() . '_' . $request->gambar->getClientOriginalName();
                $request->gambar->move(public_path() . '/storage/banner/', $imgname);

                $banner->gambar = $imgname;
            }
        }
        $banner->save();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $file_path = public_path() . '/storage/banner/' . $banner->gambar;
        if (File::exists($file_path)) {
            unlink($file_path);
        }
        $banner->save();
        Banner::find($id)->delete();
        return Redirect::to('banner');
    }
}

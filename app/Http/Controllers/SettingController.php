<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view('backoffice.setting.setting',compact('setting'));
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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = Setting::find($id);
        $data->nama_web = $request->nama_web;
        $data->telp = $request->telp;
        $data->wa = $request->wa;
        $data->tele = $request->tele;
        $data->running_text = $request->running_text;
        $data->live_chat = $request->live_chat;
        $data->msg_popup = $request->msg_popup;

        
        $data->bg_color = $request->bg_color;
        $data->bg_color_2 = $request->bg_color_2;
        $data->bg_color_single = isset($request->bg_color_single) ? $request->bg_color_single : 0;
        
        $data->nav_color = $request->nav_color;
        $data->nav_login = $request->nav_login;
        $data->nav_login_2 = $request->nav_login_2;
        $data->nav_color_trans = $request->nav_color_trans;
        $data->nav_color_2 = $request->nav_color_2;
        $data->txt_color = $request->txt_color;
        $data->template = $request->template;

        $data->maintenance_mode = isset($request->maintenance_mode)? $request->maintenance_mode : 0;

        if ($request->hasFile('logo')) {

            $file_path = public_path() . '/storage/logo/' . $data->logo;
            if (File::exists($file_path)) {
                unlink($file_path);
            }

            $imgname = time() . '_' . $request->logo->getClientOriginalName();
            $request->logo->move(public_path() . '/storage/logo/', $imgname);

            $data->logo = $imgname;
        }

        $data->save();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

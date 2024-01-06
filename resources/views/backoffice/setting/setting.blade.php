@extends('backoffice.layouts.main')

@section('content')
    <div class="card mt-3">
        <div class="card-header"> 
            Pengaturan Tampilan Website
        </div>
        <div class="card-body">
            <form action="{{ route('setting.update', $setting->id) }}"method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Nama Website :</label>
                            <input name="nama_web" type="text" class="form-control"
                                placeholder="Nama Website" value="{{ $setting->nama_web }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">No Whatsapp :</label>
                            <input name="wa" type="text" class="form-control" value="{{ $setting->wa }}"
                                placeholder="Nomor Whatsapp">
                        </div>
                    </div>
                <!-- <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">No TLP:</label>
                            <input name="telp" type="number" class="form-control" placeholder="Nomor Telepon"
                                value="{{ $setting->telp }}">
                        </div>
                    </div>-->
                </div> 
                <div class="row">
                    
                    
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Logo Website :</label>
                            <input name="logo" type="file" class="form-control uploads" value=""
                                accept="image/png, image/jpg, image/jpeg, video/gif, video/mp4">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Running Text :</label>
                            <input name="running_text" type="text" class="form-control" value="{{ $setting->running_text }}" placeholder="Running Text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Background Color : ( 1 Warna ? <input type="checkbox" name="bg_color_single" value="1" <?= $setting->bg_color_single ? 'checked' : '' ?> > ) </label>
                            <input name="bg_color" type="color" class="form-control uploads" value="{{ $setting->bg_color }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Background Color 2:</label>
                            <input name="bg_color_2" type="color" class="form-control uploads" value="{{ $setting->bg_color_2 }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Warna Atas :</label>
                            <div class="row">
                                <div class="col-10">
                                    <input type="color" name="nav_color" class="form-control" value="{{ $setting->nav_color }}" placeholder="Navbar Color">
                                </div>
                                <div class="col-2">
                                    <input name="nav_color_trans" type="number" class="form-control" value="{{ $setting->nav_color_trans }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Warna Bawah:</label>
                            <input type="color" name="nav_color_2" class="form-control" value="{{ $setting->nav_color_2 }}" placeholder="Navbar Color">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Text Color :</label>
                            <input type="color" name="txt_color" class="form-control" value="{{ $setting->txt_color }}" placeholder="Navbar Color">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group" >
                            <label class="form-text text-muted">Color Login-Daftar :</label>
                            <div class="color-login">
                                <div class="row">
                                    <div class="col-6">
                                        <input name="nav_login" type="color" class="form-control uploads" value="{{ $setting->nav_login }}">
                                    </div>
                                    <div class="col-6">
                                        <input name="nav_login_2" type="color" class="form-control uploads" value="{{ $setting->nav_login_2 }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Popup Dashboard :</label>
                            <input name="nama_web1" type="text" class="form-control"
                                placeholder="Nama Website" value="{{ $setting->nama_web }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Popup Deposit :</label>
                            <input name="nama_web1" type="text" class="form-control"
                                placeholder="Nama Website" value="{{ $setting->nama_web }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Popup Withdraw :</label>
                            <input name="nama_web1" type="text" class="form-control"
                                placeholder="Nama Website" value="{{ $setting->nama_web }}">
                        </div>
                    </div> -->
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-text text-muted">Live Chat Mobile :</label>
                            <input name="tele" type="text" class="form-control" value="{{ $setting->tele }}" placeholder="contoh : https://direct.lc.chat/00000">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Popup Lock Game :</label>
                            <input name="msg_popup" type="text" class="form-control"
                                placeholder="Popup Maintenance" value="{{ $setting->msg_popup }}">
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Live Chat Deskop:</label>
                            <textarea name="live_chat" type="text" class="form-control"
                                placeholder="Live Chat">{{ $setting->live_chat }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Maintenance :</label>
                            <input type="checkbox" name="maintenance_mode" value="1" <?= $setting->maintenance_mode == 1 ? 'checked' : ''?>>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-text text-muted">Template :</label>
                            <select name="template" class="form-control">
                                <option value="main" <?= $setting->template == 'main' ? 'selected' : ''?>>Onix/UG</option>
                                <option value="main" <?= $setting->template == 'main' ? 'selected' : ''?>>EROR</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Perbaharui</button>
            </form>
        </div>
    </div>
@endsection

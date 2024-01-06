
@extends('layouts.main')

@section('content')

<br><br>
<div class="col-md-6 col-md-offset-3 col-sm-8 col-md-offset-2  col-xs-12 mt-4">

<h3 class="text-center">Formulir Pengaduan</h3>

<form action="#" id="complaint-form" name="complaint-form" method="post" class="mt-3" novalidate="novalidate">
    
    <div class="form-group">
      <label for="name">Username</label>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" class="form-control input-l" value="" name="complaint_name" id="complaint_name">
        </div>
      </div>
      
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" class="form-control input-l" value="" name="complaint_email" id="complaint_email">
        </div>
      </div>
     
    </div>
    <div class="form-group">
      <label for="subject">Judul</label>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <input type="text" class="form-control input-l" name="complaint_subject" id="complaint_subject">
        </div>
      </div>
      
    </div>
    
    <div class="form-group">
      <label for="pwd">Pesan</label>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <textarea class="form-control" name="complaint_message" id="complaint_message" cols="30" rows="10" style="width:100%;height:100px;resize:none"></textarea>
        </div>
      </div>
      
    </div>
    <!-- <div class="form-group row no-gutters">
      <div class="col-md-7">
        <div class="row">
          <div class="col-xs-3 col-md-3" style="margin-top:5px;">
            <label>Captcha</label>
        </div> -->
        <!-- <div class="col-xs-4 col-md-4">
            <input type="tel" id="captcha" class="form-control" name="captcha" maxlength="4" autocomplete="off" style="height: 38px;">
        </div>
     
        <img src="https://www.geo138selalu.com/captcha-image-form?v=1688666351" data-url="https://www.geo138selalu.com/captcha-image-form?v=" class="captcha-img" autocomplete="off" height="38px">
                            <button class="btn-refresh-captcha compact  circular ui icon button" type="button">
                            <i class="icon-refresh"></i>
                            </button>
        </div> -->
      </div>
      
      
  </div><br>
  <div class="form-group">
    <ul><br>
      <li>Silakan menyampaikan segala bentuk keluhan yang Anda alami sebagai member dari website ini.</li>
      <li>Pesan Anda akan terkirim ke tim pusat engine yang khusus menangani pengaduan member tentang website ini.</li>
      <li>Respon akan dikirim ke alamat email yang Anda tulis di form.</li>
    </ul>
  </div>
  
  <!-- <div class="form-group">
    <div class="text-center">
      <button type="submit" class="btn btn-primary fs-lg btn-submit">Kirimkan</button>
    </div>
  </div> -->
  
   
    
  </form>
</div>

@endsection
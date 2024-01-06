{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('NoHP') }}</label>

                            <div class="col-md-6">
                                <input id="NoHP" type="number" class="form-control @error('NoHP') is-invalid @enderror" name="NoHP" value="{{ old('NoHP') }}" required autocomplete="Nomor telepon" autofocus>

                                @error('NoHP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Kode Reff') }}</label>

                            <div class="col-md-6">
                                <input id="Kode_Reff" type="text&number" class="form-control @error('Kode_Reff') is-invalid @enderror" name="Kode_Reff" value="{{ old('Kode_Reff') }}" required autocomplete="Kode Reff" autofocus>

                                @error('Kode_Reff')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Sesuai Rekening') }}</label>

                            <div class="col-md-6">
                                <input id="Nama_Rek" type="text" class="form-control @error('Nama_Rek') is-invalid @enderror" name="Nama_Rek" value="{{ old('Nama_Rek') }}" required autocomplete="Nama Sesuai Rekening" autofocus>

                                @error('Nama_Rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Akun Transaksi*') }}</label>

                            <div class="col-md-6">
                                <input id="jenis_transaksi" type="text" class="form-control @error('jenis_transaksi') is-invalid @enderror" name="jenis_transaksi" value="{{ old('jenis_transaksi') }}" required autocomplete="Jenis Akun Transaksi*" autofocus>

                                @error('jenis_transaksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Bank') }}</label>

                            <div class="col-md-6">
                                <input id="Bank" type="text" class="form-control @error('Bank') is-invalid @enderror" name="Bank" value="{{ old('Bank') }}" required autocomplete="Pilih Bank" autofocus>

                                @error('Bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('No. Rekening Bank') }}</label>

                            <div class="col-md-6">
                                <input id="No_Rek" type="number" class="form-control @error('No_Rek') is-invalid @enderror" name="No_Rek" value="{{ old('No_Rek') }}" required autocomplete="Nomor Rekening Bank" autofocus>

                                @error('No_Rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('No. Rekening Bank') }}</label>

                            <div class="col-md-6">
                                <input id="No_Rek" type="number" class="form-control @error('No_Rek') is-invalid @enderror" name="No_Rek" value="{{ old('No_Rek') }}" required autocomplete="Nomor Rekening Bank" autofocus>

                                @error('No_Rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.main')

@section('content')
    <div class="content my01">


        <div class="container  ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mb-1">
                        <h3 class="d-inline-block">Daftar Akun
                            <sup class="sup">
                                <a tabindex="0" id="Pop_my001" class="btn btn-clear" role="button" data-toggle="popover"
                                    data-trigger="focus" title="Member Benefits">
                                    MANFAAT ANGGOTA<i class="fas fa-question-circle"></i>
                                </a>
                            </sup>
                        </h3>

                        <form method="POST" action="{{ route('register') }}" id="registerForm1">
                            @csrf

                            <input type='hidden' name='stage_val' value="0" id='stage_val'>
                            <div class="register_form_one" id="form_satu">
                                <div class="sub-title">Rincian Akun</div>
                                <div class="form-group  ">
                                    <div class="col-md-5">
                                        <label>Nama pengguna</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="" name="name" required>
                                        <small class="text-left">* Nama akun harus 6-12 karakter, hanya menggunakan huruf
                                            dan/atau
                                            angka (0-9) dan tidak ada simbol (@#$~%&) <br> cth: <b>akun1234</b>
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <div class="col-md-5">
                                        <label>Kata sandi</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="password" id="password_1"
                                            placeholder="" required autocomplete="new-password">
                                        <small class="text-left">* Minimal 8 karakter, dapat berisi alfabet dan angka <br>
                                            cth:
                                            <b>katasandi1 </b> </small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <label>Konfirmasi Sandi</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control input_text" name="password_confirmation"
                                            id="password_confirmation" placeholder="" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="sub-title">Contact info</div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <label>Alamat email</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control " placeholder="" name="email"
                                            value="" required>
                                        <div class="loader-b" id="email-validate-loader"
                                            style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;">
                                        </div>
                                        <small class="text-left">* Silakan isi alamat email yang benar </small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <label>Nomor telepon</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="tel" class="form-control" placeholder="" id="mobile_no"
                                            name="mobile_no" required maxlength="20">
                                        <div class="loader-b" id="mobile-validate-loader"
                                            style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="refCode_formgrp">
                                    <div class="col-xs-5  col-md-5">
                                        <label>Kode Referensi / Afiliasi</label>
                                    </div>
                                    <div class="col-xs-7  col-md-7">
                                        <input type="text" class="form-control" id="refCodeInput" name="ref_code"
                                            maxlength="50" autocomplete="off">
                                        <small class="text-left">(Optional) Kosongkan jika tidak ada </small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-4 text-right" style="padding-top:15px">
                                    </div>
                                    <input type="hidden" value="1" name="isRegHasBank">
                                    <div class="col-xs-8 text-right" style="padding-top:15px">
                                        <button type="button" class="btn btn-secondary next_btn">Lanjut</button>
                                        {{-- <button type="button" onclick="satu()"
                                            class="btn btn-secondary next_btn">Lanjut</button> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="register_form_two" id="form_dua" style="display: none">
                                <div class="sub-title">Informasi bank</div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <label>Nama Sesuai Rekening</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="name1" placeholder=""
                                            name="acc_name" maxlength="100">
                                        <small class="text-left">* Nama yang terdaftar harus sesuai dengan nama rekening
                                            bank yang
                                            digunakan untuk menyetor dan menarik dana.</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5 ">
                                        <label for="method" style="padding-top: 7.5px;">Jenis Akun Transaksi<span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-6 radio_2">
                                                <input class=" " name="method" id="radioBank5" checked
                                                    type="radio" value="5">
                                                <label class=" " for="radioBank5">
                                                    <span class="radio-title">
                                                        Bank </span>
                                                    <span class="marked">
                                                        <i class="icon-checkmark"></i>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-xs-6 radio_2">
                                                <input class=" " name="method" id="radioEwallet7" type="radio"
                                                    value="7">
                                                <label class="" for="radioEwallet7">
                                                    <span class="radio-title">
                                                        E-wallet </span>
                                                    <span class="marked">
                                                        <i class="icon-checkmark"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="isShowBankOptions">
                                    <div class="col-md-5">
                                        <label>Bank</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" data-plugin="bank_list" id="bankOpts--register"
                                            name="bank_name">
                                            <option selected value>- Silahkan pilih -</option>
                                            <option value="BCA" data-bcode="BCA">BCA</option>
                                            <option value="BNI" data-bcode="BNI">BNI</option>
                                            <option value="MANDIRI" data-bcode="MDR">MANDIRI</option>
                                            <option value="BRI" data-bcode="BRI">BRI</option>
                                            <option value="BANK LAIN LAIN" data-bcode="Other">BANK LAIN LAIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="isShowEwalletOptions" style="display:none;">
                                    <div class="col-md-5">
                                        <label>E-wallet</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" data-plugin="bank_list" id="ewalletOpts--register"
                                            name="bank_name" disabled>
                                            <option selected value>- Silahkan pilih -</option>
                                            <option value="DANA">DANA</option>
                                            <option value="OVO">OVO</option>
                                            <option value="GOPAY">GOPAY</option>
                                            <option value="LINKAJA">LINKAJA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <label id="isShowBankLable">No. Rekening Bank</label>
                                        <label id="isShowEwalletLable" style="display:none;">No. E-Wallet</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="tel" class="form-control " placeholder="" name="acc_no"
                                            id="acc_no" required autocomplete="off" minlength="8" maxlength="20">
                                        <div class="loader-b" id="accno-validate-loader"
                                            style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;">
                                        </div>
                                        <small class="text-left">* Pastikan rekening anda Valid, Aktif, dan belum terdaftar
                                            di situs
                                            ini</small>
                                    </div>
                                </div>
                                {{-- <div class="form-group row no-gutters">
                                    <div class="col-xs-4 col-md-5" style="margin-left:15px;">
                                        <label>Captcha</label>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <input type="tel" id='captcha' class="form-control" name="captcha"
                                            maxlength="4" autocomplete="off" style="height: 38px;">
                                    </div>
                                    <!-- CAPTCHA -->
                                    <img data-url="#" class="captcha-img" autocomplete="off" height="38px">
                                    <button class="btn-refresh-captcha compact  circular ui icon button" type="button">
                                        <i class="icon-refresh"></i>
                                    </button>
                                </div> --}}

                                <div class="form-group form-check submit-box">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="terms" name="terms" value="on">
                                                &nbsp;Dengan memilih
                                                tombol DAFTAR, saya menyatakan bahwa saya berusia 18 tahun atau lebih. Saya
                                                telah membaca
                                                dan menyetujui Syarat & Ketentuan. Lihat <a href="#"
                                                    target="_blank">Syarat &
                                                    Ketentuan </a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-4 text-right" style="padding-top:15px">
                                        <button onclick="dua()" type="button"
                                            class="btn btn-tertiery prev_btn">Sebelumnya</button>
                                    </div>
                                    <div class="col-xs-8 text-right" style="padding-top:15px">
                                        <button type="submit" class="btn btn-secondary">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>

        </div>

        <script>
            function satu() {
                document.getElementById("form_satu").style.display = "none";
                document.getElementById("form_dua").style.display = "block";
            }

            function dua() {
                document.getElementById("form_satu").style.display = "block";
                document.getElementById("form_dua").style.display = "none";
            }

            $('input[name=method]').change(function() {
                $('#bankOpts--register').val(null);
                $('#ewalletOpts--register').val(null);
                $("#acc_no").val(null);

                if ($(this).val() == '7') {
                    $('#isShowBankOptions,#isShowBankLable').hide();
                    $('#isShowEwalletOptions,#isShowEwalletLable').show();

                    $('#bankOpts--register').prop('disabled', true);
                    $('#ewalletOpts--register').prop('disabled', false);
                } else {
                    $('#isShowBankOptions,#isShowBankLable').show();
                    $('#isShowEwalletOptions,#isShowEwalletLable').hide();
                    $('#bankOpts--register').prop('disabled', false);
                    $('#ewalletOpts--register').prop('disabled', true);
                }
            });
        </script>

        {{-- <script>
            $(document).ready(function() {
                $('#Pop_my001').popover({
                    animation: true,
                    
                    html: true,
                    sanitize: false,
                    content: '<div class="promo-box"> <div class="text-center text-primary">        <ul   class="fs-md">  <li> <div class="title" >        BONUS NEW MEMBER SLOT GAMES 20%          </div>  </li>  </ul>    <ul   class="fs-md">  <li> <div class="title" >        BONUS DEPOSIT HARIAN 20%          </div>  </li>  </ul>    <ul   class="fs-md">  <li> <div class="title" >        BONUS CASHBACK SPORTSBOOK HINGGA 5%          </div>  </li>  </ul>    <ul   class="fs-md">  <li> <div class="title" >        BONUS ROLLINGAN HINGGA 0.7%          </div>  </li>  </ul>    <ul   class="fs-md">  <li> <div class="title" >        BONUS REFFERAL 0.5%          </div>  </li>  </ul>      </div> </div>',
                    placement: 'bottom'
                });

            });
        </script> --}}


        {{-- <div class="mobilesite-footer">
            <div class="container">
                <style media="screen">
                    .left-custom-livechat-code {
                        bottom: 58px !important;
                    }

                    #chat-widget-container {
                        bottom: 51px !important;
                    }
                </style>
                <div class="menu-bottom">
                    <nav class="navbar-inverse navbar-fixed-bottom">
                        <div class=" ">
                            <div class="flex-row  text-center">
                                <div class="  footericon-single">
                                    <a href="index02f2.html?device=mobile"><i class="icon-home"></i>
                                        <div>HOME</div>
                                    </a>
                                </div>



                                <div class="  footericon-single">
                                    <a href="promotion.html"><i class="icon-gift"></i>
                                        <div>PROMOSI</div>
                                    </a>
                                </div>


                                <div class=" footericon-single" style="position: relative">
                                    <a href="javascript:void(0)" class="text-uppercase togglemenu-trigger"
                                        data-showID="#livechathover_menu"><i class="icon-chat1"></i>
                                        <div>LIVE CHAT</div>
                                    </a>
                                    <ul class="list-inline vertical-hover togglemenu-content" id="livechathover_menu">
                                        <li>
                                            <a href="javascript:void(0)" onclick="openLiveChat('https://#/' , '')"><i
                                                    class="icon-chat1"></i></a>
                                        </li>

                                        <li>
                                            <a href="#" target="_blank "><i class="icon-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank "><i class="icon-telegram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div> --}}
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

            /*setting minlength 10 for mobile number to IDR */
            var mob_minlength = 5;
            if (window.currencyCode == 'IDR') {
                mob_minlength = 10;
            }
            /*setting minlength 10 for mobile number to IDR */


            var formSteps = parseInt('1'); //count fr  0
            var pwd_regex = /^[A-Za-z\d!@#$%^&*()_+]{8,20}$/;
            var accname_regex = /^\s{0,1}[a-zA-Z-.\/,']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
            var ref_code = "";

            if (!!ref_code) {
                localStorage.setItem('refCode', ref_code);
                $('#refCode_formgrp').show();
            } else {
                var refCode = localStorage.getItem('refCode');
                if (!!refCode) {
                    $('#refCodeInput').val(refCode);
                    $('#refCodeInput').val(refCode).attr('readonly', true);
                    $('#txt-refCode__reg').text(refCode);
                    $('#refCode_formgrp').show();
                }
            }

            // var captcha_v=1;
            // $('#registerfreshCaptcha').click(function(e){

            //     captcha_v++;
            //     e.preventDefault();
            //     e.stopPropagation();
            //     $("#registerCaptchaimg").val('');
            //     var url ='https://www.geo138.life/captcha-image-register?v='+ Date.now() + Math.floor(Math.random() * 100000000);
            //     $('#Captchaimga').attr("src",url);

            // })
            $('.btn-refresh-captcha').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                $('input[name="registerCaptchaimg"]').val('');

                var $captchaImg = $(this).parent().find('img');
                var curCapUrl = $captchaImg.attr("data-url");
                var url = curCapUrl + Date.now() + Math.floor(Math.random() * 100000000);
                $captchaImg.attr("src", url);

            });


            $('input[name=method]').change(function() {
                $('#bankOpts--register').val(null);
                $('#ewalletOpts--register').val(null);
                $("#acc_no").val(null);

                if ($(this).val() == '7') {
                    $('#isShowBankOptions,#isShowBankLable').hide();
                    $('#isShowEwalletOptions,#isShowEwalletLable').show();

                    $('#bankOpts--register').prop('disabled', true);
                    $('#ewalletOpts--register').prop('disabled', false);
                    $("#acc_no").attr("minlength", '1');
                    $("#acc_no").attr("maxlength", "20");
                } else {
                    $('#isShowBankOptions,#isShowBankLable').show();
                    $('#isShowEwalletOptions,#isShowEwalletLable').hide();
                    $('#bankOpts--register').prop('disabled', false);
                    $('#ewalletOpts--register').prop('disabled', true);
                    $("#acc_no").attr("minlength", window.accLength);
                }
            });

            var thankyou = "Terima kasih atas pendaftaran Anda";
            var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
            var captchaCode = $('#6_letters_code').val();
            var datastring = "6_letters_code=" + captchaCode;
            var username = $("#username").val();
            var acc_no = $("#acc_no").val();
            var securecode = $("#captcha").val();
            var email_id = $("#email_id").val();
            var mobile_no = $("#mobile_no").val();


            $regi_validator = $("#registerForm1").validate({
                rules: {
                    acc_name: {

                        required: true,
                        pattern: accname_regex,
                        //pattern: /^[a-z A-Z]+$/,
                        minlength: 3
                    },

                    name: {
                        required: true,
                        minlength: 6,
                        maxlength: 12,
                        pattern: /^[a-zA-Z0-9]+$/,
                        // remote: {
                        //     url: "/checkUserNameAvailability",
                        //     type: "post",
                        //     headers: {
                        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //     },
                        // }
                    },
                    ref_code: {
                        maxlength: 50,
                        pattern: /^[a-zA-Z0-9]+$/,
                        // remote: {
                        //     url: "/checkRefCodeAvailability",
                        //     type: "post",
                        //     headers: {
                        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //     },
                        // }
                    },

                    acc_no: {
                        required: function() {
                            return window.isRegWAcc;
                        },
                        minlength: function(element) {
                            var bankAccLimit = $("#acc_no").attr('minlength');
                            return $("#acc_no").attr('minlength');
                        },
                        maxlength: function(element) {
                            return $("#acc_no").attr('maxlength');
                        },
                        pattern: /^[0-9]+$/,
                        // remote: {
                        //     url: "/checkAccNo",
                        //     type: "post",
                        //     dataType: "json",
                        //     async: true,
                        //     data: {
                        //         method: function() {
                        //             return $('#registerForm1 input[type=radio][name=method]:checked')
                        //                 .val();
                        //         }
                        //     },
                        //     complete: function(data) {
                        //         if ($('#acc_no').hasClass('pending')) {
                        //             $('#accno-validate-loader').hide();
                        //         }
                        //     },
                        //     headers: {
                        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //     },
                        // }
                    },
                    bank_name: {
                        required: function() {
                            return window.isRegWAcc;
                        },
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 20,
                        pattern: pwd_regex
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: '#password_1'
                    },
                    email: {
                        required: true,
                        email: true,
                        // remote: {
                        //     url: 'https://www.geo138.life/checkExistingEmail',
                        //     type: "post",
                        //     dataType: "json",
                        //     async: true,
                        //     complete: function(data) {
                        //         if (!$('#email').hasClass('pending')) {
                        //             $('#email-validate-loader').hide();
                        //         }
                        //     },
                        //     //  headers: {
                        //     //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //     //  },
                        // }
                    },
                    mobile_no: {
                        required: true,
                        minlength: mob_minlength,
                        pattern: /^[0-9]{5,20}$/,
                        // remote: {
                        //     url: 'https://www.geo138.life/checkExistingMobile',
                        //     type: "post",
                        //     dataType: "json",
                        //     async: true,
                        //     complete: function(data) {
                        //         if (!$('#mobile_no').hasClass('pending')) {
                        //             $('#mobile-validate-loader').hide();
                        //         }
                        //     },
                        //     //  headers: {
                        //     //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //     //  },
                        // }
                    },

                    terms: {
                        required: true,
                    },
                    captcha: {
                        required: false,
                        minlength: 0,
                        maxlength: 4,
                        // remote: {
                        //     url: "/checkFormCaptcha",
                        //     type: "post",
                        //     dataType: "json",
                        //     complete: function(data) {
                        //         // console.log(data); 
                        //         if (data.responseJSON == "refreshCaptcha")
                        //             $('.btn-refresh-captcha').trigger('click');
                        //     },
                        //     //  headers: {
                        //     //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //     //  },
                        // }
                    }

                },
                // Specify validation error messages
                messages: {

                    name2: {
                        required: "Diperlukan Nama Lengkap",
                        pattern: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                        minlength: "Diperlukan minimal 3 karakter",

                    },
                    name: {
                        required: "Diperlukan Nama Akun",
                        pattern: "Nama akun hanya dapat terdiri dari huruf dan angka",
                        minlength: "Diperlukan minimal 6 karakter",
                        maxlength: "Maksimal 12 karakter saja",
                        remote: "Nama Akun tidak tersedia"
                    },
                    acc_no: {
                        required: "Diperlukan nomor rekening bank",
                        pattern: "Nomor rekening bank hanya dapat terdiri dari angka",
                        // minlength:"Diperlukan minimal 8 karakter",
                        minlength: function(element) {
                            var min_length = $("#acc_no").attr('minlength');
                            var str = "Diperlukan minimal :acc_length karakter";
                            var minlength_msg = str.replace(":acc_length", min_length);
                            return minlength_msg;
                        },
                        maxlength: "Maksimal 20 karakter saja",
                        remote: "Nomor Rekening Sudah Terdaftar"
                    },
                    bank_name: {
                        required: "Bank Diperlukan",
                    },
                    password: {
                        required: "Diperlukan Kata Sandi",
                        minlength: "Diperlukan minimal 8 karakter",
                        maxlength: "Maksimal 20 karakter saja",
                    },
                    password_confirmation: {
                        required: "Konfirmasi Kata Sandi Diperlukan",
                        equalTo: "Konfirmasi Kata Sandi tidak sama dengan kata sandi",
                    },
                    email: {
                        required: "Diperlukan Email",
                        email: "Email tidak valid",
                        remote: "Email tidak tersedia"
                    },
                    mobile_no: {
                        required: "Diperlukan nomor ponsel",
                        minlength: "Diperlukan minimal 10 angka",
                        pattern: "Nomor ponsel harus terdiri dari nomor saja dan minimal 5 nomor.",
                        remote: "Nomor ponsel tidak tersedia"
                    },
                    terms: {
                        required: "Diperlukan Konfirmasi Syarat & Ketentuan",
                    },
                    captcha: {
                        required: "Captcha Diperlukan",
                        remote: "Captcha tidak valid"
                    },

                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    //element.parents(".col-sm-6").addClass("has-feedback");
                    element.addClass("has-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    function addErrorEleIcon(element) {
                        if (!$(element).next("i")[0]) {
                            $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(
                                element);
                        }
                    }
                    let eleId = element.id;

                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                        addErrorEleIcon(element);
                    } else if (eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')) {
                        addErrorEleIcon(element);
                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                        addErrorEleIcon(element);
                    } else {
                        addErrorEleIcon(element);
                    }
                },

                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    function addSuccessEleIcon(element) {
                        if (!$(element).next("i")[0]) {
                            $("<i class='icon-checkmark  form-control-feedback absolute'></i>")
                                .insertAfter(element);
                        }
                    }
                    let eleId = element.id;

                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                        addSuccessEleIcon(element);
                    } else if (eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')) {
                        addSuccessEleIcon(element);
                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                        addSuccessEleIcon(element);
                    } else {
                        addSuccessEleIcon(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    function chgEleShowError(element) {
                        $(element).addClass("has-error").removeClass("has-success");
                        $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                    }
                    let eleId = element.id;

                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                        chgEleShowError(element);
                    } else if (eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')) {
                        chgEleShowError(element);
                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                        chgEleShowError(element);
                    } else {
                        chgEleShowError(element);
                    }
                },
                unhighlight: function(element, errorClass, validClass) {
                    function chgEleShowSuccess(element) {
                        $(element).addClass("has-success").removeClass("has-error");
                        $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                    }

                    let eleId = element.id;

                    if ($(element).attr('id') == 'email' && !$('#email').hasClass('pending')) {
                        chgEleShowSuccess(element);
                    } else if (eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')) {
                        chgEleShowSuccess(element);
                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                        chgEleShowSuccess(element);
                    } else {
                        chgEleShowSuccess(element);
                    }
                },
                submitHandler: function(form) {
                    $('button[type=submit]').prop('disabled', true);

                    var curr_stage = parseInt($("#stage_val").val());
                    if (formSteps == curr_stage) {

                        form.submit();
                    } else {
                        $('button[type=submit]').prop('disabled', false);
                    }
                }
            });

            $('#mobile_no').keyup(function() {
                if ($('#mobile_no').hasClass('pending')) {
                    $('#mobile_no-error').text("Memvalidasi nomor ponsel...");
                    $('#mobile-validate-loader').show();
                }
            });

            $('#email').keyup(function() {
                if ($('#email').hasClass('pending')) {
                    $('#email-error').text("Memvalidasi email...");
                    $('#email-validate-loader').show();
                }
            });

            $('#acc_no').keyup(function() {
                if ($('#acc_no').hasClass('pending')) {
                    $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                    $('#accno-validate-loader').show();
                }
            });

            $("#registerForm1").submit(function(e) {
                e.preventDefault();
                if ($('#mobile_no').hasClass('pending') || $('#email').hasClass('pending')) {
                    validatingForm(0, true);
                    return false;
                } else if (!$("#registerForm1").valid()) {
                    sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali",
                        'warning');
                    return false;
                } else {
                    return true;
                }
            });

            var stepTwo_lang = "Langkah";
            var stepLast_lang = "Langkah Terakhir";
            $('.next_btn').on('click', async function() {
                const avail = await check_username_phone();

                if(avail){
                    validatingForm(0, false);
                }
            });

            function validatingForm(times, isSubmit) {
                times++;
                if (times > 2) {
                    sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali", 'warning');
                }

                if (($('#mobile_no').hasClass('pending') || $('#email').hasClass('pending'))) {
                    showLoadingImgFn();
                }

                setTimeout(function() {
                    if ($("#registerForm1").valid()) {
                        if (!$('#mobile_no').hasClass('pending') && !$('#email').hasClass('pending')) {
                            removeLoadingImgFn();

                            if (!isSubmit) { //if not submit only switch form
                                switchForm(1);
                            } else {
                                return $("#registerForm1").submit();
                            }
                        } else {
                            validatingForm(times, isSubmit);
                        }
                    } else if ($('#mobile_no').hasClass('pending') || $('#email').hasClass('pending')) {
                        validatingForm(times, isSubmit);
                    } else {
                        removeLoadingImgFn();
                        sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali",
                            'warning');
                    }
                }, 1000);
            }


            function switchForm(val) {
                var curr_stage = $("#stage_val").val();
                var up_val = parseInt(curr_stage) + val; // val -1 = previous tab, 1 = next tab
                $("#stage_val").val(up_val);
                window.scrollTo(0, 0);
                switch (up_val) {
                    case 0:
                        $('.register_form_one').css("display", "block");
                        $('.register_form_two,.register_form_three').css("display", "none");
                        $('#step_title').find('span').text($('#step_title').attr('data-title'));
                        break;
                    case 1:
                        $('.btn-refresh-captcha').trigger('click');
                        $('.register_form_one,.register_form_three').css("display", "none");
                        $('.register_form_two,.prev_btn').css("display", "block");
                        $('#step_title').find('span').text($('#step_title').attr('data-title') + ' - ' +
                            stepTwo_lang + ' 2 ');
                        break;
                    case 2:
                        $('.btn-refresh-captcha').trigger('click');
                        $('.register_form_one,.register_form_two').css("display", "none");
                        $('.register_form_three,.prev_btn').css("display", "block");
                        $('#step_title').find('span').text(stepLast_lang);
                        break;

                }
            }

            $('.prev_btn').on('click', function() {
                switchForm(-1);
            });

            $(document).on('keyup', function(event) {
                event.preventDefault();
                if (event.which == 13) {
                    var el = $(this).find('#registerForm1 .next_btn:visible')
                    if (!el) {

                        el = $(this).find('#registerForm1  button[type="submit"]:visible');
                    }
                    el.click();
                }
            });

            /*min and max length changing based on bank id*/
            var default_minlength, default_maxlength, selectedBank;
            default_minlength = $("#acc_no").attr('minlength');
            default_maxlength = $("#acc_no").attr('maxlength');
            $('#bankOpts--register').on('change', function() {
                selectedBank = $(this).find("option:selected").attr('data-bcode');
                var checkBankLimit = window.bankAccLength(selectedBank, default_minlength,
                    default_maxlength);
                console.log(checkBankLimit.min_len);
                $("#acc_no").attr('minlength', checkBankLimit.min_len);
                $("#acc_no").attr('maxlength', checkBankLimit.max_len);
            });
            /*min and max length changing based on bank id*/
        });
        if (window.location.href.indexOf("ref") > -1) {
            var url = new URL(location);
            url.searchParams.delete('ref');
            history.pushState(null, document.title, url);
        }

        
        async function check_username_phone(){
            const username = 'username='+ btoa($('input[name="name"]').val()), 
                phone = '&phone=' + btoa($('#mobile_no').val());

            let final = null;
            //get check phone number & username
            await $.get('{{ URL::to('username_phone') }}?' + username + phone, function(result) {

                result = typeof result ==='string' ? JSON.parse(result) : result;
                if(!result.username){
                    $('#name-error').text("Error, Name Sudah Ada");
                    
                    $('input[name=name]').removeClass('has-success');
                    $('input[name=name]').addClass('has-error');
                    $('input[name=name]').next().removeClass('icon-checkmark').addClass('icon-cross');
                }

                if(!result.phone){
                    $('#mobile_no-error').text('Nomor Telp sudah ada');
                    $('#mobile_no').removeClass('has-success');
                    $('#mobile_no').addClass('has-error');
                    $('#mobile_no').next().removeClass('icon-checkmark').addClass('icon-cross');
                }

                final = result.username && result.phone;
            });

            return final;
        }
    </script>
@endsection

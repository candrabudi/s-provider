<?php
use App\Models\Saldo;
?>
@extends('layouts.main')

@section('content')
    <style>
        .footer-body {
            display: none;
        }

        .backdrop {
            background-color: black;
        }
        #withdrawal_amount{
            padding-right: 45px;
            text-align: left;
        }
    </style>
    @if (Session::has('success'))
        <script type="text/javascript">
            Swal.fire(
                'Withdraw',
                'Mohon tunggu sebentar, withdraw anda sedang kami proses / konfirmasi melalui live chat',
                'success'
            );
        </script>
    @endif
    <div class="content my01">

        @include('nav_saldo')
        @php
            $saldo = Saldo::where('user_id', Auth::user()->id)->first();
        @endphp

        <div class="container-wrapper acc" style="background-color: black">
            <div class="container container-box noSidePadding">

                <div class="head-content">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <ng-content select="app-game-bals"></ng-content>
                        </div>
                        <div class="col-12 account_menu">

                            <div class="mdc-tab-bar" role="tablist">
                                <div class="mdc-tab-scroller">
                                    <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll mdc-tab-scroller__scroll-x"
                                        style="margin-bottom: 0px;">
                                        <div class="mdc-tab-scroller__scroll-content">
                                            <ul class="list-inline">
                                                <li>
                                                    <div class="deposit-notice-menu">
                                                        <a role="tab" href="{{ URL::to('user-deposit') }}"
                                                            data-active='accountdeposit' class="mdc-tab"
                                                            aria-selected="false" tabindex="-1"
                                                            id="goog_2098347606-FIXED-0">
                                                            <span class="mdc-tab__content">

                                                                <span class="mdc-tab__text-label">
                                                                    Deposit
                                                                </span>

                                                            </span>

                                                            <span class="mdc-tab-indicator">
                                                                <span
                                                                    class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                    style=""></span>
                                                            </span>

                                                            <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                                style="--mdc-ripple-fg-size:91px; --mdc-ripple-fg-scale:1.8648; --mdc-ripple-fg-translate-start:76px, -10.5px; --mdc-ripple-fg-translate-end:30.6563px, -21.5px;"></span>
                                                            &nbsp;
                                                        </a>
                                                    </div>

                                                </li>
                                                <li>
                                                    <a role="tab" href="{{ URL::to('user-withdraw') }}"
                                                        data-active='accountwithdrawal' class="mdc-tab" aria-selected="true"
                                                        tabindex="0" id="goog_2098347606-FIXED-1">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label">
                                                                Withdraw
                                                            </span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:93px; --mdc-ripple-fg-scale:1.85613; --mdc-ripple-fg-translate-start:48.6875px, -6.5px; --mdc-ripple-fg-translate-end:31.1875px, -22.5px;"></span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a role="tab" href="{{ URL::to('user-history') }}"
                                                        data-active='accountlastdirecttransfer' class="mdc-tab"
                                                        aria-selected="false" tabindex="-1" id="goog_2098347606-FIXED-3">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label">
                                                                5 Transaksi Terakhir

                                                            </span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a role="tab" href="{{ URL::to('user-pernyataan') }}"
                                                        data-active='accounthistory' class="mdc-tab" aria-selected="false"
                                                        tabindex="-1" id="goog_2098347606-FIXED-2">
                                                        <span class="mdc-tab__content">

                                                            <span class="mdc-tab__text-label">
                                                                Pernyataan

                                                            </span>

                                                        </span>

                                                        <span class="mdc-tab-indicator">
                                                            <span
                                                                class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"
                                                                style=""></span>
                                                        </span>

                                                        <span class="mdc-tab__ripple mdc-ripple-upgraded"
                                                            style="--mdc-ripple-fg-size:102px; --mdc-ripple-fg-scale:1.83267; --mdc-ripple-fg-translate-start:-44.1875px, -35px; --mdc-ripple-fg-translate-end:34.1484px, -27px;"></span>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="content">



                    <div class="row">
                        <div class="pb-4 pb-md-0 col-md-8">
                            <div class="title">
                                <h6 class="d-none d-md-block">&nbsp;</h6>
                            </div>
                            <form id="withdrawForm" action="{{ URL::to('user-withdraw') }}" method="post"
                                class="needs-validation" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="nama_bank" value="{{ $rek->bank }}">

                                <div class="box-wrapper">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">Jumlah</div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap m-15 ">
                                            <input type="tel" class="form-control number m-0 has-error has-feedback" 
                                                name="amount" id="withdrawal_amount" autocomplete="off"
                                                aria-describedby="withdrawal_amount-error" aria-invalid="true" 
                                                max="{{ $saldo->saldo + $saldo->bonus }}"
                                            />
                                            {{-- <input type="tel" class="form-control number m-15 " name="amount" 
                                                id="withdrawal_amount" autocomplete="off"
                                                max="{{ $saldo->saldo + $saldo->bonus }}"> --}}
                                            <i
                                                class="icon-cancel form-control-feedback absolute m-15"></i><em
                                                id="withdrawal_amount-error" class="error help-block mlr-15">
                                                tidak boleh kosong</em>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">Akun</div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <div class="form-check d-flex">
                                                <label class="radio m-15">
                                                    <input class="with-gap" name="withdrawType" checked=""
                                                        type="radio" value="existing" />
                                                    <span class="filter-title">Terdaftar</span>
                                                </label>
                                                <label class="radio m-15" id="opt_wdTypeNew">
                                                    <input class="with-gap" name="withdrawType" type="radio"
                                                        value="new" />
                                                    <span class="filter-title">Bank Baru</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center" id="acc_type_btn_group"
                                        style="display: none">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">Jenis akun baru</div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 m-15">
                                            <div class="row">
                                                <div class="col-xs-6 radio_2">
                                                    <input class=" " name="acc_type" id="radioBank5" checked=""
                                                        type="radio" value="5" />
                                                    <label class=" " for="radioBank5">
                                                        <span class="radio-title"> Bank </span>
                                                        <span class="marked">
                                                            <i class="icon-checkmark"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row d-flex align-items-center" id="existingbank_show">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">
                                                Sudah terdaftar<span class="text-danger">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap m-15">
                                            <select class="form-control m-0" name="user_acc_id" id="existing_bank">

                                                <option selected value="">- Silahkan pilih -</option>
                                                <option value="lotre" data-value="64682ad425cc9a13cc656863"
                                                    data-metName="Bank" data-accname="riski anizar9" data-method="5">
                                                    {{ $rek->bank }} - {{ $rek->no_rek }}
                                                </option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="row d-flex align-items-center" id="newbank_show" style="display: none">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">
                                                Bank Baru<span class="text-danger">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <select type="text" class="form-control m-15" name="new_bank"
                                                id="new_bank" disabled>
                                                <option value="">- Silahkan pilih -</option>
                                                <option value="BCA" data-bcode="BCA">
                                                    BCA</option>
                                                <option value="BNI" data-bcode="BNI">
                                                    BNI</option>
                                                <option value="MANDIRI" data-bcode="MDR">
                                                    MANDIRI</option>
                                                <option value="BRI" data-bcode="BRI">
                                                    BRI</option>
                                                <option value="BANK LAIN LAIN" data-bcode="Other">
                                                    BANK LAIN LAIN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center" id="newfundmethod_show"
                                        style="display: none">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">
                                                E-wallet baru<span class="text-danger">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <select type="text" class="form-control m-15" name="new_bank"
                                                id="new_fund_method" disabled>
                                                <option value="">--Silahkan pilih--</option>
                                                <option value="DANA" data-method="7">
                                                    DANA</option>
                                                <option value="OVO" data-method="7">
                                                    OVO</option>
                                                <option value="GOPAY" data-method="7">
                                                    GOPAY</option>
                                                <option value="LINKAJA" data-method="7">
                                                    LINKAJA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">Nama Sesuai Rekening</div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <input type="text" disabled name="acc_name" value="{{ $rek->nama_rek }}"
                                                maxlength="100" class="form-control m-15" id="fullName" placeholder=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center" id="accountNo_show" style="display: none">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">No rekening.</div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <input type="tel" name="acc_no" id="acc_no"
                                                class="form-control m-15" id="acc_no" placeholder="" minlength="8"
                                                maxlength=20 required value="{{ $rek->no_rek }}">
                                            <div class="loader-b" id="acc_no-loader"
                                                style="
                                                    position: absolute;
                                                    display: block;
                                                    right: 39px;
                                                    width: 10px;
                                                    left: inherit;
                                                    display: none;
                                                ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4"></div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <button type="submit" class="btn btn-secondary m-15" id="btn-submit">
                                                Withdraw
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- <form id="withdrawForm" action="{{ URL::to('user-withdraw') }}" method="post"
                                class="needs-validation">
                                @csrf
                                <input type="hidden" name="nama_bank" value="{{ $rek->bank }}">
                                <div class="box-wrapper">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4">
                                            <div class="font-weight-bold">
                                                Jumlah </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <input type="tel" class="form-control number m-15 " name="amount"
                                                id="withdrawal_amount" autocomplete="off" style="text-align: left;"
                                                max="{{ $saldo->saldo + $saldo->bonus }} ">
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4 ">
                                            <div class="font-weight-bold">
                                                Akun </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <div class="form-check d-flex">
                                                <label class="radio m-15">
                                                    <input class="with-gap" name="withdrawType" checked type="radio"
                                                        value="existing">
                                                    <span class="filter-title">Terdaftar</span>
                                                </label>
                                                <label class="radio m-15" id="opt_wdTypeNew">
                                                    <input class="with-gap" name="withdrawType" type="radio"
                                                        value="new">
                                                    <span class="filter-title">Bank Baru</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center" id="acc_type_btn_group"
                                        style="display:none;">

                                        <div class="col-md-3 col-xs-4 ">
                                            <div class="font-weight-bold">
                                                Jenis akun baru </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 m-15">
                                            <div class="row">
                                                <div class="col-xs-6 radio_2">

                                                    <input class=" " name="acc_type" id="radioBank5" checked
                                                        type="radio" value="5">
                                                    <label class=" " for="radioBank5">

                                                        <span class="radio-title">
                                                            Bank </span>
                                                        <span class="marked">
                                                            <i class="icon-checkmark"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row d-flex align-items-center" id="existingbank_show">
                                        <div class="col-md-3 col-xs-4 ">
                                            <div class="font-weight-bold">
                                                Sudah terdaftar<span class="text-danger">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <select class="form-control m-15" name="user_acc_id" id="existing_bank">

                                                <option selected value="">- Silahkan pilih -</option>
                                                <option value="lotre" data-value="64682ad425cc9a13cc656863"
                                                    data-metName="Bank" data-accname="riski anizar9" data-method="5">
                                                    {{ $rek->bank }} - {{ $rek->no_rek }}
                                                </option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="row d-flex align-items-center" id="newbank_show" style="display:none;">
                                        <div class="col-md-3 col-xs-4 ">
                                            <div class="font-weight-bold">
                                                Bank Baru<span class="text-danger">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <select type="text" class="form-control m-15" name="new_bank"
                                                id="new_bank" disabled>
                                                <option value="">--Silahkan pilih--</option>
                                                <option value="BCA" data-bcode="BCA">
                                                    BCA</option>
                                                <option value="BNI" data-bcode="BNI">
                                                    BNI</option>
                                                <option value="MANDIRI" data-bcode="MDR">
                                                    MANDIRI</option>
                                                <option value="BRI" data-bcode="BRI">
                                                    BRI</option>
                                                <option value="BANK LAIN LAIN" data-bcode="Other">
                                                    BANK LAIN LAIN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center" id="newfundmethod_show"
                                        style="display:none;">
                                        <div class="col-md-3 col-xs-4  ">
                                            <div class="font-weight-bold">
                                                E-wallet baru<span class="text-danger">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <select type="text" class="form-control m-15" name="new_bank"
                                                id="new_fund_method" disabled>
                                                <option value="">--Silahkan pilih--</option>
                                                <option value="DANA" data-method="7">
                                                    DANA</option>
                                                <option value="OVO" data-method="7">
                                                    OVO</option>
                                                <option value="GOPAY" data-method="7">
                                                    GOPAY</option>
                                                <option value="LINKAJA" data-method="7">
                                                    LINKAJA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4  ">
                                            <div class="font-weight-bold">
                                                Nama Sesuai Rekening </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">

                                            <input type="text" disabled name="acc_name" value="{{ $rek->nama_rek }}"
                                                maxlength="100" class="form-control m-15" id="fullName" placeholder=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center" id="accountNo_show" style="display:none;">
                                        <div class="col-md-3 col-xs-4  ">
                                            <div class="font-weight-bold">
                                                No rekening. </div>
                                        </div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <input type="tel" name="acc_no" id="acc_no"
                                                class="form-control m-15" id="acc_no" placeholder="" minlength="8"
                                                maxlength=20 required value="{{ $rek->no_rek }}">
                                            <div class="loader-b" id="acc_no-loader"
                                                style="position: absolute; display: block;  right: 39px; width: 10px;  left: inherit; display:none;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-3 col-xs-4  "></div>
                                        <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                                            <button type="submit" class="btn btn-secondary m-15">Withdraw</button>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                            <script>
                                var bankMethodIsMax = parseInt("0");
                                var ewalletMethodIsMax = 0;
                                window.wmin = 50000;
                                window.wmax = 999999999;
                                const max_saldo = <?= $saldo->saldo + $saldo->bonus ?>;

                                $(document).ready(function() {
                                    $("#withdrawForm").submit(function(e) {
                                        if ($("#acc_no").hasClass("pending")) {
                                            $("#acc_no-error").text("Memvalidasi nomor rekening bank...");
                                            showLoadingImgFn();
                                            $("#acc_no-loader").show();
                                            setTimeout(function() {
                                                removeLoadingImgFn();
                                                if (!$("#acc_no").hasClass("pending")) {
                                                    $("#withdrawForm").submit();
                                                }
                                            }, 2000);
                                        }
                                    });

                                    $("#acc_no").keyup(function() {
                                        if ($("#acc_no").hasClass("pending")) {
                                            $("#acc_no-error").text("Memvalidasi nomor rekening bank...");
                                            $("#acc_no-loader").show();
                                        }
                                    });
                                    // $("#withdrawal_amount").change(function () {
                                    //     if (parseInt($('#total').val().replace(/\,/g, '')) < parseInt($(this).val())) {
                                    //         alert('Balance not enought.')
                                    //         $(this).val('');
                                    //     }
                                    // });

                                    $("#accountNo_show").hide();

                                    // $('#withdrawal_amount').on('blur',function(e){
                                    //     $(this).val(formatNumberInput(e.target,'blur'));

                                    // });

                                    // $('#withdrawal_amount').on('keyup',function(e){
                                    //     $(this).val(formatNumberInput(e.target,''));

                                    // });

                                    function setNewAccType() {
                                        var selVal = $(
                                            "#withdrawForm input[type=radio][name=acc_type]:checked"
                                        ).val();
                                        $("#acc_no").val(null);
                                        if (selVal == 5) {
                                            $("#newfundmethod_show select[name=new_bank]").prop(
                                                "disabled",
                                                "disabled"
                                            );
                                            $("#newfundmethod_show select[name=new_bank]").val("");
                                            $("#newbank_show select[name=new_bank]").prop("disabled", false);
                                            $("#newfundmethod_show").hide();
                                            $("#newbank_show").show();

                                            $("#new_fund_method").rules("remove", "required");
                                            $("#acc_no").attr("minlength", window.accLength);
                                            $("#new_bank").rules("add", {
                                                required: true,
                                                messages: {
                                                    required: " tidak boleh kosong",
                                                },
                                            });
                                        } else if (selVal == 7) {
                                            $("#newbank_show select[name=new_bank]").prop("disabled", "disabled");
                                            $("#newbank_show select[name=new_bank]").val("");
                                            $("#newfundmethod_show select[name=new_bank]").prop("disabled", false);
                                            $("#newbank_show").hide();
                                            $("#newfundmethod_show").show();
                                            $("#new_bank").rules("remove", "required");
                                            $("#acc_no").attr("minlength", "1");
                                            $("#acc_no").attr("maxlength", "20");
                                            $("#new_fund_method").rules("add", {
                                                required: true,
                                                messages: {
                                                    required: " tidak boleh kosong",
                                                },
                                            });
                                        }
                                    }
                                    $("#withdrawForm input[type=radio][name=acc_type]").change(function() {
                                        setNewAccType();
                                    });

                                    function onChgWithdrawType() {
                                        // var val = $('#withdrawForm input[type=radio][name=withdrawType]:checked').val();

                                        window.wmin = 50000;
                                        window.wmax = 999999999;
                                        // if ($(this).val() == "new") {
                                        //     form_validate();

                                        //     $("#existingbank_show").hide();
                                        //     $("#accountNo_show").show();
                                        //     $("#acc_type_btn_group").show();

                                        //     setNewAccType();

                                        //     $("#existing_bank").rules("remove", "required");

                                        //     $("#acc_no").rules("add", {
                                        //         required: true,
                                        //         number: true,
                                        //         minlength: function(element) {
                                        //             return $("#acc_no").attr("minlength");
                                        //         },
                                        //         maxlength: function(element) {
                                        //             return $("#acc_no").attr("maxlength");
                                        //         },
                                        //         remote: {
                                        //             url: "https://www.geo138.life/checkAccNo",
                                        //             type: "post",
                                        //             dataType: "json",
                                        //             data: {
                                        //                 acc_type: function() {
                                        //                     return $(
                                        //                         "#withdrawForm input[type=radio][name=acc_type]:checked"
                                        //                     ).val();
                                        //                 },
                                        //             },
                                        //             complete: function(data) {
                                        //                 isBankAccValidating = false;
                                        //                 $("#acc_no-loader").hide();
                                        //             },
                                        //             //  headers: {
                                        //             //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //             //  },
                                        //         },

                                        //         messages: {
                                        //             required: " tidak boleh kosong",
                                        //             number: "Hanya numerik yang diterima.",
                                        //             // minlength:"Panjang Akun harus minimal 8 karakter.",
                                        //             minlength: function(element) {
                                        //                 var min_length = $("#acc_no").attr("minlength");
                                        //                 var str = "Diperlukan minimal :acc_length karakter";
                                        //                 var minlength_msg = str.replace(":acc_length", min_length);
                                        //                 return minlength_msg;
                                        //             },
                                        //             maxlength: "Akun Tidak boleh tidak boleh lebih dari 20 karakter.",
                                        //             remote: "Nomor akun ini telah terdaftar / ditangguhkan.",
                                        //         },
                                        //     });
                                        // } //existing bank
                                        // else {
                                        //     $("#newbank_show").hide();
                                        //     $("#newfundmethod_show").hide();
                                        //     $("#accountNo_show").hide();
                                        //     $("#existingbank_show").show();

                                        //     $("#new_bank").rules("remove", "required");
                                        //     $("#new_fund_method").rules("remove", "required");
                                        //     $("#acc_no").rules(
                                        //         "remove",
                                        //         "required number remote minlength maxlength"
                                        //     );
                                        //     $("#acc_type_btn_group").hide();
                                        //     if ($(this).val() == "existing") {
                                        //         form_validate();

                                        //         $("#existingbank_show").show();

                                        //         $("#existing_bank").rules("add", {
                                        //             required: true,

                                        //             messages: {
                                        //                 required: " tidak boleh kosong",
                                        //             },
                                        //         });
                                        //     } else {
                                        //         $("#existingbank_show").hide();
                                        //         $.get(
                                        //             "https://www.geo138.life/check_pg_limt?pg_key=" +
                                        //             $(this).data("pg_key"),
                                        //             function(d) {
                                        //                 if (d && d.data) {
                                        //                     window.wmin = d.data.min_w_amount;
                                        //                     window.wmax = d.data.max_w_amount;
                                        //                     // form_validate();
                                        //                     // $('#withdrawal_amount').rules('add', {
                                        //                     //     min: min,
                                        //                     //     max: max,
                                        //                     //     messages: {
                                        //                     //         min: "Jumlah penarikan minimum adalah " + window.currencyCode + window.commaSeparateNumber(min),
                                        //                     //         max: "Jumlah penarikan maksimum adalah " + window.currencyCode + window.commaSeparateNumber(max),
                                        //                     //     }
                                        //                     // })
                                        //                 }
                                        //             }
                                        //         );
                                        //         $("#existing_bank").rules("remove", "required");
                                        //     }
                                        // }
                                    }
                                    $("#withdrawForm input[type=radio][name=withdrawType]").change(
                                        onChgWithdrawType
                                    );

                                    // $("#existing_bank").change(function () {
                                    //     var selectedCountry = $(this).children("option:selected").attr('class');
                                    //     selectedCountry=selectedCountry.toString().replace('_',' ');
                                    //     $('#ref_no').val(selectedCountry);
                                    // });

                                    // var min = 50000;
                                    // var max = 999999999;

                                    function form_validate() {
                                        var accname_regex = /^\s{0,1}[a-zA-Z-.\/,']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
                                        $("#withdrawForm").validate().destroy();
                                        $("#withdrawForm").validate({
                                            rules: {
                                                acc_name: {
                                                    required: true,
                                                    pattern: accname_regex,
                                                    minlength: 3,
                                                },
                                                amount: {
                                                    required: true,
                                                    normalizer: function(value) {
                                                        return value ? convertToNumber(value) : null;
                                                    },
                                                    number: true,
                                                    min: window.wmin,
                                                    max: max_saldo
                                                    // remote: {
                                                    //     url: "https://www.geo138.life/checkWalletAmount",
                                                    //     type: "post",
                                                    //     dataType: "json",
                                                    //     //  headers: {
                                                    //     //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    //     //  },
                                                    // },
                                                },

                                                user_acc_id: {
                                                    required: true,
                                                },
                                                acc_no: {
                                                    required: true,
                                                },
                                            },
                                            // Specify validation error messages
                                            messages: {
                                                acc_name: {
                                                    required: "Diperlukan Nama Lengkap",
                                                    pattern: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                                                    minlength: "Diperlukan minimal 3 karakter",
                                                },
                                                amount: {
                                                    required: " tidak boleh kosong",
                                                    number: "Jumlahnya harus berupa angka",
                                                    min: "Jumlah penarikan minimum adalah " +
                                                        window.currencyCode +
                                                        window.commaSeparateNumber(window.wmin),
                                                    max: "Jumlah penarikan maksimum harus sesuai saldo",
                                                    remote: "Jumlah terlampaui",
                                                },
                                                user_acc_id: {
                                                    required: " tidak boleh kosong",
                                                },
                                            },
                                            errorElement: "em",
                                            errorPlacement: function(error, element) {
                                                // Add the `help-block` class to the error element
                                                error.addClass("help-block mlr-15");

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
                                                        $(
                                                            "<i class='icon-cancel form-control-feedback absolute m-15'></i>"
                                                        ).insertAfter(element);
                                                    }
                                                }

                                                let eleId = element.id;
                                                if (eleId == "acc_no" && !$("#acc_no").hasClass("pending")) {
                                                    addErrorEleIcon(element);
                                                } else {
                                                    addErrorEleIcon(element);
                                                }
                                            },
                                            success: function(label, element) {
                                                // Add the span element, if doesn't exists, and apply the icon classes to it.
                                                function addSuccessEleIcon(element) {
                                                    if (!$(element).next("i")[0]) {
                                                        $(
                                                            "<i class='icon-checkmark  form-control-feedback absolute m-15'></i>"
                                                        ).insertAfter($(element));
                                                    }
                                                }
                                                let eleId = element.id;

                                                if (eleId == "acc_no" && !$("#acc_no").hasClass("pending")) {
                                                    addSuccessEleIcon(element);
                                                } else {
                                                    addSuccessEleIcon(element);
                                                }
                                            },
                                            highlight: function(element, errorClass, validClass) {
                                                function chgEleShowError(element) {
                                                    $(element).addClass("has-error").removeClass("has-success");
                                                    $(element)
                                                        .next("i")
                                                        .addClass("icon-cancel")
                                                        .removeClass("icon-checkmark");
                                                }

                                                let eleId = element.id;
                                                if (eleId == "acc_no" && !$("#acc_no").hasClass("pending")) {
                                                    chgEleShowError(element);
                                                } else {
                                                    chgEleShowError(element);
                                                }
                                            },
                                            unhighlight: function(element, errorClass, validClass) {
                                                function chgEleShowSuccess(element) {
                                                    $(element).addClass("has-success").removeClass("has-error");
                                                    $(element)
                                                        .next("i")
                                                        .addClass("icon-checkmark")
                                                        .removeClass("icon-cancel");
                                                }

                                                let eleId = element.id;
                                                if (eleId == "acc_no" && !$("#acc_no").hasClass("pending")) {
                                                    chgEleShowSuccess(element);
                                                } else {
                                                    chgEleShowSuccess(element);
                                                }
                                            },
                                            submitHandler: function(form) {
                                                $("button[type=submit]").prop("disabled", true);
                                                form.submit();
                                            },
                                        });
                                    }
                                    form_validate();
                                    $(
                                        '#withdrawForm input[type=radio][name=withdrawType][value="existing"]'
                                    ).each(onChgWithdrawType);

                                    /*min and max length changing based on bank id*/
                                    var default_minlength, default_maxlength, selectedBank;
                                    default_minlength = $("#acc_no").attr("minlength");
                                    default_maxlength = $("#acc_no").attr("maxlength");

                                    $("#new_bank").on("change", function() {
                                        selectedBank = $(this).find("option:selected").attr("data-bcode");
                                        var checkBankLimit = window.bankAccLength(
                                            selectedBank,
                                            default_minlength,
                                            default_maxlength
                                        );
                                        console.log(checkBankLimit.min_len);
                                        $("#acc_no").attr("minlength", checkBankLimit.min_len);
                                        $("#acc_no").attr("maxlength", checkBankLimit.max_len);
                                    });
                                    /*min and max length changing based on bank id*/
                                });
                            </script>

                            {{-- <script>
                                var bankMethodIsMax = parseInt("0");
                                var ewalletMethodIsMax = 0;
                                window.wmin = 50000;
                                window.wmax = 999999999;
                                $(document).ready(function() {
                                    $('#withdrawForm').submit(function(e) {
                                        if ($('#acc_no').hasClass('pending')) {
                                            $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                                            showLoadingImgFn();
                                            $('#acc_no-loader').show();
                                            setTimeout(function() {
                                                removeLoadingImgFn();
                                                if (!$('#acc_no').hasClass('pending')) {
                                                    $('#withdrawForm').submit();
                                                }
                                            }, 2000);
                                        }
                                    });

                                    // $('#acc_no').keyup(function() {
                                    //     if ($('#acc_no').hasClass('pending')) {
                                    //         $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                                    //         $('#acc_no-loader').show();
                                    //     }
                                    // });
                                    // $("#withdrawal_amount").change(function () {
                                    //     if (parseInt($('#total').val().replace(/\,/g, '')) < parseInt($(this).val())) {
                                    //         alert('Balance not enought.')
                                    //         $(this).val('');
                                    //     }
                                    // });

                                    // $('#accountNo_show').hide();


                                    // $('#withdrawal_amount').on('blur',function(e){
                                    //     $(this).val(formatNumberInput(e.target,'blur'));

                                    // });

                                    // $('#withdrawal_amount').on('keyup',function(e){
                                    //     $(this).val(formatNumberInput(e.target,''));

                                    // });

                                    function setNewAccType() {
                                        var selVal = $('#withdrawForm input[type=radio][name=acc_type]:checked').val();
                                        $("#acc_no").val(null);
                                        if (selVal == 5) {



                                            $('#newfundmethod_show select[name=new_bank]').prop('disabled', 'disabled');
                                            $('#newfundmethod_show select[name=new_bank]').val('');
                                            $('#newbank_show select[name=new_bank]').prop('disabled', false);
                                            $('#newfundmethod_show').hide();
                                            $('#newbank_show').show();

                                            $("#new_fund_method").rules("remove", "required");
                                            $("#acc_no").attr("minlength", window.accLength);
                                            $("#new_bank").rules("add", {
                                                required: true,
                                                messages: {
                                                    required: " tidak boleh kosong",
                                                }
                                            });

                                        } else if (selVal == 7) {

                                            $('#newbank_show select[name=new_bank]').prop('disabled', 'disabled');
                                            $('#newbank_show select[name=new_bank]').val('');
                                            $('#newfundmethod_show select[name=new_bank]').prop('disabled', false);
                                            $('#newbank_show').hide();
                                            $('#newfundmethod_show').show();
                                            $("#new_bank").rules("remove", "required");
                                            $("#acc_no").attr("minlength", '1');
                                            $("#acc_no").attr("maxlength", "20");
                                            $("#new_fund_method").rules("add", {
                                                required: true,
                                                messages: {
                                                    required: " tidak boleh kosong",
                                                }
                                            });
                                        }
                                    }
                                    $('#withdrawForm input[type=radio][name=acc_type]').change(function() {


                                        setNewAccType();

                                    });


                                    function onChgWithdrawType() {
                                        // var val = $('#withdrawForm input[type=radio][name=withdrawType]:checked').val();

                                        window.wmin = 50000;
                                        window.wmax = 999999999;
                                        if ($(this).val() == 'new') {

                                            form_validate();

                                            $('#existingbank_show').hide();
                                            $('#accountNo_show').show();
                                            $('#acc_type_btn_group').show();

                                            setNewAccType();


                                            $("#existing_bank").rules("remove", "required");



                                            $("#acc_no").rules("add", {
                                                required: true,
                                                number: true,
                                                minlength: function(element) {
                                                    return $("#acc_no").attr('minlength');
                                                },
                                                maxlength: function(element) {
                                                    return $("#acc_no").attr('maxlength');
                                                },
                                                remote: {
                                                    url: "https://www.geo138.life/checkAccNo",
                                                    type: "post",
                                                    dataType: "json",
                                                    data: {
                                                        acc_type: function() {
                                                            return $('#withdrawForm input[type=radio][name=acc_type]:checked')
                                                                .val();
                                                        }
                                                    },
                                                    complete: function(data) {
                                                        isBankAccValidating = false;
                                                        $('#acc_no-loader').hide();
                                                    },
                                                    //  headers: {
                                                    //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    //  },
                                                },

                                                messages: {
                                                    required: " tidak boleh kosong",
                                                    number: "Hanya numerik yang diterima.",
                                                    // minlength:"Panjang Akun harus minimal 8 karakter.",
                                                    minlength: function(element) {
                                                        var min_length = $("#acc_no").attr('minlength');
                                                        var str = "Diperlukan minimal :acc_length karakter";
                                                        var minlength_msg = str.replace(":acc_length", min_length);
                                                        return minlength_msg;
                                                    },
                                                    maxlength: "Akun Tidak boleh tidak boleh lebih dari 20 karakter.",
                                                    remote: "Nomor akun ini telah terdaftar / ditangguhkan."
                                                }
                                            });
                                        } else //existing bank
                                        {
                                            $('#newbank_show').hide();
                                            $('#newfundmethod_show').hide();
                                            $('#accountNo_show').hide();
                                            $('#existingbank_show').show();

                                            $("#new_bank").rules("remove", "required");
                                            $("#new_fund_method").rules("remove", "required");
                                            $("#acc_no").rules("remove", "required number remote minlength maxlength");
                                            $('#acc_type_btn_group').hide();
                                            if ($(this).val() == 'existing') {
                                                form_validate();

                                                $('#existingbank_show').show();

                                                $("#existing_bank").rules("add", {
                                                    required: true,

                                                    messages: {
                                                        required: " tidak boleh kosong",
                                                    }
                                                });
                                            } else {
                                                $('#existingbank_show').hide();
                                                $.get("https://www.geo138.life/check_pg_limt?pg_key=" + $(this).data('pg_key'), function(
                                                    d) {
                                                    if (d && d.data) {
                                                        window.wmin = d.data.min_w_amount;
                                                        window.wmax = d.data.max_w_amount;
                                                        // form_validate();
                                                        // $('#withdrawal_amount').rules('add', {
                                                        //     min: min,
                                                        //     max: max,
                                                        //     messages: {
                                                        //         min: "Jumlah penarikan minimum adalah " + window.currencyCode + window.commaSeparateNumber(min),
                                                        //         max: "Jumlah penarikan maksimum adalah " + window.currencyCode + window.commaSeparateNumber(max),
                                                        //     }
                                                        // })
                                                    }
                                                })
                                                $("#existing_bank").rules("remove", "required");

                                            }

                                        }
                                    }

                                    $('#withdrawForm input[type=radio][name=withdrawType]').change(onChgWithdrawType);

                                    function form_validate() {
                                        var accname_regex = /^\s{0,1}[a-zA-Z-.\/,']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
                                        $("#withdrawForm").validate().destroy();
                                        // $("#withdrawForm").validate({
                                        //     rules: {
                                        //         acc_name: {

                                        //             required: true,
                                        //             pattern: accname_regex,
                                        //             minlength: 3
                                        //         },
                                        //         amount: {

                                        //             required: true,
                                        //             normalizer: function(value) {
                                        //                 return value ? convertToNumber(value) : null;
                                        //             },
                                        //             number: true,
                                        //             min: window.wmin,
                                        //             max: window.wmax,
                                        //             remote: {
                                        //                 url: "https://www.geo138.life/checkWalletAmount",
                                        //                 type: "post",
                                        //                 dataType: "json",
                                        //                 //  headers: {
                                        //                 //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        //                 //  },
                                        //             }
                                        //         },

                                        //         user_acc_id: {
                                        //             required: true,

                                        //         },
                                        //         acc_no: {
                                        //             required: true,

                                        //         }

                                        //     },
                                        //     // Specify validation error messages
                                        //     messages: {
                                        //         acc_name: {
                                        //             required: "Diperlukan Nama Lengkap",
                                        //             pattern: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                                        //             minlength: "Diperlukan minimal 3 karakter",

                                        //         },
                                        //         amount: {
                                        //             required: " tidak boleh kosong",
                                        //             number: "Jumlahnya harus berupa angka",
                                        //             min: "Jumlah penarikan minimum adalah " + window.currencyCode + window
                                        //                 .commaSeparateNumber(window.wmin),
                                        //             max: "Jumlah penarikan maksimum adalah " + window.currencyCode + window
                                        //                 .commaSeparateNumber(window.wmax),
                                        //             remote: "Jumlah terlampaui"
                                        //         },
                                        //         user_acc_id: {
                                        //             required: " tidak boleh kosong",
                                        //         },

                                        //     },
                                        //     errorElement: "em",
                                        //     errorPlacement: function(error, element) {
                                        //         // Add the `help-block` class to the error element
                                        //         error.addClass("help-block mlr-15");

                                        //         // Add `has-feedback` class to the parent div.form-group
                                        //         // in order to add icons to inputs
                                        //         //element.parents(".col-sm-6").addClass("has-feedback");
                                        //         element.addClass("has-feedback");
                                        //         if (element.prop("type") === "checkbox") {
                                        //             error.insertAfter(element.parent("label"));
                                        //         } else {
                                        //             error.insertAfter(element);
                                        //         }

                                        //         // Add the span element, if doesn't exists, and apply the icon classes to it.
                                        //         function addErrorEleIcon(element) {
                                        //             if (!$(element).next("i")[0]) {
                                        //                 $("<i class='icon-cancel form-control-feedback absolute m-15'></i>")
                                        //                     .insertAfter(element);
                                        //             }
                                        //         }

                                        //         let eleId = element.id;
                                        //         if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        //             addErrorEleIcon(element);
                                        //         } else {
                                        //             addErrorEleIcon(element);
                                        //         }
                                        //     },
                                        //     success: function(label, element) {
                                        //         // Add the span element, if doesn't exists, and apply the icon classes to it.
                                        //         function addSuccessEleIcon(element) {
                                        //             if (!$(element).next("i")[0]) {
                                        //                 $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>")
                                        //                     .insertAfter($(element));
                                        //             }
                                        //         }
                                        //         let eleId = element.id;

                                        //         if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        //             addSuccessEleIcon(element);
                                        //         } else {
                                        //             addSuccessEleIcon(element);
                                        //         }
                                        //     },
                                        //     highlight: function(element, errorClass, validClass) {
                                        //         function chgEleShowError(element) {
                                        //             $(element).addClass("has-error").removeClass("has-success");
                                        //             $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                                        //         }

                                        //         let eleId = element.id;
                                        //         if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        //             chgEleShowError(element);
                                        //         } else {
                                        //             chgEleShowError(element);
                                        //         }
                                        //     },
                                        //     unhighlight: function(element, errorClass, validClass) {
                                        //         function chgEleShowSuccess(element) {
                                        //             $(element).addClass("has-success").removeClass("has-error");
                                        //             $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                                        //         }

                                        //         let eleId = element.id;
                                        //         if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        //             chgEleShowSuccess(element);
                                        //         } else {
                                        //             chgEleShowSuccess(element);
                                        //         }

                                        //     },
                                        //     submitHandler: function(form) {
                                        //         $('button[type=submit]').prop('disabled', true);
                                        //         form.submit();
                                        //     }
                                        // });
                                    }
                                    form_validate();
                                    $('#withdrawForm input[type=radio][name=withdrawType][value="existing"]').each(onChgWithdrawType);
                                    // $('#withdrawal_amount').priceFormat({
                                    //     prefix: '',
                                    //     centsLimit: 0,
                                    //     thousandsSeparator: ',',
                                    //     clearOnEmpty: true,
                                    //     a
                                    // });


                                    /*min and max length changing based on bank id*/
                                    var default_minlength, default_maxlength, selectedBank;
                                    default_minlength = $("#acc_no").attr('minlength');
                                    default_maxlength = $("#acc_no").attr('maxlength');


                                    $('#new_bank').on('change', function() {
                                        selectedBank = $(this).find("option:selected").attr('data-bcode');
                                        var checkBankLimit = window.bankAccLength(selectedBank, default_minlength,
                                            default_maxlength);
                                        console.log(checkBankLimit.min_len);
                                        $("#acc_no").attr('minlength', checkBankLimit.min_len);
                                        $("#acc_no").attr('maxlength', checkBankLimit.max_len);
                                    });
                                    /*min and max length changing based on bank id*/
                                })
                            </script> --}}

                        </div>

                    </div>


                </div>

            </div>
        </div>



        <script>
            $(document).ready(function() {

                $(function() {
                    var path = window.location.pathname || '';
                    path = path.replace(new RegExp('/', 'g'), '').toLowerCase();
                    $('.mdc-tab[data-active="' + path + '"]').addClass('mdc-tab--active');
                    $('.mdc-tab[data-active="' + path + '"] .mdc-tab-indicator').addClass(
                        'mdc-tab-indicator--active');
                });

                $('#withdrawal_amount').inputmask({
                    'alias':          'decimal',
                    'groupSeparator': ',',
                    'autoGroup':      true, 
                    'digits':         0,
                    'digitsOptional': false,
                    'placeholder':    '0.00',
                    'rightAlign' : false,
                    'allowMinus': false,
                });
            });
        </script>

    </div>
@endsection

<?php
use App\Models\Setting;
$setting=Setting::first();
?>

@extends('layouts.main')

@section('content')
    <div class="content my01">
        <div class="container promo-view">

            <div class="promo-list ml-lg-5 mr-lg-5">
                <style>
                    ::-webkit-scrollbar {
                        width: 6px;
                        height: 6px;
                    }

                    /* Track */
                    ::-webkit-scrollbar-track {
                        background: #e5e5e5;
                    }

                    /* Handle */
                    ::-webkit-scrollbar-thumb {
                        background: #7e7e7e;
                        border-radius: 5px;
                    }

                    /* Handle on hover */
                    ::-webkit-scrollbar-thumb:hover {
                        background: #555;
                    }

                    .time-remaining-wraper {
                        padding: 0;
                    }

                    .mobile .promotion-modal .panel-body {
                        background: transparent !important;
                    }
                </style>
                <div class="promotion-page">
                    <div class="g_category-nav fixed nav nav-pills nav-fill clearfix">
                        <div class="nav-item" data-filter="ALL">
                            <a class="navlink" href="javascript:void(0);">
                                SEMUA
                            </a>
                        </div>
                        <div class="nav-item" data-filter="khusus">
                            <a class="navlink" href="javascript:void(0);">
                                Khusus
                            </a>
                        </div>
                        <div class="nav-item" data-filter="sports">
                            <a class="navlink" href="javascript:void(0);">
                                sports
                            </a>
                        </div>
                        <div class="nav-item" data-filter="slots">
                            <a class="navlink" href="javascript:void(0);">
                                slots
                            </a>
                        </div>
                        <div class="nav-item" data-filter="casino">
                            <a class="navlink" href="javascript:void(0);">
                                casino
                            </a>
                        </div>
                        <div class="nav-item" data-filter="others">
                            <a class="navlink" href="javascript:void(0);">
                                others
                            </a>
                        </div>


                    </div>
                    <div class="promotion-group" id="promotion-group">

                        @foreach ($banners as $item)
                            <div class="promotion-single"
                                data-filter="{{ $item['kategori'] ? 'ALL,' . $item['kategori'] : 'ALL' }}">
                                <div class="row d-flex">
                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                        <img src="{{ asset('storage/' . $item['gambar']) }}" alt="{{ $setting->nama_web }} promo"
                                            class="img-fluid " />
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">
                                        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
                                            <h3 class="title">
                                                <div>{{ $item['nama'] }}</div>
                                            </h3>
                                            <div class="m-t-10">
                                                <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty"
                                                    data-target="#promo-modal-{{ $item['id'] }}">Rincian</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
                                            <div class="time-remaining">
                                                <i class="icon-clock"></i> &nbsp; Waktu yang tersisa
                                            </div>
                                            <div class="time-remaining-value">
                                                <h4>
                                                    <span>Tanpa Batas Waktu</span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Language Option Modal -->
                            <div class="nifty-modal slide-in-bottom modal-lg promotion-modal"
                                id="promo-modal-{{ $item['id'] }}">
                                <div class="md-content">
                                    <div class='md-head'>
                                        <div class="md-close">X</div>
                                    </div>
                                    <div class="promotionmodal_content">

                                        <div class="md-body">
                                            <div class="row">

                                                <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
                                                    <img src="{{ asset('storage/' . $item['gambar']) }}"
                                                        alt="{{ $setting->nama_web }} promo" class="img-fluid " />
                                                </div>
                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                    <h3 class="title m-t-10">
                                                        <div>
                                                            {{ $item['nama'] }}
                                                        </div>
                                                    </h3>
                                                    <div class="time-remaining">
                                                        <i class="icon-clock"></i> &nbsp; Berlaku sampai
                                                        {{-- <i class="icon-clock"></i> &nbsp; Waktu yang tersisa --}}
                                                    </div>
                                                    <div class="time-remaining-value">
                                                        <h4>
                                                            @if ($item['batas_waktu'] != '')
                                                                <span>{{ $item['batas_waktu'] }}</span>
                                                            @else
                                                                <span>Tanpa Batas Waktu</span>
                                                            @endif
                                                        </h4>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="m-t-10 ">
                                                <p style="font-family: &quot;Times New Roman&quot;; font-size: medium;">
                                                    <strong><span style="font-family: Arial;">Syarat
                                                            &amp;Ketentuan:</span></strong>
                                                </p>
                                                <p
                                                    style="margin-bottom: 1rem; font-family: Ubuntu, sans-serif; outline-style: initial !important; outline-width: 0px !important; white-space: pre-line; line-height: 26px;">
                                                    {{ $item['deskripsi'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md-overlay"></div>
                        @endforeach
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        function filterGameBoxes(self) {
                            $('.g_category-nav .nav-item').removeClass('active');
                            $(self).addClass('active');
                            var filterType = $(self).data('filter');
                            $('.promotion-page .promotion-single').hide();
                            $('.promotion-page .promotion-single').filter(function() {
                                return $(this).data("filter").indexOf(filterType) >= 0;
                            }).show();
                        }
                        //Default to ALL Games :
                        filterGameBoxes($('.g_category-nav .nav-item[data-filter=ALL]')[0]);
                        //Add filter btn event listen
                        $('.g_category-nav .nav-item[data-filter]').click(function() {
                            filterGameBoxes(this);
                        });
                    });
                </script>
            </div>
        </div>

        <div class="mobilesite-footer">
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
                                    <a href="{{ URL::to('/') }}"><i class="icon-home"></i>
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
                                            <a href="javascript:void(0)"
                                                onclick="openLiveChat('https://https://tawk.to/chat/647a37f57c7b15544f3eab27/1h1uml62c/' , '')"><i
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


                <script type="text/javascript">
                    $(".togglemenu-trigger").click(function() {
                        var currentToggle = $(this).attr("data-showID");
                        if ($(currentToggle).hasClass("show")) {
                            $(currentToggle).removeClass("show");
                        } else {
                            $(".togglemenu-content").removeClass("show");
                            $(currentToggle).addClass("show");
                        }

                    });
                </script>
            </div>
        </div>

    </div>
@endsection

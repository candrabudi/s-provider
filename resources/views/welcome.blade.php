<?php
use App\Models\Banner;
use App\Models\Setting;
?>
@extends('layouts.main')

@section('content')
    <div class="content my01">

        <div class="apk-down-bar" id="apk-down-bar" style="display:none;">
            <table>
                <tr>
                    <td rowspan="2" style="width:18%; " class="clearfix">
                        <button class="btn btn-link" id="btn-close--apk">X</button>
                        <span class="fs-lg android-wrap"><i class="icon-android"></i></span>
                    </td>
                    <td style="width:100%; ">
                    <div class="div">
                    <?php
                    $setting=Setting::first();
                    ?>
                    <div> 
                            {{ $setting->nama_web}} Lite Download
                        </div>
                    </div>
                        

                    </td>
                    <td rowspan="2">
                        <a href="#" class="btn btn-link">
                            <i class="icon-download" style="font-size:1.8em;"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div><small>Fast, Light & Secure</small></div>
                    </td>
                </tr>
            </table>
        </div>

        @include('nav_saldo')

        <style>
            .slider-size {
                max-height: 500px;

                min-height: 130px;
            }
        </style>

        <!-- 
        <section class="carousel-fixed-height">
            <div id="carousel-fixed-height" class="carousel slide  " data-ride="carousel">
                <ol class="carousel-indicators">

                    <li data-target="#carousel-fixed-height" data-slide-to="0" class="active"></li>

                    <li data-target="#carousel-fixed-height" data-slide-to="1" class=""></li>

                    <li data-target="#carousel-fixed-height" data-slide-to="2" class=""></li>

                    <li data-target="#carousel-fixed-height" data-slide-to="3" class=""></li>
                </ol>

                <div class="carousel-inner" role="listbox">


                    <div class="item active">

                        <img class="slider-size" src=" {{ asset('/image/bonus1.png') }}"
                            style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="Slot Thailand">

                    </div>

                    <div class="item ">


                        <img class="slider-size" src=" {{ asset('/image/bonus2.png') }}"
                            style="display: block; width: 100%; max-height: 500px;  min-height: 130px;"
                            alt="{{ $setting->nama_web }} Withdraw">

                    </div>

                    <div class="item">


                        <img class="slider-size" src="#" data-src="{{ asset('/image/slotgacor.png') }}"
                            style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="Slot Gacor">

                    </div>

                </div>

                <a class="left carousel-control" href="#carousel-fixed-height" role="button" data-slide="prev">
                    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
                    <span class="icon-wrap">
                        <i class="icon-chevron-left icon-prev"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-fixed-height" role="button" data-slide="next">
                    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
                    <span class="icon-wrap"><i class="icon-arrow_forward_ios icon-next"></i></span>

                    <span class="sr-only">Next</span>
                </a>

            </div>
        </section>
        -->

        <section>
            <div id="carousel" class="owl-carousel">
                @php
                    $banners = Banner::all();
                    foreach($banners as $banner){
                @endphp
                <div class="carousel-item">
                    <img class="slider-size" src=" {{ asset('storage/banner/' . $banner['gambar']) }}" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="Slot Thailand">
                </div>
                @php
                    }
                @endphp
            </div>
        </section>
        <div class="ann-wrapper" style="padding-left:15px;padding-right:15px;">
            <div class="clearfix pt-2">
                <div class="pull-left pointer">
                    <div>
                        <i class="icon-megaphone"></i>
                    </div>
                </div>
                <div class="ann-content">
                    <?php
                    $setting=Setting::first();
                    ?>
                    <marquee scrollamount="5"> 
                        {{ $setting->running_text}}
                        
                    </marquee>
                </div>
            </div>
        </div>

        <!-- Login Buttons -->
        @if (Auth::check())
        @else
            <div class="btns-log row no-gutters">
                <div class="col-xs-6">
                    <button type="button" class="btn btn-tertiery btn-block btn-login-css" id="btnLogin--home">LOGIN</button>
                </div>
                <div class="col-xs-6">
                    <a class="btn btn-accent btn-block btn-login2-css" href="{{ URL::to('register') }}">DAFTAR</a>
                </div>

            </div>
        @endif

        <!-- END Login Buttons-->

        <!--Shorcut Menu -->

        <div class="scroll-wrapper no-gutters scroll-game" _home>

            <div class="left"><button class="prev-btn btn" id="left-button"><i
                        class="icon-keyboard_arrow_left"></i></button></div>

            <div style="overflow:hidden; " class="scroller">
                <div class="no-gutters text-center slider-content" #scrollContent>

                    <div class="col url-box" href="{{ URL::to('slots') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-slot"></i>
                            <div>SLOTS</div>
                            <span class='hot'>HOT</span>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('sports') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-soccer"></i>
                            <div>SPORTS</div>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('casino') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-casino"></i>
                            <div>CASINO</div>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('p2p') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-menu-poker-01"></i>
                            <div>P2P</div>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('fish-hunter') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-fish_hunter"></i>
                            <div>TEMBAK IKAN</div>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('lottery') }}">
                        <a class="btn-box">
                            <i class="icon-lottery"></i>
                            <div>LOTRE</div>

                            <span class="hot new ">NEW</span>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('e-games') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-others"></i>
                            <div>E-GAMES</div>
                        </a>
                    </div>
                    <div class="col url-box" href="{{ URL::to('cockfight') }}">
                        <!-- <a class="btn-box maintenance-alert"> -->
                        <a class="btn-box">
                            <i class="icon-cockfight"></i>
                            <div>SABUNG AYAM</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right"><button class="next-btn btn" id="right-button"><i
                        class="icon-keyboard_arrow_right"></i></button></div>


        </div>

        <div class="jackpot">


            <img class="img-fluid" style="width:100%;" src=" {{ asset('/image/warna.gif') }}"
                alt="jackpot" />

            <div class="txt-overlay">
                <div class="text-content">
                    <span id="jackpot_amount">IDR Loading...</span>
                </div>
            </div>
        </div>
        <div class="app-wrapper container">
            <!--hot games-->
            <div class="row" style="padding-top:10px;">

                <div class="col-xs-12">
                    <div class="g-slider-wrapper recommend js-cycling-gallery">
                        <div class="title-wrapper">
                            <h4 class="title u-section-title">GAME REKOMENDASI</h4>

                            <div class="pagi-wrp">
                                <button class="btn btn-link js-cycling-btn " data-action="prev"><i
                                        class="icon-chevron-left"></i></button>
                                <button class="btn btn-link js-cycling-btn  " data-action="next"><i
                                        class="icon-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="content-wrapper hot-games round" style="overflow: hidden; position: relative;">


                            <ul style="position: absolute;" data-count="7">

                                <li>
                                    <div class="game-box round maintenance-alert">

                                        <img class="lazy" alt="SBOBET" src="#" alt="SBOBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/sbo7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="AG" src="#" alt="AG"
                                            data-src=" {{ asset('/image/game_providers_round_logo/ag7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->
                                        <img class="lazy" alt="ALLBET" src="#" alt="ALLBET"
                                            data-src=" {{ asset('/image/game_providers_round_logo/allbet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EBET" src="#" alt="EBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/ebet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EVO" src="#" alt="EVO"
                                            data-src="{{ asset('/image/game_providers_round_logo/evo7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="HABANERO" src="#" alt="HABANERO"
                                            data-src="{{ asset('/image/game_providers_round_logo/habanero7b30.png') }} " />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="SABA SPORTS" src="#" alt="SABA SPORTS"
                                            data-src="{{ asset('/image/game_providers_round_logo/ibc7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="JOKER" src="#" alt="JOKER"
                                            data-src="{{ asset('/image/game_providers_round_logo/jokerae52.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->
                                        <img class="lazy" alt="ALLBET" src="#" alt="ALLBET"
                                            data-src=" {{ asset('/image/game_providers_round_logo/allbet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EBET" src="#" alt="EBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/ebet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EVO" src="#" alt="EVO"
                                            data-src="{{ asset('/image/game_providers_round_logo/evo7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="HABANERO" src="#" alt="HABANERO"
                                            data-src="{{ asset('/image/game_providers_round_logo/habanero7b30.png') }} " />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="PGSOFT" src="#" alt="PGSOFT"
                                            data-src="{{ asset('/image/game_providers_round_logo/pgsolf7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="PLAYTECH" src="#" alt="PLAYTECH"
                                            data-src="{{ asset('/image/game_providers_round_logo/playtech7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="PRAGMATIC" src="#" alt="PRAGMATIC"
                                            data-src="{{ asset('/image/game_providers_round_logo/pragmatic7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="SKYWIND" src="#" alt="SKYWIND"
                                            data-src="{{ asset('/image/game_providers_round_logo/skywind7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="SPADE GAMING" src="#" alt="SPADE GAMING"
                                            data-src="{{ asset('/image/game_providers_round_logo/spadegaming7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="SBOBET" src="#" alt="SBOBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/sbo7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="AG" src="#" alt="AG"
                                            data-src="{{ asset('/image/game_providers_round_logo/ag7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->
                                        <img class="lazy" alt="ALLBET" src="#" alt="ALLBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/allbet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EBET" src="#" alt="EBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/ebet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EVO" src="#" alt="EVO"
                                            data-src="{{ asset('/image/game_providers_round_logo/evo7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="HABANERO" src="#" alt="HABANERO"
                                            data-src="{{ asset('/image/game_providers_round_logo/habanero7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>


                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="SABA SPORTS" src="#" alt="SABA SPORTS"
                                            data-src="{{ asset('/image/game_providers_round_logo/ibc7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <a class="game-box round maintenance-alert">



                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="HABANERO" src="#" alt="HABANERO"
                                            data-src="{{ asset('/image/game_providers_round_logo/habanero7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </a>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="AG" src="#" alt="AG"
                                            data-src=" {{ asset('/image/game_providers_round_logo/ag7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->
                                        <img class="lazy" alt="ALLBET" src="#" alt="ALLBET"
                                            data-src=" {{ asset('/image/game_providers_round_logo/allbet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                                <li>
                                    <div class="game-box round maintenance-alert">


                                        <!--[ngTemplateOutlet]="gameItemContent"> -->

                                        <img class="lazy" alt="EBET" src="#" alt="EBET"
                                            data-src="{{ asset('/image/game_providers_round_logo/ebet7b30.png') }}" />
                                        <!--TODO alt text-->
                                        <div class="loader-b" *ngIf="!showEle"></div>


                                    </div>

                                </li>
                            </ul>
                        </div>




                    </div>
                </div>
            </div>


        </div>

        <div class="row" style="padding-top:30px;">
            <div class="col-xs-12">
                <div class="g-slider-wrapper hot">
                    <div class="title-wrapper">
                        <h4 class="u-section-title">GAME TERPOPULAR</h4>
                        <div class="pagi-wrp">
                            <button class="btn btn-link js-btn-prev "><i class="icon-chevron-left"></i></button>
                            <button class="btn btn-link js-btn-next "><i class="icon-chevron-right"></i></button>
                        </div>

                    </div>
                    <div class="content-wrapper" style="" >
                        <ul>

                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="The Great Safari" src="#" alt="The Great Safari"
                                        data-src="{{ asset('/image/onix/hot_games/the_great_safari.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">
                                            The Great Safari</span> <img class="logo"
                                            src="{{ asset('/image/game_providers_logos_sm/fastspin30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Candy Boom" src="#" alt="Candy Boom"
                                        data-src="{{ asset('/image/onix/hot_games/candy_boom.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Candy
                                            Boom</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/booongo30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Goddess of Egypt" src="#" alt="Goddess of Egypt"
                                        data-src="{{ asset('/image/onix/hot_games/goddess_of_egypt.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Goddess
                                            of Egypt</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/booongo30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Sunlight Princess" src="#" alt="Sunlight Princess"
                                        data-src="{{ asset('/image/onix/hot_games/sunlight_princess.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Sunlight
                                            Princess</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/booongo30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Mahjong Ways 3" src="#" alt="Mahjong Ways 3"
                                        data-src="{{ asset('/image/onix/hot_games/mahjong-ways.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Mahjong
                                            Ways 3</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/playstar30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box" target="_blank" href="" (click)="closeNav($event);">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy"  alt="Mahjong 1" src="#" alt="Mahjong 1"
                                        data-src="{{ asset('/image/onix/hot_games/mahjong1.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">
                                            Mahjong Ways 1</span> <img class="logo"
                                            src="{{ asset('/image/game_providers_logos_sm/fastspin30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Gates of Gatot Kaca" src="#"
                                        alt="Gates of Gatot Kaca"
                                        data-src="{{ asset('/image/onix/hot_games/vs20gatotgates.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Gates
                                            of Gatot Kaca</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pp30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="The Greatest Catch Bonus Buy" src="#"
                                        alt="The Greatest Catch Bonus Buy"
                                        data-src="{{ asset('/image/onix/hot_games/The_Greatest_Catch_Bonus_Buy8510.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">The
                                            Greatest Catch Bonus Buy</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                            <li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Penalty Shoot Out" src="#" alt="Penalty Shoot Out"
                                        data-src="{{ asset('/image/onix/hot_games/Penalty_shoot_out7e0c.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Penalty
                                            Shoot Out</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Dragon&#039;s Tavern Bonus Buy" src="#"
                                        alt="Dragon&#039;s Tavern Bonus Buy"
                                        data-src="{{ asset('/image/onix/hot_games/dragon_tavern_bonus_buy.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Dragon&#039;s
                                            Tavern Bonus Buy</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Candy Dreams" src="#" alt="Candy Dreams"
                                        data-src="{{ asset('/image/onix/hot_games/Candy_dreams.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Candy
                                            Dreams</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Gold of Sirens Bonus Buy" src="#"
                                        alt="Gold of Sirens Bonus Buy"
                                        data-src="{{ asset('/image/onix/hot_games/Gold_of_Sirens_bonus_buy.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Gold
                                            of Sirens Bonus Buy</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Fa Cai Shen Deluxe" src="#" alt="Fa Cai Shen Deluxe"
                                        data-src="{{ asset('/image/onix/hot_games/hb_facaishen_deluxe.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Fa
                                            Cai Shen Deluxe</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/hb30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Starlight Princess" src="#" alt="Starlight Princess"
                                        data-src="{{ asset('/image/onix/hot_games/vs20starlight2_180_tiny5e1f.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Starlight
                                            Princess</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pp30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Hot hot fruit" src="#" alt="Hot hot fruit"
                                        data-src="{{ asset('/image/onix/hot_games/hb_hot_hot_fruit7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Hot
                                            hot fruit</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/hb30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Caishen Riches" src="#" alt="Caishen Riches"
                                        data-src="{{ asset('/image/onix/hot_games/jk_caishen_riches7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Caishen
                                            Riches</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/jk30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Lucky God" src="#" alt="Lucky God"
                                        data-src="{{ asset('/image/onix/hot_games/jk_lucky_god7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Lucky
                                            God</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/jk30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Candy Bonanza" src="#" alt="Candy Bonanza"
                                        data-src="{{ asset('/image/onix/hot_games/pgsolf_candy_bonanza7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Candy
                                            Bonanza</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pgsoft30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Wild Bandito" src="#" alt="Wild Bandito"
                                        data-src="{{ asset('/image/onix/hot_games/pgsolf_wild_bandito.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Wild
                                            Bandito</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pgsoft30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Buffalo Blitz" src="#" alt="Buffalo Blitz"
                                        data-src="{{ asset('/image/onix/hot_games/playtech_buffalo_blitz.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Buffalo
                                            Blitz</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pt30f4.png') }}">
                                    </div>

                                </a>


                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="padding-top:20px;">

            <div class="col-xs-12">
                <div class="g-slider-wrapper new">
                    <div class="title-wrapper">
                        <h4 class="title u-section-title">GAME BARU</h4>

                        <div class="pagi-wrp">
                            <button class="btn btn-link js-btn-prev "><i class="icon-chevron-left"></i></button>
                            <!--
                                        --><button class="btn btn-link js-btn-next "><i
                                    class="icon-chevron-right"></i></button>
                        </div>

                    </div>
                    <div class="content-wrapper" style="">
                        <ul>


                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Treasure Pirate" src="#" alt="Treasure Pirate"
                                        data-src="{{ asset('/image/Treasure_pirate.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Treasure
                                            Pirate</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/cq930f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Dragon&#039;s Tavern Bonus Buy" src="#"
                                        alt="Dragon&#039;s Tavern Bonus Buy"
                                        data-src="{{ asset('/image/onix/hot_games/dragon_tavern_bonus_buy.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Dragon&#039;Tavern Bonus Buy</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Candy Dreams" src="#" alt="Candy Dreams"
                                        data-src="{{ asset('/image/onix/hot_games/Candy_dreams.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Candy
                                            Dreams</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Gold of Sirens Bonus Buy" src="#"
                                        alt="Gold of Sirens Bonus Buy"
                                        data-src="{{ asset('/image/onix/hot_games/Gold_of_Sirens_bonus_buy.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Gold
                                            of Sirens Bonus Buy</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/evoplay30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Fa Cai Shen Deluxe" src="#" alt="Fa Cai Shen Deluxe"
                                        data-src="{{ asset('/image/onix/hot_games/hb_facaishen_deluxe.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Fa
                                            Cai Shen Deluxe</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/hb30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Starlight Princess" src="#" alt="Starlight Princess"
                                        data-src="{{ asset('/image/onix/hot_games/vs20starlight2_180_tiny5e1f.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Starlight
                                            Princess</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pp30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Hot hot fruit" src="#" alt="Hot hot fruit"
                                        data-src="{{ asset('/image/onix/hot_games/hb_hot_hot_fruit7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Hot
                                            hot fruit</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/hb30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Caishen Riches" src="#" alt="Caishen Riches"
                                        data-src="{{ asset('/image/onix/hot_games/jk_caishen_riches7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Caishen
                                            Riches</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/jk30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Lucky God" src="#" alt="Lucky God"
                                        data-src="{{ asset('/image/onix/hot_games/jk_lucky_god7b30.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="    width: 80%;
            overflow: hidden;">Lucky
                                            God</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/jk30f4.png') }}">
                                    </div>

                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Funky Bingo" src="#" alt="Funky Bingo"
                                        data-src="{{ asset('/image/Funky_bingo.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;
            overflow: hidden;">Funky
                                            Bingo</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/cq930f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                            <li>
                            <li>
                            <li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Date With Miyo" src="#" alt="Date With Miyo"
                                        data-src="{{ asset('/image/4py9dmfpwkt4y.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Date
                                            With Miyo</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/jk30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Kraken Hunter" src="#" alt="Kraken Hunter"
                                        data-src="{{ asset('/image/ooekf9x16xaxn.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Kraken
                                            Hunter</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/jk30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a href="{{ URL::to('slots') }}" class="game-box ">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Mask of Amun" src="#" alt="Mask of Amun"
                                        data-src="{{ asset('/image/BTN_MaskofAmun.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Mask
                                            of Amun</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/mg30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Lucky Leprechaun Clusters" src="#"
                                        alt="Lucky Leprechaun Clusters"
                                        data-src="{{ asset('/image/BTN_LuckyLeprechaunClusters.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Lucky
                                            Leprechaun Clusters</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/mg30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Super Golf Drive" src="#" alt="Super Golf Drive"
                                        data-src="{{ asset('/image/Super_Golf_Drive.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Super
                                            Golf Drive</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pgsoft30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box  maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Mystical Spirits" src="#" alt="Mystical Spirits"
                                        data-src="{{ asset('/image/Mystical_Spirits.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Mystical
                                            Spirits</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pgsoft30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Free Reelin&#039; Joker 1000" src="#"
                                        alt="Free Reelin&#039; Joker 1000"
                                        data-src="{{ asset('/image/freereelinjoker1000.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;
            overflow: hidden;">Free
                                            Reelin&#039; Joker 1000</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/playngo30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box  maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Highway Legends" src="#" alt="Highway Legends"
                                        data-src="{{ asset('/image/HIGHWAY_LEGENDS.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="width: 80%;
            overflow: hidden;">Highway
                                            Legends</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/playngo30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Grand Junction: Mountain Express" src="#"
                                        alt="Grand Junction: Mountain Express"
                                        data-src="{{ asset('/image/Grand_Junction_Mountain_Expresss.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;
            overflow: hidden;">Grand
                                            Junction: Mountain Express</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pt30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Age of the Gods: Helios" src="#"
                                        alt="Age of the Gods: Helios"
                                        data-src="{{ asset('/image/Age_of_the_Gods_Helios.jpg') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;overflow: hidden;">Age
                                            of the Gods: Helios</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pt30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Wild Bison Charge™" src="#" alt="Wild Bison Charge™"
                                        data-src="{{ asset('/image/vs20stickywild.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span style="width: 80%;
            overflow: hidden;">Wild
                                            Bison Charge™</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pp30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            <li>
                                <a class="game-box maintenance-alert">



                                    <!--[ngTemplateOutlet]="gameItemContent"> -->

                                    <img class="lazy" alt="Excalibur Unleashed™" src="#"
                                        alt="Excalibur Unleashed™" data-src="{{ asset('/image/vs20excalibur.png') }}" />
                                    <!--TODO alt text-->
                                    <div class="loader-b" *ngIf="!showEle"></div>
                                    <div class=" game-title"><span
                                            style="width: 80%;
            overflow: hidden;">Excalibur
                                            Unleashed™</span> <img class="  logo"
                                            src="{{ asset('/image/game_providers_logos_sm/pp30f4.png') }}">
                                    </div>


                                </a>


                            </li>
                            </a>
                            </li>
                            <li>
                            <li>
                            <li>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--  -->

        <div>
            <div class="row home-info-grp" style="padding-top:15px;">
                <div class="col-xs-12 col-md-5 col-lg-5 svc-advantage d-md-pl-0">
                    <!--Service advantages -->
                    <div class="title-box">
                        <h3 class="u-section-title">
                            KELEBIHAN LAYANAN </h3>
                    </div>
                    <div class="content-box u-section-box--bg">
                        <div class="row ">
                            <div class=" col-xs-12 col-md-6 d-md-pl-5">
                                <div class="card">
                                    <div class="card-header clearfix">
                                        <div class="circle-wrp"><i class="icon-atm"></i> </div>
                                        <div class="text-wrp">
                                            <div class="u-section-title">
                                                DEPOSIT </div>
                                            <div>Waktu rata-rata</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="text-right fs-md" style="padding-bottom:8px;">
                                            1 Mins </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="   col-xs-12 col-md-6  d-md-pl-5">
                                <div class="card">
                                    <div class="card-header clearfix">
                                        <div class="circle-wrp"><i class="icon-coinbag"></i></div>
                                        <div class="text-wrp">
                                            <div class="u-section-title">
                                                WITHDRAW </div>
                                            <div>Waktu rata-rata</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="text-right fs-md" style="padding-bottom:8px;">
                                            3 Mins </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="  col-xs-12  mt-3 text-center">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="circle-wrp">
                                                <i class="icon-users2"></i>
                                            </div>
                                            <div>
                                                <div>Pengguna</div>
                                                <div>2671</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="circle-wrp">
                                                <i class="icon-cash"></i>
                                            </div>
                                            <div>
                                                <div>Jumlah Taruhan</div>
                                                <div>5,185,230,829 </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="circle-wrp">
                                                <i class="icon-stamp"></i>
                                            </div>
                                            <div>
                                                <div>Online</div>
                                                <div>48801 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12  col-md-7 col-lg-7 ">
                    <div class="row">
                        <div class="col-xs-12  col-md-6 col-lg-6 info-centre d-md-pl-0">
                            
                            <!-- ROOL -->

                                            <section class="common-section">
                                            <div class="row">          
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <!-- Last deposit -->
                                                    <div class="lw-horizontal-slider lates-deposit-section">
                                                        <div class="text-center">
                                                        <div class="title-wrapper ">

                                                            <h4 class="common-title text-center"><span class="ovo-game-heading ovo-game-heading-color Poppins-font ">Setoran Terakhir</span></h4>
                                                            
                                                        </div>
                                                                                                                    </span>
                                                        </div>         <div class="g-slider-wrapper trx-slider-y gradient-bg">
                                                            
                                                                                <div class="flex-display lw-loop-content">
                                                                                                        <ul style="position: absolute; top: -691px;" data-count="20">
                                                                
                                                                                    
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> RIY************* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font">  
                                                                                        5 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> dav**********</span>
                                                                                                                    <span class="flex-display lato-font LW-date-font">   
                                                                                        5 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> nov******** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        5 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 33K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> hen********* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        5 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 105K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> rm **** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        5 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Del********** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                                                    5 minutes ago </span>
                                                                                        </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 85K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> tri***************** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                                                    5 minutes ago </span>
                                                                                        </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> ilh************* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                                                    5 minutes ago </span>
                                                                                        </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 85K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> rio********** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                                                    5 minutes ago </span>
                                                                                        </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Awa* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                                                    5 minutes ago </span>
                                                                                        </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 100K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> and************* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                                                    5 minutes ago </span>
                                                                                        </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 200K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> sur**** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 100K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> hjw*** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 1150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> shi*********** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 51K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> riz** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 60K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> rim* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 100K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> sla**************** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 40K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> lin************** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 85K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> hen********* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> nor*** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 60K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                                        
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> RIY************* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> dav*********** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> nov******** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 33K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> hen********* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 105K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> rm **** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Del********** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 85K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> tri***************** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar lazy ui avatar image" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> ilh************* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 85K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar lazy ui avatar image" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> rio********** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar lazy ui avatar image" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Awa* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 100K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar lazy ui avatar image" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> and************* </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 200K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar lazy ui avatar image" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> sur**** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 100K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                    <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar lazy ui avatar image" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> hjw*** </span>
                                                                                                                    <span class="flex-display lato-font LW-date-font"> Deposit,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font LW-date-fontCurrency"> IDR 1150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                                                    </ul>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <!--END Last deposit -->
                                                                    <!-- Last withdraw -->
                                                    <div class="lw-horizontal-slider ">
                                                        <div class="text-center">
                                                        <div class="title-wrapper ">

                                                            <h4 class="common-title text-center"><span class="ovo-game-heading ovo-game-heading-color Poppins-font ">Penarikan Terakhir</span></h4>
                                                            
                                                        </div>
                                                        </div>

                                                        <div class="g-slider-wrapper  trx-slider-y gradient-bg">
                                                            
                                                                            <div class="flex-display lw-loop-content">
                                                                                                        <ul style="position: absolute; top: -691px;" data-count="20">
                                                                                                        
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> rim* </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 500K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> fai************ </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 5150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> cep********** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> wen** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 285K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> ine**************** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> and************* </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 55K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> usd******** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 1150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> ris*** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Sam********* </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 200K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> TRI***************** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        1 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 100K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Nen************** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 400K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> bid***** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> nes** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> sug*** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 90K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> syf******************* </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> yuf************** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 1150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> raj************** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 285K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> Ale********** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 150K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="flex-start  LW-div">
                                                                        <div>
                                                                            <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png" src="https://files.sitestatic.net/AvatarImages/lw_avathar_circle.png">
                                                                        </div>
                                                                        <div class="flex-space-btw">
                                                                            <div>
                                                                                <span class="flex-display lato-font LW-font fw-bold"> zam**** </span>
                                                                                <span class="flex-display lato-font LW-date-font LW-date-fontWithdraw"> Withdraw,
                                                                                        3 minutes ago </span>
                                                                                
                                                                            </div>
                                                                            
                                                                            <span class="LW-btn lato-font"> IDR 80K </span>
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                                                    </ul>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <!--END Last withdraw -->
                                                        </div>
                                            </div>
                                            </section>          
                            <!-- END ROOL -->
                            <div class="title-box">
                                <h3 class="u-section-title">
                                    PUSAT INFO
                                </h3>
                            </div>
                            <div class="content-box u-section-box--bg">
                                <ul>
                                    <li>
                                        <div class="text">Cara Bermain SportsBook</div>
                                        <a class="btn btn-link" href="{{ URL::to('sports') }}">
                                            Lebihnya</a>
                                    </li>
                                    <li>
                                        <div class="text">Cara Bermain Slot</div>
                                        <a class="btn btn-link" href="{{ URL::to('slots') }}">
                                            Lebihnya</a>
                                    </li>

                                    <li>
                                        <div class="text">Cara Melakukan Deposit</div>
                                        <a class="btn btn-link" href="{{ URL::to('#') }}">
                                            Lebihnya</a>
                                    </li>
                                    <li>
                                        <div class="text">Cara Melakukan Withdraw </div>
                                        <a class="btn btn-link" href="{{ URL::to('#') }}"> Lebihnya</a>
                                    </li>


                                </ul>

                            </div>
                            
                        </div>

                        

                        <div class="col-xs-12  col-md-6 col-lg-6 member-svc">
                            <div class="title-box">
                                <h3 class="u-section-title">
                                    MEMBER SERVICE
                                </h3>
                            </div>
                            <div class="content-box u-section-box--bg">

                                <section class="contacts-carousel">
                                    <div id="contacts-carousel" class=" carousel slide  " data-ride="carousel">
                                        <ol class="carousel-indicators">


                                            <li data-target="#contacts-carousel" data-slide-to="0" class="active">
                                            </li>

                                        </ol>

                                        <div class="carousel-inner" role="listbox">


                                            <div class="item active">

                                                <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ $setting->wa}}&text&type=phone_number&app_absent=0"
                                                    class="contact-item">
                                                    <div class="icon-wrp"> <i class="icon-whatsapp"></i>
                                                    </div>
                                                    <div class="text-wrp">

                                                        <div class="u-muted-txt">WHATSAPP</div>
                                                        <?php
                                                        $setting=Setting::first();
                                                        ?>
                                                        <div class="">
                                                            {{ $setting->wa}}
                                                        </div>
                                                        <div class="u-muted-txt">24/7 Support</div>
                                                    </div>
                                                </a>

                                                <a href="{{ $setting->tele}}"
                                                    class="contact-item">
                                                    <div class="icon-wrp"> <i class="icon-chat1"></i>
                                                    </div>
                                                    <div class="text-wrp">

                                                        <div class="u-muted-txt">LIVECHAT</div>
                                                        <?php
                                                        $setting=Setting::first();
                                                        ?>
                                                        <div class="">
                                                        
                                                        </div>
                                                        <div class="u-muted-txt">24/7 Support</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
                 
    <div class=" container">
        <div class=" text-left footerlink mt-4  ">
            <div class="small">
                Platform Penyedia Layanan </div>
            <div class="mt-2 footer_btm_logo_img">
            @php
        $setting = Setting::first();
        @endphp
                <!-- <img class="footer_logimg" style="max-height: 50px;"    alt="onix gaming" src="https://files.sitestatic.net/images/LOGO_ONIX_GAMING.png?v=4"> -->
                <img class="footer_logimg" style="max-height: 50px;" alt="{{ $setting->nama_web }}"
                    src="{{ asset('/storage/logo/'.$setting->logo) }}">


            </div>
        </div>
        <div class=" text-left footerlink mt-2">
            <div class="small">
                Cara Pembayaran </div>
            <div class="payment_imgs mt-2">
                <img class="img-fluid mb-3" style="width: 150px; border-radius:10px;border: 1px solid currentColor;"
                    src="{{ asset('/image/bank_logos/bank_col5e1f.jpg') }}">

                <img class="img-fluid mb-3" style="width: 150px; border-radius:10px;border: 1px solid currentColor;"
                    src="{{ asset('/image/bank_logos/ewallet_col5e1f.jpg') }}">

                <img class="img-fluid mb-3" style="width: 150px; border-radius:10px;border: 1px solid currentColor;"
                    src="{{ asset('/image/bank_logos/pulsa_col5e1f.jpg') }}">


            </div>
        </div>
    </div><br>

    <div class="footer-title  text-center" id="collapsible-footer">
                            <i class="i-collapse icon-chevron-thin-up"></i>
                        </div>
                        <div class="footer-body text-center">
      <h1 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><strong style="color: rgb(255, 255, 255);">{{ $setting->nama_web }}: Agen Judi Slot Online Deposit Dana Terpercaya 2023</strong></h1><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);"><a href="#" data-mce-href="#" style="">{{ $setting->nama_web }}</a>&nbsp;adalah situs judi slot deposit dana nomor 1 di Indonesia yang menawarkan ratusan permainan slot deposit dana paling gacor saat ini dengan beberapa permainan judi online terbaik. Seperti halnya live casino, Pragmatic Play saat ini mengoperasikan permainan game judi online dengan lluas seperti game slot online.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dari sekian banyak situs slot online deposit dana Pragmatic Play di seluruh Indonesia, hanya sedikit yang memiliki sertifikat resmi dari International Gaming Association. Popularitas game slot online deposit dana saat ini memang sudah sangat tinggi sejak pandemi, namun Anda tetap perlu berhati-hati dalam memilih situs slot online di Indonesia.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Anda mungkin sudah terdaftar di salah satu situs&nbsp;<a title="slot deposit dana" href="#" data-mce-href="#">slot deposit dana</a>&nbsp;Pragmatic Play terpercaya di Indonesia. Namun apakah situs judi online ini memudahkan Anda untuk memasang taruhan? Apakah Anda selalu memenangkan permainan? Jackpot hanya menawarkan sedikit?</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Ini adalah pertanyaan yang sering ditanyakan oleh para penggemar game slot deposit dana di Indonesia. Kami {{ $setting->nama_web }} sebagai agen slot deposit dana tentunya bersedia memberikan semua itu untuk anda. Kemudahan yang ditawarkan juga tentunya akan membuat Anda betah bermain di situs slot deposit dana resmi.</span></p><h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><span style="color: rgb(255, 255, 255);">Situs&nbsp;Slot Online Deposit via Dana&nbsp;Terbaik&nbsp;{{ $setting->nama_web }}</span></h2><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">{{ $setting->nama_web }} merupakan agen judi online penyedia permainan Casino yang terpercaya, yang menjadi situs slot online terbaik no.1 saat ini.&nbsp;<a title="daftar {{ $setting->nama_web }}" href="#" data-mce-href="#">Daftar {{ $setting->nama_web }}</a>&nbsp;sekarang juga, kami bekerjasama dengan provider terbaik Pragmatic Play baru-baru ini, perusahaan yang berbasis di Malta ini mengalami pertumbuhan yang sangat pesat.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Saat ini, ia memiliki kantor di Malta, Inggris, Gibraltar, Ukraina, India, dan Filipina. Pragmatic Play menciptakan game yang inovatif dan menarik dengan grafis sempurna yang sangat dihargai oleh pemain di seluruh dunia.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dan itu baru permulaan, karena mereka merilis game baru hampir setiap minggu. Sebagian besar gim mereka menawarkan opsi untuk membeli fitur Free Spins.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Pada saat penulisan ini, Pragmatic Play telah merilis total 182 game dalam berbagai kategori: slot 5-gulungan, slot 3-gulungan, bingo, dan permainan kartu. Mereka bahkan memiliki studio permainan Live Casino. Game-game ini tersedia dalam 32 bahasa dan sepenuhnya kompatibel dengan smartphone dan tablet.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Beberapa mesin slot deposit dana ini termasuk yang paling banyak dimainkan di dunia. Slot termasuk The Dog House (5 Maret 2019), Sweet Bonanza (25 Juni 2019), Gates of Olympus (13 Februari 2021), Fruit Party (28 Mei 2020), Da Vinci's Treasure (13 September 2018) .</span></p><h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><span style="color: rgb(255, 255, 255);">9 Daftar Rekomendasi Bo&nbsp;Slot Deposit Dana</span></h2><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Sebagai agen slot Pragmatic Play terbaik, {{ $setting->nama_web }} juga menawarkan beberapa penyedia judi&nbsp;<a title="slot dana" href="#" data-mce-href="#">slot dana</a>&nbsp;terpercaya yang bisa Anda coba mainkan di {{ $setting->nama_web }}. Di bawah ini adalah daftar 9 partner situs judi slot online {{ $setting->nama_web }} dengan RTP tertinggi.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Slot88</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Provider Slot88 yang berada di Asia, khususnya China merupakan bandar judi online terbesar. Slot88 memiliki keunggulan dari segi tampilan dan gameplay yang seru, sehingga orang yang bermain tidak akan bosan sama sekali.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Di situs judi Slot88, {{ $setting->nama_web }} secara rutin mengadakan kontes bagi para membernya dan menawarkan hadiah uang ratusan juta rupiah. 88 Fortune, Joker Jewel 88, Rhino Extreme, Zeus, dan Golden Lotus adalah mesin slot dengan tingkat kemenangan tertinggi.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Joker123</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Provider Joker123 adalah salah satu taruhan slot paling populer di situs resmi {{ $setting->nama_web }}. Penyedia slot ini selalu berusaha untuk memberikan pengalaman bermain yang nyaman dan nyaman.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Hal yang baik tentang bermain slot joker123 online di sini adalah Anda dapat menyetor setidaknya 20RB dengan layanan deposit Pulsa, Bank dan E Wallet Dana, Gopay, OVO. Hercules, Golden Dragon, Hot Fruit, dan Tembak Ikan menjadi game RTP tertinggi di game slot joker123.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Microgaming</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Microgaming Slots adalah pengembang permainan casino online pertama di dunia tahun 1994. Kemudian tersedia untuk dimainkan secara online pada tahun 2004. Game yang paling banyak dimainkan adalah Jurassic World, Game of Thrones, dan Lara Croft. Slot Microgaming memiliki jackpot slot terbesar dan mudah untuk dimenangkan.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Habanero</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Habanero adalah pengembang slot terkenal, dimainkan oleh jutaan member setiap hari dari data statistik situs {{ $setting->nama_web }}. Dan pengembang slot online Habanero memiliki banyak penggemar karena grafik mesin slotnya yang menarik. Ditambah audio mesin slot yang luar biasa di layar perjudian slot dunia.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Lebih dari 100 mesin slot sangat direkomendasikan untuk pemain slot baru Indonesia seperti Fa Cai Sen, hingga Dragon Throne yang sangat terkenal di beberapa negara Asia termasuk Eropa.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Playtech</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Playtech Slots telah menjadi produsen mesin slot terkenal di dunia selama 20 tahun terakhir. Dan pusat Playtech Slot ada di Isle of Man dengan 500 permainan judi slot teratas.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Provider slot gacor ini dikenal sebagai situs slot pulsa dengan jackpot tertinggi yaitu Buffalo Blitz, Wild West Wilds, Age of the Gods, Joker Hot Reels. Mainkan semua permainan slot satu per satu dan rasakan sensasi memenangkan jackpot tanpa batas.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana SpadeGaming</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Muncul di Malaysia pada tahun 2007, Spadegaming adalah permainan slot gacor online kualitas tertinggi di Asia dengan nilai RTP tinggi 96%. Didukung oleh fitur permainan slot gacor terbaik dan tampilan slot visual paling menarik.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Bahkan jika Anda bermain slot bet kecil, perasaan bermain Anda akan menjadi luar biasa. {{ $setting->nama_web }} memiliki berbagai permainan judi slot SpadeGaming terbaik seperti Fighter Slots, Lucky Koi, Fist of God, dan God of Fortune.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana YGGDrasil</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">YggDrasil adalah pemenang Penghargaan EGR B2B 2015 untuk Mobile Platform. Dan YggDrasil memenuhi statusnya dalam memberikan animasi dan grafik yang hebat. Dengan fitur berkualitas tinggi, mereka fokus pada hiburan dan penghargaan, dengan inovasi seperti otopsi tanpa batas, pengganda, dan penyebaran misteri.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Permainan slot ini memiliki peringkat RTP yang dapat diterima sebesar 96% dengan peringkat volatilitas tinggi. Slot Jackpot Raiders di YggDrasil dapat memberi Anda kemenangan terbesar, dan Anda harus mencobanya.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana PG Soft</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">PG Soft adalah singkatan dari Pocket Game Soft dan merupakan pelopor situs slot {{ $setting->nama_web }}. Penyedia menawarkan game premium kepada pemain di seluruh dunia dengan alur cerita yang menarik, efek suara yang fantastis, dan animasi yang menakjubkan. Candy Pop, Lucky Rat, Mahjong Way adalah game slot online yang sering kasih menang dengan RTP 97,8%.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana CQ9</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">CQ9 Slot Gaming pertama kali dibuat dan dioperasikan di Asia khususnya China pada tahun 2016, dan kini telah memasuki pasar Eropa. Terdapat 150 permainan judi slot berbasis HTML5 dan banyak penggemarnya menyebutnya sebagai situs judi slot online terpopuler saat ini. Mesin slot dengan tingkat kemenangan tingginya yaitu Wonderland, Dragon Boat, dan Thor 2, dengan RTP 96%.</span></p><h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><strong style="color: rgb(255, 255, 255);">5 Rekomendasi Game Judi Slot Online Deposit Dana Gacor Hari Ini</strong></h2><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dengan perpustakaan hampir 200 mesin slot, pemain sering tidak tahu harus mulai dari mana. Kami telah memainkan banyak game penyedia ini dan akan memberi Anda 5 slot Pragmatic Play favorit kami.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online The Dog House</strong></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dirilis pada Maret 2019, The Dog House adalah slot Pragmatic Play yang sangat populer. Ini juga salah satu game favorit kami untuk dimainkan.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online Sweet Bonanza</strong></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Mari beralih ke hit besar lainnya dari penyedia game ini: Sweet Bonanza. Kotak 6x5 ini, membayar di mana-mana di mesin slot penuh permen. Agar simbol terhubung, Anda harus mengisi setidaknya 8 permen serupa dari 30 permen.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online Da Vinci’s Treasure</strong></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dalam game ini, penjelajah Pragmatic Play yang terkenal, John Hunter, sedang berburu harta karun. Harta Karun Da Vinci adalah mesin slot gulungan 3 x 5 yang dicintai. Gim ini menampilkan tiga putaran gratis yang berbeda: pemilih hadiah, eksplorasi peta, dan Free Spins Progresif.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online 5 Lions Gold</strong></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Game ini dirilis pada Juni 2019. Mendaratkan tiga simbol Yin Yang (menyebar) pada gulungan 2, 3 dan 4 dari gulungan 3x5 ini, slot gulungan 243 dan Anda akan memasuki fitur Free Spins.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online Gates of Olympus</strong></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Game ini sangat populer di Indonesia dan orang biasa menyebutnya dengan “Game Kakek Zeus”. Alasan kepopuleran game ini sudah tidak perlu lagi dipikirkan, tentunya karena hadiahnya yang fantastis dan kelipatannya yang begitu banyak.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Cara Daftar Slot Deposit Dana Terbaik 2022</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Cara melakukan daftar slot deposit dana di indonesia sangat mudah sekali, anda hanya perlu melakukan dan mengunjungi situs judi&nbsp;<a title="slot online deposit dana" href="#" data-mce-href="#">slot online deposit dana</a>&nbsp;{{ $setting->nama_web }}, kemudian mengisi semua form pendaftaran yang tersedia dengan valid. Pastikan anda mengisi form pendaftaran dengan valid agar saat anda bermain tidak mengalami kendala.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Situs judi slot online deposit dana saat ini menang sangat sangat susah sekali ditemui di indonesia, apalagi banyak sekali situs judi slot online yang mengaku sebagai situs slot online resmi, akan tetapi anda sebagai member yang smart anda harus mengecek ulang kebenarannya.</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Salah satu situs slot deposit dana yang dapat dipercaya saat ini merupakn {{ $setting->nama_web }}. Daftar slot deposit dana bersama situs {{ $setting->nama_web }} sangat mudah sekali, berikut ini kami akan memberikan apa saja yang wajib diisi saat melakukan registrasi di situs {{ $setting->nama_web }}:</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">User ID<br>Nama Rekening</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Nomor Rekening</span></p><p data-mce-style="text-align:justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Password</span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);"><b>KHUSUS NEW MEMBER <b style="color:gold;">VIP</b> BONUS TANPA TO<b></span></p><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Form diatas wajib anda isi untuk daftar slot deposit dana di situs {{ $setting->nama_web }}, anda hanya perlu melengkapi form pendaftaran seperti diatas.</span></p><h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><strong><em style="color: rgb(255, 255, 255);">FAQ - Situs Judi Slot Online Deposit Dana {{ $setting->nama_web }}</em></strong></h2><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Apa Itu {{ $setting->nama_web }} ?</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">{{ $setting->nama_web }} merupakan situs resmi judi slot online deposit dana yang memiliki game slot online paling gacor, {{ $setting->nama_web }} menyediakan RTP slot online yang dapat dilihat oleh semua member kami dengan harapan mempermudah mendapatkan kemenangan.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Apakah {{ $setting->nama_web }} Menyediakan Slot Deposit Dana?</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">{{ $setting->nama_web }} merupakan situs judi online terpercaya dan terlengkap, kami menyediakan beberapa pilihan deposit diantaranya Bank Lokal terbaik indonesia, Deposit Pulsa, E-Wallet Dana, Ovo, Gopay.</span></p><h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Minimal Deposit Situs {{ $setting->nama_web }} ?</strong></h3><p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Minimal deposit slot deposit dana di situs {{ $setting->nama_web }} sangat rendah sekali, dengan modal minimum 100RB anda dapat melakukan deposit dan berkesempatan menang hingga jutaan rupiah.</span></p>
    </div><br>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>



    $(document).ready(function () {

              console.log((!document.referrer.includes('__cf')))
      if( document.referrer.indexOf(location.protocol + "//" + location.host) === 0 && (!document.referrer.includes('__cf'))){
                        sessionStorage.setItem('isClosedPopUp', 'true');
          }
        var isClosedPopUp = sessionStorage.getItem('isClosedPopUp', 'true');
                 
        ajax_jackpot();

        setInterval(function () {
            prize += getRandomIntInclusive(6000451, 5470)
            prize = parseFloat(prize);
            prize = prize;
            $('#jackpot_amount').html( window.currencyCode + ' '+ commaSeparateNumber(prize, true));
            //$('.jackpot_numbers_home').html(`IDR ` + commaSeparateNumber(prize));
        }, 751);


        // events
        $('#carousel').owlCarousel({
            items: 1,
            autoHeight: true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
        });
    });


</script>
<?php echo $setting->live_chat ?>
<!-- new -->


@endsection

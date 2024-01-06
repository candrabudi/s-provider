@extends('layouts.main')

@section('content')

<br><br>
<div class="container pt-1 games-category">
    @include('nav_saldo')
    <h2 class="title">slots</h2>
    <div class="row">
        <script type="text/javascript">
            var windowNames = JSON.parse('{"lottery":"lottery","live":"king4d","togel":"king4d"}');
        </script>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 image-grid">


                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a href="{{ URL::to('/game-slot/pragmaticplay') }}" rel="opener" class="game ">

                            <video autoplay loop muted inline width="100%" height="100%" class="pgsoft_video">
                                <source src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/PPLogo.webm?v=0.11" type="video/webm">
                                <source src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/PPLogo.mp4?v=0.11" type="video/mp4">
                                <img class="img-fluid lazy maintenance-alert" alt="PRAGMATIC" src="" />
                            </video>


                            <div class="g-title ">PRAGMATIC</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a href="{{ URL::to('/game-slot/pgsoft') }}" rel="opener" class="game ">

                            <video autoplay loop muted inline width="100%" height="100%" class="pgsoft_video">
                                <source src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/PGLogo.webm?v=0.11" type="video/webm">
                                <source src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/PGLogo.mp4?v=0.11" type="video/mp4">
                                <img class="img-fluid lazy" alt="PGSOFT" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_pgsoft.jpg?v=0.1" src="" />
                            </video>


                            <div class="g-title">PGSOFT</div>

                        </a>

                    </div>
                </div>
                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a href="{{ URL::to('/game-slot/joker') }}" rel="opener" class="game">

                            <img class="img-fluid lazy" alt="JOKER" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_joker.jpg?v=9.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">JOKER</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">
                        <a href="{{ URL::to('/game-slot/habanero') }}" rel="opener" class="game">
                            <img class="img-fluid lazy" alt="HABANERO" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_haba.jpg?v=9" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>
                            <div class="g-title">HABANERO</div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="PLAYTECH" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_pt.jpg?v=9.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">PLAYTECH</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">
                        <a href="{{ route('game.slot.microgaming') }}" rel="opener" class="game">

                            <img class="img-fluid lazy" alt="MICRO GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_mg.jpg?v=13" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>
                            <div class="g-title">MICRO GAMING</div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="HACKSAW" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/Hacksaw_Game_Slot.png" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">HACKSAW</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="RELAX GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/relax.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">RELAX GAMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="TOPTREND GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_ttg.jpg?v=9" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">TOPTREND GAMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="PLAYSON" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_playson.jpg?v=10" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">PLAYSON</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="BOOMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_booming.jpg?v=9" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">BOOMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">
                    <div class="game-wrapper ">
                        <a href="{{ route('game.slot.playngo') }}" rel="opener" class="game">
                            <img class="img-fluid lazy" alt="PLAYNGO" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_png.jpg?v=9.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>
                            <div class="g-title">PLAYNGO</div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="FASTSPIN" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/fastspin.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">FASTSPIN</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="SPADE GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_sg.jpg?v=9" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">SPADE GAMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="BNG" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/booongo.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">BNG</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="CQ9" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_cq9.jpg?v=9" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">CQ9</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="SKYWIND" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/skywind.png?v=1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">SKYWIND</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="PLAYSTAR" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/playstar.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">PLAYSTAR</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="REDTIGER" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/redtiger.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">REDTIGER</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="EVOPLAY" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/evoplay.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">EVOPLAY</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="NETENT" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/netent.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">NETENT</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="NOLIMITCITY" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/NLC.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">NOLIMITCITY</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="MANCALA GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/mancalagaming.jpg?v=0.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">MANCALA GAMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="AIS GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/ais.jpg?v=0.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">AIS GAMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="SBO" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/sbo_slot.jpg?v=0.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">SBO</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="KA GAMING" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/KA_Gaming_Slot.jpg?v=0.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">KA GAMING</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="NAGA GAMES" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/naga_gaming_slot.jpg?v=0.1" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">NAGA GAMES</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="DRAGOON SOFT" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/dragoon_soft.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">DRAGOON SOFT</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="REEVO" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/reevo.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">REEVO</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="LIVE22" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/live22.jpg?v=0.3" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">LIVE22</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="FACHAI" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/slot_fa_chai.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">FACHAI</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="APOLLO777" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/apollo777.jpg" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">APOLLO777</div>

                        </a>

                    </div>
                </div>

                <div class="col-xs-4 col-sm-3 col-md-2 box">

                    <div class="game-wrapper ">


                        <a rel="opener" class="game maintenance-alert">

                            <img class="img-fluid lazy" alt="JDB" data-src="https://files.sitestatic.net/GameImage/SlotsProviders/mobile/normal/jdb_slot.png" src="" />
                            <div class="loader-b" *ngIf="!showEle"></div>


                            <div class="g-title">JDB</div>

                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div><br><br><br><br>



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
        @endsection
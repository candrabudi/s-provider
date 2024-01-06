@extends('layouts.main')

@section('content')

<br><br>
@include('nav_saldo')


<div class="container pt-1 sub-games">
           <div>
 
  <h3 class="title" i18n="">slots PROVIDERS</h3>
  <div class="row">


  </div>

  <div class="scroll-wrapper row" style="height:72px;">

    <div class="left"><button class="prev-btn btn" id="left-button"><i class="icon-keyboard_arrow_left"></i></button></div>

    <div style="overflow:hidden;width:100%;" class="scroller">
      <div class="row no-gutters text-center slider-content">
        <!--//hardcoded links.......-->




                
            
        <div class="col" style="height:72px;">
                                      <a class="btn-box " href="{{ URL::to('/game-slot/pragmaticplay') }}" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  pragmatic-play">

                        <div class="text-center pp_slots 41  logo_provider logo_provider_pragmatic-play"></div>
                    </div>
                    <h5 class="text-center game-title">PRAGMATIC</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box active" href="{{ URL::to('/game-slot/pgsoft') }}" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  pgsoft">

                        <div class="text-center pgsoft_slot 74  logo_provider logo_provider_pgsoft"></div>
                    </div>
                    <h5 class="text-center game-title">PGSOFT</h5>
              </a>
                           </div>

                           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="{{ URL::to('/game-slot/joker') }}" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  joker-gaming">

                        <div class="text-center jk_slot 3  logo_provider logo_provider_joker-gaming"></div>
                    </div>
                    <h5 class="text-center game-title">JOKER</h5>
              </a>
                           </div>


                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="{{ URL::to('/game-slot/habanero') }}" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  habanero">

                        <div class="text-center hb_slot 1  logo_provider logo_provider_habanero"></div>
                    </div>
                    <h5 class="text-center game-title">HABANERO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  playtech">

                        <div class="text-center pt_slot 48  logo_provider logo_provider_playtech"></div>
                    </div>
                    <h5 class="text-center game-title">PLAYTECH</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  microgaming">

                        <div class="text-center mg_slot 4  logo_provider logo_provider_microgaming"></div>
                    </div>
                    <h5 class="text-center game-title">MICRO GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  hacksaw">

                        <div class="text-center hacksaw_slot 157  logo_provider logo_provider_hacksaw"></div>
                    </div>
                    <h5 class="text-center game-title">HACKSAW</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  relax">

                        <div class="text-center relax_slot 114  logo_provider logo_provider_relax"></div>
                    </div>
                    <h5 class="text-center game-title">RELAX GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  toptrend-gaming">

                        <div class="text-center ttg_slot 2  logo_provider logo_provider_toptrend-gaming"></div>
                    </div>
                    <h5 class="text-center game-title">TOPTREND GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  playson">

                        <div class="text-center ttg_playson_slot 72  logo_provider logo_provider_playson"></div>
                    </div>
                    <h5 class="text-center game-title">PLAYSON</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  booming">

                        <div class="text-center ttg_booming_slot 73  logo_provider logo_provider_booming"></div>
                    </div>
                    <h5 class="text-center game-title">BOOMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  playngo">

                        <div class="text-center playngo_slot 46  logo_provider logo_provider_playngo"></div>
                    </div>
                    <h5 class="text-center game-title">PLAYNGO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  fastspin">

                        <div class="text-center fastspin_slot 132  logo_provider logo_provider_fastspin"></div>
                    </div>
                    <h5 class="text-center game-title">FASTSPIN</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  spadegaming">

                        <div class="text-center sg_slot 31  logo_provider logo_provider_spadegaming"></div>
                    </div>
                    <h5 class="text-center game-title">SPADE GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  booongo">

                        <div class="text-center booongo_slot 99  logo_provider logo_provider_booongo"></div>
                    </div>
                    <h5 class="text-center game-title">BNG</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  cq9">

                        <div class="text-center cq9_slot 68  logo_provider logo_provider_cq9"></div>
                    </div>
                    <h5 class="text-center game-title">CQ9</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  skywind">

                        <div class="text-center skywind_slot 64  logo_provider logo_provider_skywind"></div>
                    </div>
                    <h5 class="text-center game-title">SKYWIND</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  playstar">

                        <div class="text-center playstar_slot 97  logo_provider logo_provider_playstar"></div>
                    </div>
                    <h5 class="text-center game-title">PLAYSTAR</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  redtiger">

                        <div class="text-center redtiger_slot 98  logo_provider logo_provider_redtiger"></div>
                    </div>
                    <h5 class="text-center game-title">REDTIGER</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  evoplay">

                        <div class="text-center evoplay_slot 101  logo_provider logo_provider_evoplay"></div>
                    </div>
                    <h5 class="text-center game-title">EVOPLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  netent">

                        <div class="text-center redtiger_net_slot 108  logo_provider logo_provider_netent"></div>
                    </div>
                    <h5 class="text-center game-title">NETENT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  nolimitcity">

                        <div class="text-center nolimitcity_slot 102  logo_provider logo_provider_nolimitcity"></div>
                    </div>
                    <h5 class="text-center game-title">NOLIMITCITY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  mancalagaming">

                        <div class="text-center mancalagaming_slot 103  logo_provider logo_provider_mancalagaming"></div>
                    </div>
                    <h5 class="text-center game-title">MANCALA GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  kagaming">

                        <div class="text-center kagaming_slot 128  logo_provider logo_provider_kagaming"></div>
                    </div>
                    <h5 class="text-center game-title">KA GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  sbo">

                        <div class="text-center sbo_slot 115  logo_provider logo_provider_sbo"></div>
                    </div>
                    <h5 class="text-center game-title">SBO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  ais">

                        <div class="text-center ais_slot 110  logo_provider logo_provider_ais"></div>
                    </div>
                    <h5 class="text-center game-title">AIS GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  nagagames">

                        <div class="text-center nagagames_slot 131  logo_provider logo_provider_nagagames"></div>
                    </div>
                    <h5 class="text-center game-title">NAGA GAMES</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  dragoonsoft">

                        <div class="text-center dragoon_slot 125  logo_provider logo_provider_dragoonsoft"></div>
                    </div>
                    <h5 class="text-center game-title">DRAGOON SOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  reevo">

                        <div class="text-center reevo_slot 134  logo_provider logo_provider_reevo"></div>
                    </div>
                    <h5 class="text-center game-title">REEVO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  live22">

                        <div class="text-center live22_slot 139  logo_provider logo_provider_live22"></div>
                    </div>
                    <h5 class="text-center game-title">LIVE22</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  fachai">

                        <div class="text-center fachai_slot 147  logo_provider logo_provider_fachai"></div>
                    </div>
                    <h5 class="text-center game-title">FACHAI</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  apollo777">

                        <div class="text-center apollo777_slot 145  logo_provider logo_provider_apollo777"></div>
                    </div>
                    <h5 class="text-center game-title">APOLLO777</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  jdb">

                        <div class="text-center jdb_slot 153  logo_provider logo_provider_jdb"></div>
                    </div>
                    <h5 class="text-center game-title">JDB</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="#" rel="opener" style="position:relative;">
                     <div class="poweredBy-logo active  jili">

                        <div class="text-center jili_slot 152  logo_provider logo_provider_jili"></div>
                    </div>
                    <h5 class="text-center game-title">JILI</h5>
              </a>
                           </div>

          
      </div>
    </div>
    <div class="right"><button class="next-btn btn" id="right-button"><i class="icon-keyboard_arrow_right"></i></button></div>


  </div>
</div>


         <div class="row no-gutters filter">
    <div class="col-xs-10 text-center">
      <div class="row">
        <div class="col-xs-3">
          <button class="btn btn-clear f" data-filter="NEW" [ngclass]="{ 'active': filterProperty==FilterType.New  }">BARU</button>
        </div>
        <div class="col-xs-3">
          <button class="btn btn-clear f" data-filter="TOP" [ngclass]="{ 'active': filterProperty==FilterType.Top  }">TOP</button>
        </div>
        <div class="col-xs-3">
          <button class="btn btn-clear f active" data-filter="ALL" [ngclass]="{ 'active': filterProperty==FilterType.All  }">SEMUA </button>
        </div>
      </div>
    </div>
    <div class="col-xs-1 text-right">
      <button class="btn btn-clear" id="btnFilters_003" data-filter="" data-trigger="nifty" data-target="#searchModal"><i class="icon-magnifier"></i></button>
    </div>
    <div class="col-xs-1 text-right">
      <button class="btn btn-clear" id="btnFilters_003" data-filter="" data-trigger="nifty" data-target="#filterModal-2"><i class="icon-equalizer2"></i></button>
    </div>
  </div>
  <div class="mobile-border"></div>
  <div class="mobile-border"></div>
  <br>
  <input type="hidden" value="hb_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Hot Fruit" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Hot Fruit', 'https://app-a.insvr.com/img/square/200/SGHotHotFruit.png' , 'SGHotHotFruit', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://app-a.insvr.com/img/square/200/SGHotHotFruit.png" src="https://app-a.insvr.com/img/square/200/SGHotHotFruit.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Hot Fruit">Hot Hot Fruit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Koi Gate" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Koi Gate', 'https://app-a.insvr.com/img/square/200/SGTheKoiGate.png' , 'SGTheKoiGate', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://app-a.insvr.com/img/square/200/SGTheKoiGate.png" src="https://app-a.insvr.com/img/square/200/SGTheKoiGate.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Koi Gate">Koi Gate</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wealth Inn" data-filter="ALL,Video Slots,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wealth Inn', 'https://app-a.insvr.com/img/square/200/SGWealthInn.png' , 'SGWealthInn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://app-a.insvr.com/img/square/200/SGWealthInn.png" src="https://app-a.insvr.com/img/square/200/SGWealthInn.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wealth Inn">Wealth Inn</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystic Fortune Deluxe" data-filter="ALL,Video Slots,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystic Fortune Deluxe', 'https://app-a.insvr.com/img/square/200/SGMysticFortuneDeluxe.png' , 'SGMysticFortuneDeluxe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://app-a.insvr.com/img/square/200/SGMysticFortuneDeluxe.png" src="https://app-a.insvr.com/img/square/200/SGMysticFortuneDeluxe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystic Fortune Deluxe">Mystic Fortune Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Trucks" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Trucks', 'https://app-a.insvr.com/img/square/200/SGWildTrucks.png' , 'SGWildTrucks', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://app-a.insvr.com/img/square/200/SGWildTrucks.png" src="https://app-a.insvr.com/img/square/200/SGWildTrucks.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Trucks">Wild Trucks</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Laughing Buddha" data-filter="ALL,Video Slots,BUYBONUS,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Laughing Buddha', 'https://app-a.insvr.com/img/square/200/SGLaughingBuddha.png' , 'SGLaughingBuddha', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLaughingBuddha.png" src="https://app-a.insvr.com/img/square/200/SGLaughingBuddha.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Laughing Buddha">Laughing Buddha</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happiest Christmas Tree" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happiest Christmas Tree', 'https://app-a.insvr.com/img/square/200/SGHappiestChristmasTree.png' , 'SGHappiestChristmasTree', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGHappiestChristmasTree.png" src="https://app-a.insvr.com/img/square/200/SGHappiestChristmasTree.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happiest Christmas Tree">Happiest Christmas Tree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lucky Lions" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lucky Lions', 'https://app-a.insvr.com/img/square/200/SG5LuckyLions.png' , 'SG5LuckyLions', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SG5LuckyLions.png" src="https://app-a.insvr.com/img/square/200/SG5LuckyLions.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lucky Lions">5 Lucky Lions</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legendary Beasts" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legendary Beasts', 'https://app-a.insvr.com/img/square/200/SGLegendaryBeasts.png' , 'SGLegendaryBeasts', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLegendaryBeasts.png" src="https://app-a.insvr.com/img/square/200/SGLegendaryBeasts.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legendary Beasts">Legendary Beasts</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Big Deal Deluxe" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Big Deal Deluxe', 'https://app-a.insvr.com/img/square/200/SGTheBigDealDeluxe.png' , 'SGTheBigDealDeluxe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTheBigDealDeluxe.png" src="https://app-a.insvr.com/img/square/200/SGTheBigDealDeluxe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Big Deal Deluxe">The Big Deal Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lantern Luck" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lantern Luck', 'https://app-a.insvr.com/img/square/200/SGLanternLuck.png' , 'SGLanternLuck', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLanternLuck.png" src="https://app-a.insvr.com/img/square/200/SGLanternLuck.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lantern Luck">Lantern Luck</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fa Cai Shen" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fa Cai Shen', 'https://app-a.insvr.com/img/square/200/SGFaCaiShen.png' , 'SGFaCaiShen', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFaCaiShen.png" src="https://app-a.insvr.com/img/square/200/SGFaCaiShen.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fa Cai Shen">Fa Cai Shen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fa Cai Shen Deluxe" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fa Cai Shen Deluxe', 'https://app-a.insvr.com/img/square/200/SGFaCaiShenDeluxe.png' , 'SGFaCaiShenDeluxe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFaCaiShenDeluxe.png" src="https://app-a.insvr.com/img/square/200/SGFaCaiShenDeluxe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fa Cai Shen Deluxe">Fa Cai Shen Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Hot Halloween" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Hot Halloween', 'https://app-a.insvr.com/img/square/200/SGHotHotHalloween.png' , 'SGHotHotHalloween', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGHotHotHalloween.png" src="https://app-a.insvr.com/img/square/200/SGHotHotHalloween.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Hot Halloween">Hot Hot Halloween</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Four Divine Beasts" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Four Divine Beasts', 'https://app-a.insvr.com/img/square/200/SGFourDivineBeasts.png' , 'SGFourDivineBeasts', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFourDivineBeasts.png" src="https://app-a.insvr.com/img/square/200/SGFourDivineBeasts.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Four Divine Beasts">Four Divine Beasts</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Naughty Wukong" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Naughty Wukong', 'https://app-a.insvr.com/img/square/200/SGNaughtyWukong.png' , 'SGNaughtyWukong', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGNaughtyWukong.png" src="https://app-a.insvr.com/img/square/200/SGNaughtyWukong.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Naughty Wukong">Naughty Wukong</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tuk Tuk Thailand" data-filter="ALL,Video Slots,BUYBONUS,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tuk Tuk Thailand', 'https://app-a.insvr.com/img/square/200/SGTukTukThailand.png' , 'SGTukTukThailand', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTukTukThailand.png" src="https://app-a.insvr.com/img/square/200/SGTukTukThailand.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tuk Tuk Thailand">Tuk Tuk Thailand</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Disco Beats" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Disco Beats', 'https://app-a.insvr.com/img/square/200/SGDiscoBeats.png' , 'SGDiscoBeats', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDiscoBeats.png" src="https://app-a.insvr.com/img/square/200/SGDiscoBeats.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Disco Beats">Disco Beats</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Soju Bomb" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Soju Bomb', 'https://app-a.insvr.com/img/square/200/SGSojuBomb.png' , 'SGSojuBomb', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSojuBomb.png" src="https://app-a.insvr.com/img/square/200/SGSojuBomb.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Soju Bomb">Soju Bomb</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rodeo Drive" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rodeo Drive', 'https://app-a.insvr.com/img/square/200/SGRodeoDrive.png' , 'SGRodeoDrive', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGRodeoDrive.png" src="https://app-a.insvr.com/img/square/200/SGRodeoDrive.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rodeo Drive">Rodeo Drive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Double O Dollars" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Double O Dollars', 'https://app-a.insvr.com/img/square/200/SGDoubleODollars.png' , 'SGDoubleODollars', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDoubleODollars.png" src="https://app-a.insvr.com/img/square/200/SGDoubleODollars.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Double O Dollars">Double O Dollars</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roman Empire" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roman Empire', 'https://app-a.insvr.com/img/square/200/SGRomanEmpire.png' , 'SGRomanEmpire', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGRomanEmpire.png" src="https://app-a.insvr.com/img/square/200/SGRomanEmpire.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roman Empire">Roman Empire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Grape Escape" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Grape Escape', 'https://app-a.insvr.com/img/square/200/SGGrapeEscape.png' , 'SGGrapeEscape', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGrapeEscape.png" src="https://app-a.insvr.com/img/square/200/SGGrapeEscape.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Grape Escape">The Grape Escape</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shogun's Land" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shogun&amp;quot;amp;s Land', 'https://app-a.insvr.com/img/square/200/SGShogunsLand.png' , 'SGShogunsLand', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGShogunsLand.png" src="https://app-a.insvr.com/img/square/200/SGShogunsLand.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shogun's Land">Shogun's Land</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Glam Rock" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Glam Rock', 'https://app-a.insvr.com/img/square/200/SGGlamRock.png' , 'SGGlamRock', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGlamRock.png" src="https://app-a.insvr.com/img/square/200/SGGlamRock.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Glam Rock">Glam Rock</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ruffled Up" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ruffled Up', 'https://app-a.insvr.com/img/square/200/SGRuffledUp.png' , 'SGRuffledUp', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGRuffledUp.png" src="https://app-a.insvr.com/img/square/200/SGRuffledUp.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ruffled Up">Ruffled Up</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wicked Witch" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wicked Witch', 'https://app-a.insvr.com/img/square/200/SGWickedWitch.png' , 'SGWickedWitch', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGWickedWitch.png" src="https://app-a.insvr.com/img/square/200/SGWickedWitch.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wicked Witch">Wicked Witch</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zeus 2" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zeus 2', 'https://app-a.insvr.com/img/square/200/SGZeus2.png' , 'SGZeus2', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGZeus2.png" src="https://app-a.insvr.com/img/square/200/SGZeus2.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zeus 2">Zeus 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sir Blingalot" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sir Blingalot', 'https://app-a.insvr.com/img/square/200/SGSirBlingalot.png' , 'SGSirBlingalot', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSirBlingalot.png" src="https://app-a.insvr.com/img/square/200/SGSirBlingalot.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sir Blingalot">Sir Blingalot</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pamper Me" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pamper Me', 'https://app-a.insvr.com/img/square/200/SGPamperMe.png' , 'SGPamperMe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPamperMe.png" src="https://app-a.insvr.com/img/square/200/SGPamperMe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pamper Me">Pamper Me</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Haunted House" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Haunted House', 'https://app-a.insvr.com/img/square/200/SGHauntedHouse.png' , 'SGHauntedHouse', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://app-a.insvr.com/img/square/200/SGHauntedHouse.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Haunted House">Haunted House</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cashosaurus" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cashosaurus', 'https://app-a.insvr.com/img/square/200/SGCashosaurus.png' , 'SGCashosaurus', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCashosaurus.png" src="https://app-a.insvr.com/img/square/200/SGCashosaurus.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cashosaurus">Cashosaurus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Galactic Cash" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Galactic Cash', 'https://app-a.insvr.com/img/square/200/SGGalacticCash.png' , 'SGGalacticCash', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGalacticCash.png" src="https://app-a.insvr.com/img/square/200/SGGalacticCash.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Galactic Cash">Galactic Cash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sky's the Limit" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sky&amp;quot;amp;s the Limit', 'https://app-a.insvr.com/img/square/200/SGSkysTheLimit.png' , 'SGSkysTheLimit', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSkysTheLimit.png" src="https://app-a.insvr.com/img/square/200/SGSkysTheLimit.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sky's the Limit">Sky's the Limit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pucker Up Prince" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pucker Up Prince', 'https://app-a.insvr.com/img/square/200/SGPuckerUpPrince.png' , 'SGPuckerUpPrince', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPuckerUpPrince.png" src="https://app-a.insvr.com/img/square/200/SGPuckerUpPrince.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pucker Up Prince">Pucker Up Prince</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Unicorn" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Unicorn', 'https://app-a.insvr.com/img/square/200/SGGoldenUnicorn.png' , 'SGGoldenUnicorn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGoldenUnicorn.png" src="https://app-a.insvr.com/img/square/200/SGGoldenUnicorn.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Unicorn">Golden Unicorn</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate's Plunder" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate&amp;quot;amp;s Plunder', 'https://app-a.insvr.com/img/square/200/SGPiratesPlunder.png' , 'SGPiratesPlunder', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPiratesPlunder.png" src="https://app-a.insvr.com/img/square/200/SGPiratesPlunder.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirate's Plunder">Pirate's Plunder</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Reef" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Reef', 'https://app-a.insvr.com/img/square/200/SGCashReef.png' , 'SGCashReef', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCashReef.png" src="https://app-a.insvr.com/img/square/200/SGCashReef.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Reef">Cash Reef</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Rush" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Rush', 'https://app-a.insvr.com/img/square/200/SGGoldRush.png' , 'SGGoldRush', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGoldRush.png" src="https://app-a.insvr.com/img/square/200/SGGoldRush.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Rush">Gold Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ride 'em Cowboy" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ride &amp;quot;amp;em Cowboy', 'https://app-a.insvr.com/img/square/200/SGRideEmCowboy.png' , 'SGRideEmCowboy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGRideEmCowboy.png" src="https://app-a.insvr.com/img/square/200/SGRideEmCowboy.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ride 'em Cowboy">Ride 'em Cowboy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztlan's Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztlan&amp;quot;amp;s Gold', 'https://app-a.insvr.com/img/square/200/SGAzlandsGold.png' , 'SGAzlandsGold', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGAzlandsGold.png" src="https://app-a.insvr.com/img/square/200/SGAzlandsGold.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztlan's Gold">Aztlan's Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Indian Cash Catcher" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Indian Cash Catcher', 'https://app-a.insvr.com/img/square/200/SGIndianCashCatcher.png' , 'SGIndianCashCatcher', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGIndianCashCatcher.png" src="https://app-a.insvr.com/img/square/200/SGIndianCashCatcher.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Indian Cash Catcher">Indian Cash Catcher</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Frontier Fortunes" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Frontier Fortunes', 'https://app-a.insvr.com/img/square/200/SGFrontierFortunes.png' , 'SGFrontierFortunes', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFrontierFortunes.png" src="https://app-a.insvr.com/img/square/200/SGFrontierFortunes.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Frontier Fortunes">Frontier Fortunes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Big Deal" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Big Deal', 'https://app-a.insvr.com/img/square/200/SGTheBigDeal.png' , 'SGTheBigDeal', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTheBigDeal.png" src="https://app-a.insvr.com/img/square/200/SGTheBigDeal.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Big Deal">The Big Deal</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bombs Away" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bombs Away', 'https://app-a.insvr.com/img/square/200/SGBombsAway.png' , 'SGBombsAway', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBombsAway.png" src="https://app-a.insvr.com/img/square/200/SGBombsAway.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bombs Away">Bombs Away</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Disco Funk" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Disco Funk', 'https://app-a.insvr.com/img/square/200/SGDiscoFunk.png' , 'SGDiscoFunk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDiscoFunk.png" src="https://app-a.insvr.com/img/square/200/SGDiscoFunk.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Disco Funk">Disco Funk</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Diver" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Diver', 'https://app-a.insvr.com/img/square/200/SGTreasureDiver.png' , 'SGTreasureDiver', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTreasureDiver.png" src="https://app-a.insvr.com/img/square/200/SGTreasureDiver.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasure Diver">Treasure Diver</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Queens II" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Queens II', 'https://app-a.insvr.com/img/square/200/SGQueenOfQueens1024.png' , 'SGQueenOfQueens1024', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGQueenOfQueens1024.png" src="https://app-a.insvr.com/img/square/200/SGQueenOfQueens1024.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen of Queens II">Queen of Queens II</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Queens" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Queens', 'https://app-a.insvr.com/img/square/200/SGQueenOfQueens243.png' , 'SGQueenOfQueens243', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGQueenOfQueens243.png" src="https://app-a.insvr.com/img/square/200/SGQueenOfQueens243.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen of Queens">Queen of Queens</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Rumble" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Rumble', 'https://app-a.insvr.com/img/square/200/SGJungleRumble.png' , 'SGJungleRumble', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGJungleRumble.png" src="https://app-a.insvr.com/img/square/200/SGJungleRumble.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle Rumble">Jungle Rumble</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Space Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Space Fortune', 'https://app-a.insvr.com/img/square/200/SGSpaceFortune.png' , 'SGSpaceFortune', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSpaceFortune.png" src="https://app-a.insvr.com/img/square/200/SGSpaceFortune.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Space Fortune">Space Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Barnstormer Bucks" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Barnstormer Bucks', 'https://app-a.insvr.com/img/square/200/SGBarnstormerBucks.png' , 'SGBarnstormerBucks', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBarnstormerBucks.png" src="https://app-a.insvr.com/img/square/200/SGBarnstormerBucks.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Barnstormer Bucks">Barnstormer Bucks</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bikini Island" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bikini Island', 'https://app-a.insvr.com/img/square/200/SGBikiniIsland.png' , 'SGBikiniIsland', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBikiniIsland.png" src="https://app-a.insvr.com/img/square/200/SGBikiniIsland.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bikini Island">Bikini Island</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egyptian Dreams" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egyptian Dreams', 'https://app-a.insvr.com/img/square/200/SGEgyptianDreams.png' , 'SGEgyptianDreams', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGEgyptianDreams.png" src="https://app-a.insvr.com/img/square/200/SGEgyptianDreams.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egyptian Dreams">Egyptian Dreams</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zeus" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zeus', 'https://app-a.insvr.com/img/square/200/SGZeus.png' , 'SGZeus', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGZeus.png" src="https://app-a.insvr.com/img/square/200/SGZeus.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zeus">Zeus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Arctic Wonders" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Arctic Wonders', 'https://app-a.insvr.com/img/square/200/SGArcticWonders.png' , 'SGArcticWonders', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGArcticWonders.png" src="https://app-a.insvr.com/img/square/200/SGArcticWonders.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Arctic Wonders">Arctic Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mummy Money" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mummy Money', 'https://app-a.insvr.com/img/square/200/SGMummyMoney.png' , 'SGMummyMoney', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMummyMoney.png" src="https://app-a.insvr.com/img/square/200/SGMummyMoney.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mummy Money">Mummy Money</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystic Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystic Fortune', 'https://app-a.insvr.com/img/square/200/SGMysticFortune.png' , 'SGMysticFortune', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMysticFortune.png" src="https://app-a.insvr.com/img/square/200/SGMysticFortune.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystic Fortune">Mystic Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Flying High" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Flying High', 'https://app-a.insvr.com/img/square/200/SGFlyingHigh.png' , 'SGFlyingHigh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFlyingHigh.png" src="https://app-a.insvr.com/img/square/200/SGFlyingHigh.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Flying High">Flying High</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mr Bling" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mr Bling', 'https://app-a.insvr.com/img/square/200/SGMrBling.png' , 'SGMrBling', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMrBling.png" src="https://app-a.insvr.com/img/square/200/SGMrBling.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mr Bling">Mr Bling</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon's Realm" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon&amp;quot;amp;s Realm', 'https://app-a.insvr.com/img/square/200/SGDragonsRealm.png' , 'SGDragonsRealm', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDragonsRealm.png" src="https://app-a.insvr.com/img/square/200/SGDragonsRealm.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon's Realm">Dragon's Realm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="All For One" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'All For One', 'https://app-a.insvr.com/img/square/200/SGAllForOne.png' , 'SGAllForOne', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGAllForOne.png" src="https://app-a.insvr.com/img/square/200/SGAllForOne.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="All For One">All For One</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tower Of Pizza" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tower Of Pizza', 'https://app-a.insvr.com/img/square/200/SGTowerOfPizza.png' , 'SGTowerOfPizza', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTowerOfPizza.png" src="https://app-a.insvr.com/img/square/200/SGTowerOfPizza.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tower Of Pizza">Tower Of Pizza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="S.O.S!" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'S.O.S!', 'https://app-a.insvr.com/img/square/200/SGSOS.png' , 'SGSOS', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSOS.png" src="https://app-a.insvr.com/img/square/200/SGSOS.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="S.O.S!">S.O.S!</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Tomb" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Tomb', 'https://app-a.insvr.com/img/square/200/SGTreasureTomb.png' , 'SGTreasureTomb', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTreasureTomb.png" src="https://app-a.insvr.com/img/square/200/SGTreasureTomb.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasure Tomb">Treasure Tomb</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shaolin Fortunes" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shaolin Fortunes', 'https://app-a.insvr.com/img/square/200/SGShaolinFortunes243.png' , 'SGShaolinFortunes243', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGShaolinFortunes243.png" src="https://app-a.insvr.com/img/square/200/SGShaolinFortunes243.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shaolin Fortunes">Shaolin Fortunes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pool Shark" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pool Shark', 'https://app-a.insvr.com/img/square/200/SGPoolShark.png' , 'SGPoolShark', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPoolShark.png" src="https://app-a.insvr.com/img/square/200/SGPoolShark.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pool Shark">Pool Shark</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buggy Bonus" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buggy Bonus', 'https://app-a.insvr.com/img/square/200/SGBuggyBonus.png' , 'SGBuggyBonus', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBuggyBonus.png" src="https://app-a.insvr.com/img/square/200/SGBuggyBonus.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buggy Bonus">Buggy Bonus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Coyote Crash" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Coyote Crash', 'https://app-a.insvr.com/img/square/200/SGCoyoteCrash.png' , 'SGCoyoteCrash', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCoyoteCrash.png" src="https://app-a.insvr.com/img/square/200/SGCoyoteCrash.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Coyote Crash">Coyote Crash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kane's Inferno" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kane&amp;quot;amp;s Inferno', 'https://app-a.insvr.com/img/square/200/SGKanesInferno.png' , 'SGKanesInferno', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGKanesInferno.png" src="https://app-a.insvr.com/img/square/200/SGKanesInferno.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kane's Inferno">Kane's Inferno</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="King Tut's Tomb" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'King Tut&amp;quot;amp;s Tomb', 'https://app-a.insvr.com/img/square/200/SGKingTutsTomb.png' , 'SGKingTutsTomb', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGKingTutsTomb.png" src="https://app-a.insvr.com/img/square/200/SGKingTutsTomb.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="King Tut's Tomb">King Tut's Tomb</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Carnival Cash" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Carnival Cash', 'https://app-a.insvr.com/img/square/200/SGCarnivalCash.png' , 'SGCarnivalCash', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCarnivalCash.png" src="https://app-a.insvr.com/img/square/200/SGCarnivalCash.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Carnival Cash">Carnival Cash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Castle" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Castle', 'https://app-a.insvr.com/img/square/200/SGTheDragonCastle.png' , 'SGTheDragonCastle', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTheDragonCastle.png" src="https://app-a.insvr.com/img/square/200/SGTheDragonCastle.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Castle">Dragon Castle</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Blackbeard's Bounty" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Blackbeard&amp;quot;amp;s Bounty', 'https://app-a.insvr.com/img/square/200/SGBlackbeardsBounty.png' , 'SGBlackbeardsBounty', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBlackbeardsBounty.png" src="https://app-a.insvr.com/img/square/200/SGBlackbeardsBounty.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Blackbeard's Bounty">Blackbeard's Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monster Mash Cash" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monster Mash Cash', 'https://app-a.insvr.com/img/square/200/SGMonsterMashCash.png' , 'SGMonsterMashCash', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMonsterMashCash.png" src="https://app-a.insvr.com/img/square/200/SGMonsterMashCash.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monster Mash Cash">Monster Mash Cash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shaolin Fortunes 100" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shaolin Fortunes 100', 'https://app-a.insvr.com/img/square/200/SGShaolinFortunes100.png' , 'SGShaolinFortunes100', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGShaolinFortunes100.png" src="https://app-a.insvr.com/img/square/200/SGShaolinFortunes100.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shaolin Fortunes 100">Shaolin Fortunes 100</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Viking's Plunder" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Viking&amp;quot;amp;s Plunder', 'https://app-a.insvr.com/img/square/200/SGVikingsPlunder.png' , 'SGVikingsPlunder', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGVikingsPlunder.png" src="https://app-a.insvr.com/img/square/200/SGVikingsPlunder.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Viking's Plunder">Viking's Plunder</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Little Green Money" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Little Green Money', 'https://app-a.insvr.com/img/square/200/SGLittleGreenMoney.png' , 'SGLittleGreenMoney', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLittleGreenMoney.png" src="https://app-a.insvr.com/img/square/200/SGLittleGreenMoney.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Little Green Money">Little Green Money</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dr Feelgood" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dr Feelgood', 'https://app-a.insvr.com/img/square/200/SGDrFeelgood.png' , 'SGDrFeelgood', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDrFeelgood.png" src="https://app-a.insvr.com/img/square/200/SGDrFeelgood.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dr Feelgood">Dr Feelgood</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Weird Science" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Weird Science', 'https://app-a.insvr.com/img/square/200/SGWeirdScience.png' , 'SGWeirdScience', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGWeirdScience.png" src="https://app-a.insvr.com/img/square/200/SGWeirdScience.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Weird Science">Weird Science</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon's Throne" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon&amp;quot;amp;s Throne', 'https://app-a.insvr.com/img/square/200/SGDragonsThrone.png' , 'SGDragonsThrone', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDragonsThrone.png" src="https://app-a.insvr.com/img/square/200/SGDragonsThrone.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon's Throne">Dragon's Throne</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Siren's Spell" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Siren&amp;quot;amp;s Spell', 'https://app-a.insvr.com/img/square/200/SGSirensSpell.png' , 'SGSirensSpell', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSirensSpell.png" src="https://app-a.insvr.com/img/square/200/SGSirensSpell.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Siren's Spell">Siren's Spell</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Arcane Elements" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Arcane Elements', 'https://app-a.insvr.com/img/square/200/SGArcaneElements.png' , 'SGArcaneElements', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGArcaneElements.png" src="https://app-a.insvr.com/img/square/200/SGArcaneElements.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Arcane Elements">Arcane Elements</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Return To The Feature" data-filter="ALL,Video Slots,NEW,BUYBONUS" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Return To The Feature', 'https://app-a.insvr.com/img/square/200/SGReturnToTheFeature.png' , 'SGReturnToTheFeature', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGReturnToTheFeature.png" src="https://app-a.insvr.com/img/square/200/SGReturnToTheFeature.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Return To The Feature">Return To The Feature</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Fortune Cat" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Fortune Cat', 'https://app-a.insvr.com/img/square/200/SGLuckyFortuneCat.png' , 'SGLuckyFortuneCat', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLuckyFortuneCat.png" src="https://app-a.insvr.com/img/square/200/SGLuckyFortuneCat.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Fortune Cat">Lucky Fortune Cat</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Techno Tumble" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Techno Tumble', 'https://app-a.insvr.com/img/square/200/SGTechnoTumble.png' , 'SGTechnoTumble', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTechnoTumble.png" src="https://app-a.insvr.com/img/square/200/SGTechnoTumble.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Techno Tumble">Techno Tumble</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Scopa" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Scopa', 'https://app-a.insvr.com/img/square/200/SGScopa.png' , 'SGScopa', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGScopa.png" src="https://app-a.insvr.com/img/square/200/SGScopa.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Scopa">Scopa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hey Sushi" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hey Sushi', 'https://app-a.insvr.com/img/square/200/SGHeySushi.png' , 'SGHeySushi', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGHeySushi.png" src="https://app-a.insvr.com/img/square/200/SGHeySushi.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hey Sushi">Hey Sushi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jellyfish Flow Ultra" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jellyfish Flow Ultra', 'https://app-a.insvr.com/img/square/200/SGJellyfishFlowUltra.png' , 'SGJellyfishFlowUltra', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGJellyfishFlowUltra.png" src="https://app-a.insvr.com/img/square/200/SGJellyfishFlowUltra.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jellyfish Flow Ultra">Jellyfish Flow Ultra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jellyfish Flow" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jellyfish Flow', 'https://app-a.insvr.com/img/square/200/SGJellyfishFlow.png' , 'SGJellyfishFlow', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGJellyfishFlow.png" src="https://app-a.insvr.com/img/square/200/SGJellyfishFlow.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jellyfish Flow">Jellyfish Flow</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happy Ape" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happy Ape', 'https://app-a.insvr.com/img/square/200/SGHappyApe.png' , 'SGHappyApe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGHappyApe.png" src="https://app-a.insvr.com/img/square/200/SGHappyApe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happy Ape">Happy Ape</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Taberna De Los Muertos" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Taberna De Los Muertos', 'https://app-a.insvr.com/img/square/200/SGTabernaDeLosMuertos.png' , 'SGTabernaDeLosMuertos', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTabernaDeLosMuertos.png" src="https://app-a.insvr.com/img/square/200/SGTabernaDeLosMuertos.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Taberna De Los Muertos">Taberna De Los Muertos</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Taberna De Los Muertos Ultra" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Taberna De Los Muertos Ultra', 'https://app-a.insvr.com/img/square/200/SGTabernaDeLosMuertosUltra.png' , 'SGTabernaDeLosMuertosUltra', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTabernaDeLosMuertosUltra.png" src="https://app-a.insvr.com/img/square/200/SGTabernaDeLosMuertosUltra.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Taberna De Los Muertos Ultra">Taberna De Los Muertos Ultra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Gift Rush" data-filter="ALL,Video Slots,BUYBONUS" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Gift Rush', 'https://app-a.insvr.com/img/square/200/SGChristmasGiftRush.png' , 'SGChristmasGiftRush', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGChristmasGiftRush.png" src="https://app-a.insvr.com/img/square/200/SGChristmasGiftRush.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Gift Rush">Christmas Gift Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Totem Towers" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Totem Towers', 'https://app-a.insvr.com/img/square/200/SGTotemTowers.png' , 'SGTotemTowers', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTotemTowers.png" src="https://app-a.insvr.com/img/square/200/SGTotemTowers.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Totem Towers">Totem Towers</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Orbs of Atlantis" data-filter="ALL,Video Slots,NEW,BUYBONUS" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Orbs of Atlantis', 'https://app-a.insvr.com/img/square/200/SGOrbsOfAtlantis.png' , 'SGOrbsOfAtlantis', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGOrbsOfAtlantis.png" src="https://app-a.insvr.com/img/square/200/SGOrbsOfAtlantis.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Orbs of Atlantis">Orbs of Atlantis</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Before Time Runs Out" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Before Time Runs Out', 'https://app-a.insvr.com/img/square/200/SGBeforeTimeRunsOut.png' , 'SGBeforeTimeRunsOut', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBeforeTimeRunsOut.png" src="https://app-a.insvr.com/img/square/200/SGBeforeTimeRunsOut.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Before Time Runs Out">Before Time Runs Out</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Tower" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Tower', 'https://app-a.insvr.com/img/square/200/SGCandyTower.png' , 'SGCandyTower', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCandyTower.png" src="https://app-a.insvr.com/img/square/200/SGCandyTower.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Tower">Candy Tower</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Loony Blox" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Loony Blox', 'https://app-a.insvr.com/img/square/200/SGLoonyBlox.png' , 'SGLoonyBlox', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLoonyBlox.png" src="https://app-a.insvr.com/img/square/200/SGLoonyBlox.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Loony Blox">Loony Blox</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Marvelous Furlongs" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Marvelous Furlongs', 'https://app-a.insvr.com/img/square/200/SGMarvelousFurlongs.png' , 'SGMarvelousFurlongs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMarvelousFurlongs.png" src="https://app-a.insvr.com/img/square/200/SGMarvelousFurlongs.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Marvelous Furlongs">Marvelous Furlongs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Calaveras Explosivas" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Calaveras Explosivas', 'https://app-a.insvr.com/img/square/200/SGCalaverasExplosivas.png' , 'SGCalaverasExplosivas', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCalaverasExplosivas.png" src="https://app-a.insvr.com/img/square/200/SGCalaverasExplosivas.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Calaveras Explosivas">Calaveras Explosivas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fly!" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fly!', 'https://app-a.insvr.com/img/square/200/SGFly.png' , 'SGFly', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFly.png" src="https://app-a.insvr.com/img/square/200/SGFly.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fly!">Fly!</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Nine Tails" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Nine Tails', 'https://app-a.insvr.com/img/square/200/SGNineTails.png' , 'SGNineTails', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGNineTails.png" src="https://app-a.insvr.com/img/square/200/SGNineTails.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Nine Tails">Nine Tails</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Prost!" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Prost!', 'https://app-a.insvr.com/img/square/200/SGProst.png' , 'SGProst', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGProst.png" src="https://app-a.insvr.com/img/square/200/SGProst.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Prost!">Prost!</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="New Years Bash" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'New Years Bash', 'https://app-a.insvr.com/img/square/200/SGNewYearsBash.png' , 'SGNewYearsBash', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGNewYearsBash.png" src="https://app-a.insvr.com/img/square/200/SGNewYearsBash.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="New Years Bash">New Years Bash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Durian" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Durian', 'https://app-a.insvr.com/img/square/200/SGLuckyDurian.png' , 'SGLuckyDurian', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLuckyDurian.png" src="https://app-a.insvr.com/img/square/200/SGLuckyDurian.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Durian">Lucky Durian</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mighty Medusa" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mighty Medusa', 'https://app-a.insvr.com/img/square/200/SGMightyMedusa.png' , 'SGMightyMedusa', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMightyMedusa.png" src="https://app-a.insvr.com/img/square/200/SGMightyMedusa.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mighty Medusa">Mighty Medusa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bomb Runner" data-filter="ALL,Video Slots,BUYBONUS" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bomb Runner', 'https://app-a.insvr.com/img/square/200/SGBombRunner.png' , 'SGBombRunner', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBombRunner.png" src="https://app-a.insvr.com/img/square/200/SGBombRunner.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bomb Runner">Bomb Runner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Unicorn Deluxe" data-filter="ALL,Video Slots,BUYBONUS" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Unicorn Deluxe', 'https://app-a.insvr.com/img/square/200/SGGoldenUnicornDeluxe.png' , 'SGGoldenUnicornDeluxe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGoldenUnicornDeluxe.png" src="https://app-a.insvr.com/img/square/200/SGGoldenUnicornDeluxe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Unicorn Deluxe">Golden Unicorn Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Space Goonz" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Space Goonz', 'https://app-a.insvr.com/img/square/200/SGSpaceGoonz.png' , 'SGSpaceGoonz', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSpaceGoonz.png" src="https://app-a.insvr.com/img/square/200/SGSpaceGoonz.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Space Goonz">Space Goonz</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Taiko Beats" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Taiko Beats', 'https://app-a.insvr.com/img/square/200/SGTaikoBeats.png' , 'SGTaikoBeats', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTaikoBeats.png" src="https://app-a.insvr.com/img/square/200/SGTaikoBeats.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Taiko Beats">Taiko Beats</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Tiger Gate" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Tiger Gate', 'https://app-a.insvr.com/img/square/200/SGDragonTigerGate.png' , 'SGDragonTigerGate', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGDragonTigerGate.png" src="https://app-a.insvr.com/img/square/200/SGDragonTigerGate.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Tiger Gate">Dragon Tiger Gate</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rainbowmania" data-filter="ALL,Video Slots,BUYBONUS" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rainbowmania', 'https://app-a.insvr.com/img/square/200/SGRainbowmania.png' , 'SGRainbowmania', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGRainbowmania.png" src="https://app-a.insvr.com/img/square/200/SGRainbowmania.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rainbowmania">Rainbowmania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Knockout Football Rush" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Knockout Football Rush', 'https://app-a.insvr.com/img/square/200/SGKnockoutFootballRush.png' , 'SGKnockoutFootballRush', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGKnockoutFootballRush.png" src="https://app-a.insvr.com/img/square/200/SGKnockoutFootballRush.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Knockout Football Rush">Knockout Football Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Naughty Santa" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Naughty Santa', 'https://app-a.insvr.com/img/square/200/SGNaughtySanta.png' , 'SGNaughtySanta', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGNaughtySanta.png" src="https://app-a.insvr.com/img/square/200/SGNaughtySanta.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Naughty Santa">Naughty Santa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="12 Zodiacs" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '12 Zodiacs', 'https://app-a.insvr.com/img/square/200/SG12Zodiacs.png' , 'SG12Zodiacs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SG12Zodiacs.png" src="https://app-a.insvr.com/img/square/200/SG12Zodiacs.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="12 Zodiacs">12 Zodiacs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rolling Roger" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rolling Roger', 'https://app-a.insvr.com/img/square/200/SGRollingRoger.png' , 'SGRollingRoger', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGRollingRoger.png" src="https://app-a.insvr.com/img/square/200/SGRollingRoger.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rolling Roger">Rolling Roger</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Twister" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Twister', 'https://app-a.insvr.com/img/square/200/SGSuperTwister.png' , 'SGSuperTwister', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSuperTwister.png" src="https://app-a.insvr.com/img/square/200/SGSuperTwister.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Twister">Super Twister</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sparta" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sparta', 'https://app-a.insvr.com/img/square/200/SGSparta.png' , 'SGSparta', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSparta.png" src="https://app-a.insvr.com/img/square/200/SGSparta.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sparta">Sparta</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gangsters" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gangsters', 'https://app-a.insvr.com/img/square/200/SGGangsters.png' , 'SGGangsters', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGGangsters.png" src="https://app-a.insvr.com/img/square/200/SGGangsters.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gangsters">Gangsters</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ocean's Call" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ocean&amp;quot;amp;s Call', 'https://app-a.insvr.com/img/square/200/SGOceansCall.png' , 'SGOceansCall', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGOceansCall.png" src="https://app-a.insvr.com/img/square/200/SGOceansCall.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ocean's Call">Ocean's Call</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jugglenaut" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jugglenaut', 'https://app-a.insvr.com/img/square/200/SGJugglenaut.png' , 'SGJugglenaut', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGJugglenaut.png" src="https://app-a.insvr.com/img/square/200/SGJugglenaut.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jugglenaut">Jugglenaut</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fenghuang" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fenghuang', 'https://app-a.insvr.com/img/square/200/SGFenghuang.png' , 'SGFenghuang', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFenghuang.png" src="https://app-a.insvr.com/img/square/200/SGFenghuang.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fenghuang">Fenghuang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Rooster" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Rooster', 'https://app-a.insvr.com/img/square/200/SGFireRooster.png' , 'SGFireRooster', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFireRooster.png" src="https://app-a.insvr.com/img/square/200/SGFireRooster.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Rooster">Fire Rooster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crystopia" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crystopia', 'https://app-a.insvr.com/img/square/200/SGCrystopia.png' , 'SGCrystopia', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCrystopia.png" src="https://app-a.insvr.com/img/square/200/SGCrystopia.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crystopia">Crystopia</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bird of Thunder" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bird of Thunder', 'https://app-a.insvr.com/img/square/200/SGBirdOfThunder.png' , 'SGBirdOfThunder', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGBirdOfThunder.png" src="https://app-a.insvr.com/img/square/200/SGBirdOfThunder.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bird of Thunder">Bird of Thunder</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panda Panda" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panda Panda', 'https://app-a.insvr.com/img/square/200/SGPandaPanda.png' , 'SGPandaPanda', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPandaPanda.png" src="https://app-a.insvr.com/img/square/200/SGPandaPanda.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Panda Panda">Panda Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dead Escape" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dead Escape', 'https://app-a.insvr.com/img/square/200/SGTheDeadEscape.png' , 'SGTheDeadEscape', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGTheDeadEscape.png" src="https://app-a.insvr.com/img/square/200/SGTheDeadEscape.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dead Escape">The Dead Escape</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Scruffy Scallywags" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Scruffy Scallywags', 'https://app-a.insvr.com/img/square/200/SGScruffyScallywags.png' , 'SGScruffyScallywags', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGScruffyScallywags.png" src="https://app-a.insvr.com/img/square/200/SGScruffyScallywags.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Scruffy Scallywags">Scruffy Scallywags</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cake Valley" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cake Valley', 'https://app-a.insvr.com/img/square/200/SGCakeValley.png' , 'SGCakeValley', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGCakeValley.png" src="https://app-a.insvr.com/img/square/200/SGCakeValley.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cake Valley">Cake Valley</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa's Village" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Village', 'https://app-a.insvr.com/img/square/200/SGSantasVillage.png' , 'SGSantasVillage', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSantasVillage.png" src="https://app-a.insvr.com/img/square/200/SGSantasVillage.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Village">Santa's Village</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wizards Want War!" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wizards Want War!', 'https://app-a.insvr.com/img/square/200/SGWizardsWantWar.png' , 'SGWizardsWantWar', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGWizardsWantWar.png" src="https://app-a.insvr.com/img/square/200/SGWizardsWantWar.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wizards Want War!">Wizards Want War!</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Mariachis" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Mariachis', 'https://app-a.insvr.com/img/square/200/SG5Mariachis.png' , 'SG5Mariachis', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SG5Mariachis.png" src="https://app-a.insvr.com/img/square/200/SG5Mariachis.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Mariachis">5 Mariachis</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="London Hunter" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'London Hunter', 'https://app-a.insvr.com/img/square/200/SGLondonHunter.png' , 'SGLondonHunter', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLondonHunter.png" src="https://app-a.insvr.com/img/square/200/SGLondonHunter.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="London Hunter">London Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Presto!" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Presto!', 'https://app-a.insvr.com/img/square/200/SGPresto.png' , 'SGPresto', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPresto.png" src="https://app-a.insvr.com/img/square/200/SGPresto.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Presto!">Presto!</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Dogs" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Dogs', 'https://app-a.insvr.com/img/square/200/SGFortuneDogs.png' , 'SGFortuneDogs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGFortuneDogs.png" src="https://app-a.insvr.com/img/square/200/SGFortuneDogs.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Dogs">Fortune Dogs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Knockout Football" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Knockout Football', 'https://app-a.insvr.com/img/square/200/SGKnockoutFootball.png' , 'SGKnockoutFootball', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGKnockoutFootball.png" src="https://app-a.insvr.com/img/square/200/SGKnockoutFootball.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Knockout Football">Knockout Football</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ways Of Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ways Of Fortune', 'https://app-a.insvr.com/img/square/200/SGWaysOfFortune.png' , 'SGWaysOfFortune', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGWaysOfFortune.png" src="https://app-a.insvr.com/img/square/200/SGWaysOfFortune.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ways Of Fortune">Ways Of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egyptian Dreams Deluxe" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egyptian Dreams Deluxe', 'https://app-a.insvr.com/img/square/200/SGEgyptianDreamsDeluxe.png' , 'SGEgyptianDreamsDeluxe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGEgyptianDreamsDeluxe.png" src="https://app-a.insvr.com/img/square/200/SGEgyptianDreamsDeluxe.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egyptian Dreams Deluxe">Egyptian Dreams Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jump!" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jump!', 'https://app-a.insvr.com/img/square/200/SGJump.png' , 'SGJump', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGJump.png" src="https://app-a.insvr.com/img/square/200/SGJump.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jump!">Jump!</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pumpkin Patch" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pumpkin Patch', 'https://app-a.insvr.com/img/square/200/SGPumpkinPatch.png' , 'SGPumpkinPatch', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGPumpkinPatch.png" src="https://app-a.insvr.com/img/square/200/SGPumpkinPatch.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pumpkin Patch">Pumpkin Patch</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mount Mazuma" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mount Mazuma', 'https://app-a.insvr.com/img/square/200/SGMountMazuma.png' , 'SGMountMazuma', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMountMazuma.png" src="https://app-a.insvr.com/img/square/200/SGMountMazuma.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mount Mazuma">Mount Mazuma</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Oak" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Oak', 'https://app-a.insvr.com/img/square/200/SGMagicOak.png' , 'SGMagicOak', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGMagicOak.png" src="https://app-a.insvr.com/img/square/200/SGMagicOak.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magic Oak">Magic Oak</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Lucky" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Lucky', 'https://app-a.insvr.com/img/square/200/SGLuckyLucky.png' , 'SGLuckyLucky', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGLuckyLucky.png" src="https://app-a.insvr.com/img/square/200/SGLuckyLucky.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Lucky">Lucky Lucky</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Nuwa" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Nuwa', 'https://app-a.insvr.com/img/square/200/SGNuwa.png' , 'SGNuwa', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGNuwa.png" src="https://app-a.insvr.com/img/square/200/SGNuwa.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Nuwa">Nuwa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Colossal Gems" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Colossal Gems', 'https://app-a.insvr.com/img/square/200/SGColossalGems.png' , 'SGColossalGems', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGColossalGems.png" src="https://app-a.insvr.com/img/square/200/SGColossalGems.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Colossal Gems">Colossal Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Strike" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Strike', 'https://app-a.insvr.com/img/square/200/SGSuperStrike.png' , 'SGSuperStrike', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://app-a.insvr.com/img/square/200/SGSuperStrike.png" src="https://app-a.insvr.com/img/square/200/SGSuperStrike.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Strike">Super Strike</h5>
        </a>
        
     
  </div>

</div>

@endsection
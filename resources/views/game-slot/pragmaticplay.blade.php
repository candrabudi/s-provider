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
<input type="hidden" value="pp_slots" name="hiddenGameID-001" id="hiddenGameID-001">
<div class="row games no-gutters">
   
                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hellvis Wild" data-filter="ALL,Video Slots,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hellvis Wild', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243nudge4gold.png' , 'vs243nudge4gold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243nudge4gold.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243nudge4gold.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hellvis Wild">Hellvis Wild</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20olympgate.png' , 'vs20olympgate', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20olympgate.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20olympgate.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gates of Olympus™">Gates of Olympus™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Princess" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Princess', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20starlight.png' , 'vs20starlight', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20starlight.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20starlight.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Starlight Princess">Starlight Princess</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wisdom of Athena™" data-filter="ALL,Video Slots,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wisdom of Athena™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20procount.png' , 'vs20procount', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20procount.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20procount.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wisdom of Athena™">Wisdom of Athena™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fruitsw.png' , 'vs20fruitsw', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fruitsw.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fruitsw.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Sweet Bonanza">Sweet Bonanza</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza Xmas" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza Xmas', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sbxmas.png' , 'vs20sbxmas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sbxmas.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sbxmas.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Sweet Bonanza Xmas">Sweet Bonanza Xmas</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Gatot Kaca" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Gatot Kaca', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gatotgates.png' , 'vs20gatotgates', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gatotgates.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gatotgates.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gates of Gatot Kaca">Gates of Gatot Kaca</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pyramid Bonanza™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pyramid Bonanza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20pbonanza.png' , 'vs20pbonanza', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20pbonanza.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20pbonanza.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pyramid Bonanza™">Pyramid Bonanza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Rush™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Rush™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sugarrush.png' , 'vs20sugarrush', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sugarrush.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sugarrush.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Sugar Rush™">Sugar Rush™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Gems" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Gems', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5aztecgems.png' , 'vs5aztecgems', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5aztecgems.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5aztecgems.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec Gems">Aztec Gems</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bonanza Gold™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bonanza Gold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bonzgold.png' , 'vs20bonzgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bonzgold.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bonzgold.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bonanza Gold™">Bonanza Gold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Megaways™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslions.png' , 'vswayslions', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslions.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslions.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="5 Lions Megaways™">5 Lions Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Gold" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40wildwest.png' , 'vs40wildwest', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40wildwest.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40wildwest.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild West Gold">Wild West Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Christmas" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Christmas', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20schristmas.png' , 'vs20schristmas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20schristmas.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20schristmas.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Starlight Christmas">Starlight Christmas</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="CANDY VILLAGE™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'CANDY VILLAGE™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20candvil.png' , 'vs20candvil', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20candvil.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20candvil.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="CANDY VILLAGE™">CANDY VILLAGE™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Rhino Megaways" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Rhino Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrhino.png' , 'vswaysrhino', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrhino.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrhino.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Great Rhino Megaways">Great Rhino Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Power of Thor Megaways" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Power of Thor Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayshammthor.png' , 'vswayshammthor', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayshammthor.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayshammthor.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Power of Thor Megaways">Power of Thor Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jokers Jewels" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jokers Jewels', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5joker.png' , 'vs5joker', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5joker.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5joker.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Jokers Jewels">Jokers Jewels</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Aztec™" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Aztec™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20aztecgates.png' , 'vs20aztecgates', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20aztecgates.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20aztecgates.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gates of Aztec™">Gates of Aztec™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa's Great Gifts™" data-filter="ALL,Video Slots,TOP,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Great Gifts™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20porbs.png' , 'vs20porbs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20porbs.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20porbs.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Santa's Great Gifts™">Santa's Great Gifts™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mochimon™" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mochimon™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mochimon.png' , 'vs20mochimon', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mochimon.png" src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mochimon.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mochimon™">Mochimon™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Gems Deluxe" data-filter="ALL,Video Slots,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Gems Deluxe', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9aztecgemsdx.png' , 'vs9aztecgemsdx', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9aztecgemsdx.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec Gems Deluxe">Aztec Gems Deluxe</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Madame Destiny Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Madame Destiny Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysmadame.png' , 'vswaysmadame', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysmadame.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Madame Destiny Megaways™">Madame Destiny Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo King Megaways" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo King Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbufking.png' , 'vswaysbufking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbufking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Buffalo King Megaways">Buffalo King Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sword of Ares™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sword of Ares™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20swordofares.png' , 'vs20swordofares', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20swordofares.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Sword of Ares™">Sword of Ares™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fat Panda™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fat Panda™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20beefed.png' , 'vs20beefed', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20beefed.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fat Panda™">Fat Panda™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirates Pub™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirates Pub™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9outlaw.png' , 'vs9outlaw', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9outlaw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pirates Pub™">Pirates Pub™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jewel Rush™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jewel Rush™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20jewelparty.png' , 'vs20jewelparty', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20jewelparty.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Jewel Rush™">Jewel Rush™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Robber Strike™ " data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Robber Strike™ ', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096robber.png' , 'vs4096robber', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096robber.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Robber Strike™ ">Robber Strike™ </h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lamp Of Infinity™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lamp Of Infinity™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20lampinf.png' , 'vs20lampinf', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20lampinf.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lamp Of Infinity™">Lamp Of Infinity™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Frogs &amp; Bugs™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Frogs &amp;quot; Bugs™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfrbugs.png' , 'vswaysfrbugs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfrbugs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Frogs &amp; Bugs™">Frogs &amp; Bugs™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Boat Festival™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Boat Festival™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10fdrasbf.png' , 'vs10fdrasbf', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10fdrasbf.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dragon Boat Festival™">Dragon Boat Festival™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sticky Bees™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sticky Bees™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20clustwild.png' , 'vs20clustwild', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20clustwild.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Sticky Bees™">Sticky Bees™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zeus vs Hades - Gods of War™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zeus vs Hades - Gods of War™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs15godsofwar.png' , 'vs15godsofwar', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs15godsofwar.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Zeus vs Hades - Gods of War™">Zeus vs Hades - Gods of War™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Knight Hot Spotz™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Knight Hot Spotz™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25spotz.png' , 'vs25spotz', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25spotz.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Knight Hot Spotz™">Knight Hot Spotz™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Bison Charge™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Bison Charge™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20stickywild.png' , 'vs20stickywild', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20stickywild.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Bison Charge™">Wild Bison Charge™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Excalibur Unleashed™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Excalibur Unleashed™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20excalibur.png' , 'vs20excalibur', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20excalibur.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Excalibur Unleashed™">Excalibur Unleashed™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Holiday Ride™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Holiday Ride™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25holiday.png' , 'vs25holiday', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25holiday.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Holiday Ride™">Holiday Ride™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamonds of Egypt™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamonds of Egypt™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayseternity.png' , 'vswayseternity', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayseternity.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Diamonds of Egypt™">Diamonds of Egypt™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jasmine Dreams™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jasmine Dreams™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mvwild.png' , 'vs20mvwild', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mvwild.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Jasmine Dreams™">Jasmine Dreams™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kingdom of the Dead™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kingdom of the Dead™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10kingofdth.png' , 'vs10kingofdth', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10kingofdth.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Kingdom of the Dead™">Kingdom of the Dead™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cowboy Coins™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cowboy Coins™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysultrcoin.png' , 'vswaysultrcoin', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysultrcoin.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cowboy Coins™">Cowboy Coins™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jane Hunter and the Mask of Montezuma™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jane Hunter and the Mask of Montezuma™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10jnmntzma.png' , 'vs10jnmntzma', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10jnmntzma.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Jane Hunter and the Mask of Montezuma™">Jane Hunter and the Mask of Montezuma™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gods of Giza™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gods of Giza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10gizagods.png' , 'vs10gizagods', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10gizagods.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gods of Giza™">Gods of Giza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Celebrity Bus Megaways™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Celebrity Bus Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrsm.png' , 'vswaysrsm', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrsm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Celebrity Bus Megaways™">Wild Celebrity Bus Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="African Elephant™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'African Elephant™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20hotzone.png' , 'vs20hotzone', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20hotzone.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="African Elephant™">African Elephant™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Dancing Monkeys™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Dancing Monkeys™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysmonkey.png' , 'vswaysmonkey', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysmonkey.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="3 Dancing Monkeys™">3 Dancing Monkeys™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Red Queen™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Red Queen™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysredqueen.png' , 'vswaysredqueen', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysredqueen.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Red Queen™">The Red Queen™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass - Hold &amp; Spinner™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass - Hold &amp;quot; Spinner™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bbhas.png' , 'vs10bbhas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bbhas.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Big Bass - Hold &amp; Spinner™">Big Bass - Hold &amp; Spinner™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Moonshot™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Moonshot™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024moonsh.png' , 'vs1024moonsh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024moonsh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Moonshot™">Moonshot™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Knight King™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Knight King™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sknights.png' , 'vs20sknights', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sknights.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Knight King™">The Knight King™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruits of the Amazon™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruits of the Amazon™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20framazon.png' , 'vs20framazon', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20framazon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fruits of the Amazon™">Fruits of the Amazon™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rabbit Garden™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rabbit Garden™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20goldclust.png' , 'vs20goldclust', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20goldclust.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Rabbit Garden™">Rabbit Garden™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House Multihold™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House Multihold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20doghousemh.png' , 'vs20doghousemh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20doghousemh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Dog House Multihold™">The Dog House Multihold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystery Of The Orient™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystery Of The Orient™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysmorient.png' , 'vswaysmorient', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysmorient.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mystery Of The Orient™">Mystery Of The Orient™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Duels™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Duels™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20pistols.png' , 'vs20pistols', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20pistols.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild West Duels™">Wild West Duels™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peak Power™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peak Power™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10powerlines.png' , 'vs10powerlines', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10powerlines.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Peak Power™">Peak Power™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Riches Megaways™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Riches Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswwriches.png' , 'vswayswwriches', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswwriches.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Wild Riches Megaways™">Wild Wild Riches Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Archer™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Archer™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25archer.png' , 'vs25archer', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25archer.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Archer™">Fire Archer™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Club Tropicana" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Club Tropicana', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs12tropicana.png' , 'vs12tropicana', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs12tropicana.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Club Tropicana">Club Tropicana</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gatot Kaca's Fury™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gatot Kaca&amp;quot;amp;s Fury™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gatotfury.png' , 'vs20gatotfury', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gatotfury.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gatot Kaca's Fury™">Gatot Kaca's Fury™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monster Superlanche™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monster Superlanche™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20superlanche.png' , 'vs20superlanche', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20superlanche.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Monster Superlanche™">Monster Superlanche™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fish Eye" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fish Eye', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10fisheye.png' , 'vs10fisheye', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10fisheye.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fish Eye">Fish Eye</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Secret City Gold™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Secret City Gold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25spgldways.png' , 'vs25spgldways', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25spgldways.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Secret City Gold™">Secret City Gold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pinup Girls™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pinup Girls™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20ltng.png' , 'vs20ltng', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20ltng.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pinup Girls™">Pinup Girls™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Bananas™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Bananas™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswwhex.png' , 'vswayswwhex', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswwhex.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Wild Bananas™">Wild Wild Bananas™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fury of Odin Megaways™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fury of Odin Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfuryodin.png' , 'vswaysfuryodin', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfuryodin.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fury of Odin Megaways™">Fury of Odin Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mammoth Gold Megaways" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mammoth Gold Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mammoth.png?v=1' , 'vs20mammoth', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mammoth.png?v=1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mammoth Gold Megaways">Mammoth Gold Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Gorilla" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Gorilla', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gorilla.png' , 'vs20gorilla', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gorilla.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Jungle Gorilla">Jungle Gorilla</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Pepper™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Pepper™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20dugems.png' , 'vs20dugems', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20dugems.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot Pepper™">Hot Pepper™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Powernudge™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Powernudge™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20clspwrndg.png' , 'vs20clspwrndg', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20clspwrndg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Sweet Powernudge™">Sweet Powernudge™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Reel Banks™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Reel Banks™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25rlbank.png' , 'vs25rlbank', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25rlbank.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Reel Banks™">Reel Banks™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="PIZZA! PIZZA? PIZZA!™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'PIZZA! PIZZA? PIZZA!™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayspizza.png' , 'vswayspizza', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayspizza.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="PIZZA! PIZZA? PIZZA!™">PIZZA! PIZZA? PIZZA!™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hero™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hero™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20drgbless.png' , 'vs20drgbless', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20drgbless.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dragon Hero™">Dragon Hero™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Rabbits Megaways™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Rabbits Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrabbits.png' , 'vswaysrabbits', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysrabbits.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="5 Rabbits Megaways™">5 Rabbits Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza - Keeping it Reel" data-filter="ALL,Video Slots,NEW,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza - Keeping it Reel', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bbkir.png' , 'vs10bbkir', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bbkir.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Big Bass Bonanza - Keeping it Reel">Big Bass Bonanza - Keeping it Reel</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Fishing Megaways™" data-filter="ALL,Video Slots,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Fishing Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysluckyfish.png' , 'vswaysluckyfish', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysluckyfish.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky Fishing Megaways™">Lucky Fishing Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shield Of Sparta™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shield Of Sparta™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sparta.png' , 'vs20sparta', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sparta.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Shield Of Sparta™">Shield Of Sparta™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Golden Age™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Golden Age™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mtreasure.png' , 'vs20mtreasure', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mtreasure.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pirate Golden Age™">Pirate Golden Age™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gems of Serengeti™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gems of Serengeti™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20lcount.png' , 'vs20lcount', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20lcount.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gems of Serengeti™">Gems of Serengeti™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Firebird Spirit" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Firebird Spirit', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysconcoll.png' , 'vswaysconcoll', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysconcoll.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Firebird Spirit">Firebird Spirit</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Towering Fortunes™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Towering Fortunes™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20theights.png' , 'vs20theights', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20theights.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Towering Fortunes™">Towering Fortunes™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Blaze™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Blaze™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25kfruit.png' , 'vs25kfruit', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25kfruit.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec Blaze™">Aztec Blaze™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Release the Kraken 2™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Release the Kraken 2™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20kraken2.png' , 'vs20kraken2', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20kraken2.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Release the Kraken 2™">Release the Kraken 2™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bigger Bass Blizzard-Christmas Catch" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bigger Bass Blizzard-Christmas Catch', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs12bbbxmas.png' , 'vs12bbbxmas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs12bbbxmas.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bigger Bass Blizzard-Christmas Catch">Bigger Bass Blizzard-Christmas Catch</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter &amp; the Book of Tut Respin™
" data-filter="ALL,Others,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter &amp;quot; the Book of Tut Respin™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10tut.png' , 'vs10tut', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10tut.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="John Hunter &amp; the Book of Tut Respin™
">John Hunter &amp; the Book of Tut Respin™
</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spin &amp; Score Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spin &amp;quot; Score Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfrywld.png' , 'vswaysfrywld', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfrywld.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Spin &amp; Score Megaways™">Spin &amp; Score Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Old Gold Miner Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Old Gold Miner Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysoldminer.png' , 'vswaysoldminer', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysoldminer.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Old Gold Miner Megaways™">Old Gold Miner Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kingdom of Asgard" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kingdom of Asgard', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20asgard.png?v=1' , 'vs20asgard', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20asgard.png?v=1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Kingdom of Asgard">Kingdom of Asgard</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Golden Sands™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Golden Sands™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbook.png' , 'vswaysbook', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbook.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Book of Golden Sands™">Book of Golden Sands™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Hop &amp; Drop™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Hop &amp;quot; Drop™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mparty.png' , 'vs20mparty', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mparty.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Hop &amp; Drop™">Wild Hop &amp; Drop™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Striking Hot 5™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Striking Hot 5™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5strh.png' , 'vs5strh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5strh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Striking Hot 5™">Striking Hot 5™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend of Heroes Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend of Heroes Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslofhero.png' , 'vswayslofhero', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslofhero.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Legend of Heroes Megaways™">Legend of Heroes Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Snakes &amp; Ladders - Snake Eyes" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Snakes &amp;quot; Ladders - Snake Eyes', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10snakeeyes.png' , 'vs10snakeeyes', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10snakeeyes.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Snakes &amp; Ladders - Snake Eyes">Snakes &amp; Ladders - Snake Eyes</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crown Fire™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crown Fire™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10crownfire.png' , 'vs10crownfire', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10crownfire.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Crown Fire™">Crown Fire™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Muertos Multiplier Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Muertos Multiplier Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20muertos.png' , 'vs20muertos', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20muertos.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Muertos Multiplier Megaways™">Muertos Multiplier Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Black Bull™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Black Bull™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20trswild2.png' , 'vs20trswild2', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20trswild2.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Black Bull™">Black Bull™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Stars™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Stars™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysstrwild.png' , 'vswaysstrwild', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysstrwild.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Candy Stars™">Candy Stars™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wildman Super Bonanza" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wildman Super Bonanza', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wildman.png' , 'vs20wildman', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wildman.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wildman Super Bonanza">Wildman Super Bonanza</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfltdrg.png' , 'vswaysfltdrg', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysfltdrg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Floating Dragon Megaways™">Floating Dragon Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Money Maze" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Money Maze', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10mmm.png' , 'vs10mmm', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10mmm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Magic Money Maze">Magic Money Maze</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Down The Rails™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Down The Rails™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20underground.png' , 'vs20underground', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20underground.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Down The Rails™">Down The Rails™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Greedy Wolf™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Greedy Wolf™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wolfie.png' , 'vs20wolfie', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wolfie.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Greedy Wolf™">Greedy Wolf™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 100™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 100™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs100firehot.png' , 'vs100firehot', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs100firehot.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Hot 100™">Fire Hot 100™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 40™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 40™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40firehot.png' , 'vs40firehot', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40firehot.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Hot 40™">Fire Hot 40™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 20™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 20™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fh.png' , 'vs20fh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Hot 20™">Fire Hot 20™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 5™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 5™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5firehot.png' , 'vs5firehot', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5firehot.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Hot 5™">Fire Hot 5™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gorilla Mayhem™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gorilla Mayhem™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024gmayhem.png' , 'vs1024gmayhem', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024gmayhem.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gorilla Mayhem™">Gorilla Mayhem™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Octobeer Fortunes™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Octobeer Fortunes™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20octobeer.png' , 'vs20octobeer', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20octobeer.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Octobeer Fortunes™">Octobeer Fortunes™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn Extreme" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn Extreme', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40hotburnx.png' , 'vs40hotburnx', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40hotburnx.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot to Burn Extreme">Hot to Burn Extreme</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cheeky Emperor™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cheeky Emperor™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243ckemp.png' , 'vs243ckemp', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243ckemp.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cheeky Emperor™">Cheeky Emperor™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tropical Tiki™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tropical Tiki™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysjkrdrop.png' , 'vswaysjkrdrop', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysjkrdrop.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Tropical Tiki™">Tropical Tiki™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Coffee Wild™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Coffee Wild™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10coffee.png' , 'vs10coffee', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10coffee.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Coffee Wild™">Coffee Wild™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 100™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 100™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs100sh.png' , 'vs100sh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs100sh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Shining Hot 100™">Shining Hot 100™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 40™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 40™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40sh.png' , 'vs40sh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40sh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Shining Hot 40™">Shining Hot 40™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 20™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 20™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sh.png' , 'vs20sh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20sh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Shining Hot 20™">Shining Hot 20™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 5™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 5™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5sh.png' , 'vs5sh', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5sh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Shining Hot 5™">Shining Hot 5™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Splash" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Splash', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10txbigbass.png' , 'vs10txbigbass', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10txbigbass.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Big Bass Splash">Big Bass Splash</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bomb Bonanza™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bomb Bonanza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25bomb.png' , 'vs25bomb', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25bomb.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bomb Bonanza™">Bomb Bonanza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Panda™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Panda™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024mahjpanda.png' , 'vs1024mahjpanda', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024mahjpanda.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mahjong Panda™">Mahjong Panda™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cosmic Cash™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cosmic Cash™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40cosmiccash.png' , 'vs40cosmiccash', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40cosmiccash.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cosmic Cash™">Cosmic Cash™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Little Gem" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Little Gem', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5littlegem.png' , 'vs5littlegem', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5littlegem.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Little Gem">Little Gem</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Gods™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Gods™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10egrich.png' , 'vs10egrich', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10egrich.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Queen of Gods™">Queen of Gods™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cleocatra™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cleocatra™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20cleocatra.png' , 'vs20cleocatra', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20cleocatra.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cleocatra™">Cleocatra™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="RiseofSamurai3™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'RiseofSamurai3™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40samurai3.png' , 'vs40samurai3', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40samurai3.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="RiseofSamurai3™">RiseofSamurai3™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="KoiPond™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'KoiPond™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243koipond.png' , 'vs243koipond', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243koipond.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="KoiPond™">KoiPond™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="North Guardians™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'North Guardians™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50northgard.png' , 'vs50northgard', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50northgard.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="North Guardians™">North Guardians™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zombie Carnival™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zombie Carnival™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayszombcarn.png' , 'vswayszombcarn', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayszombcarn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Zombie Carnival™">Zombie Carnival™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Great Stick-Up™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Great Stick-Up™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20stickysymbol.png' , 'vs20stickysymbol', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20stickysymbol.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Great Stick-Up™">The Great Stick-Up™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Goblin Heist Powernudge™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Goblin Heist Powernudge™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gobnudge.png' , 'vs20gobnudge', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20gobnudge.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Goblin Heist Powernudge™">Goblin Heist Powernudge™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Strike 2" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Strike 2', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10firestrike2.png' , 'vs10firestrike2', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10firestrike2.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Strike 2">Fire Strike 2</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spirit of Adventure" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spirit of Adventure', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10spiritadv.png' , 'vs10spiritadv', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10spiritadv.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Spirit of Adventure">Spirit of Adventure</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Eye of Cleopatra" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Eye of Cleopatra', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40cleoeye.png?v=1' , 'vs40cleoeye', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40cleoeye.png?v=1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Eye of Cleopatra">Eye of Cleopatra</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Drill that Gold™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Drill that Gold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20drtgold.png' , 'vs20drtgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20drtgold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Drill that Gold™">Drill that Gold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Clover Gold™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Clover Gold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mustanggld2.png' , 'vs20mustanggld2', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20mustanggld2.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Clover Gold™">Clover Gold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Gold Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Gold Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswildwest.png' , 'vswayswildwest', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswildwest.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild West Gold Megaways™">Wild West Gold Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chicken Chase™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chicken Chase™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10chkchase.png' , 'vs10chkchase', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10chkchase.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Chicken Chase™">Chicken Chase™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tree of Riches" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tree of Riches', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1fortunetree.png' , 'vs1fortunetree', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1fortunetree.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Tree of Riches">Tree of Riches</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Tomb of the Scarab Queen" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Tomb of the Scarab Queen', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25scarabqueen.png' , 'vs25scarabqueen', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25scarabqueen.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="John Hunter and the Tomb of the Scarab Queen">John Hunter and the Tomb of the Scarab Queen</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243lionsgold.png' , 'vs243lionsgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243lionsgold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="5 Lions Gold">5 Lions Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey Warrior" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey Warrior', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243mwarrior.png' , 'vs243mwarrior', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243mwarrior.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Monkey Warrior">Monkey Warrior</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Horse" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Horse', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs18mashang.png' , 'vs18mashang', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs18mashang.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Treasure Horse">Treasure Horse</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40pirate.png' , 'vs40pirate', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40pirate.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pirate Gold">Pirate Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Rush" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Rush', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25goldrush.png' , 'vs25goldrush', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25goldrush.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gold Rush">Gold Rush</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Egypt" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Egypt', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10egypt.png' , 'vs10egypt', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10egypt.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Ancient Egypt">Ancient Egypt</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20doghouse.png' , 'vs20doghouse', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20doghouse.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Dog House">The Dog House</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Da Vincis Treasure" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Da Vincis Treasure', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25davinci.png' , 'vs25davinci', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25davinci.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Da Vincis Treasure">Da Vincis Treasure</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Treasure" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Treasure', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7776secrets.png' , 'vs7776secrets', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7776secrets.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec Treasure">Aztec Treasure</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishens Cash" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishens Cash', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243caishien.png' , 'vs243caishien', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243caishien.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Caishens Cash">Caishens Cash</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="888 Dragons" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '888 Dragons', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1dragon8.png' , 'vs1dragon8', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1dragon8.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="888 Dragons">888 Dragons</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Great Chicken Escape" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Great Chicken Escape', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20chicken.png' , 'vs20chicken', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20chicken.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Great Chicken Escape">The Great Chicken Escape</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vampires vs Wolves" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vampires vs Wolves', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10vampwolf.png' , 'vs10vampwolf', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10vampwolf.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Vampires vs Wolves">Vampires vs Wolves</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Chilli" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Chilli', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9hotroll.png' , 'vs9hotroll', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9hotroll.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot Chilli">Hot Chilli</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egyptian Fortunes" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egyptian Fortunes', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20egypttrs.png' , 'vs20egypttrs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20egypttrs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Egyptian Fortunes">Egyptian Fortunes</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey Madness" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey Madness', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9madmonkey.png' , 'vs9madmonkey', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9madmonkey.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Monkey Madness">Monkey Madness</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Pixies" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Pixies', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wildpix.png' , 'vs20wildpix', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wildpix.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Pixies">Wild Pixies</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishens Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishens Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243fortune.png' , 'vs243fortune', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243fortune.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Caishens Gold">Caishens Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243lions.png' , 'vs243lions', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243lions.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="5 Lions">5 Lions</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Pig" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Pig', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25goldpig.png' , 'vs25goldpig', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25goldpig.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Golden Pig">Golden Pig</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wolf Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wolf Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25wolfgold.png' , 'vs25wolfgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25wolfgold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wolf Gold">Wolf Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky New Year" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky New Year', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25newyear.png' , 'vs25newyear', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25newyear.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky New Year">Lucky New Year</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Triple Tigers" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Triple Tigers', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1tigers.png' , 'vs1tigers', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1tigers.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Triple Tigers">Triple Tigers</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Journey to the West" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Journey to the West', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25journey.png' , 'vs25journey', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25journey.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Journey to the West">Journey to the West</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Rhino" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Rhino', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rhino.png' , 'vs20rhino', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rhino.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Great Rhino">Great Rhino</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="888 Gold" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '888 Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs5triple8gold.png' , 'cs5triple8gold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs5triple8gold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="888 Gold">888 Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mustang Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mustang Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25mustang.png' , 'vs25mustang', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25mustang.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mustang Gold">Mustang Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire 88" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire 88', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7fire88.png' , 'vs7fire88', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7fire88.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire 88">Fire 88</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="8 Dragons" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '8 Dragons', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20eightdragons.png' , 'vs20eightdragons', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20eightdragons.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="8 Dragons">8 Dragons</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Kingdom" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Kingdom', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25dragonkingdom.png' , 'vs25dragonkingdom', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25dragonkingdom.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dragon Kingdom">Dragon Kingdom</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Heat" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Heat', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25chilli.png' , 'vs25chilli', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25chilli.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Chilli Heat">Chilli Heat</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Spells" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Spells', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25wildspells.png' , 'vs25wildspells', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25wildspells.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Spells">Wild Spells</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamond Strike" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamond Strike', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs15diamond.png' , 'vs15diamond', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs15diamond.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Diamond Strike">Diamond Strike</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Kingdoms - Battle of Red Cliffs" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Kingdoms - Battle of Red Cliffs', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25kingdoms.png' , 'vs25kingdoms', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25kingdoms.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="3 Kingdoms - Battle of Red Cliffs">3 Kingdoms - Battle of Red Cliffs</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pixie Wings" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pixie Wings', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50pixie.png' , 'vs50pixie', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50pixie.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pixie Wings">Pixie Wings</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Asgard" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Asgard', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25asgard.png' , 'vs25asgard', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25asgard.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Asgard">Asgard</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Master Chens Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Master Chens Fortune', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9chen.png' , 'vs9chen', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9chen.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Master Chens Fortune">Master Chens Fortune</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pandas Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pandas Fortune', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25pandagold.png' , 'vs25pandagold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25pandagold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pandas Fortune">Pandas Fortune</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Triple Dragons" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Triple Dragons', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5trdragons.png' , 'vs5trdragons', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5trdragons.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Triple Dragons">Triple Dragons</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peking Luck" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peking Luck', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25peking.png' , 'vs25peking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25peking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Peking Luck">Peking Luck</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Roll" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Roll', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs5moneyroll.png' , 'cs5moneyroll', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs5moneyroll.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Money Roll">Money Roll</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mighty Kong" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mighty Kong', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50kingkong.png' , 'vs50kingkong', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50kingkong.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mighty Kong">Mighty Kong</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vegas Magic" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vegas Magic', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20vegasmagic.png' , 'vs20vegasmagic', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20vegasmagic.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Vegas Magic">Vegas Magic</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="7 Piggies" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '7 Piggies', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7pigs.png' , 'vs7pigs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7pigs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="7 Piggies">7 Piggies</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun Carol" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun Carol', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20leprexmas.png' , 'vs20leprexmas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20leprexmas.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Leprechaun Carol">Leprechaun Carol</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Genie Wishes" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Genie Wishes', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50aladdin.png' , 'vs50aladdin', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50aladdin.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="3 Genie Wishes">3 Genie Wishes</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dwarven Gold Deluxe" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dwarven Gold Deluxe', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25dwarves_new.png' , 'vs25dwarves_new', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25dwarves_new.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dwarven Gold Deluxe">Dwarven Gold Deluxe</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vegas Nights" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vegas Nights', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25vegas.png' , 'vs25vegas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25vegas.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Vegas Nights">Vegas Nights</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Safari" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Safari', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25safari.png' , 'vs25safari', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25safari.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot Safari">Hot Safari</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jade Butterfly" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jade Butterfly', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024butterfly.png' , 'vs1024butterfly', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024butterfly.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Jade Butterfly">Jade Butterfly</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lady Godiva" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lady Godiva', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20godiva.png' , 'vs20godiva', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20godiva.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lady Godiva">Lady Godiva</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20santa.png' , 'vs20santa', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20santa.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Santa">Santa</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Egypt Classic" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Egypt Classic', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10egyptcls.png' , 'vs10egyptcls', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10egyptcls.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Ancient Egypt Classic">Ancient Egypt Classic</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Dragons" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Dragons', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50chinesecharms.png' , 'vs50chinesecharms', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50chinesecharms.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky Dragons">Lucky Dragons</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fairytale Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fairytale Fortune', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs15fairytale.png' , 'vs15fairytale', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs15fairytale.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fairytale Fortune">Fairytale Fortune</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Busy Bees" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Busy Bees', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bl.png' , 'vs20bl', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bl.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Busy Bees">Busy Bees</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamonds are Forever 3 Lines" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamonds are Forever 3 Lines', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs3w.png' , 'cs3w', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs3w.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Diamonds are Forever 3 Lines">Diamonds are Forever 3 Lines</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari King" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari King', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50safariking.png' , 'vs50safariking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50safariking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Safari King">Safari King</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Train" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Train', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs3train.png' , 'vs3train', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs3train.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gold Train">Gold Train</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Irish Charms" data-filter="ALL,Classic Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Irish Charms', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs3irishcharms.png' , 'cs3irishcharms', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/cs3irishcharms.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Irish Charms">Irish Charms</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="7 Monkeys" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '7 Monkeys', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7monkeys.png' , 'vs7monkeys', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7monkeys.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="7 Monkeys">7 Monkeys</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hercules Son of Zeus" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hercules Son of Zeus', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50hercules.png' , 'vs50hercules', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50hercules.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hercules Son of Zeus">Hercules Son of Zeus</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Gladiator" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Gladiator', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25gladiator.png' , 'vs25gladiator', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25gladiator.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Gladiator">Wild Gladiator</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25queenofgold.png' , 'vs25queenofgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25queenofgold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Queen of Gold">Queen of Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Madame Destiny" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Madame Destiny', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10madame.png' , 'vs10madame', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10madame.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Madame Destiny">Madame Destiny</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Extra Juicy" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Extra Juicy', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10fruity2.png' , 'vs10fruity2', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10fruity2.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Extra Juicy">Extra Juicy</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun Song" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun Song', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20leprechaun.png' , 'vs20leprechaun', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20leprechaun.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Leprechaun Song">Leprechaun Song</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Reef" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Reef', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25sea.png' , 'vs25sea', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25sea.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Great Reef">Great Reef</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Devils 13" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Devils 13', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs13g.png' , 'vs13g', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs13g.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Devils 13">Devils 13</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Honey Honey Honey" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Honey Honey Honey', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20honey.png' , 'vs20honey', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20honey.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Honey Honey Honey">Honey Honey Honey</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Mouse" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Mouse', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25mmouse.png' , 'vs25mmouse', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25mmouse.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Money Mouse">Money Mouse</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Strike" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Strike', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10firestrike.png' , 'vs10firestrike', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10firestrike.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fire Strike">Fire Strike</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Master Joker" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Master Joker', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1masterjoker.png' , 'vs1masterjoker', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1masterjoker.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Master Joker">Master Joker</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super 7s " data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super 7s ', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5super7.png' , 'vs5super7', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5super7.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Super 7s ">Super 7s </h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Release the Kraken" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Release the Kraken', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20kraken.png' , 'vs20kraken', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20kraken.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Release the Kraken">Release the Kraken</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo King" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo King', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096bufking.png' , 'vs4096bufking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096bufking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Buffalo King">Buffalo King</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Journey" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Journey', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs8magicjourn.png' , 'vs8magicjourn', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs8magicjourn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Magic Journey">Magic Journey</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Joker" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Joker', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5spjoker.png' , 'vs5spjoker', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5spjoker.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Super Joker">Super Joker</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aladdin and the Sorcerer" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aladdin and the Sorcerer', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20aladdinsorc.png' , 'vs20aladdinsorc', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20aladdinsorc.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aladdin and the Sorcerer">Aladdin and the Sorcerer</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Greek Gods" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Greek Gods', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243fortseren.png' , 'vs243fortseren', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243fortseren.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Greek Gods">Greek Gods</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hercules and Pegasus" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hercules and Pegasus', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20hercpeg.png' , 'vs20hercpeg', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20hercpeg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hercules and Pegasus">Hercules and Pegasus</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Beauty" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Beauty', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs75empress.png' , 'vs75empress', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs75empress.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Golden Beauty">Golden Beauty</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Bonanza" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Bonanza', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7776aztec.png' , 'vs7776aztec', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs7776aztec.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec Bonanza">Aztec Bonanza</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mysterious" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mysterious', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096mystery.png' , 'vs4096mystery', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096mystery.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mysterious">Mysterious</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Dragon Ball" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Dragon Ball', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1ball.png' , 'vs1ball', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1ball.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky Dragon Ball">Lucky Dragon Ball</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Rainbow" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Rainbow', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40frrainbow.png' , 'vs40frrainbow', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40frrainbow.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fruit Rainbow">Fruit Rainbow</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Wild Machine" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Wild Machine', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40madwheel.png' , 'vs40madwheel', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40madwheel.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Wild Machine">The Wild Machine</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dance Party" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dance Party', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243dancingpar.png' , 'vs243dancingpar', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243dancingpar.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dance Party">Dance Party</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5hotburn.png' , 'vs5hotburn', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5hotburn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot to Burn">Hot to Burn</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Party" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Party', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fruitparty.png' , 'vs20fruitparty', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fruitparty.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fruit Party">Fruit Party</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starz Megaways" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starz Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs117649starz.png' , 'vs117649starz', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs117649starz.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Starz Megaways">Starz Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Star Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Star Fortune', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10threestar.png' , 'vs10threestar', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10threestar.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Three Star Fortune">Three Star Fortune</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Money Money" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Money Money', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1money.png' , 'vs1money', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1money.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Money Money Money">Money Money Money</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pyramid King" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pyramid King', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25pyramid.png' , 'vs25pyramid', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25pyramid.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pyramid King">Pyramid King</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ultra Burn" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ultra Burn', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5ultrab.png' , 'vs5ultrab', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5ultrab.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Ultra Burn">Ultra Burn</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bronco Spirit" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bronco Spirit', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs75bronco.png' , 'vs75bronco', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs75bronco.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bronco Spirit">Bronco Spirit</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Drago - Jewels of Fortune" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Drago - Jewels of Fortune', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1600drago.png' , 'vs1600drago', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1600drago.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Drago - Jewels of Fortune">Drago - Jewels of Fortune</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fu Fu Fu" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fu Fu Fu', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1fufufu.png' , 'vs1fufufu', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1fufufu.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fu Fu Fu">Fu Fu Fu</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Street Racer" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Street Racer', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40streetracer.png' , 'vs40streetracer', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40streetracer.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Street Racer">Street Racer</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Tiger Warrior" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Tiger Warrior', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25tigerwar.png' , 'vs25tigerwar', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25tigerwar.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Tiger Warrior">The Tiger Warrior</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysdogs.png' , 'vswaysdogs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysdogs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Dog House Megaways™">The Dog House Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Star Bounty™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Star Bounty™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayshive.png' , 'vswayshive', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayshive.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Star Bounty™">Star Bounty™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Curse of the Werewolf Megaways" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Curse of the Werewolf Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswerewolf.png' , 'vswayswerewolf', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswerewolf.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Curse of the Werewolf Megaways">Curse of the Werewolf Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ultra Hold and Spin" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ultra Hold and Spin', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5ultra.png' , 'vs5ultra', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5ultra.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Ultra Hold and Spin">Ultra Hold and Spin</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Riches" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Riches', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs576treasures.png' , 'vs576treasures', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs576treasures.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Wild Riches">Wild Wild Riches</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Rhino Deluxe" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Rhino Deluxe', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rhinoluxe.png' , 'vs20rhinoluxe', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rhinoluxe.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Great Rhino Deluxe">Great Rhino Deluxe</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Dance™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Dance™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024lionsd.png' , 'vs1024lionsd', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024lionsd.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="5 Lions Dance™">5 Lions Dance™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Samurai™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Samurai™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25samurai.png' , 'vs25samurai', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25samurai.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Rise of Samurai™">Rise of Samurai™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title=" Wild Walker™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    ' Wild Walker™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25walker.png' , 'vs25walker', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25walker.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title=" Wild Walker™"> Wild Walker™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gems Bonanza" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gems Bonanza', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20goldfever.png' , 'vs20goldfever', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20goldfever.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gems Bonanza">Gems Bonanza</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Return of the Dead" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Return of the Dead', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10returndead.png' , 'vs10returndead', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10returndead.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Return of the Dead">Return of the Dead</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cowboys Gold™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cowboys Gold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10cowgold.png' , 'vs10cowgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10cowgold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cowboys Gold™">Cowboys Gold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spartan King™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spartan King™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40spartaking.png' , 'vs40spartaking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40spartaking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Spartan King™">Spartan King™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Mayan Gods™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Mayan Gods™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10mayangods.png' , 'vs10mayangods', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10mayangods.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="John Hunter and the Mayan Gods™">John Hunter and the Mayan Gods™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bbbonanza.png' , 'vs10bbbonanza', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bbbonanza.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Big Bass Bonanza™">Big Bass Bonanza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Carol Megaways" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Carol Megaways', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20xmascarol.png' , 'vs20xmascarol', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20xmascarol.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Christmas Carol Megaways">Christmas Carol Megaways</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Gold Deluxe" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Gold Deluxe', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40pirgold.png' , 'vs40pirgold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40pirgold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Pirate Gold Deluxe">Pirate Gold Deluxe</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emerald King" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emerald King', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20eking.png' , 'vs20eking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20eking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Emerald King">Emerald King</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Tiger" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Tiger', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024dtiger.png' , 'vs1024dtiger', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024dtiger.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dragon Tiger">Dragon Tiger</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Kingdoms" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Kingdoms', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25bkofkngdm.png' , 'vs25bkofkngdm', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25bkofkngdm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Book of Kingdoms">Book of Kingdoms</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Voodoo Magic™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Voodoo Magic™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40voodoo.png' , 'vs40voodoo', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40voodoo.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Voodoo Magic™">Voodoo Magic™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Ox™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Ox™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25gldox.png' , 'vs25gldox', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25gldox.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Golden Ox™">Golden Ox™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mysterious Egypt™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mysterious Egypt™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10wildtut.png' , 'vs10wildtut', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10wildtut.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mysterious Egypt™">Mysterious Egypt™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emerald King Rainbow Road™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emerald King Rainbow Road™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20ekingrr.png' , 'vs20ekingrr', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20ekingrr.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Emerald King Rainbow Road™">Emerald King Rainbow Road™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Congo Cash™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Congo Cash™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs432congocash.png' , 'vs432congocash', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs432congocash.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Congo Cash™">Congo Cash™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Kingdom Eyes of Fire™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Kingdom Eyes of Fire™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5drmystery.png' , 'vs5drmystery', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5drmystery.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dragon Kingdom Eyes of Fire™">Dragon Kingdom Eyes of Fire™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Eye of the Storm" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Eye of the Storm', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10eyestorm.png' , 'vs10eyestorm', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10eyestorm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Eye of the Storm">Eye of the Storm</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Hand of Midas" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Hand of Midas', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20midas.png' , 'vs20midas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20midas.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Hand of Midas">The Hand of Midas</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker King™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker King™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25jokerking.png' , 'vs25jokerking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25jokerking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Joker King™">Joker King™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn Hold and Spin" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn Hold and Spin', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20hburnhs.png' , 'vs20hburnhs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20hburnhs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot to Burn Hold and Spin">Hot to Burn Hold and Spin</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fishin Reels" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fishin Reels', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10goldfish.png' , 'vs10goldfish', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10goldfish.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fishin Reels">Fishin Reels</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Temujin Treasures" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Temujin Treasures', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024temuj.png' , 'vs1024temuj', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs1024temuj.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Temujin Treasures">Temujin Treasures</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Juicy Fruits" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Juicy Fruits', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50juicyfr.png' , 'vs50juicyfr', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50juicyfr.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Juicy Fruits">Juicy Fruits</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Booster" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Booster', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wildboost.png' , 'vs20wildboost', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20wildboost.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Booster">Wild Booster</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Fiesta" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Fiesta', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25hotfiesta.png' , 'vs25hotfiesta', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25hotfiesta.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hot Fiesta">Hot Fiesta</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10floatdrg.png' , 'vs10floatdrg', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10floatdrg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Floating Dragon">Floating Dragon</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panda's Fortune" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panda&amp;quot;amp;s Fortune', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25pandatemple.png' , 'vs25pandatemple', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25pandatemple.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Panda's Fortune">Panda's Fortune</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec King" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec King', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25aztecking.png' , 'vs25aztecking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25aztecking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec King">Aztec King</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Amazing Money Machine" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Amazing Money Machine', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10amm.png' , 'vs10amm', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10amm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Amazing Money Machine">The Amazing Money Machine</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Samurai Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Samurai Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayssamurai.png' , 'vswayssamurai', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayssamurai.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Rise of Samurai Megaways™">Rise of Samurai Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Magic Cauldron - Enchanted Brew™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Magic Cauldron - Enchanted Brew™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20magicpot.png' , 'vs20magicpot', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20magicpot.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Magic Cauldron - Enchanted Brew™">The Magic Cauldron - Enchanted Brew™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hokkaido Wolf™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hokkaido Wolf™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs576hokkwolf.png' , 'vs576hokkwolf', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs576hokkwolf.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hokkaido Wolf™">Hokkaido Wolf™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Elevator™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Elevator™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20terrorv.png' , 'vs20terrorv', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20terrorv.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cash Elevator™">Cash Elevator™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hot Hold and Spin™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hot Hold and Spin™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5drhs.png' , 'vs5drhs', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs5drhs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Dragon Hot Hold and Spin™">Dragon Hot Hold and Spin™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heart of Rio™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heart of Rio™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25rio.png' , 'vs25rio', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25rio.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Heart of Rio™">Heart of Rio™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Empty the Bank™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Empty the Bank™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20emptybank.png' , 'vs20emptybank', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20emptybank.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Empty the Bank™">Empty the Bank™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Lightning" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Lightning', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslight.png' , 'vswayslight', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayslight.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky Lightning">Lucky Lightning</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Party 2" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Party 2', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fparty2.png' , 'vs20fparty2', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20fparty2.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fruit Party 2">Fruit Party 2</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Phoenix Forge™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Phoenix Forge™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20phoenixf.png' , 'vs20phoenixf', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20phoenixf.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Phoenix Forge™">Phoenix Forge™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chicken Drop" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chicken Drop', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20chickdrop.png' , 'vs20chickdrop', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20chickdrop.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Chicken Drop">Chicken Drop</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec King Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec King Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysaztecking.png' , 'vswaysaztecking', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysaztecking.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Aztec King Megaways™">Aztec King Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Grace And Charm" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Grace And Charm', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10luckcharm.png' , 'vs10luckcharm', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10luckcharm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky Grace And Charm">Lucky Grace And Charm</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Heat Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Heat Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayschilheat.png' , 'vswayschilheat', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayschilheat.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Chilli Heat Megaways™">Chilli Heat Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yum Yum Powerways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yum Yum Powerways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysyumyum.png?v=1' , 'vswaysyumyum', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysyumyum.png?v=1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Yum Yum Powerways™">Yum Yum Powerways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Giza PowerNudge™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Giza PowerNudge™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10nudgeit.png' , 'vs10nudgeit', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10nudgeit.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Rise of Giza PowerNudge™">Rise of Giza PowerNudge™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Raging Bull™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Raging Bull™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243chargebull.png' , 'vs243chargebull', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243chargebull.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Raging Bull™">Raging Bull™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Book of Tut" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Book of Tut', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bookoftut.png' , 'vs10bookoftut', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bookoftut.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="John Hunter and the Book of Tut">John Hunter and the Book of Tut</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bigger Bass Bonanza™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bigger Bass Bonanza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs12bbb.png' , 'vs12bbb', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs12bbb.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bigger Bass Bonanza™">Bigger Bass Bonanza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Wild™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Wild™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20trsbox.png' , 'vs20trsbox', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20trsbox.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Treasure Wild™">Treasure Wild™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Bonanza™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Bonanza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbankbonz.png' , 'vswaysbankbonz', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbankbonz.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cash Bonanza™">Cash Bonanza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="PIGGY BANK BILLS™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'PIGGY BANK BILLS™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9piggybank.png' , 'vs9piggybank', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs9piggybank.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="PIGGY BANK BILLS™">PIGGY BANK BILLS™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="DAY OF DEAD™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'DAY OF DEAD™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20daydead.png' , 'vs20daydead', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20daydead.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="DAY OF DEAD™">DAY OF DEAD™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystic Chief™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystic Chief™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswest.png' , 'vswayswest', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayswest.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Mystic Chief™">Mystic Chief™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Tweety House™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Tweety House™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20tweethouse.png' , 'vs20tweethouse', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20tweethouse.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Tweety House™">The Tweety House™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Star Pirates Code™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Star Pirates Code™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10starpirate.png' , 'vs10starpirate', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10starpirate.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Star Pirates Code™">Star Pirates Code™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Quest for Bermuda Riches™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Quest for Bermuda Riches™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bermuda.png' , 'vs20bermuda', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bermuda.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="John Hunter and the Quest for Bermuda Riches™">John Hunter and the Quest for Bermuda Riches™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Juan™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Juan™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40bigjuan.png' , 'vs40bigjuan', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40bigjuan.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Big Juan™">Big Juan™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa's Wonderland™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Wonderland™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20santawonder.png' , 'vs20santawonder', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20santawonder.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Santa's Wonderland™">Santa's Wonderland™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Big Bass Bonanza™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Big Bass Bonanza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bxmasbnza.png' , 'vs10bxmasbnza', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bxmasbnza.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Christmas Big Bass Bonanza™">Christmas Big Bass Bonanza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Fallen™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Fallen™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bookfallen.png' , 'vs10bookfallen', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bookfallen.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Book of Fallen™">Book of Fallen™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bubble Pop™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bubble Pop™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bblpop.png' , 'vs10bblpop', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bblpop.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bubble Pop™">Bubble Pop™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bounty Gold™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bounty Gold™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25btygold.png' , 'vs25btygold', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25btygold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bounty Gold™">Bounty Gold™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hockey Attack™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hockey Attack™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs88hockattack.png' , 'vs88hockattack', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs88hockattack.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Hockey Attack™">Hockey Attack™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza Megaways™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbbb.png' , 'vswaysbbb', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysbbb.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Big Bass Bonanza Megaways™">Big Bass Bonanza Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super X ™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super X ™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20superx.png' , 'vs20superx', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20superx.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Super X ™">Super X ™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune of Giza™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune of Giza™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20amuleteg.png' , 'vs20amuleteg', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20amuleteg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Fortune of Giza™">Fortune of Giza™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky New Year Tiger Treasures™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky New Year Tiger Treasures™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25tigeryear.png' , 'vs25tigeryear', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25tigeryear.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Lucky New Year Tiger Treasures™">Lucky New Year Tiger Treasures™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emperor Caishen™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emperor Caishen™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243empcaishen.png' , 'vs243empcaishen', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243empcaishen.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Emperor Caishen™">Emperor Caishen™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Smugglers Cove™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Smugglers Cove™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20smugcove.png' , 'vs20smugcove', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20smugcove.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Smugglers Cove™">Smugglers Cove™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crystal Caverns Megaways ™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crystal Caverns Megaways ™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayscryscav.png' , 'vswayscryscav', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayscryscav.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Crystal Caverns Megaways ™">Crystal Caverns Megaways ™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magician's Secrets™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magician&amp;quot;amp;s Secrets™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096magician.png' , 'vs4096magician', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs4096magician.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Magician's Secrets™">Magician's Secrets™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Depths™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Depths™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40wanderw.png' , 'vs40wanderw', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs40wanderw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Depths™">Wild Depths™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Extra Juicy Megaways™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Extra Juicy Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysxjuicy.png' , 'vswaysxjuicy', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswaysxjuicy.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Extra Juicy Megaways™">Extra Juicy Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title=" Gold Party™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    ' Gold Party™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25goldparty.png' , 'vs25goldparty', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25goldparty.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title=" Gold Party™"> Gold Party™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Valhalla™" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Valhalla™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10runes.png' , 'vs10runes', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10runes.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Gates of Valhalla™">Gates of Valhalla™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Elemental Gems Megaways™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Elemental Gems Megaways™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayselements.png' , 'vswayselements', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vswayselements.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Elemental Gems Megaways™">Elemental Gems Megaways™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rock Vegas™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rock Vegas™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rockvegas.png' , 'vs20rockvegas', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rockvegas.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Rock Vegas™">Rock Vegas™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Patrol™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Patrol™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25copsrobbers.png' , 'vs25copsrobbers', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25copsrobbers.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Cash Patrol™">Cash Patrol™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Colossal Cash Zone™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Colossal Cash Zone™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20colcashzone.png' , 'vs20colcashzone', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20colcashzone.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Colossal Cash Zone™">Colossal Cash Zone™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Ultimate 5™" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Ultimate 5™', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20ultim5.png' , 'vs20ultim5', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20ultim5.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="The Ultimate 5™">The Ultimate 5™</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Aztec King" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Aztec King', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bookazteck.png' , 'vs10bookazteck', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10bookazteck.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Book of Aztec King">Book of Aztec King</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Beach Party" data-filter="ALL,Video Slots,Buy Bonus Feature" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Beach Party', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bchprty.png' , 'vs20bchprty', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20bchprty.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Wild Beach Party">Wild Beach Party</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Might of Ra" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Might of Ra', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50mightra.png' , 'vs50mightra', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs50mightra.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Might of Ra">Might of Ra</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bull Fiesta" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bull Fiesta', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25bullfiesta.png' , 'vs25bullfiesta', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs25bullfiesta.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Bull Fiesta">Bull Fiesta</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rainbow Gold" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rainbow Gold', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rainbowg.png' , 'vs20rainbowg', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20rainbowg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Rainbow Gold">Rainbow Gold</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Snakes and Ladders Megadice" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Snakes and Ladders Megadice', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10snakeladd.png' , 'vs10snakeladd', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10snakeladd.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Snakes and Ladders Megadice">Snakes and Ladders Megadice</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tic Tac Take" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tic Tac Take', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10tictac.png' , 'vs10tictac', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs10tictac.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Tic Tac Take">Tic Tac Take</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Disco Lady" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Disco Lady', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243discolady.png' , 'vs243discolady', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243discolady.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Disco Lady">Disco Lady</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Barn Festival" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Barn Festival', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20farmfest.png' , 'vs20farmfest', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs20farmfest.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Barn Festival">Barn Festival</h5>
 </a>
 

                 <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queenie" data-filter="ALL,Video Slots" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queenie', 'https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243queenie.png' , 'vs243queenie', '' )" style="">

   <div class="content-wrapper">
       
                 <!--todo daily win tag here--> 
     <div class="daily-wins-tag"> </div>
     
     
                 <img width="120" height="120" class="lazy" data-src="https://files.sitestatic.net/SlotImages/pragmaticplay/200/vs243queenie.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
               </div>
   <h5 data-title="Queenie">Queenie</h5>
 </a>
 

</div>

</div>

@endsection
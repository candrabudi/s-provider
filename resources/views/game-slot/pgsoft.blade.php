@extends('layouts.main')

@section('content')


<br><br>
@include('nav_saldo')
@if (Auth::check())
@else
<script>
  $(function(){
    $('.game-box').addClass('maintenance-login-lock')
  })
</script>
@endif
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
          <button class="btn btn-clear f active" data-filter="TOP" [ngclass]="{ 'active': filterProperty==FilterType.Top  }">TOP</button>
        </div>
        <div class="col-xs-3">
          <button class="btn btn-clear f" data-filter="ALL" [ngclass]="{ 'active': filterProperty==FilterType.All  }">SEMUA </button>
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
  <input type="hidden" value="pgsoft_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Clover Lady" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Clover Lady', 'https://files.sitestatic.net/SlotImages/pgsoft/lucky_clover_lady.png' , '1601012', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/lucky_clover_lady.png" src="https://files.sitestatic.net/SlotImages/pgsoft/lucky_clover_lady.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Clover Lady">Lucky Clover Lady</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bikini Paradise" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bikini Paradise', 'https://files.sitestatic.net/SlotImages/pgsoft/BikiniParadise_.png' , 'bikini-paradise', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/BikiniParadise_.png" src="https://files.sitestatic.net/SlotImages/pgsoft/BikiniParadise_.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bikini Paradise">Bikini Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Flirting Scholar" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Flirting Scholar', 'https://files.sitestatic.net/SlotImages/pgsoft/FlirtingScholar.png' , 'flirting-scholar', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/FlirtingScholar.png" src="https://files.sitestatic.net/SlotImages/pgsoft/FlirtingScholar.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Flirting Scholar">Flirting Scholar</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ninja vs Samurai" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ninja vs Samurai', 'https://files.sitestatic.net/SlotImages/pgsoft/NinjavsSamurai.png' , 'ninja-vs-samurai', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/NinjavsSamurai.png" src="https://files.sitestatic.net/SlotImages/pgsoft/NinjavsSamurai.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ninja vs Samurai">Ninja vs Samurai</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Muay Thai Champion" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Muay Thai Champion', 'https://files.sitestatic.net/SlotImages/pgsoft/MuayThaiChampion.png' , 'muay-thai-champion', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/MuayThaiChampion.png" src="https://files.sitestatic.net/SlotImages/pgsoft/MuayThaiChampion.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Muay Thai Champion">Muay Thai Champion</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Tiger Luck" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Tiger Luck', 'https://files.sitestatic.net/SlotImages/pgsoft/dragon-tiger-luck.png' , 'dragon-tiger-luck', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/dragon-tiger-luck.png" src="https://files.sitestatic.net/SlotImages/pgsoft/dragon-tiger-luck.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Tiger Luck">Dragon Tiger Luck</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Mouse" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Mouse', 'https://files.sitestatic.net/SlotImages/pgsoft/fortune-mouse.png' , 'fortune-mouse', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/fortune-mouse.png" src="https://files.sitestatic.net/SlotImages/pgsoft/fortune-mouse.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Mouse">Fortune Mouse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Reel Love" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Reel Love', 'https://files.sitestatic.net/SlotImages/pgsoft/reel-love_rounded.png' , 'reel-love', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/reel-love_rounded.png" src="https://files.sitestatic.net/SlotImages/pgsoft/reel-love_rounded.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Reel Love">Reel Love</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Saviour Conquest" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Saviour Conquest', 'https://files.sitestatic.net/SlotImages/pgsoft/GemSaviourConquest.png' , 'gem-saviour-conquest', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/GemSaviourConquest.png" src="https://files.sitestatic.net/SlotImages/pgsoft/GemSaviourConquest.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Saviour Conquest">Gem Saviour Conquest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shaolin Soccer" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shaolin Soccer', 'https://files.sitestatic.net/SlotImages/pgsoft/shaolin-soccer.png' , 'shaolin-soccer', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/shaolin-soccer.png" src="https://files.sitestatic.net/SlotImages/pgsoft/shaolin-soccer.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shaolin Soccer">Shaolin Soccer</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Burst" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Burst', 'https://files.sitestatic.net/SlotImages/pgsoft/candy-burst_rounded.png' , 'candy-burst', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/candy-burst_rounded.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Burst">Candy Burst</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egypt's Book of Mystery" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egypt&amp;quot;amp;s Book of Mystery', 'https://files.sitestatic.net/SlotImages/pgsoft/egypt_s-book-of-mystery_icon.png' , 'egypts-book-mystery', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/egypt_s-book-of-mystery_icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egypt's Book of Mystery">Egypt's Book of Mystery</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Journey to the Wealth" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Journey to the Wealth', 'https://files.sitestatic.net/SlotImages/pgsoft/JourneytotheWealth.png' , 'journey-to-the-wealth', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/JourneytotheWealth.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Journey to the Wealth">Journey to the Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Phoenix Rises" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Phoenix Rises', 'https://files.sitestatic.net/SlotImages/pgsoft/phoenix-rises_app-icon.png' , 'phoenix-rises', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/phoenix-rises_app-icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Phoenix Rises">Phoenix Rises</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Fireworks" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Fireworks', 'https://files.sitestatic.net/SlotImages/pgsoft/wild-fireworks.png' , 'wild-fireworks', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/wild-fireworks.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Fireworks">Wild Fireworks</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie's 3 Wishes" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie&amp;quot;amp;s 3 Wishes', 'https://files.sitestatic.net/SlotImages/pgsoft/genies3wishes_.png' , 'genies-wishes', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/genies3wishes_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie's 3 Wishes">Genie's 3 Wishes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Circus Delight" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Circus Delight', 'https://files.sitestatic.net/SlotImages/pgsoft/circus-delight_icon.png' , 'circus-delight', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/circus-delight_icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Circus Delight">Circus Delight</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Secret of Cleopatra" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Secret of Cleopatra', 'https://files.sitestatic.net/SlotImages/pgsoft/secrets-of-cleopatra.png' , 'sct-cleopatra', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/secrets-of-cleopatra.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Secret of Cleopatra">Secret of Cleopatra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vampire's Charm" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vampire&amp;quot;amp;s Charm', 'https://files.sitestatic.net/SlotImages/pgsoft/vampire_s-charm.png' , 'vampires-charm', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/vampire_s-charm.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Vampire's Charm">Vampire's Charm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Golf Drive" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Golf Drive', 'https://files.sitestatic.net/SlotImages/pgsoft/Super_Golf_Drive.png' , '1513328', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Super_Golf_Drive.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Golf Drive">Super Golf Drive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jewels of Prosperity" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jewels of Prosperity', 'https://files.sitestatic.net/SlotImages/pgsoft/jewels-of-prosperity.png' , 'jewels-prosper', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/jewels-of-prosperity.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jewels of Prosperity">Jewels of Prosperity</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jack Frosts Winter" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jack Frosts Winter', 'https://files.sitestatic.net/SlotImages/pgsoft/jack-frosts.png' , 'jack-frosts', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/jack-frosts.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jack Frosts Winter">Jack Frosts Winter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain's Bounty" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain&amp;quot;amp;s Bounty', 'https://files.sitestatic.net/SlotImages/pgsoft/CaptainsBounty_Icon_Rounded.png' , 'captains-bounty', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/CaptainsBounty_Icon_Rounded.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain's Bounty">Captain's Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Double Fortune" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Double Fortune', 'https://files.sitestatic.net/SlotImages/pgsoft/DoubleFortune.png' , 'double-fortune', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/DoubleFortune.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Double Fortune">Double Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Guardians of Ice and Fire" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Guardians of Ice and Fire', 'https://files.sitestatic.net/SlotImages/pgsoft/gdn-ice-fire.png' , 'gdn-ice-fire', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/gdn-ice-fire.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Guardians of Ice and Fire">Guardians of Ice and Fire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Legend" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Legend', 'https://files.sitestatic.net/SlotImages/pgsoft/DragonLegend_Icon.png' , 'dragon-legend', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/DragonLegend_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Legend">Dragon Legend</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Gods" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Gods', 'https://files.sitestatic.net/SlotImages/pgsoft/FORTUNEGODS_.png' , 'fortune-gods', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/FORTUNEGODS_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Gods">Fortune Gods</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Win Win Won" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Win Win Won', 'https://files.sitestatic.net/SlotImages/pgsoft/winwinwon_.png' , 'win-win-won', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/winwinwon_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Win Win Won">Win Win Won</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Medusa II" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Medusa II', 'https://files.sitestatic.net/SlotImages/pgsoft/medusa2_.png' , 'medusa2', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/medusa2_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Medusa II">Medusa II</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tree of Fortune" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tree of Fortune', 'https://files.sitestatic.net/SlotImages/pgsoft/treeoffortune_.png' , 'fortune-tree', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/treeoffortune_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tree of Fortune">Tree of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Medusa" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Medusa', 'https://files.sitestatic.net/SlotImages/pgsoft/medusa_.png' , 'medusa', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/medusa_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Medusa">Medusa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Plushie Frenzy" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Plushie Frenzy', 'https://files.sitestatic.net/SlotImages/pgsoft/PLUSHIEFRENZY_.png' , 'plushie-frenzy', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/PLUSHIEFRENZY_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Plushie Frenzy">Plushie Frenzy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Saviour" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Saviour', 'https://files.sitestatic.net/SlotImages/pgsoft/Gemsaviour_.png' , 'gem-saviour', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Gemsaviour_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Saviour">Gem Saviour</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hood vs Wolf" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hood vs Wolf', 'https://files.sitestatic.net/SlotImages/pgsoft/HoodvsWolf_Rounded.png' , 'hood-wolf', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/HoodvsWolf_Rounded.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hood vs Wolf">Hood vs Wolf</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hotpot" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hotpot', 'https://files.sitestatic.net/SlotImages/pgsoft/Hot_Pot.png' , 'hotpot', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Hot_Pot.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hotpot">Hotpot</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mr. Hallow-Win" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mr. Hallow-Win', 'https://files.sitestatic.net/SlotImages/pgsoft/MrHallowWin_Icon.png' , 'mr-hallow-win', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/MrHallowWin_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mr. Hallow-Win">Mr. Hallow-Win</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Delight" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Delight', 'https://files.sitestatic.net/SlotImages/pgsoft/JungleDelight_Icon.png' , 'jungle-delight', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/JungleDelight_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle Delight">Jungle Delight</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend of Hou Yi" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend of Hou Yi', 'https://files.sitestatic.net/SlotImages/pgsoft/LegendofHouYi.png' , 'legend-of-hou-yi', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/LegendofHouYi.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legend of Hou Yi">Legend of Hou Yi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Prosperity Lion" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Prosperity Lion', 'https://files.sitestatic.net/SlotImages/pgsoft/ProsperityLion_Icon.png' , 'prosperity-lion', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/ProsperityLion_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Prosperity Lion">Prosperity Lion</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hip Hop Panda" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hip Hop Panda', 'https://files.sitestatic.net/SlotImages/pgsoft/HipHopPanda_Icon.png' , 'hip-hop-panda', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/HipHopPanda_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hip Hop Panda">Hip Hop Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa's Gift Rush" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Gift Rush', 'https://files.sitestatic.net/SlotImages/pgsoft/SantasGiftRush_Icon.png' , 'santas-gift-rush', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/SantasGiftRush_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Gift Rush">Santa's Gift Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Saviour Sword" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Saviour Sword', 'https://files.sitestatic.net/SlotImages/pgsoft/GemSaviourSword.png' , 'gem-saviour-sword', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/GemSaviourSword.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Saviour Sword">Gem Saviour Sword</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Piggy Gold" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Piggy Gold', 'https://files.sitestatic.net/SlotImages/pgsoft/PiggyGold_Icon.png' , 'piggy-gold', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/PiggyGold_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Piggy Gold">Piggy Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Symbols of Egypt" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Symbols of Egypt', 'https://files.sitestatic.net/SlotImages/pgsoft/SymbolsofEgypt_Icon.png' , 'symbols-of-egypt', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/SymbolsofEgypt_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Symbols of Egypt">Symbols of Egypt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emperor's Favour" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emperor&amp;quot;amp;s Favour', 'https://files.sitestatic.net/SlotImages/pgsoft/EmperorsFavour_Icon.png' , 'emperors-favour', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/EmperorsFavour_Icon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emperor's Favour">Emperor's Favour</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ganesha Gold" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ganesha Gold', 'https://files.sitestatic.net/SlotImages/pgsoft/GaneshaGold.png' , 'ganesha-gold', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/GaneshaGold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ganesha Gold">Ganesha Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Galactic Gems" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Galactic Gems', 'https://files.sitestatic.net/SlotImages/pgsoft/galactic-gems.png' , 'galactic-gems', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/galactic-gems.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Galactic Gems">Galactic Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Honey Trap of Diao Chan" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Honey Trap of Diao Chan', 'https://files.sitestatic.net/SlotImages/pgsoft/Honeytrap_of_diao_chan.png' , 'diaochan', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Honeytrap_of_diao_chan.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Honey Trap of Diao Chan">Honey Trap of Diao Chan</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Opera Dynasty" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Opera Dynasty', 'https://files.sitestatic.net/SlotImages/pgsoft/opera-dynasty.png' , 'opera-dynasty', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/opera-dynasty.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Opera Dynasty">Opera Dynasty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Totem Wonders" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Totem Wonders', 'https://files.sitestatic.net/SlotImages/pgsoft/Totem_Wonders.png' , '1338274', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Totem_Wonders.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Totem Wonders">Totem Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mermaid Riches" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mermaid Riches', 'https://files.sitestatic.net/SlotImages/pgsoft/Mermaid_Riches.png' , 'mermaid-riches', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Mermaid_Riches.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mermaid Riches">Mermaid Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mask Carnival" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mask Carnival', 'https://files.sitestatic.net/SlotImages/pgsoft/Mask-Carnival.png' , 'mask-carnival', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Mask-Carnival.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mask Carnival">Mask Carnival</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Tiger" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Tiger', 'https://files.sitestatic.net/SlotImages/pgsoft/Fortune_tiger.png' , 'fortune-tiger', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Fortune_tiger.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Tiger">Fortune Tiger</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Destiny of Sun &amp; Moon" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Destiny of Sun &amp;quot; Moon', 'https://files.sitestatic.net/SlotImages/pgsoft/Destiny_ofsunandmoon.png' , '121', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Destiny_ofsunandmoon.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Destiny of Sun &amp; Moon">Destiny of Sun &amp; Moon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rooster Rumble" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rooster Rumble', 'https://files.sitestatic.net/SlotImages/pgsoft/Rooster_Rumblee.png' , '123', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Rooster_Rumblee.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rooster Rumble">Rooster Rumble</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Battleground Royale" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Battleground Royale', 'https://files.sitestatic.net/SlotImages/pgsoft/Battleground_Royale.png' , '124', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Battleground_Royale.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Battleground Royale">Battleground Royale</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Win Win Fish Prawn Crab" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Win Win Fish Prawn Crab', 'https://files.sitestatic.net/SlotImages/pgsoft/Win_Win_Fish_Prawn_Crab.png' , '129', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Win_Win_Fish_Prawn_Crab.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Win Win Fish Prawn Crab">Win Win Fish Prawn Crab</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diner Delights" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diner Delights', 'https://files.sitestatic.net/SlotImages/pgsoft/Diner_Delights.png' , '1372643', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Diner_Delights.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diner Delights">Diner Delights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legendary Monkey King" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legendary Monkey King', 'https://files.sitestatic.net/SlotImages/pgsoft/Legendary-monkey-king.png' , 'lgd-monkey-kg', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Legendary-monkey-king.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legendary Monkey King">Legendary Monkey King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Asgardian Rising" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Asgardian Rising', 'https://files.sitestatic.net/SlotImages/pgsoft/Asgardian_Risin.png' , '1340277', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Asgardian_Risin.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Asgardian Rising">Asgardian Rising</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Midas Fortune" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Midas Fortune', 'https://files.sitestatic.net/SlotImages/pgsoft/Mida_Fortune.png' , '1402846', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Mida_Fortune.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Midas Fortune">Midas Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Rabbit" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Rabbit', 'https://files.sitestatic.net/SlotImages/pgsoft/FortuneRabbit_.png' , '1543462', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/FortuneRabbit_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Rabbit">Fortune Rabbit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rave Party Fever" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rave Party Fever', 'https://files.sitestatic.net/SlotImages/pgsoft/Rave_Party_Fever.png' , '1420892', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Rave_Party_Fever.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rave Party Fever">Rave Party Fever</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hawaiian Tiki" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hawaiian Tiki', 'https://files.sitestatic.net/SlotImages/pgsoft/hawaiiantiki.png' , '1381200', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/hawaiiantiki.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hawaiian Tiki">Hawaiian Tiki</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bakery Bonanza" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bakery Bonanza', 'https://files.sitestatic.net/SlotImages/pgsoft/Bakery_Bonanza.png' , '1418544', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Bakery_Bonanza.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bakery Bonanza">Bakery Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Songkran Splash" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Songkran Splash', 'https://files.sitestatic.net/SlotImages/pgsoft/Songkran_Splash.png' , '1448762', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Songkran_Splash.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Songkran Splash">Songkran Splash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystical Spirits" data-filter="ALL,slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystical Spirits', 'https://files.sitestatic.net/SlotImages/pgsoft/Mystical_Spirits.png' , '1432733', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Mystical_Spirits.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystical Spirits">Mystical Spirits</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emoji Riches" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emoji Riches', 'https://files.sitestatic.net/SlotImages/pgsoft/Emoji_Riches.png' , 'emoji-riches', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Emoji_Riches.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emoji Riches">Emoji Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oriental Prosperity" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oriental Prosperity', 'https://files.sitestatic.net/SlotImages/pgsoft/Oriental_Prosperity.png' , 'oriental-pros', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Oriental_Prosperity.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oriental Prosperity">Oriental Prosperity</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Apollo" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Apollo', 'https://files.sitestatic.net/SlotImages/pgsoft/Rise Of Apollo.png' , 'rise-of-apollo', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Rise Of Apollo.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Apollo">Rise of Apollo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo Win" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo Win', 'https://files.sitestatic.net/SlotImages/pgsoft/bufallo-win_icon.png?v=0.1' , 'buffalo-win', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/bufallo-win_icon.png?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buffalo Win">Buffalo Win</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bali Vacation" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bali Vacation', 'https://files.sitestatic.net/SlotImages/pgsoft/bali-vacation.png' , 'bali-vacation', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/bali-vacation.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bali Vacation">Bali Vacation</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crypto Gold" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crypto Gold', 'https://files.sitestatic.net/SlotImages/pgsoft/crypto-gold.png' , 'crypto-gold', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/crypto-gold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crypto Gold">Crypto Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Majestic Treasures" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Majestic Treasures', 'https://files.sitestatic.net/SlotImages/pgsoft/majestic-ts.png' , 'majestic-ts', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/majestic-ts.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Majestic Treasures">Majestic Treasures</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Raider Jane's Crypt of Fortune" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Raider Jane&amp;quot;amp;s Crypt of Fortune', 'https://files.sitestatic.net/SlotImages/pgsoft/raiders-jane-crypt-of-fortune.png?v=0.1' , 'crypt-fortune', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/raiders-jane-crypt-of-fortune.png?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Raider Jane's Crypt of Fortune">Raider Jane's Crypt of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heist  Stakes" data-filter="ALL,slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heist  Stakes', 'https://files.sitestatic.net/SlotImages/pgsoft/heist-stakes-186.png' , 'heist-stakes', '' )" style="display: none;">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/heist-stakes-186.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heist  Stakes">Heist  Stakes</h5>
        </a>
        
     
                        <a target="_blank" href="https://m.pgf-asw0zz.com/74/index.html?l=id&btt=1&ot=D9DA9230-67DD-17DB-2E38-A3A531C95F00&ops=UABAAAD23TOugpaXwkdtFZcuFgJSksYs17YTAlxckbvfXvcgL2MJITzgjbqT0Dk4C2LlcjGfOfM&__refer=m.pgjksjk.com&or=static.pgf-asw0zz.com&__hv=1fc5b39b"class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Ways 2" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Ways 2', 'https://files.sitestatic.net/SlotImages/pgsoft/mahjong-ways2.png' , 'mahjong-ways2', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/mahjong-ways2.png" src="https://files.sitestatic.net/SlotImages/pgsoft/mahjong-ways2.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Ways 2">Mahjong Ways 2</h5>
        </a>
        
     
                        <a target="_blank" href="https://m.pgf-asw0zz.com/65/index.html?l=id&btt=1&ot=D9DA9230-67DD-17DB-2E38-A3A531C95F00&ops=UABAAAD23TOugpaXwkdtFZcuFgJSksYs17YTAlxckbvfXvcgL2MJITzgjbqT0Dk4C2LlcjGfOfM&__refer=m.pgjksjk.com&or=static.pgf-asw0zz.com&__hv=1fc5b39b" class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Ways" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Ways', 'https://files.sitestatic.net/SlotImages/pgsoft/mahjong-ways.png' , 'mahjong-ways', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/mahjong-ways.png" src="https://files.sitestatic.net/SlotImages/pgsoft/mahjong-ways.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Ways">Mahjong Ways</h5>
        </a>
        
     
                        <a target="_blank" href="https://m.pgf-asw0zz.com/89/index.html?l=id&btt=1&ot=D9DA9230-67DD-17DB-2E38-A3A531C95F00&ops=UABAAAD23TOugpaXwkdtFZcuFgJSksYs17YTAlxckbvfXvcgL2MJITzgjbqT0Dk4C2LlcjGfOfM&__refer=m.pgjksjk.com&or=static.pgf-asw0zz.com&__hv=1fc5b39b" class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Neko" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Neko', 'https://files.sitestatic.net/SlotImages/pgsoft/luckyneko_.png' , 'lucky-neko', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/luckyneko_.png" src="https://files.sitestatic.net/SlotImages/pgsoft/luckyneko_.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Neko">Lucky Neko</h5>
        </a>
        
     
                        <a target="_blank" href="https://m.pgf-asw0zz.com/87/index.html?l=id&btt=1&ot=D9DA9230-67DD-17DB-2E38-A3A531C95F00&ops=UABAAAD23TOugpaXwkdtFZcuFgJSksYs17YTAlxckbvfXvcgL2MJITzgjbqT0Dk4C2LlcjGfOfM&__refer=m.pgjksjk.com&or=static.pgf-asw0zz.com&__hv=1fc5b39b" class="col-xs-4 col-md-3 game-box text-center" data-title="Treasures of Aztec" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasures of Aztec', 'https://files.sitestatic.net/SlotImages/pgsoft/treasures-of-aztec_icon.png' , 'treasures-aztec', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/treasures-of-aztec_icon.png" src="https://files.sitestatic.net/SlotImages/pgsoft/treasures-of-aztec_icon.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasures of Aztec">Treasures of Aztec</h5>
        </a>
        
     
                        <a target="_blank" href="https://m.pgf-asw0zz.com/104/index.html?l=id&btt=1&ot=D9DA9230-67DD-17DB-2E38-A3A531C95F00&ops=UABAAAD23TOugpaXwkdtFZcuFgJSksYs17YTAlxckbvfXvcgL2MJITzgjbqT0Dk4C2LlcjGfOfM&__refer=m.pgjksjk.com&or=static.pgf-asw0zz.com&__hv=1fc5b39b" class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Bandito" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Bandito', 'https://files.sitestatic.net/SlotImages/pgsoft/wild-bandito190.png' , 'wild-bandito', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/wild-bandito190.png" src="https://files.sitestatic.net/SlotImages/pgsoft/wild-bandito190.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Bandito">Wild Bandito</h5>
        </a>
        
     
                        <a target="_blank" href="https://m.pgf-asw0zz.com/135/index.html?l=id&btt=1&ot=D9DA9230-67DD-17DB-2E38-A3A531C95F00&ops=UABAAAD23TOugpaXwkdtFZcuFgJSksYs17YTAlxckbvfXvcgL2MJITzgjbqT0Dk4C2LlcjGfOfM&__refer=m.pgjksjk.com&or=static.pgf-asw0zz.com&__hv=1fc5b39b" class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Bounty Showdown" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Bounty Showdown', 'https://files.sitestatic.net/SlotImages/pgsoft/Wild_Bounty_Showdown.png' , '135', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Wild_Bounty_Showdown.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Wild_Bounty_Showdown.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Bounty Showdown">Wild Bounty Showdown</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ways of the Qilin" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ways of the Qilin', 'https://files.sitestatic.net/SlotImages/pgsoft/ways-of-qilin.png' , 'ways-of-qilin', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/ways-of-qilin.png" src="https://files.sitestatic.net/SlotImages/pgsoft/ways-of-qilin.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ways of the Qilin">Ways of the Qilin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishen Wins" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishen Wins', 'https://files.sitestatic.net/SlotImages/pgsoft/caishen-wins_rounded.png' , 'cai-shen-wins', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/caishen-wins_rounded.png" src="https://files.sitestatic.net/SlotImages/pgsoft/caishen-wins_rounded.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Caishen Wins">Caishen Wins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dreams of Macau" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dreams of Macau', 'https://files.sitestatic.net/SlotImages/pgsoft/Dreams_of_Macau.png' , 'dreams-of-macau', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Dreams_of_Macau.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Dreams_of_Macau.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dreams of Macau">Dreams of Macau</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Great Icescape" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Great Icescape', 'https://files.sitestatic.net/SlotImages/pgsoft/TheGreatIcescape_icon.png' , 'the-great-icescape', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://files.sitestatic.net/SlotImages/pgsoft/TheGreatIcescape_icon.png" src="https://files.sitestatic.net/SlotImages/pgsoft/TheGreatIcescape_icon.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Great Icescape">The Great Icescape</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cocktail Nights" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cocktail Nights', 'https://files.sitestatic.net/SlotImages/pgsoft/Cocktail_Nights.png' , 'cocktail-nite', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Cocktail_Nights.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Cocktail_Nights.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cocktail Nights">Cocktail Nights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ganesha Fortune" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ganesha Fortune', 'https://files.sitestatic.net/SlotImages/pgsoft/Ganesha_fortune.png' , 'ganesha-fortune', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Ganesha_fortune.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Ganesha_fortune.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ganesha Fortune">Ganesha Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hatch" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hatch', 'https://files.sitestatic.net/SlotImages/pgsoft/dragon-hatch.png' , 'dragon-hatch', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/dragon-hatch.png" src="https://files.sitestatic.net/SlotImages/pgsoft/dragon-hatch.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Hatch">Dragon Hatch</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Prosperity Fortune Tree" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Prosperity Fortune Tree', 'https://files.sitestatic.net/SlotImages/pgsoft/Prosperity_Fortune_Tree.png' , '1312883', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Prosperity_Fortune_Tree.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Prosperity_Fortune_Tree.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Prosperity Fortune Tree">Prosperity Fortune Tree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Piggy" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Piggy', 'https://files.sitestatic.net/SlotImages/pgsoft/Lucky_Piggy.png' , '130', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Lucky_Piggy.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Lucky_Piggy.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Piggy">Lucky Piggy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jurassic Kingdom" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jurassic Kingdom', 'https://files.sitestatic.net/SlotImages/pgsoft/Jurassic-Kingdom.png' , 'jurassic-kdm', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Jurassic-Kingdom.png" src="https://files.sitestatic.net/SlotImages/pgsoft/Jurassic-Kingdom.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jurassic Kingdom">Jurassic Kingdom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Speed Winner" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Speed Winner', 'https://files.sitestatic.net/SlotImages/pgsoft/speed_winner.png' , '127', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/speed_winner.png" src="https://files.sitestatic.net/SlotImages/pgsoft/speed_winner.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Speed Winner">Speed Winner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun Riches" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun Riches', 'https://files.sitestatic.net/SlotImages/pgsoft/LeprechaunRiches.png' , 'leprechaun-riches', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/LeprechaunRiches.png" src="https://files.sitestatic.net/SlotImages/pgsoft/LeprechaunRiches.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Leprechaun Riches">Leprechaun Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Bounty" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Bounty', 'https://files.sitestatic.net/SlotImages/pgsoft/queen-of-bounty.png' , 'queen-bounty', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/queen-of-bounty.png" src="https://files.sitestatic.net/SlotImages/pgsoft/queen-of-bounty.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen of Bounty">Queen of Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Supermarket Spree" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Supermarket Spree', 'https://files.sitestatic.net/SlotImages/pgsoft/supermarket-spree.png' , 'sprmkt-spree', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/supermarket-spree.png" src="https://files.sitestatic.net/SlotImages/pgsoft/supermarket-spree.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Supermarket Spree">Supermarket Spree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thai River Wonders" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thai River Wonders', 'https://files.sitestatic.net/SlotImages/pgsoft/thai-river-wonders_icon.png' , 'thai-river', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" ls-is-cached lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/pgsoft/thai-river-wonders_icon.png" src="https://files.sitestatic.net/SlotImages/pgsoft/thai-river-wonders_icon.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thai River Wonders">Thai River Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Ox" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Ox', 'https://files.sitestatic.net/SlotImages/pgsoft/fortune-ox.png' , 'fortune-ox', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/fortune-ox.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Ox">Fortune Ox</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend of Perseus" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend of Perseus', 'https://files.sitestatic.net/SlotImages/pgsoft/legend_of_perseus.png' , '128', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/legend_of_perseus.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legend of Perseus">Legend of Perseus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Garuda Gems" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Garuda Gems', 'https://files.sitestatic.net/SlotImages/pgsoft/GarudaGems.png' , 'garuda-gems', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/GarudaGems.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Garuda Gems">Garuda Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Coaster" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Coaster', 'https://files.sitestatic.net/SlotImages/pgsoft/Wild_Coaster.png' , '132', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Wild_Coaster.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Coaster">Wild Coaster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alchemy Gold" data-filter="ALL,slot,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alchemy Gold', 'https://files.sitestatic.net/SlotImages/pgsoft/Alchemy_Gold.png' , '1368367', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Alchemy_Gold.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alchemy Gold">Alchemy Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Bonanza" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Bonanza', 'https://files.sitestatic.net/SlotImages/pgsoft/Candybonanza_.png' , 'candy-bonanza', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Candybonanza_.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Bonanza">Candy Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spirited Wonders" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spirited Wonders', 'https://files.sitestatic.net/SlotImages/pgsoft/Spirited-wonders.png' , 'spirit-wonder', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Spirited-wonders.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spirited Wonders">Spirited Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Butterfly Blossom" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Butterfly Blossom', 'https://files.sitestatic.net/SlotImages/pgsoft/Butterfly_Blossom.png' , '125', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/Butterfly_Blossom.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Butterfly Blossom">Butterfly Blossom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Queen's Banquet" data-filter="ALL,slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Queen&amp;quot;amp;s Banquet', 'https://files.sitestatic.net/SlotImages/pgsoft/The_Queens_Banquet.png' , '120', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="https://files.sitestatic.net/SlotImages/pgsoft/The_Queens_Banquet.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Queen's Banquet">The Queen's Banquet</h5>
        </a>
        
     
  </div>

</div>

@endsection
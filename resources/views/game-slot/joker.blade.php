
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
  <input type="hidden" value="jk_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tournament" data-filter="ALL,Slot,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tournament', '//files.sitestatic.net/SlotImages/joker/tournament-5.png' , 'Tournament', '' )" style="">

          <div class="content-wrapper">
                          <div class="tournament-tag"></div>
              
                        <img class=" lazyloaded maintenance-alert" data-src="//files.sitestatic.net/SlotImages/joker/tournament-5.png" src="//files.sitestatic.net/SlotImages/joker/tournament-5.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tournament"></h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun', 'https://img.zhenqinghua.com/gameimages/landscape/zezjtt6ras7ms.png' , 'zezjtt6ras7ms', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://img.zhenqinghua.com/gameimages/landscape/zezjtt6ras7ms.png" src="https://img.zhenqinghua.com/gameimages/landscape/zezjtt6ras7ms.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Leprechaun">Leprechaun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Date With Miyo" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Date With Miyo', 'https://files.sitestatic.net/SlotImages/joker/4py9dmfpwkt4y.png' , '4py9dmfpwkt4y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://files.sitestatic.net/SlotImages/joker/4py9dmfpwkt4y.png" src="https://files.sitestatic.net/SlotImages/joker/4py9dmfpwkt4y.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Date With Miyo">Date With Miyo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kraken Hunter" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kraken Hunter', 'https://img.zhenqinghua.com/gameimages/landscape/ooekf9x16xaxn.png' , 'ooekf9x16xaxn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://img.zhenqinghua.com/gameimages/landscape/ooekf9x16xaxn.png" src="https://img.zhenqinghua.com/gameimages/landscape/ooekf9x16xaxn.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kraken Hunter">Kraken Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zodiac Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zodiac Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/hj5cb8hhusjjg.png' , 'hj5cb8hhusjjg', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://img.zhenqinghua.com/gameimages/landscape/hj5cb8hhusjjg.png" src="https://img.zhenqinghua.com/gameimages/landscape/hj5cb8hhusjjg.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zodiac Deluxe">Zodiac Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yeh Hsien Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yeh Hsien Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/uygm7axgh91qk.png' , 'uygm7axgh91qk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded maintenance-alert" data-src="https://img.zhenqinghua.com/gameimages/landscape/uygm7axgh91qk.png" src="https://img.zhenqinghua.com/gameimages/landscape/uygm7axgh91qk.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yeh Hsien Deluxe">Yeh Hsien Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wizard Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wizard Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/pz7wsnombyroh.png' , 'pz7wsnombyroh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/pz7wsnombyroh.png" src="https://img.zhenqinghua.com/gameimages/landscape/pz7wsnombyroh.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wizard Deluxe">Wizard Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Qatar 2022" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Qatar 2022', 'https://img.zhenqinghua.com/gameimages/landscape/sco3dugpambhy.png' , 'sco3dugpambhy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/sco3dugpambhy.png" src="https://img.zhenqinghua.com/gameimages/landscape/sco3dugpambhy.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Qatar 2022">Qatar 2022</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heist Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heist Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/7phhufritkfao.png' , '7phhufritkfao', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/7phhufritkfao.png" src="https://img.zhenqinghua.com/gameimages/landscape/7phhufritkfao.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heist Deluxe">Heist Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dia De Los Muertos Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dia De Los Muertos Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/b6nuk4djp3zsa.png' , 'b6nuk4djp3zsa', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/b6nuk4djp3zsa.png" src="https://img.zhenqinghua.com/gameimages/landscape/b6nuk4djp3zsa.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dia De Los Muertos Deluxe">Dia De Los Muertos Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buccaneer Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buccaneer Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/bsp1s4umpbwsh.png' , 'bsp1s4umpbwsh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/bsp1s4umpbwsh.png" src="https://img.zhenqinghua.com/gameimages/landscape/bsp1s4umpbwsh.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buccaneer Deluxe">Buccaneer Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ong Bak Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ong Bak Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/bkxno75wqiigs.png' , 'bkxno75wqiigs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/bkxno75wqiigs.png" src="https://img.zhenqinghua.com/gameimages/landscape/bkxno75wqiigs.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ong Bak Deluxe">Ong Bak Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Critter Mania Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Critter Mania Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/zowjitp4zqhm1.png' , 'zowjitp4zqhm1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/zowjitp4zqhm1.png" src="https://img.zhenqinghua.com/gameimages/landscape/zowjitp4zqhm1.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Critter Mania Deluxe">Critter Mania Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cursed Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cursed Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/ue8mt39rhzpps.png' , 'ue8mt39rhzpps', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/ue8mt39rhzpps.png" src="https://img.zhenqinghua.com/gameimages/landscape/ue8mt39rhzpps.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cursed Deluxe">Cursed Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Rome Deluxe" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Rome Deluxe', 'https://img.zhenqinghua.com/gameimages/landscape/c96w4rytnamte.png' , 'c96w4rytnamte', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/c96w4rytnamte.png" src="https://img.zhenqinghua.com/gameimages/landscape/c96w4rytnamte.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Rome Deluxe">Ancient Rome Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Paradise" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Paradise', 'https://img.zhenqinghua.com/gameimages/landscape/uh4amsg355x7a.png' , 'uh4amsg355x7a', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/uh4amsg355x7a.png" src="https://img.zhenqinghua.com/gameimages/landscape/uh4amsg355x7a.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Paradise">Fruit Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Majapahit" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Majapahit', 'https://img.zhenqinghua.com/gameimages/landscape/67s75yrbo4dae.png' , '67s75yrbo4dae', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/67s75yrbo4dae.png" src="https://img.zhenqinghua.com/gameimages/landscape/67s75yrbo4dae.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Majapahit">Majapahit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roma Legacy" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roma Legacy', 'https://img.zhenqinghua.com/gameimages/landscape/ape6dxf7sk35y.png' , 'ape6dxf7sk35y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/ape6dxf7sk35y.png" src="https://img.zhenqinghua.com/gameimages/landscape/ape6dxf7sk35y.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roma Legacy">Roma Legacy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Legend Of White Snake" data-filter="ALL,Slot,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Legend Of White Snake', 'https://img.zhenqinghua.com/gameimages/landscape/3jxqtp7wssiks.png' , '3jxqtp7wssiks', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/3jxqtp7wssiks.png" src="https://img.zhenqinghua.com/gameimages/landscape/3jxqtp7wssiks.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Legend Of White Snake">The Legend Of White Snake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pan Jian Lian2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pan Jian Lian2', '//files.sitestatic.net/SlotImages/joker/Pan_Jian_Lian2.png' , 'c53raraonrmbq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//files.sitestatic.net/SlotImages/joker/Pan_Jian_Lian2.png" src="//files.sitestatic.net/SlotImages/joker/Pan_Jian_Lian2.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pan Jian Lian2">Pan Jian Lian2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wealth God" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wealth God', 'https://img.zhenqinghua.com/gameimages/landscape/e9qs4cbtga5ue.png' , 'e9qs4cbtga5ue', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/e9qs4cbtga5ue.png" src="https://img.zhenqinghua.com/gameimages/landscape/e9qs4cbtga5ue.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wealth God">Wealth God</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="League Of Legends" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'League Of Legends', 'https://img.zhenqinghua.com/gameimages/landscape/orm4x9z99u69r.png' , 'orm4x9z99u69r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/orm4x9z99u69r.png" src="https://img.zhenqinghua.com/gameimages/landscape/orm4x9z99u69r.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="League Of Legends">League Of Legends</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wukong" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wukong', 'https://img.zhenqinghua.com/gameimages/landscape/texkt79w6ziqs.png' , 'texkt79w6ziqs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/texkt79w6ziqs.png" src="https://img.zhenqinghua.com/gameimages/landscape/texkt79w6ziqs.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wukong">Wukong</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie 2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie 2', 'https://img.zhenqinghua.com/gameimages/landscape/b4pde45epfzg6.png' , 'b4pde45epfzg6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/b4pde45epfzg6.png" src="https://img.zhenqinghua.com/gameimages/landscape/b4pde45epfzg6.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie 2">Genie 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yakuza" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yakuza', 'https://img.zhenqinghua.com/gameimages/landscape/y4jnah5oqf58q.png' , 'y4jnah5oqf58q', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/y4jnah5oqf58q.png" src="https://img.zhenqinghua.com/gameimages/landscape/y4jnah5oqf58q.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yakuza">Yakuza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Streets Of Chicago" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Streets Of Chicago', 'https://img.zhenqinghua.com/gameimages/landscape/h33c3rho1gmjq.png' , 'h33c3rho1gmjq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/h33c3rho1gmjq.png" src="https://img.zhenqinghua.com/gameimages/landscape/h33c3rho1gmjq.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Streets Of Chicago">Streets Of Chicago</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bali" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bali', 'https://img.zhenqinghua.com/gameimages/landscape/rg5oqz19mtqir.png' , 'rg5oqz19mtqir', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="https://img.zhenqinghua.com/gameimages/landscape/rg5oqz19mtqir.png" src="https://img.zhenqinghua.com/gameimages/landscape/rg5oqz19mtqir.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bali">Bali</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alice In Wonderland" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alice In Wonderland', '//img.zhenqinghua.com/gameimages/landscape/6po7ddrpokbay.png' , '6po7ddrpokbay', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/6po7ddrpokbay.png" src="//img.zhenqinghua.com/gameimages/landscape/6po7ddrpokbay.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alice In Wonderland">Alice In Wonderland</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen 2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen 2', '//img.zhenqinghua.com/gameimages/landscape/5bgx7epgw61kk.png' , '5bgx7epgw61kk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/5bgx7epgw61kk.png" src="//img.zhenqinghua.com/gameimages/landscape/5bgx7epgw61kk.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen 2">Queen 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Kingdoms 2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Kingdoms 2', '//img.zhenqinghua.com/gameimages/landscape/yqe1n9d7qj3zy.png' , 'yqe1n9d7qj3zy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/yqe1n9d7qj3zy.png" src="//img.zhenqinghua.com/gameimages/landscape/yqe1n9d7qj3zy.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Kingdoms 2">Three Kingdoms 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Talisman" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Talisman', '//img.zhenqinghua.com/gameimages/landscape/4jdxbm7cistkg.png' , '4jdxbm7cistkg', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/4jdxbm7cistkg.png" src="//img.zhenqinghua.com/gameimages/landscape/4jdxbm7cistkg.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Talisman">Talisman</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa's Workshop" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Workshop', '//img.zhenqinghua.com/gameimages/landscape/abkqpqp6z66m4.png' , 'abkqpqp6z66m4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/abkqpqp6z66m4.png" src="//img.zhenqinghua.com/gameimages/landscape/abkqpqp6z66m4.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Workshop">Santa's Workshop</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Beach Life" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Beach Life', '//img.zhenqinghua.com/gameimages/landscape/y6q14hdtq35ze.png' , 'y6q14hdtq35ze', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/y6q14hdtq35ze.png" src="//img.zhenqinghua.com/gameimages/landscape/y6q14hdtq35ze.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Beach Life">Beach Life</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SCHEHERAZADE" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SCHEHERAZADE', '//img.zhenqinghua.com/gameimages/landscape/mur8wje4dccb1.png' , 'mur8wje4dccb1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class=" lazyloaded" data-src="//img.zhenqinghua.com/gameimages/landscape/mur8wje4dccb1.png" src="//img.zhenqinghua.com/gameimages/landscape/mur8wje4dccb1.png" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SCHEHERAZADE">SCHEHERAZADE</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rancher's Wealth" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rancher&amp;quot;amp;s Wealth', '//img.zhenqinghua.com/gameimages/landscape/e5jgac3ogr5dq.png' , 'e5jgac3ogr5dq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/e5jgac3ogr5dq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rancher's Wealth">Rancher's Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oasis" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oasis', '//img.zhenqinghua.com/gameimages/landscape/ggutqu1xjtgwr.png' , 'ggutqu1xjtgwr', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ggutqu1xjtgwr.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oasis">Oasis</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Enchanted Forest" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Enchanted Forest', '//img.zhenqinghua.com/gameimages/landscape/kxyznmbpret1y.png' , 'kxyznmbpret1y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/kxyznmbpret1y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Enchanted Forest">Enchanted Forest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Immortals" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Immortals', '//img.zhenqinghua.com/gameimages/landscape/qd1fcneqbhgy4.png' , 'qd1fcneqbhgy4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/qd1fcneqbhgy4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Immortals">Immortals</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pharaoh's Tomb" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pharaoh&amp;quot;amp;s Tomb', '//img.zhenqinghua.com/gameimages/landscape/kdn8ckjqfhsn4.png' , 'kdn8ckjqfhsn4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/kdn8ckjqfhsn4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pharaoh's Tomb">Pharaoh's Tomb</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ong Bak 2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ong Bak 2', '//img.zhenqinghua.com/gameimages/landscape/a7q65cfts455e.png' , 'a7q65cfts455e', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/a7q65cfts455e.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ong Bak 2">Ong Bak 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Feng Huang" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Feng Huang', '//img.zhenqinghua.com/gameimages/landscape/d4fyes4amfxf6.png' , 'd4fyes4amfxf6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/d4fyes4amfxf6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Feng Huang">Feng Huang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Game Safari" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Game Safari', '//img.zhenqinghua.com/gameimages/landscape/96k1k6d3x39za.png' , '96k1k6d3x39za', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/96k1k6d3x39za.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Game Safari">Big Game Safari</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tropical Crush" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tropical Crush', '//img.zhenqinghua.com/gameimages/landscape/cuarr8e1ncebn.png' , 'cuarr8e1ncebn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/cuarr8e1ncebn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tropical Crush">Tropical Crush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mythological" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mythological', '//img.zhenqinghua.com/gameimages/landscape/hb4cpgc6u6qj4.png' , 'hb4cpgc6u6qj4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/hb4cpgc6u6qj4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mythological">Mythological</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Trail" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Trail', '//img.zhenqinghua.com/gameimages/landscape/x5ikj69a989x6.png' , 'x5ikj69a989x6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/x5ikj69a989x6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Trail">Gold Trail</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ocean Spray" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ocean Spray', '//img.zhenqinghua.com/gameimages/landscape/7b6c7rcs16kjk.png' , '7b6c7rcs16kjk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/7b6c7rcs16kjk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ocean Spray">Ocean Spray</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bounty Hunter" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bounty Hunter', '//img.zhenqinghua.com/gameimages/landscape/uafejs6a58xp6.png' , 'uafejs6a58xp6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/uafejs6a58xp6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bounty Hunter">Bounty Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shaolin " data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shaolin ', '//img.zhenqinghua.com/gameimages/landscape/pd6rhresnhkbk.png' , 'pd6rhresnhkbk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/pd6rhresnhkbk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shaolin ">Shaolin </h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Haunted House" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Haunted House', '//img.zhenqinghua.com/gameimages/landscape/exesnxb7ge3uy.png' , 'exesnxb7ge3uy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/exesnxb7ge3uy.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Haunted House">Haunted House</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Forest Treasures" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Forest Treasures', '//img.zhenqinghua.com/gameimages/landscape/wr5axzs95uq7r.png' , 'wr5axzs95uq7r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/wr5axzs95uq7r.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Forest Treasures">Forest Treasures</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Streak" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Streak', '//img.zhenqinghua.com/gameimages/landscape/3fx69pizs144w.png' , '3fx69pizs144w', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/3fx69pizs144w.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Streak">Lucky Streak</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fabulous Eights" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fabulous Eights', '//img.zhenqinghua.com/gameimages/landscape/5cx47jffukp3o.png' , '5cx47jffukp3o', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/5cx47jffukp3o.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fabulous Eights">Fabulous Eights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Temple" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Temple', '//img.zhenqinghua.com/gameimages/landscape/6o5emdcnoqyen.png' , '6o5emdcnoqyen', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/6o5emdcnoqyen.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Temple">Aztec Temple</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fifty Dragons" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fifty Dragons', '//img.zhenqinghua.com/gameimages/landscape/k9gz4ebbrau1e.png' , 'k9gz4ebbrau1e', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/k9gz4ebbrau1e.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fifty Dragons">Fifty Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Festival" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Festival', '//img.zhenqinghua.com/gameimages/landscape/gqotnunpejbwy.png' , 'gqotnunpejbwy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/gqotnunpejbwy.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Festival">Fortune Festival</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thug Life" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thug Life', '//img.zhenqinghua.com/gameimages/landscape/b1cnw7mkppwg1.png' , 'b1cnw7mkppwg1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/b1cnw7mkppwg1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thug Life">Thug Life</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Winter Sweet" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Winter Sweet', '//img.zhenqinghua.com/gameimages/landscape/ipz77igi3mfho.png' , 'ipz77igi3mfho', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ipz77igi3mfho.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Winter Sweet">Winter Sweet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tsai shen gift" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tsai shen gift', '//img.zhenqinghua.com/gameimages/landscape/6c5apdrpokbay.png' , '6c5apdrpokbay', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/6c5apdrpokbay.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tsai shen gift">Tsai shen gift</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Star" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Star', '//img.zhenqinghua.com/gameimages/landscape/b5ggg45epfzg6.png' , 'b5ggg45epfzg6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/b5ggg45epfzg6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Star">Super Star</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Reign" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Reign', '//img.zhenqinghua.com/gameimages/landscape/ofy9b9z99u69r.png' , 'ofy9b9z99u69r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ofy9b9z99u69r.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Reign">Fire Reign</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tigers Lair" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tigers Lair', '//img.zhenqinghua.com/gameimages/landscape/y5n8sh5oqf58q.png' , 'y5n8sh5oqf58q', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/y5n8sh5oqf58q.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tigers Lair">Tigers Lair</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Flames Of Fortune" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Flames Of Fortune', '//img.zhenqinghua.com/gameimages/landscape/3erm9p7wssiks.png' , '3erm9p7wssiks', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/3erm9p7wssiks.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Flames Of Fortune">Flames Of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mayan Gems" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mayan Gems', '//img.zhenqinghua.com/gameimages/landscape/ha1jzrho1gmjq.png' , 'ha1jzrho1gmjq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ha1jzrho1gmjq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mayan Gems">Mayan Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Joker" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Joker', '//img.zhenqinghua.com/gameimages/landscape/r8oiyz19mtqir.png' , 'r8oiyz19mtqir', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/r8oiyz19mtqir.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Joker">Lucky Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon's Realm" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon&amp;quot;amp;s Realm', '//img.zhenqinghua.com/gameimages/landscape/4eekxm7cistkg.png' , '4eekxm7cistkg', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/4eekxm7cistkg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon's Realm">Dragon's Realm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Reel" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Reel', '//img.zhenqinghua.com/gameimages/landscape/yxdzc9d7qj3zy.png' , 'yxdzc9d7qj3zy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/yxdzc9d7qj3zy.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Reel">Fire Reel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Water Reel" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Water Reel', '//img.zhenqinghua.com/gameimages/landscape/5ypkuepgw61kk.png' , '5ypkuepgw61kk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/5ypkuepgw61kk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Water Reel">Water Reel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Xuan Pu Lian Huan" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Xuan Pu Lian Huan', '//img.zhenqinghua.com/gameimages/landscape/c41bsraonrmbq.png' , 'c41bsraonrmbq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/c41bsraonrmbq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Xuan Pu Lian Huan">Xuan Pu Lian Huan</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The 4 Invention" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The 4 Invention', '//img.zhenqinghua.com/gameimages/landscape/rqaonzn7kjjiy.png' , 'rqaonzn7kjjiy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/rqaonzn7kjjiy.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The 4 Invention">The 4 Invention</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Respin Mania" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Respin Mania', '//img.zhenqinghua.com/gameimages/landscape/d5qfgs4amfxf6.png' , 'd5qfgs4amfxf6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/d5qfgs4amfxf6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Respin Mania">Respin Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ni Shu Shen Me" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ni Shu Shen Me', '//img.zhenqinghua.com/gameimages/landscape/99bzr6d3x39za.png' , '99bzr6d3x39za', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/99bzr6d3x39za.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ni Shu Shen Me">Ni Shu Shen Me</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mythical Sand" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mythical Sand', '//img.zhenqinghua.com/gameimages/landscape/m94wkgy3daxta.png' , 'm94wkgy3daxta', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/m94wkgy3daxta.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mythical Sand">Mythical Sand</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker Madness" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker Madness', '//img.zhenqinghua.com/gameimages/landscape/gkubyu4cjibrg.png' , 'gkubyu4cjibrg', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/gkubyu4cjibrg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker Madness">Joker Madness</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jin Fu Xing Yun" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jin Fu Xing Yun', '//img.zhenqinghua.com/gameimages/landscape/ahf5icfts455e.png' , 'ahf5icfts455e', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ahf5icfts455e.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jin Fu Xing Yun">Jin Fu Xing Yun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fat Choy Choy Sun" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fat Choy Choy Sun', '//img.zhenqinghua.com/gameimages/landscape/x46x869a989x6.png' , 'x46x869a989x6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/x46x869a989x6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fat Choy Choy Sun">Fat Choy Choy Sun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cluster Mania" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cluster Mania', '//img.zhenqinghua.com/gameimages/landscape/iw7az1sm3drhh.png' , 'iw7az1sm3drhh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/iw7az1sm3drhh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cluster Mania">Cluster Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Blackbeard Legacy" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Blackbeard Legacy', '//img.zhenqinghua.com/gameimages/landscape/swt38osdadyhc.png' , 'swt38osdadyhc', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/swt38osdadyhc.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Blackbeard Legacy">Blackbeard Legacy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Of The Eastern Sea" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Of The Eastern Sea', '//img.zhenqinghua.com/gameimages/landscape/fqho1inijjfwo.png' , 'fqho1inijjfwo', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/fqho1inijjfwo.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Of The Eastern Sea">Dragon Of The Eastern Sea</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Octagon Gem 2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Octagon Gem 2', '//img.zhenqinghua.com/gameimages/landscape/gsttgo1debywc.png' , 'gsttgo1debywc', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/gsttgo1debywc.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Octagon Gem 2">Octagon Gem 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bagua 2" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bagua 2', '//img.zhenqinghua.com/gameimages/landscape/quofrdenycyyn.png' , 'quofrdenycyyn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/quofrdenycyyn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bagua 2">Bagua 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Hunter" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Hunter', '//img.zhenqinghua.com/gameimages/landscape/n1ydr5mncpogn.png' , 'n1ydr5mncpogn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/n1ydr5mncpogn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chilli Hunter">Chilli Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bagua" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bagua', '//img.zhenqinghua.com/gameimages/landscape/gn1bc1kqj7gr4.png' , 'gn1bc1kqj7gr4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/gn1bc1kqj7gr4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bagua">Bagua</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lady Hawk" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lady Hawk', '//img.zhenqinghua.com/gameimages/landscape/wcaadzg74mj7y.png' , 'wcaadzg74mj7y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/wcaadzg74mj7y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lady Hawk">Lady Hawk</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yggdrasil" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yggdrasil', '//img.zhenqinghua.com/gameimages/landscape/9ii7s6u5xbhzh.png' , '9ii7s6u5xbhzh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/9ii7s6u5xbhzh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yggdrasil">Yggdrasil</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Fruits" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Fruits', '//img.zhenqinghua.com/gameimages/landscape/soojfuqnaxycn.png' , 'soojfuqnaxycn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/soojfuqnaxycn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Fruits">Hot Fruits</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Octagon Gem" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Octagon Gem', '//img.zhenqinghua.com/gameimages/landscape/4tyxfmpnwqokn.png' , '4tyxfmpnwqokn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/4tyxfmpnwqokn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Octagon Gem">Octagon Gem</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Horus Eye" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Horus Eye', '//img.zhenqinghua.com/gameimages/landscape/j9nzkkbjfaz1a.png' , 'j9nzkkbjfaz1a', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/j9nzkkbjfaz1a.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Horus Eye">Horus Eye</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Burning Pearl" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Burning Pearl', '//img.zhenqinghua.com/gameimages/landscape/ur8593z8hu17w.png' , 'ur8593z8hu17w', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ur8593z8hu17w.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Burning Pearl">Burning Pearl</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Vault" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Vault', '//img.zhenqinghua.com/gameimages/landscape/oajk3h9o685xq.png' , 'oajk3h9o685xq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/oajk3h9o685xq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Vault">Money Vault</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Artifact" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Artifact', '//img.zhenqinghua.com/gameimages/landscape/ie9eti6w4zfcs.png' , 'ie9eti6w4zfcs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ie9eti6w4zfcs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Artifact">Ancient Artifact</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dolphin Treasure" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dolphin Treasure', '//img.zhenqinghua.com/gameimages/landscape/ateqfxp1sqamn.png' , 'ateqfxp1sqamn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ateqfxp1sqamn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dolphin Treasure">Dolphin Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fifty Lions" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fifty Lions', '//img.zhenqinghua.com/gameimages/landscape/fk9yoi4wkifrs.png' , 'fk9yoi4wkifrs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/fk9yoi4wkifrs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fifty Lions">Fifty Lions</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Nugget Hunter" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Nugget Hunter', '//img.zhenqinghua.com/gameimages/landscape/84igeq3a8r9d6.png' , '84igeq3a8r9d6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/84igeq3a8r9d6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Nugget Hunter">Nugget Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Lady Charm" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Lady Charm', '//img.zhenqinghua.com/gameimages/landscape/7f9h9fwz11kaw.png' , '7f9h9fwz11kaw', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/7f9h9fwz11kaw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Lady Charm">Lucky Lady Charm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book Of Ra" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book Of Ra', '//img.zhenqinghua.com/gameimages/landscape/ioheiiqk3xrc1.png' , 'ioheiiqk3xrc1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ioheiiqk3xrc1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book Of Ra">Book Of Ra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book Of Ra Deluxe" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book Of Ra Deluxe', '//img.zhenqinghua.com/gameimages/landscape/hf5hx8w9u1q3r.png' , 'hf5hx8w9u1q3r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/hf5hx8w9u1q3r.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book Of Ra Deluxe">Book Of Ra Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dolphin Pearl" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dolphin Pearl', '//img.zhenqinghua.com/gameimages/landscape/43bx3e7ywgukq.png' , '43bx3e7ywgukq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/43bx3e7ywgukq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dolphin Pearl">Dolphin Pearl</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sizzling Hot" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sizzling Hot', '//img.zhenqinghua.com/gameimages/landscape/ww3a8wsu4de7c.png' , 'ww3a8wsu4de7c', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ww3a8wsu4de7c.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sizzling Hot">Sizzling Hot</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen Of The Nile" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen Of The Nile', '//img.zhenqinghua.com/gameimages/landscape/8nsbhokge7nrk.png' , '8nsbhokge7nrk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/8nsbhokge7nrk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen Of The Nile">Queen Of The Nile</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Just Jewels" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Just Jewels', '//img.zhenqinghua.com/gameimages/landscape/satj3o6ya8dcq.png' , 'satj3o6ya8dcq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/satj3o6ya8dcq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Just Jewels">Just Jewels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Columbus" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Columbus', '//img.zhenqinghua.com/gameimages/landscape/aij68ciusna5c.png' , 'aij68ciusna5c', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/aij68ciusna5c.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Columbus">Columbus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Geisha" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Geisha', '//img.zhenqinghua.com/gameimages/landscape/qxoindypyeboy.png' , 'qxoindypyeboy', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/qxoindypyeboy.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Geisha">Geisha</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lord Of The Ocean" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lord Of The Ocean', '//img.zhenqinghua.com/gameimages/landscape/xmzfobaryz7xs.png' , 'xmzfobaryz7xs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/xmzfobaryz7xs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lord Of The Ocean">Lord Of The Ocean</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Neptune Treasure" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Neptune Treasure', '//img.zhenqinghua.com/gameimages/landscape/5ii9zgw5unc3h.png' , '5ii9zgw5unc3h', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/5ii9zgw5unc3h.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Neptune Treasure">Neptune Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Four Tigers" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Four Tigers', '//img.zhenqinghua.com/gameimages/landscape/rsjogw1ukbeic.png' , 'rsjogw1ukbeic', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/rsjogw1ukbeic.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Four Tigers">Four Tigers</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Four Dragons" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Four Dragons', '//img.zhenqinghua.com/gameimages/landscape/wykepsq659qp4.png' , 'wykepsq659qp4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/wykepsq659qp4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Four Dragons">Four Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Giant Panda" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Giant Panda', '//img.zhenqinghua.com/gameimages/landscape/q9gi4yybyadoe.png' , 'q9gi4yybyadoe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/q9gi4yybyadoe.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Giant Panda">Wild Giant Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="China" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'China', '//img.zhenqinghua.com/gameimages/landscape/dkzdo35rcipfs.png' , 'dkzdo35rcipfs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/dkzdo35rcipfs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="China">China</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lightning God" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lightning God', '//img.zhenqinghua.com/gameimages/landscape/1ru5x5zx7us6r.png' , '1ru5x5zx7us6r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/1ru5x5zx7us6r.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lightning God">Lightning God</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Enter The KTV" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Enter The KTV', '//img.zhenqinghua.com/gameimages/landscape/srd3xusx3ughr.png' , 'srd3xusx3ughr', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/srd3xusx3ughr.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Enter The KTV">Enter The KTV</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishen Riches" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishen Riches', '//img.zhenqinghua.com/gameimages/landscape/zygj7oqga9nck.png' , 'zygj7oqga9nck', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/zygj7oqga9nck.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Caishen Riches">Caishen Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chinese Boss" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chinese Boss', '//img.zhenqinghua.com/gameimages/landscape/7tccifcktqre1.png' , '7tccifcktqre1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/7tccifcktqre1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chinese Boss">Chinese Boss</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Journey To The West" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Journey To The West', '//img.zhenqinghua.com/gameimages/landscape/pxcw1fyibefoo.png' , '8kzbot4rew7ds', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/pxcw1fyibefoo.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Journey To The West">Journey To The West</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Fairies" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Fairies', '//img.zhenqinghua.com/gameimages/landscape/1wt58azdhdo6c.png' , '1wt58azdhdo6c', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/1wt58azdhdo6c.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Fairies">Wild Fairies</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Rooster" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Rooster', '//img.zhenqinghua.com/gameimages/landscape/7cz37fritkfao.png' , '7cz37fritkfao', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/7cz37fritkfao.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Rooster">Lucky Rooster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Power Stars" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Power Stars', '//img.zhenqinghua.com/gameimages/landscape/hcu3p8r71kj3y.png' , 'hcu3p8r71kj3y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/hcu3p8r71kj3y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Power Stars">Power Stars</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tai Shang Lao Jun" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tai Shang Lao Jun', '//img.zhenqinghua.com/gameimages/landscape/dxxsh3dfmjpio.png' , 'dxxsh3dfmjpio', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/dxxsh3dfmjpio.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tai Shang Lao Jun">Tai Shang Lao Jun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peach Banquet" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peach Banquet', '//img.zhenqinghua.com/gameimages/landscape/s77hiogba5dhe.png' , 's77hiogba5dhe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/s77hiogba5dhe.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Peach Banquet">Peach Banquet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Third Prince's Journey" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Third Prince&amp;quot;amp;s Journey', '//img.zhenqinghua.com/gameimages/landscape/bzgza4umpbwsh.png' , 'bzgza4umpbwsh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/bzgza4umpbwsh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Third Prince's Journey">Third Prince's Journey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Witch's Brew" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Witch&amp;quot;amp;s Brew', '//img.zhenqinghua.com/gameimages/landscape/bmr8675wqiigs.png' , 'bmr8675wqiigs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/bmr8675wqiigs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Witch's Brew">Witch's Brew</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hercules" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hercules', '//img.zhenqinghua.com/gameimages/landscape/jsguaktmfyw1h.png' , 'jsguaktmfyw1h', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/jsguaktmfyw1h.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hercules">Hercules</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Archer" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Archer', '//img.zhenqinghua.com/gameimages/landscape/wfo7bzs95uq7r.png' , 'wfo7bzs95uq7r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/wfo7bzs95uq7r.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Archer">Archer</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen', '//img.zhenqinghua.com/gameimages/landscape/gd3rn1kqj7gr4.png' , 'gd3rn1kqj7gr4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/gd3rn1kqj7gr4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen">Queen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Panda" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Panda', '//img.zhenqinghua.com/gameimages/landscape/tbfxuhxs694xk.png' , 'tbfxuhxs694xk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/tbfxuhxs694xk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Panda">Lucky Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Drum" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Drum', '//img.zhenqinghua.com/gameimages/landscape/wpu7pzg74mj7y.png' , 'wpu7pzg74mj7y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/wpu7pzg74mj7y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Drum">Lucky Drum</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Dragon" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Dragon', '//img.zhenqinghua.com/gameimages/landscape/9w6aa6u5xbhzh.png' , '9w6aa6u5xbhzh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/9w6aa6u5xbhzh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Dragon">Golden Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Five Tiger Generals" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Five Tiger Generals', '//img.zhenqinghua.com/gameimages/landscape/j6j1rkbjfaz1a.png' , 'j6j1rkbjfaz1a', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/j6j1rkbjfaz1a.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Five Tiger Generals">Five Tiger Generals</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa Surprise" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa Surprise', '//img.zhenqinghua.com/gameimages/landscape/ufc6t3z8hu17w.png' , 'ufc6t3z8hu17w', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ufc6t3z8hu17w.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa Surprise">Santa Surprise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fei Long Zai Tian" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fei Long Zai Tian', '//img.zhenqinghua.com/gameimages/landscape/o3nxzh9o685xq.png' , 'o3nxzh9o685xq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/o3nxzh9o685xq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fei Long Zai Tian">Fei Long Zai Tian</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zhao Cai Jin Bao" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zhao Cai Jin Bao', '//img.zhenqinghua.com/gameimages/landscape/aodmmxp1sqamn.png' , 'aodmmxp1sqamn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/aodmmxp1sqamn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zhao Cai Jin Bao">Zhao Cai Jin Bao</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Arctic Treasure" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Arctic Treasure', '//img.zhenqinghua.com/gameimages/landscape/7rw3tfwz11kaw.png' , '7rw3tfwz11kaw', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/7rw3tfwz11kaw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Arctic Treasure">Arctic Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Spirit" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Spirit', '//img.zhenqinghua.com/gameimages/landscape/itzp5iqk3xrc1.png' , 'itzp5iqk3xrc1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/itzp5iqk3xrc1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Spirit">Wild Spirit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Power Flame" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Power Flame', '//img.zhenqinghua.com/gameimages/landscape/3yfmucpss64mk.png' , '3yfmucpss64mk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/3yfmucpss64mk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Power Flame">Dragon Power Flame</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Phoenix 888" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Phoenix 888', '//img.zhenqinghua.com/gameimages/landscape/d8cso3u8ct1iw.png' , 'd8cso3u8ct1iw', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/d8cso3u8ct1iw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Phoenix 888">Phoenix 888</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lions Dance" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lions Dance', '//img.zhenqinghua.com/gameimages/landscape/wtupmzq14xepn.png' , 'wtupmzq14xepn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/wtupmzq14xepn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lions Dance">Lions Dance</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dynamite Reels" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dynamite Reels', '//img.zhenqinghua.com/gameimages/landscape/8u9r4tj48chd1.png' , '8u9r4tj48chd1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/8u9r4tj48chd1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dynamite Reels">Dynamite Reels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Empress Regnant" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Empress Regnant', '//img.zhenqinghua.com/gameimages/landscape/o7f9ih8t6559e.png' , 'o7f9ih8t6559e', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/o7f9ih8t6559e.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Empress Regnant">Empress Regnant</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bushido Blade" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bushido Blade', '//img.zhenqinghua.com/gameimages/landscape/86burqb38a9ua.png' , '86burqb38a9ua', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/86burqb38a9ua.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bushido Blade">Bushido Blade</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crypto Mania" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crypto Mania', '//img.zhenqinghua.com/gameimages/landscape/4akkze7ywgukq.png' , '4akkze7ywgukq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/4akkze7ywgukq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crypto Mania">Crypto Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky God Progressive 2" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky God Progressive 2', '//img.zhenqinghua.com/gameimages/landscape/3hj4fkfji4z4a.png' , '3hj4fkfji4z4a', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/3hj4fkfji4z4a.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky God Progressive 2">Lucky God Progressive 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captains Treasure Progressive" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captains Treasure Progressive', '//img.zhenqinghua.com/gameimages/landscape/awn5jciusna5c.png' , 'awn5jciusna5c', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/awn5jciusna5c.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captains Treasure Progressive">Captains Treasure Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SilverBullet Progressive" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SilverBullet Progressive', '//img.zhenqinghua.com/gameimages/landscape/ruufkzk1kpefn.png' , 'ruufkzk1kpefn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ruufkzk1kpefn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SilverBullet Progressive">SilverBullet Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Rooster" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Rooster', '//img.zhenqinghua.com/gameimages/landscape/jpiuhpbifei1o.png' , 'jpiuhpbifei1o', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/jpiuhpbifei1o.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Rooster">Golden Rooster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happy Buddha" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happy Buddha', '//img.zhenqinghua.com/gameimages/landscape/55hj8ghaugxj6.png' , '55hj8ghaugxj6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/55hj8ghaugxj6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happy Buddha">Happy Buddha</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mulan" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mulan', '//img.zhenqinghua.com/gameimages/landscape/bcizh7dipjiso.png' , 'bcizh7dipjiso', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/bcizh7dipjiso.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mulan">Mulan</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Water Margin" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Water Margin', '//img.zhenqinghua.com/gameimages/landscape/foff4ikkjprr1.png' , 'foff4ikkjprr1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/foff4ikkjprr1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Water Margin">Water Margin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Island" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Island', '//img.zhenqinghua.com/gameimages/landscape/ywozehuuqbazc.png' , 'ywozehuuqbazc', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ywozehuuqbazc.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Island">Golden Island</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Island" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Island', '//img.zhenqinghua.com/gameimages/landscape/xbxy1yegyhnyk.png' , 'xbxy1yegyhnyk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/xbxy1yegyhnyk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle Island">Jungle Island</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Phoenix" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Phoenix', '//img.zhenqinghua.com/gameimages/landscape/w4ypzw6o48mpq.png' , 'w4ypzw6o48mpq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/w4ypzw6o48mpq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Phoenix">Dragon Phoenix</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egypt Queen" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egypt Queen', '//img.zhenqinghua.com/gameimages/landscape/igg7tisz4ukhw.png' , 'igg7tisz4ukhw', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/igg7tisz4ukhw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egypt Queen">Egypt Queen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roma" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roma', '//img.zhenqinghua.com/gameimages/landscape/5m6k9j7rwspjs.png' , '5m6k9j7rwspjs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/5m6k9j7rwspjs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roma">Roma</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aladdin" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aladdin', '//img.zhenqinghua.com/gameimages/landscape/113qm5xnhxoqn.png' , '113qm5xnhxoqn', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/113qm5xnhxoqn.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aladdin">Aladdin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Supreme Caishen" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Supreme Caishen', '//img.zhenqinghua.com/gameimages/landscape/byz81hmsq748k.png' , 'byz81hmsq748k', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/byz81hmsq748k.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Supreme Caishen">Supreme Caishen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Monkey King" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Monkey King', '//img.zhenqinghua.com/gameimages/landscape/9mqe9bhroi78s.png' , '9mqe9bhroi78s', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/9mqe9bhroi78s.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Monkey King">Golden Monkey King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Miami" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Miami', '//img.zhenqinghua.com/gameimages/landscape/tqi9778i7mi6o.png' , 'tqi9778i7mi6o', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/tqi9778i7mi6o.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Miami">Miami</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey King" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey King', '//img.zhenqinghua.com/gameimages/landscape/9upe5bm4xph81.png' , '9upe5bm4xph81', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/9upe5bm4xph81.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monkey King">Monkey King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="HighwayKings Progressive" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'HighwayKings Progressive', '//img.zhenqinghua.com/gameimages/landscape/nh9swadbc3use.png' , 'nh9swadbc3use', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/nh9swadbc3use.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="HighwayKings Progressive">HighwayKings Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Robin Hood" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Robin Hood', '//img.zhenqinghua.com/gameimages/landscape/i4rc816e388c6.png' , 'i4rc816e388c6', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/i4rc816e388c6.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Robin Hood">Robin Hood</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Egypt" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Egypt', '//img.zhenqinghua.com/gameimages/landscape/naagsa5ycfugq.png' , 'naagsa5ycfugq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/naagsa5ycfugq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Egypt">Ancient Egypt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mammamia" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mammamia', '//img.zhenqinghua.com/gameimages/landscape/9xpa7brfxj7zo.png' , '9xpa7brfxj7zo', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/9xpa7brfxj7zo.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mammamia">Mammamia</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky God Progressive" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky God Progressive', '//img.zhenqinghua.com/gameimages/landscape/ef1uyxt98o6ur.png' , 'ef1uyxt98o6ur', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ef1uyxt98o6ur.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky God Progressive">Lucky God Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="White Snake" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'White Snake', '//img.zhenqinghua.com/gameimages/landscape/u17q53q45xcp1.png' , 'u17q53q45xcp1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/u17q53q45xcp1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="White Snake">White Snake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alice" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alice', '//img.zhenqinghua.com/gameimages/landscape/kia1eetdryo1c.png' , 'kia1eetdryo1c', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/kia1eetdryo1c.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alice">Alice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Beanstalk" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Beanstalk', '//img.zhenqinghua.com/gameimages/landscape/ne4gq55cpitgg.png' , 'ne4gq55cpitgg', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ne4gq55cpitgg.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Beanstalk">Beanstalk</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Huga" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Huga', '//img.zhenqinghua.com/gameimages/landscape/pirtanombyroh.png' , 'pirtanombyroh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/pirtanombyroh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Huga">Huga</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="MoneyBangBang" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'MoneyBangBang', '//img.zhenqinghua.com/gameimages/landscape/k3anse3yrrunq.png' , 'k3anse3yrrunq', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/k3anse3yrrunq.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="MoneyBangBang">MoneyBangBang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pan Jin Lian" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pan Jin Lian', '//img.zhenqinghua.com/gameimages/landscape/79mafnrjt48aa.png' , '79mafnrjt48aa', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/79mafnrjt48aa.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pan Jin Lian">Pan Jin Lian</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain's Treasure Pro" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain&amp;quot;amp;s Treasure Pro', '//img.zhenqinghua.com/gameimages/landscape/qieoeyodyyyoc.png' , 'qieoeyodyyyoc', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/qieoeyodyyyoc.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain's Treasure Pro">Captain's Treasure Pro</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thai Paradise" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thai Paradise', '//img.zhenqinghua.com/gameimages/landscape/5864tji8w113w.png' , '5864tji8w113w', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/5864tji8w113w.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thai Paradise">Thai Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Football" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Football', '//img.zhenqinghua.com/gameimages/landscape/s6xhiogba5dhe.png' , 's6xhiogba5dhe', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/s6xhiogba5dhe.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Football">Football</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bonus Bear" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bonus Bear', '//img.zhenqinghua.com/gameimages/landscape/bwwza4umpbwsh.png' , 'bwwza4umpbwsh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/bwwza4umpbwsh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bonus Bear">Bonus Bear</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain's Treasure" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain&amp;quot;amp;s Treasure', '//img.zhenqinghua.com/gameimages/landscape/bes8675wqiigs.png' , 'bes8675wqiigs', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/bes8675wqiigs.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain's Treasure">Captain's Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Silver Bullet" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Silver Bullet', '//img.zhenqinghua.com/gameimages/landscape/z1pc5tp4zqhm1.png' , 'z1pc5tp4zqhm1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/z1pc5tp4zqhm1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Silver Bullet">Silver Bullet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Blue" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Blue', '//img.zhenqinghua.com/gameimages/landscape/t656f48j75z6a.png' , 't656f48j75z6a', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/t656f48j75z6a.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Blue">Great Blue</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panther Moon" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panther Moon', '//img.zhenqinghua.com/gameimages/landscape/u6d7fsg355x7a.png' , 'u6d7fsg355x7a', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/u6d7fsg355x7a.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Panther Moon">Panther Moon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari Heat" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari Heat', '//img.zhenqinghua.com/gameimages/landscape/4d5kdkpqi6sk4.png' , '4d5kdkpqi6sk4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/4d5kdkpqi6sk4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Safari Heat">Safari Heat</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sparta" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sparta', '//img.zhenqinghua.com/gameimages/landscape/jbzd1cjsgh4dk.png' , 'jbzd1cjsgh4dk', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/jbzd1cjsgh4dk.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sparta">Sparta</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Azteca" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Azteca', '//img.zhenqinghua.com/gameimages/landscape/oqt9p9876m39y.png' , 'oqt9p9876m39y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/oqt9p9876m39y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Azteca">Azteca</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="A Night Out" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'A Night Out', '//img.zhenqinghua.com/gameimages/landscape/69xaiyrbo4dae.png' , '69xaiyrbo4dae', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/69xaiyrbo4dae.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="A Night Out">A Night Out</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Highway Kings" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Highway Kings', '//img.zhenqinghua.com/gameimages/landscape/axt5pxf7sk35y.png' , 'axt5pxf7sk35y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/axt5pxf7sk35y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Highway Kings">Highway Kings</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dolphin Reef" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dolphin Reef', '//img.zhenqinghua.com/gameimages/landscape/rh8iwwntk3mie.png' , 'rh8iwwntk3mie', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/rh8iwwntk3mie.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dolphin Reef">Dolphin Reef</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky God" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky God', '//img.zhenqinghua.com/gameimages/landscape/dhdirsn3m3xia.png' , 'dhdirsn3m3xia', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/dhdirsn3m3xia.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky God">Lucky God</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie', '//img.zhenqinghua.com/gameimages/landscape/1q36p58phmt6y.png' , '1q36p58phmt6y', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/1q36p58phmt6y.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie">Genie</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="African" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'African', '//img.zhenqinghua.com/gameimages/landscape/xtpy4bx49xhx1.png' , 'xtpy4bx49xhx1', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/xtpy4bx49xhx1.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="African">African</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happy Party" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happy Party', '//img.zhenqinghua.com/gameimages/landscape/ebudnqj68h6d4.png' , 'ebudnqj68h6d4', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/ebudnqj68h6d4.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happy Party">Happy Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ocean Paradise" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ocean Paradise', '//img.zhenqinghua.com/gameimages/landscape/kf41ymtxfos1r.png' , 'kf41ymtxfos1r', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/kf41ymtxfos1r.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ocean Paradise">Ocean Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thunder God" data-filter="ALL,Slot,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thunder God', '//img.zhenqinghua.com/gameimages/landscape/8rqwot18etnuw.png' , '8rqwot18etnuw', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/8rqwot18etnuw.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thunder God">Thunder God</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Kingdoms Quest" data-filter="ALL,Slot" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Kingdoms Quest', '//img.zhenqinghua.com/gameimages/landscape/fwria11mjbrwh.png' , 'fwria11mjbrwh', '' )" style="">

          <div class="content-wrapper">
              
                        <img class="lazy" data-src="//img.zhenqinghua.com/gameimages/landscape/fwria11mjbrwh.png" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Kingdoms Quest">Three Kingdoms Quest</h5>
        </a>
        
     
  </div>

</div>


@endsection
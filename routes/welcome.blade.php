
<body>

    <header class="header" id="header-desktop">

        <div id="pageLoadingBar" class="progress-bar progress-bar-success" role="progressbar" style="height:4px;width:1%;position:absolute;z-index:999;"></div>
        <div class="container-fluid">
            <div class="header__container">
                <div class="container-item">
                    <div class="header-marquee">
                        <marquee class="marquee">
                            SELAMAT DATANG DI SANGSLOT88. SELALU KONFIRMASI REKENING TUJUAN DEPOSIT SANGSLOT88. JIKA TRANSFER KE REKENING YANG TIDAK TERTERA, MAKA TIDAK BISA DI PROSES. SALAM JACKPOT BOSKU ^^
                        </marquee>
                    </div>
                </div>
                <div class="container-item">
                    <div class="header-form">
                        <div class="form-button">
                            <button class="btn-login" type="button" type="button" data-toggle="modal" data-target="#loginModal">Masuk</button>
                            <button class="btn-register" onclick="window.location.href = 'register.html'">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    @include('layouts.mpo.sidenav')
    <div class="header-mobile">
        <div class="header-mobile__marquee">
            <i class="fas fa-bullhorn"></i>
            <marquee class="marquee">SELAMAT DATANG DI SANGSLOT88. SELALU KONFIRMASI REKENING TUJUAN DEPOSIT SANGSLOT88. JIKA TRANSFER KE REKENING YANG TIDAK TERTERA, MAKA TIDAK BISA DI PROSES. SALAM JACKPOT BOSKU ^^</marquee>
        </div>
        <div class="header-mobile__top">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="../images.linkcdn.cloud/V2/638/logo/logo-97556211.png" alt="WebsiteLogo" width="125" height="27">
                </a>
            </div>
            <div class="mobile-right">
                <div class="mobile-button">
                    <button class="btn-login btn-custom-sm" type="button" type="button" data-toggle="modal" data-target="#loginModal">Masuk</button>
                    <button class="btn-register btn-custom-sm" onclick="window.location.href = 'register.html'">Daftar</button>
                </div>
                <div class="mobile-menu sidenav-open">
                    <div class="mobile-menu--line">

                    </div>
                </div>
            </div>
        </div>
        <div id="mobilePageLoadingBar" class="progress-bar progress-bar-success" role="progressbar" style="height:4px;width:1%;position:absolute;z-index:999;display:none;"></div>
    </div>
    <div id="overlay"></div>
    <div class="sidenav" id="mobile-sidenav">
        <div class="sidenav-close">
            <i class="fas fa-times"></i>
        </div>
        <div class="sidenav__logo">
            <a href="index.html">
                <img src="../images.linkcdn.cloud/V2/638/logo/logo-97556211.png" alt="WebsiteLogo" width="125" height="27">
            </a>
        </div>

        <div class="sidenav__list">
            <a class="list-link" href="index.html">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/home.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">Home</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/slot')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/slot.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">SLOT</div>
                </div>
            </a>
            <a class="list-link" href="register.html" onclick="routeNav('/sportsbook')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/sport.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">SPORT</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/casino')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/casino.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">CASINO</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/fishing')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/fishing.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">FISHING</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/lottery')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/lottery.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">LOTTERY</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/poker')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/poker.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">POKER</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/others')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/other.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">OTHER</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/promotion')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/promosi.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">Promo</div>
                </div>
            </a>
            <a class="list-link" href="javascript:;" onclick="routeNav('/news')">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/berita.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">Berita</div>
                </div>
            </a>
            <a class="list-link" href="help.html">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/help.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">Bantuan</div>
                </div>
            </a>
            <a class="list-link" href="contact.html">
                <div class="list-item">
                    <div class="item-icon">
                        <img src="themes/3/img/theme3-icons/kontak.svg" width="30" height="30" alt="">
                    </div>
                    <div class="item-name">Kontak Kami</div>
                </div>
            </a>
        </div>
        <div class="sidenav__download">
            <div class="download-icon">
                <img src="../images.linkcdn.cloud/V2/638/favicon/favicon-612656406.png" width="40" height="40" alt="android">
            </div>
            <div class="download-title">
                <h5>Sangslot88</h5>
                <h6>DOWNLOAD SEKARANG</h6>
            </div>
            <div class="download-button">
                <a class="btn-custom-sm" href="#">Download</a>
            </div>
        </div>
        <div class="sidenav__lang">
            <button class="btn-currency" id="sidenav-currency" data-toggle="modal" data-target="#currencyModal">Rupiah</button>
            <button class="btn-language" id="sidenav-lang" data-toggle="modal" data-target="#languageModal">
                <span>Indonesia</span>
                <img class="flag-image" src="../images.linkcdn.cloud/global/default/icon/lang/indonesia.png">
            </button>
        </div>
        <div class="sidenav__bottom">
            <button class="btn-login btn-custom-sm" type="button" type="button" data-toggle="modal" data-target="#loginModal">Masuk</button>
            <button class="btn-register btn-custom-sm" onclick="window.location.href = 'register.html'">Daftar</button>
        </div>


    </div>


    <!-- Account Balance -->

    <!-- Language Modal -->
    <div class="modal fade custom-popup" id="languageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="language-header">
                    <h3>Region and Language</h3>
                    <div class="header-flag">
                        <img src="../images.linkcdn.cloud/global/default/icon/lang/indonesia.png">
                        <h6>Indonesia</h6>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="language-list">
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/english.png">
                                </div>
                                <div class="item-content">
                                    <h5>English</h5>
                                </div>
                            </div>
                        </a>
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/indonesia.png">
                                </div>
                                <div class="item-content">
                                    <h5>Indonesia</h5>
                                </div>
                            </div>
                        </a>
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/thai.png">
                                </div>
                                <div class="item-content">
                                    <h5>Thailand</h5>
                                </div>
                            </div>
                        </a>
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/vietnam.png">
                                </div>
                                <div class="item-content">
                                    <h5>Viet</h5>
                                </div>
                            </div>
                        </a>
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/cambodia.png">
                                </div>
                                <div class="item-content">
                                    <h5>Khmer</h5>
                                </div>
                            </div>
                        </a>
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/chinese.png">
                                </div>
                                <div class="item-content">
                                    <h5>Chinese</h5>
                                </div>
                            </div>
                        </a>
                        <a href="index.html">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="../images.linkcdn.cloud/global/default/icon/lang/philippines.png">
                                </div>
                                <div class="item-content">
                                    <h5>Tagalog</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Currency Modal -->
    <div class="modal fade custom-popup" id="currencyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="language-header">
                    <h3>Currency</h3>
                    <div class="header-flag">
                        <h6>Rupiah</h6>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="language-list">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main-route">
        <div class="main-content home">
            <section class="home__slider">
                <div class="container-fluid">
                    
                </div>
            </section>

            <section class="home__category">
                <div class="container-fluid">
                    <div class="home__category-cont">
                        <a href="register.html" onclick="routeNav('/slot')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/slot.png">
                                    <div class="item-name">Slot</div>
                                </div>
                            </div>
                        </a>
                        <a href="register.html" onclick="routeNav('/sportsbook')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/sport.png">
                                    <div class="item-name">Sportsbook</div>
                                </div>
                            </div>
                        </a>
                        <a href="register.html" onclick="routeNav('/casino')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/casino.png">
                                    <div class="item-name">Casino</div>
                                </div>
                            </div>
                        </a>
                        <a href="register.html" onclick="routeNav('/fishing')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/fishing.png">
                                    <div class="item-name">Fishing</div>
                                </div>
                            </div>
                        </a>
                        <a href="register.html" onclick="routeNav('/lottery')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/lottery.png">
                                    <div class="item-name">Lottery</div>
                                </div>
                            </div>
                        </a>
                        <a href="register.html" onclick="routeNav('/poker')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/poker.png">
                                    <div class="item-name">Poker</div>
                                </div>
                            </div>
                        </a>
                        <a href="register.html" onclick="routeNav('/others')">
                            <div class="category-item">
                                <div class="item-image">
                                    <img src="custom/img/header/other.png">
                                    <div class="item-name">Game Lain</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="home__game">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="game-container">
                                <div class="game-title">
                                    <h6>Game Terpopuler</h6>
                                </div>
                                <div class="game-container__popular">
                                    <div class="swiper-container home-popular-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-favorit/populer/S-RH02.jpg" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Royale House</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-list/slot/playstar/PSS-ON-00141.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Mahjong Ways 3</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-list/slot/playstar/PSS-ON-00146.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Mahjong Ways 3+</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../mpoplay-tw.pragmaticplay.net/game_pic/rec/325/vs20starlight.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Starlight Princess</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../mpoplay-tw.pragmaticplay.net/game_pic/rec/325/vs20olympgate.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Gates of Olympus</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="https://images.linkcdn.cloud/global/popular-games/vs5aztecgems.webp" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Aztec Gems </div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../mpoplay-sg34.pragmaticplay.net/game_pic/rec/325/vs20gatotgates.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Gates of Gatot Kaca</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-favorit/populer/5m6k9j7rwspjs.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Roma</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-favorit/populer/133.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Good Fortune M</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-favorit/populer/xq9ohbyf9m79o.png" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Fish Hunter : Bird Hunter</div>
                                                </a>
                                            </div>
                                            <div class="games-holder swiper-slide">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;" onclick="gameAlert()">
                                                    <div class="games-img">
                                                        <img src="../images.linkcdn.cloud/global/game-favorit/populer/S-LK03.jpg" width="110" height="80">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Legacy Of Kong Maxways</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="game-navigation">
                                    <div class="action-navigation">
                                        <button class="navigation-prev--popular">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <button class="navigation-next--popular">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="game-container">
                                <div class="game-title">
                                    <h6>Slot</h6>
                                </div>
                                <div class="game-container__category">
                                    <div class="swiper-container home-slot-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/pragmaticplay')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="PRAGMATIC PLAY" alt="PRAGMATIC PLAY" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/pra.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">PRAGMATIC PLAY</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/ais')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="AIS GAMING" alt="AIS GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/aisg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">AIS GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/playstar')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="PLAYSTAR" alt="PLAYSTAR" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/pls.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">PLAYSTAR</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/spadegaming')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="SPADE GAMING" alt="SPADE GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/spd.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">SPADE GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/pgsoft')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="PG SOFT" alt="PG SOFT" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/pgs.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">PG SOFT</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/advantplay')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="ADVANTPLAY" alt="ADVANTPLAY" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/adv.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">ADVANTPLAY</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="gameAlert('/slot/joker')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="JOKER GAMING" alt="JOKER GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/jok.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">JOKER GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/cq9')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="CQ9 GAMING" alt="CQ9 GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/cq9.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">CQ9 GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/habanero')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="HABANERO" alt="HABANERO" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/hbn.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">HABANERO</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/fastspin')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="FASTSPIN" alt="FASTSPIN" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/fsp.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">FASTSPIN</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/jili')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="JILI" alt="JILI" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/jli.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">JILI</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/redtiger')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="RED TIGER" alt="RED TIGER" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/rtr.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">RED TIGER</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/nolimitcity')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="NOLIMIT CITY" alt="NOLIMIT CITY" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/nlc.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">NOLIMIT CITY</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/viva')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="VIVA" alt="VIVA" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/viv.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">VIVA</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/hcgaming')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="HC GAME" alt="HC GAME" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/hcg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">HC GAME</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/afbgaming')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="AFB GAMING" alt="AFB GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/afg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">AFB GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/virtualtech')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="VIRTUAL TECH" alt="VIRTUAL TECH" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/vrt.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">VIRTUAL TECH</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="YGGDRASIL" alt="YGGDRASIL" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/ygg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-cogs"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Game Maintenance</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/ameba')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="AMEBA" alt="AMEBA" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/amb.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">AMEBA</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/ttg')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="TOP TREND GAMING" alt="TOP TREND GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/ttg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">TOP TREND GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/microgaming')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="MICROGAMING" alt="MICROGAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/mic.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">MICROGAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="PLAYTECH SLOT" alt="PLAYTECH SLOT" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/pla.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">PLAYTECH SLOT</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/playngo')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="PLAY N GO" alt="PLAY N GO" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/png.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">PLAY N GO</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/hydako')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="HYDAKO" alt="HYDAKO" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/hyd.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">HYDAKO</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a onclick="routeNav('/slot/n2liveslot')" href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="N2LIVE SLOT" alt="N2LIVE SLOT" src="https://images.linkcdn.cloud/global/game-skin3/banner/slot/nli.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">N2LIVE SLOT</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="game-navigation">
                                    <div class="action-navigation">
                                        <button class="navigation-prev--slot">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <button class="navigation-next--slot">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="game-container">
                                <div class="game-title">
                                    <h6>Casino</h6>
                                </div>
                                <div class="game-container__category">
                                    <div class="swiper-container home-casino-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="AFB CASINO" alt="AFB CASINO" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/afb.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">AFB CASINO</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="PRAGMATIC PLAY LC" alt="PRAGMATIC PLAY LC" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/plc.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">PRAGMATIC PLAY LC</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="GD88" alt="GD88" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/gd8.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">GD88</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="WM CASINO" alt="WM CASINO" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/wmc.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">WM CASINO</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="OG CASINO" alt="OG CASINO" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/ogs.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">OG CASINO</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="EVOLUTION" alt="EVOLUTION" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/evo.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">EVOLUTION</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="EBET" alt="EBET" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/ebe.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">EBET</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;">
                                                    <div class="slide-img">
                                                        <img title="ALLBET" alt="ALLBET" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/alb.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-cogs"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">Game Maintenance</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="DREAM GAMING" alt="DREAM GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/drg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">DREAM GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="ASIA GAMING" alt="ASIA GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/agc.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">ASIA GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="SEXY GAMING" alt="SEXY GAMING" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/seg.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">SEXY GAMING</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="LG88" alt="LG88" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/lg8.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">LG88</div>
                                                </a>
                                            </div>
                                            <div class="game-holder swiper-slide">
                                                <a href="javascript:;" onclick="gameAlert()">
                                                    <div class="slide-img">
                                                        <img title="N2LIVE" alt="N2LIVE" src="https://images.linkcdn.cloud/global/game-skin3/banner/casino/nli.webp">
                                                        <div class="hover-play">
                                                            <i class="fas fa-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="games-name">N2LIVE</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="game-navigation">
                                    <div class="action-navigation">
                                        <button class="navigation-prev--casino">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <button class="navigation-next--casino">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="game-container">
                                <div class="game-title">
                                    <h6>Sistem Pembayaran</h6>
                                </div>
                                <div class="game-container__payment">
                                    <div class="swiper-container home-payment-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/other.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bca.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bni.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="../images.linkcdn.cloud/global/payment/V2/IDR/bank/bri.png">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/dana.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/gopay_color.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/linkaja.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/mandiri_color.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/ovo.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="https://images.linkcdn.cloud/global/payment/V2/IDR/phonecredit/telkomsel.webp">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bank-item">
                                                    <img src="../images.linkcdn.cloud/global/payment/V2/IDR/bank/xl.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="game-navigation">
                                    <div class="action-navigation">
                                        <button class="navigation-prev--payment">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <button class="navigation-next--payment">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="game-container">
                                <div class="game-title">
                                    <h6>Provider</h6>
                                </div>
                                <div class="game-container__provider">
                                    <div class="swiper-container home-provider-swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PRAGMATIC PLAY" title="PRAGMATIC PLAY" src="../images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="AIS GAMING" title="AIS GAMING" src="https://images.linkcdn.cloud/global/logo-footer/slot/aisg_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PLAYSTAR" title="PLAYSTAR" src="../images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="SPADE GAMING" title="SPADE GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PG SOFT" title="PG SOFT" src="../images.linkcdn.cloud/global/logo-footer/slot/pgs_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="ADVANTPLAY" title="ADVANTPLAY" src="../images.linkcdn.cloud/global/logo-footer/slot/adv_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="JOKER GAMING" title="JOKER GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="CQ9 GAMING" title="CQ9 GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="HABANERO" title="HABANERO" src="../images.linkcdn.cloud/global/logo-footer/slot/hbn_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="FASTSPIN" title="FASTSPIN" src="../images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="JILI" title="JILI" src="https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="RED TIGER" title="RED TIGER" src="https://images.linkcdn.cloud/global/logo-footer/slot/rtr_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="NOLIMIT CITY" title="NOLIMIT CITY" src="../images.linkcdn.cloud/global/logo-footer/slot/nlc_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="VIVA" title="VIVA" src="https://images.linkcdn.cloud/global/logo-footer/slot/viva_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="HC GAME" title="HC GAME" src="../images.linkcdn.cloud/global/logo-footer/slot/hcg_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="AFB GAMING" title="AFB GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/afg_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="VIRTUAL TECH" title="VIRTUAL TECH" src="../images.linkcdn.cloud/global/logo-footer/slot/vrt_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="YGGDRASIL" title="YGGDRASIL" src="https://images.linkcdn.cloud/global/logo-footer/slot/ygg_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="AMEBA" title="AMEBA" src="../images.linkcdn.cloud/global/logo-footer/slot/amb_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="TOP TREND GAMING" title="TOP TREND GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/ttg_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="MICROGAMING" title="MICROGAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/micro_logo.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PLAYTECH SLOT" title="PLAYTECH SLOT" src="../images.linkcdn.cloud/global/logo-footer/slot/pla_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PLAY N GO" title="PLAY N GO" src="../images.linkcdn.cloud/global/logo-footer/slot/png_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="HYDAKO" title="HYDAKO" src="../images.linkcdn.cloud/global/logo-footer/slot/hyd_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="N2LIVE SLOT" title="N2LIVE SLOT" src="../images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="AFB88" title="AFB88" src="../images.linkcdn.cloud/global/logo-footer/sports/afb_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="IA E-SPORT" title="IA E-SPORT" src="../images.linkcdn.cloud/global/logo-footer/sports/iae_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="SBO SPORT" title="SBO SPORT" src="../images.linkcdn.cloud/global/logo-footer/sports/sbo_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="CMD368" title="CMD368" src="../images.linkcdn.cloud/global/logo-footer/sports/cmd_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PINNACLE" title="PINNACLE" src="https://images.linkcdn.cloud/global/logo-footer/sports/pin_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="M88 SPORTS" title="M88 SPORTS" src="https://images.linkcdn.cloud/global/logo-footer/sports/m88_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="AFB CASINO" title="AFB CASINO" src="https://images.linkcdn.cloud/global/logo-footer/casino/afc_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PRAGMATIC PLAY LC" title="PRAGMATIC PLAY LC" src="../images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="GD88" title="GD88" src="../images.linkcdn.cloud/global/logo-footer/casino/gd8_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="WM CASINO" title="WM CASINO" src="../images.linkcdn.cloud/global/logo-footer/casino/wmc_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="OG CASINO" title="OG CASINO" src="../images.linkcdn.cloud/global/logo-footer/casino/ogs_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="EVOLUTION" title="EVOLUTION" src="https://images.linkcdn.cloud/global/logo-footer/casino/evolution_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="EBET" title="EBET" src="../images.linkcdn.cloud/global/logo-footer/casino/ebe_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="ALLBET" title="ALLBET" src="../images.linkcdn.cloud/global/logo-footer/casino/alb_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="DREAM GAMING" title="DREAM GAMING" src="../images.linkcdn.cloud/global/logo-footer/casino/drg_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="ASIA GAMING" title="ASIA GAMING" src="../images.linkcdn.cloud/global/logo-footer/casino/agc_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="SEXY GAMING" title="SEXY GAMING" src="../images.linkcdn.cloud/global/logo-footer/casino/seg_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="LG88" title="LG88" src="../images.linkcdn.cloud/global/logo-footer/casino/lg8_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="N2LIVE" title="N2LIVE" src="../images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="JOKER GAMING" title="JOKER GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="SPADE GAMING" title="SPADE GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="PLAYSTAR" title="PLAYSTAR" src="../images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="FASTSPIN" title="FASTSPIN" src="../images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="JILI" title="JILI" src="https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="CQ9" title="CQ9" src="../images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="4D" title="4D" src="../images.linkcdn.cloud/global/logo-footer/lottery/togel_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="WE1POKER" title="WE1POKER" src="../images.linkcdn.cloud/global/logo-footer/poker/we1_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="SPACEMAN" title="SPACEMAN" src="https://images.linkcdn.cloud/global/logo-footer/casino/spaceman_footer.webp" width="100" height="50">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="provider-icon">
                                                    <img alt="SV388 COCKFIGHT" title="SV388 COCKFIGHT" src="../images.linkcdn.cloud/global/logo-footer/others/sv3_footer.png" width="100" height="50">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="game-navigation">
                                    <div class="action-navigation">
                                        <button class="navigation-prev--provider">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <button class="navigation-next--provider">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home__seo">
                <div class="container-fluid">
                    <div class="game__seo">
                        <div hidden id="title-seo">{{ $setting->nama_web }} : Situs MPO Slot Gacor , Aman , Seindonesia</div>
                        <div class="seo-content showFooter" style="height: 970px; overflow:hidden;">
                            <div class="footer-body text-center">
                                <h1 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><strong style="color: rgb(255, 255, 255);">{{ $setting->nama_web }}: Agen Judi Slot Online Deposit Dana Terpercaya 2023</strong></h1>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);"><a href="#" data-mce-href="#" style="">{{ $setting->nama_web }}</a>&nbsp;adalah situs judi slot deposit dana nomor 1 di Indonesia yang menawarkan ratusan permainan slot deposit dana paling gacor saat ini dengan beberapa permainan judi online terbaik. Seperti halnya live casino, Pragmatic Play saat ini mengoperasikan permainan game judi online dengan lluas seperti game slot online.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dari sekian banyak situs slot online deposit dana Pragmatic Play di seluruh Indonesia, hanya sedikit yang memiliki sertifikat resmi dari International Gaming Association. Popularitas game slot online deposit dana saat ini memang sudah sangat tinggi sejak pandemi, namun Anda tetap perlu berhati-hati dalam memilih situs slot online di Indonesia.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Anda mungkin sudah terdaftar di salah satu situs&nbsp;<a title="slot deposit dana" href="#" data-mce-href="#">slot deposit dana</a>&nbsp;Pragmatic Play terpercaya di Indonesia. Namun apakah situs judi online ini memudahkan Anda untuk memasang taruhan? Apakah Anda selalu memenangkan permainan? Jackpot hanya menawarkan sedikit?</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Ini adalah pertanyaan yang sering ditanyakan oleh para penggemar game slot deposit dana di Indonesia. Kami {{ $setting->nama_web }} sebagai agen slot deposit dana tentunya bersedia memberikan semua itu untuk anda. Kemudahan yang ditawarkan juga tentunya akan membuat Anda betah bermain di situs slot deposit dana resmi.</span></p>
                                <h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><span style="color: rgb(255, 255, 255);">Situs&nbsp;Slot Online Deposit via Dana&nbsp;Terbaik&nbsp;{{ $setting->nama_web }}</span></h2>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">{{ $setting->nama_web }} merupakan agen judi online penyedia permainan Casino yang terpercaya, yang menjadi situs slot online terbaik no.1 saat ini.&nbsp;<a title="daftar {{ $setting->nama_web }}" href="#" data-mce-href="#">Daftar {{ $setting->nama_web }}</a>&nbsp;sekarang juga, kami bekerjasama dengan provider terbaik Pragmatic Play baru-baru ini, perusahaan yang berbasis di Malta ini mengalami pertumbuhan yang sangat pesat.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Saat ini, ia memiliki kantor di Malta, Inggris, Gibraltar, Ukraina, India, dan Filipina. Pragmatic Play menciptakan game yang inovatif dan menarik dengan grafis sempurna yang sangat dihargai oleh pemain di seluruh dunia.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dan itu baru permulaan, karena mereka merilis game baru hampir setiap minggu. Sebagian besar gim mereka menawarkan opsi untuk membeli fitur Free Spins.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Pada saat penulisan ini, Pragmatic Play telah merilis total 182 game dalam berbagai kategori: slot 5-gulungan, slot 3-gulungan, bingo, dan permainan kartu. Mereka bahkan memiliki studio permainan Live Casino. Game-game ini tersedia dalam 32 bahasa dan sepenuhnya kompatibel dengan smartphone dan tablet.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Beberapa mesin slot deposit dana ini termasuk yang paling banyak dimainkan di dunia. Slot termasuk The Dog House (5 Maret 2019), Sweet Bonanza (25 Juni 2019), Gates of Olympus (13 Februari 2021), Fruit Party (28 Mei 2020), Da Vinci's Treasure (13 September 2018) .</span></p>
                                <h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><span style="color: rgb(255, 255, 255);">9 Daftar Rekomendasi Bo&nbsp;Slot Deposit Dana</span></h2>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Sebagai agen slot Pragmatic Play terbaik, {{ $setting->nama_web }} juga menawarkan beberapa penyedia judi&nbsp;<a title="slot dana" href="#" data-mce-href="#">slot dana</a>&nbsp;terpercaya yang bisa Anda coba mainkan di {{ $setting->nama_web }}. Di bawah ini adalah daftar 9 partner situs judi slot online {{ $setting->nama_web }} dengan RTP tertinggi.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Slot88</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Provider Slot88 yang berada di Asia, khususnya China merupakan bandar judi online terbesar. Slot88 memiliki keunggulan dari segi tampilan dan gameplay yang seru, sehingga orang yang bermain tidak akan bosan sama sekali.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Di situs judi Slot88, {{ $setting->nama_web }} secara rutin mengadakan kontes bagi para membernya dan menawarkan hadiah uang ratusan juta rupiah. 88 Fortune, Joker Jewel 88, Rhino Extreme, Zeus, dan Golden Lotus adalah mesin slot dengan tingkat kemenangan tertinggi.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Joker123</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Provider Joker123 adalah salah satu taruhan slot paling populer di situs resmi {{ $setting->nama_web }}. Penyedia slot ini selalu berusaha untuk memberikan pengalaman bermain yang nyaman dan nyaman.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Hal yang baik tentang bermain slot joker123 online di sini adalah Anda dapat menyetor setidaknya 20RB dengan layanan deposit Pulsa, Bank dan E Wallet Dana, Gopay, OVO. Hercules, Golden Dragon, Hot Fruit, dan Tembak Ikan menjadi game RTP tertinggi di game slot joker123.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Microgaming</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Microgaming Slots adalah pengembang permainan casino online pertama di dunia tahun 1994. Kemudian tersedia untuk dimainkan secara online pada tahun 2004. Game yang paling banyak dimainkan adalah Jurassic World, Game of Thrones, dan Lara Croft. Slot Microgaming memiliki jackpot slot terbesar dan mudah untuk dimenangkan.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Habanero</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Habanero adalah pengembang slot terkenal, dimainkan oleh jutaan member setiap hari dari data statistik situs {{ $setting->nama_web }}. Dan pengembang slot online Habanero memiliki banyak penggemar karena grafik mesin slotnya yang menarik. Ditambah audio mesin slot yang luar biasa di layar perjudian slot dunia.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Lebih dari 100 mesin slot sangat direkomendasikan untuk pemain slot baru Indonesia seperti Fa Cai Sen, hingga Dragon Throne yang sangat terkenal di beberapa negara Asia termasuk Eropa.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana Playtech</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Playtech Slots telah menjadi produsen mesin slot terkenal di dunia selama 20 tahun terakhir. Dan pusat Playtech Slot ada di Isle of Man dengan 500 permainan judi slot teratas.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Provider slot gacor ini dikenal sebagai situs slot pulsa dengan jackpot tertinggi yaitu Buffalo Blitz, Wild West Wilds, Age of the Gods, Joker Hot Reels. Mainkan semua permainan slot satu per satu dan rasakan sensasi memenangkan jackpot tanpa batas.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana SpadeGaming</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Muncul di Malaysia pada tahun 2007, Spadegaming adalah permainan slot gacor online kualitas tertinggi di Asia dengan nilai RTP tinggi 96%. Didukung oleh fitur permainan slot gacor terbaik dan tampilan slot visual paling menarik.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Bahkan jika Anda bermain slot bet kecil, perasaan bermain Anda akan menjadi luar biasa. {{ $setting->nama_web }} memiliki berbagai permainan judi slot SpadeGaming terbaik seperti Fighter Slots, Lucky Koi, Fist of God, dan God of Fortune.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana YGGDrasil</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">YggDrasil adalah pemenang Penghargaan EGR B2B 2015 untuk Mobile Platform. Dan YggDrasil memenuhi statusnya dalam memberikan animasi dan grafik yang hebat. Dengan fitur berkualitas tinggi, mereka fokus pada hiburan dan penghargaan, dengan inovasi seperti otopsi tanpa batas, pengganda, dan penyebaran misteri.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Permainan slot ini memiliki peringkat RTP yang dapat diterima sebesar 96% dengan peringkat volatilitas tinggi. Slot Jackpot Raiders di YggDrasil dapat memberi Anda kemenangan terbesar, dan Anda harus mencobanya.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana PG Soft</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">PG Soft adalah singkatan dari Pocket Game Soft dan merupakan pelopor situs slot {{ $setting->nama_web }}. Penyedia menawarkan game premium kepada pemain di seluruh dunia dengan alur cerita yang menarik, efek suara yang fantastis, dan animasi yang menakjubkan. Candy Pop, Lucky Rat, Mahjong Way adalah game slot online yang sering kasih menang dengan RTP 97,8%.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Deposit Dana CQ9</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">CQ9 Slot Gaming pertama kali dibuat dan dioperasikan di Asia khususnya China pada tahun 2016, dan kini telah memasuki pasar Eropa. Terdapat 150 permainan judi slot berbasis HTML5 dan banyak penggemarnya menyebutnya sebagai situs judi slot online terpopuler saat ini. Mesin slot dengan tingkat kemenangan tingginya yaitu Wonderland, Dragon Boat, dan Thor 2, dengan RTP 96%.</span></p>
                                <h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><strong style="color: rgb(255, 255, 255);">5 Rekomendasi Game Judi Slot Online Deposit Dana Gacor Hari Ini</strong></h2>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dengan perpustakaan hampir 200 mesin slot, pemain sering tidak tahu harus mulai dari mana. Kami telah memainkan banyak game penyedia ini dan akan memberi Anda 5 slot Pragmatic Play favorit kami.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online The Dog House</strong></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dirilis pada Maret 2019, The Dog House adalah slot Pragmatic Play yang sangat populer. Ini juga salah satu game favorit kami untuk dimainkan.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online Sweet Bonanza</strong></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Mari beralih ke hit besar lainnya dari penyedia game ini: Sweet Bonanza. Kotak 6x5 ini, membayar di mana-mana di mesin slot penuh permen. Agar simbol terhubung, Anda harus mengisi setidaknya 8 permen serupa dari 30 permen.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online Da Vinci’s Treasure</strong></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Dalam game ini, penjelajah Pragmatic Play yang terkenal, John Hunter, sedang berburu harta karun. Harta Karun Da Vinci adalah mesin slot gulungan 3 x 5 yang dicintai. Gim ini menampilkan tiga putaran gratis yang berbeda: pemilih hadiah, eksplorasi peta, dan Free Spins Progresif.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online 5 Lions Gold</strong></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Game ini dirilis pada Juni 2019. Mendaratkan tiga simbol Yin Yang (menyebar) pada gulungan 2, 3 dan 4 dari gulungan 3x5 ini, slot gulungan 243 dan Anda akan memasuki fitur Free Spins.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Slot Online Gates of Olympus</strong></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Game ini sangat populer di Indonesia dan orang biasa menyebutnya dengan “Game Kakek Zeus”. Alasan kepopuleran game ini sudah tidak perlu lagi dipikirkan, tentunya karena hadiahnya yang fantastis dan kelipatannya yang begitu banyak.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Cara Daftar Slot Deposit Dana Terbaik 2022</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Cara melakukan daftar slot deposit dana di indonesia sangat mudah sekali, anda hanya perlu melakukan dan mengunjungi situs judi&nbsp;<a title="slot online deposit dana" href="#" data-mce-href="#">slot online deposit dana</a>&nbsp;{{ $setting->nama_web }}, kemudian mengisi semua form pendaftaran yang tersedia dengan valid. Pastikan anda mengisi form pendaftaran dengan valid agar saat anda bermain tidak mengalami kendala.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Situs judi slot online deposit dana saat ini menang sangat sangat susah sekali ditemui di indonesia, apalagi banyak sekali situs judi slot online yang mengaku sebagai situs slot online resmi, akan tetapi anda sebagai member yang smart anda harus mengecek ulang kebenarannya.</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Salah satu situs slot deposit dana yang dapat dipercaya saat ini merupakn {{ $setting->nama_web }}. Daftar slot deposit dana bersama situs {{ $setting->nama_web }} sangat mudah sekali, berikut ini kami akan memberikan apa saja yang wajib diisi saat melakukan registrasi di situs {{ $setting->nama_web }}:</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">User ID<br>Nama Rekening</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Nomor Rekening</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Password</span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);"><b>KHUSUS NEW MEMBER <b style="color:gold;">VIP</b> BONUS TANPA TO<b></span></p>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Form diatas wajib anda isi untuk daftar slot deposit dana di situs {{ $setting->nama_web }}, anda hanya perlu melengkapi form pendaftaran seperti diatas.</span></p>
                                <h2 data-mce-style="text-align: center;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: center;"><strong><em style="color: rgb(255, 255, 255);">FAQ - Situs Judi Slot Online Deposit Dana {{ $setting->nama_web }}</em></strong></h2>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Apa Itu {{ $setting->nama_web }} ?</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">{{ $setting->nama_web }} merupakan situs resmi judi slot online deposit dana yang memiliki game slot online paling gacor, {{ $setting->nama_web }} menyediakan RTP slot online yang dapat dilihat oleh semua member kami dengan harapan mempermudah mendapatkan kemenangan.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Apakah {{ $setting->nama_web }} Menyediakan Slot Deposit Dana?</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">{{ $setting->nama_web }} merupakan situs judi online terpercaya dan terlengkap, kami menyediakan beberapa pilihan deposit diantaranya Bank Lokal terbaik indonesia, Deposit Pulsa, E-Wallet Dana, Ovo, Gopay.</span></p>
                                <h3 data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; text-align: justify;"><strong style="color: rgb(255, 255, 255);">Minimal Deposit Situs {{ $setting->nama_web }} ?</strong></h3>
                                <p data-mce-style="text-align: justify;" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="color: rgb(255, 255, 255);">Minimal deposit slot deposit dana di situs {{ $setting->nama_web }} sangat rendah sekali, dengan modal minimum 100RB anda dapat melakukan deposit dan berkesempatan menang hingga jutaan rupiah.</span></p>
                            </div> <br><br><br>
                        </div>
                        <a id="arrowShow" href="register.html" onclick="$('.showFooter').height('100%'); $(this).hide()">
                            <i class="arrow__footer down"></i>
                        </a>
                    </div>
                </div>
            </section>
        </div>



    </main>

    <footer class="footer">
        <div class="footer__holder">
            <div class="container">
                <div class="footer-title">PROVIDER</div>
                <div class="footer-nav">
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/slot')">Slot</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/sportsbook')">Sportsbook</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/casino')">Casino</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/fishing')">Fishing</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/lottery')">Lottery</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/poker')">Poker</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" onclick="routeNav('/others')">Game Lain</a>
                    </div>
                </div>
                <div class="footer-provider">
                    <div class="provider-icon">
                        <img alt="PRAGMATIC PLAY" title="PRAGMATIC PLAY" src="../images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="AIS GAMING" title="AIS GAMING" src="https://images.linkcdn.cloud/global/logo-footer/slot/aisg_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PLAYSTAR" title="PLAYSTAR" src="../images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="SPADE GAMING" title="SPADE GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PG SOFT" title="PG SOFT" src="../images.linkcdn.cloud/global/logo-footer/slot/pgs_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="ADVANTPLAY" title="ADVANTPLAY" src="../images.linkcdn.cloud/global/logo-footer/slot/adv_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="JOKER GAMING" title="JOKER GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="CQ9 GAMING" title="CQ9 GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="HABANERO" title="HABANERO" src="../images.linkcdn.cloud/global/logo-footer/slot/hbn_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="FASTSPIN" title="FASTSPIN" src="../images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="JILI" title="JILI" src="https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="RED TIGER" title="RED TIGER" src="https://images.linkcdn.cloud/global/logo-footer/slot/rtr_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="NOLIMIT CITY" title="NOLIMIT CITY" src="../images.linkcdn.cloud/global/logo-footer/slot/nlc_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="VIVA" title="VIVA" src="https://images.linkcdn.cloud/global/logo-footer/slot/viva_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="HC GAME" title="HC GAME" src="../images.linkcdn.cloud/global/logo-footer/slot/hcg_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="AFB GAMING" title="AFB GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/afg_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="VIRTUAL TECH" title="VIRTUAL TECH" src="../images.linkcdn.cloud/global/logo-footer/slot/vrt_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="YGGDRASIL" title="YGGDRASIL" src="https://images.linkcdn.cloud/global/logo-footer/slot/ygg_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="AMEBA" title="AMEBA" src="../images.linkcdn.cloud/global/logo-footer/slot/amb_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="TOP TREND GAMING" title="TOP TREND GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/ttg_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="MICROGAMING" title="MICROGAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/micro_logo.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PLAYTECH SLOT" title="PLAYTECH SLOT" src="../images.linkcdn.cloud/global/logo-footer/slot/pla_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PLAY N GO" title="PLAY N GO" src="../images.linkcdn.cloud/global/logo-footer/slot/png_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="HYDAKO" title="HYDAKO" src="../images.linkcdn.cloud/global/logo-footer/slot/hyd_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="N2LIVE SLOT" title="N2LIVE SLOT" src="../images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="AFB88" title="AFB88" src="../images.linkcdn.cloud/global/logo-footer/sports/afb_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="IA E-SPORT" title="IA E-SPORT" src="../images.linkcdn.cloud/global/logo-footer/sports/iae_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="SBO SPORT" title="SBO SPORT" src="../images.linkcdn.cloud/global/logo-footer/sports/sbo_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="CMD368" title="CMD368" src="../images.linkcdn.cloud/global/logo-footer/sports/cmd_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PINNACLE" title="PINNACLE" src="https://images.linkcdn.cloud/global/logo-footer/sports/pin_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="M88 SPORTS" title="M88 SPORTS" src="https://images.linkcdn.cloud/global/logo-footer/sports/m88_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="AFB CASINO" title="AFB CASINO" src="https://images.linkcdn.cloud/global/logo-footer/casino/afc_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PRAGMATIC PLAY LC" title="PRAGMATIC PLAY LC" src="../images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="GD88" title="GD88" src="../images.linkcdn.cloud/global/logo-footer/casino/gd8_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="WM CASINO" title="WM CASINO" src="../images.linkcdn.cloud/global/logo-footer/casino/wmc_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="OG CASINO" title="OG CASINO" src="../images.linkcdn.cloud/global/logo-footer/casino/ogs_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="EVOLUTION" title="EVOLUTION" src="https://images.linkcdn.cloud/global/logo-footer/casino/evolution_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="EBET" title="EBET" src="../images.linkcdn.cloud/global/logo-footer/casino/ebe_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="ALLBET" title="ALLBET" src="../images.linkcdn.cloud/global/logo-footer/casino/alb_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="DREAM GAMING" title="DREAM GAMING" src="../images.linkcdn.cloud/global/logo-footer/casino/drg_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="ASIA GAMING" title="ASIA GAMING" src="../images.linkcdn.cloud/global/logo-footer/casino/agc_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="SEXY GAMING" title="SEXY GAMING" src="../images.linkcdn.cloud/global/logo-footer/casino/seg_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="LG88" title="LG88" src="../images.linkcdn.cloud/global/logo-footer/casino/lg8_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="N2LIVE" title="N2LIVE" src="../images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="JOKER GAMING" title="JOKER GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="SPADE GAMING" title="SPADE GAMING" src="../images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="PLAYSTAR" title="PLAYSTAR" src="../images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="FASTSPIN" title="FASTSPIN" src="../images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="JILI" title="JILI" src="https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="CQ9" title="CQ9" src="../images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="4D" title="4D" src="../images.linkcdn.cloud/global/logo-footer/lottery/togel_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="WE1POKER" title="WE1POKER" src="../images.linkcdn.cloud/global/logo-footer/poker/we1_footer.png" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="SPACEMAN" title="SPACEMAN" src="https://images.linkcdn.cloud/global/logo-footer/casino/spaceman_footer.webp" width="100" height="50">
                    </div>
                    <div class="provider-icon">
                        <img alt="SV388 COCKFIGHT" title="SV388 COCKFIGHT" src="../images.linkcdn.cloud/global/logo-footer/others/sv3_footer.png" width="100" height="50">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__trademark">
            Copyright &copy; 2023 sangslot88 is an international registered trademark. All rights reserved.
        </div>
    </footer>

    <div class="footer-mobile">
        <a class="footer-item active" href="index.html">
            <div class="footer-icon">
                <img src="themes/3/img/theme3-icons/home.svg" width="30" height="30" alt="">
            </div>
            <div class="footer-title">Home</div>
        </a>
        <a class="footer-item" href="register.html">
            <div class="footer-icon">
                <img src="themes/3/img/theme3-icons/apps.svg" width="30" height="30" alt="">
            </div>
            <div class="footer-title">Apps</div>
        </a>
        <a class="footer-item " href="promotion.html">
            <div class="footer-icon">
                <img src="themes/3/img/theme3-icons/promosi.svg" width="30" height="30" alt="">
            </div>
            <div class="footer-title">Promosi</div>
        </a>

        <a class="footer-item" target="_blank" rel="noreferrer" href="https://tawk.to/chat/6463093f74285f0ec46baa84/1h0hdo8ja">
            <div class="footer-icon">
                <div class="footer-icon">
                    <img src="themes/3/img/theme3-icons/live-chat.svg" width="30" height="30" alt="">
                </div>
            </div>
            <div class="footer-title">Live Chat</div>
        </a>
        <a class="footer-item sidenav-open" href="javascript:;">
            <div class="footer-icon">
                <img src="themes/3/img/theme3-icons/menu.svg" width="30" height="30" alt="">
            </div>
            <div class="footer-title">Menu</div>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade custom-popup" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Login</h5>
                </div>

                <div class="modal-body">
                    <div class="modal-body-form">
                        <form name="login-form">
                            <div class="form-item">
                                <div class="item-title">Nama Pengguna*</div>
                                <input value="" minlength="1" maxlength="25" name="usernameLogin" style="text-transform: lowercase" type="text" placeholder="Nama Pengguna*" autocomplete="off" required>
                            </div>
                            <div class="form-item">
                                <div class="item-title">Kata Sandi*</div>
                                <input value="" minlength="5" maxlength="50" name="passwordLogin" type="password" placeholder="Kata Sandi*" autocomplete="off" required>
                            </div>
                            <div class="form-forgot">
                                <a href="forgot-password.html">Lupa Kata Sandi ?</a>
                            </div>
                            <div class="form-button">
                                <button name="buttonLogin" type="submit" class="button-login">Masuk</button>
                            </div>
                            <div class="form-register">
                                <span>Belum punya akun?, <a href="register.html">Register here!</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="themes/3/js/jquery-3.5.1.min.js"></script>
    <script src="themes/3/js/vendor.js"></script>
    <script src="themes/3/js/globalcd91.js?v=2.0.1201"></script>


    <script src="themes/3/js/indexcd91.js?v=2.0.1201"></script>
    <script src="themes/3/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js" integrity="sha512-Yk47FuYNtuINE1w+t/KT4BQ7JaycTCcrvlSvdK/jry6Kcxqg5vN7/svVWCxZykVzzJHaxXk5T9jnFemZHSYgnw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(this).scrollTop(0);
            $.ajax({
                type: "POST",
                url: "https://magnumslot88.com/paymentService",
                data: {
                    _token: "WQbPGW5p8eGsVs3NuuFvKuqFxONSZiW0jycT9Mxd"
                },
                success: function(response) {
                    let wdTime = response.data.wd
                    let depoTime = response.data.depo
                    $("[id=withdrawTime]").text(wdTime)
                    $("[id=withdrawTimeBar]").attr('aria-valuenow', wdTime).width((wdTime / 15) * 100 + "%")
                    $("[id=depositTime]").text(depoTime)
                    $("[id=depositTimeBar]").attr('aria-valuenow', depoTime).width((depoTime / 15) * 100 + "%")
                }
            });


            $('#homePopup').modal('show');

        });

        $('#pageLoadingBar').hide()
        window.onpopstate = function() {
            let path = window.location.pathname;
            routeNav(path);
        }

        function routeNav(path) {
            if (path == window.location.pathname) return;
            history.pushState(null, null, path);
            let checkPath = path.split('index.html')
            let url = "https://magnumslot88.com" + window.location.pathname;
            if (path == 'index.html') {
                window.location.replace("index.html")
                return false;
            }
            $(".header-form>a").removeClass('active')
            let elem = document.getElementById("pageLoadingBar");
            let width = 1;
            $.ajax({
                type: "GET",
                url: url,
                beforeSend: () => {
                    $('#pageLoadingBar').show()
                    let id = setInterval(frame, 100);

                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                        }
                    }
                },
                success: function(page) {
                    width = 100;
                    elem.style.width = width + '%';
                    $("main[id=main-route]").empty().append(page);
                    $("title").text($("#title-seo").text());
                    const script = $("scope-script").html()
                    $("scope-script").remove()
                    setTimeout(() => {
                        $("html, body").animate({
                            scrollTop: "0"
                        }, 1000);
                        $('#pageLoadingBar').hide()
                        elem.style.width = '1%';
                        $("custom-script").empty().append(script);
                        filterGameSelection('all')
                    }, 500);
                }
            });
        }

        function openHeaderWidget() {
            var headerWidget = document.getElementById("header-widget")

            if (headerWidget.classList.contains('active')) {
                headerWidget.classList.remove('active')
            } else {
                headerWidget.classList.add('active')
            }
        }
    </script>
    <script>
        $('#sidebar-toggle-game').click(function() {
            $('#sidebar-game-menu').slideToggle("fast");
            $('#sidebar-toggle-game .fas').toggleClass('rotate');
        })
        $('#sidebar-toggle-transaksi').click(function() {
            $('#sidebar-transaksi-menu').slideToggle("fast");
            $('#sidebar-toggle-transaksi .fas').toggleClass('rotate');
        })
        $('#sidebar-toggle-bonus').click(function() {
            $('#sidebar-bonus-menu').slideToggle("fast");
            $('#sidebar-toggle-bonus .fas').toggleClass('rotate');
        })

        let loginEl = document.getElementById('header-desktop');

        window.addEventListener('scroll', (event) => {
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll >= 25) {
                loginEl.classList.add('active');
            } else if (currentScroll <= 0) {
                loginEl.classList.remove('active');
            }
        });

        $('.sidebar').mCustomScrollbar();
    </script>
    <script>
        window.showError = (title, message) => {
            return Swal.fire({
                icon: 'info',
                title: title,
                html: message,
                timerProgressBar: true,
                timer: 5000,
            });
        }

        $(".game-search>.form-control-sm").on("focus", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('100%');
                $(".form-control-sm").width('100%');
            }
        })

        $(".game-search>.form-control-sm").on("focusout", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('');
                $(".form-control-sm").width('');
            }
        })


        $("form[name=login-form]").on('submit', function(e) {
            e.preventDefault();
            let formData = {};
            $.each($(this).serializeArray(), function(i, val) {
                formData[val.name] = val.value
            });
            let btnTxt = $("button[name=buttonLogin]").html()
            $.ajax({
                url: "https://magnumslot88.com/doLogin",
                type: 'POST',
                data: {
                    _token: "WQbPGW5p8eGsVs3NuuFvKuqFxONSZiW0jycT9Mxd",
                    username: formData.usernameLogin,
                    password: formData.passwordLogin
                },
                beforeSend: function() {
                    $("input[name='usernameLogin']").attr('readonly', true)
                    $("input[name='passwordLogin']").attr('readonly', true)
                    $("button[name=buttonLogin]").attr('disabled', true)
                    $("button[name=buttonLogin]").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                },
                success: function(data) {
                    if (data.code == 200) {
                        const alert = {
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            timer: 3000,
                            title: data.message
                        }
                        localStorage.setItem("loginAlert", JSON.stringify(alert));
                        location.reload();
                    } else {
                        let msg = '';
                        $.each(data.errors, function(index, valueOfElement) {
                            msg += valueOfElement + '<br />'
                        });
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: (msg == '') ? "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" : msg
                        });
                        if (msg == '') {
                            location.reload();
                        }
                        $("input[name='usernameLogin']").removeAttr('readonly')
                        $("input[name='passwordLogin']").removeAttr('readonly')
                        $("button[name=buttonLogin]").removeAttr('disabled')
                        $("button[name=buttonLogin]").html(btnTxt)
                    }
                },
                error: function(data) {
                    let msg = '';
                    $.each(data.responseJSON.errors, function(index, valueOfElement) {
                        msg += valueOfElement + '<br />'
                    });
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: (msg == '') ? "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" : msg
                    });
                    if (msg == '') {
                        location.reload();
                    }
                    $("input[name='usernameLogin']").removeAttr('readonly')
                    $("input[name='passwordLogin']").removeAttr('readonly')
                    $("button[name=buttonLogin]").removeAttr('disabled')
                    $("button[name=buttonLogin]").html(btnTxt)
                }
            });
        });

        function gameAlert() {
            return Swal.fire({
                icon: 'info',
                title: "Perhatian.",
                html: "Silakan login untuk bermain!",
                timerProgressBar: true,
                timer: 5000,
            });
        }
    </script><!-- Start of LiveChat (www.livechat.com) code -->
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15585072;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/15585072/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15585072;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/15585072/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</body>
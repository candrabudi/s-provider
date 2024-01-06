@extends('layouts.main')

@section('content')
    <style>
        .footer-body {
            display: none;
        }

        .backdrop {
            background-color: black;
        }
    </style>
    <div class="content my01">

        @include('nav_saldo')
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


                    <div class="row history">
                        <div class="pb-4 pb-md-0 col-md-8">

                            <link rel="stylesheet" type="text/css"
                                href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
                            <div class="history-table" *ngIf="history">

                                <div class="row total-data text-center">
                                    <div class="col-xs-4 noSidePadding " *ngIf="totalCredit||totalCredit==0">
                                        <div>
                                            <div class="">Jumlah</div>
                                            <div> @currency($jumlah->sum('nominal'))
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class=" mat-group">
                                            <input type="text" class="mat-control"
                                                (onChange)="onKeyUp($event.target.value )" required="required" />
                                            <label>Saring</label>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($transaksi as $item)
                                    <div class="row no-gutters h-result" (click)="openHistoryDetailsInModal($event,item);"
                                        *ngFor="let item of depositHistory">
                                        <div class="col-xs-6 row-head"><span class="js-date isutc">{{ $item->updated_at }}
                                            </span></div>
                                        <div class="col-xs-6  text-right">
                                            @if ($item->status == 1)
                                                <span class="label-info">
                                                    Double Confirm
                                                </span>
                                            @elseif ($item->status == 2)
                                                <span class="label-success">
                                                    Confirmed
                                                </span>
                                            @else
                                                <span class="label-danger">
                                                    Rejected
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-xs-6  ">
                                            @if ($item->type == 1)
                                                Deposit
                                            @else
                                                Withdraw
                                            @endif
                                        </div>
                                        <div class="col-xs-6 text-right">


                                            @if ($item->status == 1)
                                                @currency($item->nominal)
                                            @elseif ($item->status == 2)
                                                @currency($item->nominal)
                                            @else
                                                <strike>@currency($item->nominal)</strike>
                                            @endif
                                        </div>
                                        <div class="col-xs-4 row-footer"><small>TransID:<br> <b style="color:gold;">VIP</b>-INOJ064b97xxx</small></div>

                                        @if ($item->type == 1)
                                            <div class="col-xs-8 row-footer text-right">
                                                <small>{{ $item->Databank->nama_bank ?? '' }}</small>
                                            </div>
                                        @else
                                            <div class="col-xs-8 row-footer text-right">
                                                <small>{{ $item->keterangan ?? '' }}</small>
                                            </div>
                                        @endif

                                        <div class="col-xs-12 text-right">
                                            {{ $item->alasan }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    convertToLocalDate();
                                });

                                function convertToLocalDate() {
                                    console.log('convertToLocalDate');
                                    $('.js-date').each(function(i) {
                                        var dt = $(this).text().trim();
                                        var isutc = $(this).hasClass('isutc');

                                        if (isutc) {

                                            if (dt && dt != '-') {

                                                if (dt[dt.length - 1] != 'Z') {
                                                    dt = dt + 'Z';
                                                }
                                                $(this).text(moment.utc(dt).local().format("YYYY-MM-DD | HH:mm:ss"));
                                                $(this).removeClass('isutc');
                                            }
                                        }
                                    });
                                }
                            </script>



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

            });
        </script>

    </div>
@endsection

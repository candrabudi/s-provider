@extends('layouts.main')
@section('content')
<br><br>
@include('nav_saldo')
<div class="container pt-1 games-category">


    <h2 class="title">{{ $title }}</h2>

    <div class="row">
        <script type="text/javascript">
            var windowNames = JSON.parse('{"lottery":"lottery","live":"king4d","togel":"king4d"}');
        </script>

        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12 image-grid">
                @foreach ($games as $game)
                <div class="box">
                    <div class="game-wrapper">
                        <a target="_blank" rel="opener" class="game" href="{{ route('play.game', $game->game_code) }}">
                            <img class="img-fluid lazy" alt="{{ $game->game_name }}" data-src="{{ $game->game_image }}" src="{{ $game->game_image }}" />
                            <div class="loader-b" *ngIf="!showEle"></div>
                            <div class="g-title">{{ $game->game_name }}</div>
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div><br><br><br>
@endsection
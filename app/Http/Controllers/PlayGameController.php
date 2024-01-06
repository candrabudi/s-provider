<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Redirect;
use Auth;
class PlayGameController extends Controller
{
    public function playGame($game_code)
    {
        $response = Curl::to('https://pp303.xyz/gs2c/html5/connection.do?cmd=opengame&token=Wgvoh7u9lATfcLr&username='. Auth::user()->name .'&gameid='. $game_code .'&LobbyUrl=www.google.com&CashierUrl=www.google.com')
            ->get();

        $content = json_decode($response, true);
        return Redirect::away($content['gameUrl']);
    }
}

<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use Ixudra\Curl\Facades\Curl;
class GameController extends Controller
{
    public function CrawlingGame()
    {
        $response = Curl::to('https://pp303.xyz/gs2c/html5/connection.do?cmd=gamelist&token=Wgvoh7u9lATfcLr')
            ->get();
        $content = json_decode($response, true);
        foreach ($content['gamelist'] as $game) {
            $storeGame =  new Game();
            $storeGame->game_code = $game['game_code'];
            $storeGame->game_name = $game['game_name'];
            $storeGame->game_provider = $game['game_provider'];
            $storeGame->game_image = $game['game_image'];
            $storeGame->game_category = 'slots';
            $storeGame->save();
        }
    }
    
}

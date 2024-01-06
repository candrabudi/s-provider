<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

use App\Models\Game_users;
use App\Models\Saldo;
use App\Models\Game_betting;
use App\Models\User;

/**
 * Class for generating api & prepare curl units
 */
class Game_api extends Model
{
    protected $table = 'game_api';
    private $trans_code = '';
    private $ext_id = '';
    private $game_api = null;

    #region connect apis
    
    function connect_curl(){
        
    }

    function game_transfer($user_id, $saldo){
        $this->pragmatic_transfer($user_id, $saldo);
        $this->pgsoft_transfer($user_id, $saldo);
    }

    #region pragmatic

    // return ext id
    function pragmatic_create_users(){
        $users = auth()->user();
        
        if(empty($users)){
            echo "Harus login";
            die();
        }

        $game_users = new Game_users();

        $check_exist = $game_users->check_exist('pragmaticPlay', $users->id);
        
        $this->game_api_get('PragmaticPlay');
        $game_api = $this->game_api;      

        if($check_exist !== true){
            return $check_exist;
        }

        $user = str_replace(' ','',$users->nama);
        $uniq = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'),0,4);
        $extplayer = 'ab'.$user.$uniq;

        $params = 'currency=IDR&externalPlayerId='.$extplayer.'&secureLogin='.$game_api->api_key.$game_api->secret_key;
        $params_hash = md5($params);
        $curl_request = $game_api->url_request.'/player/account/create';
        $curl_postfields = "secureLogin=".$game_api->api_key."&externalPlayerId=".$extplayer."&currency=IDR&hash=".$params_hash;

        $result = $this->pragmatic_curl($curl_request, $curl_postfields);

        $PlayerId = $result['playerId'];

        $game_users = new Game_users();
        $game_users->user_id = $users->id;
        $game_users->provider = 'PragmaticPlay';
        $game_users->ext_id = $extplayer;
        $game_users->player_id = $PlayerId; 
        $game_users->balance = 0; 
        $game_users->created_at = date('Y-m-d H:i:s');
        $game_users->status = 1; 

        $game_users->save();

        $saldo = Saldo::where([
            'user_id' => $users->id
        ])->first();

        if(empty($saldo)){
            return true;
        }

        if($saldo->saldo + $saldo->bonus == 0){
            return true;
        }

        // transfer current saldo
        $this->pragmatic_transfer($users->id, $saldo->saldo + $saldo->bonus);
    }

    function pragmatic_check_balance($user_id = 0){
        $user = auth()->user();
        
        if(empty($user) && $user_id == 0){
            echo "Harus login";
            die();
        }

        $user_id = empty($user) ? $user_id : $user->id;
        // game user
        $user_game = Game_users::where([
            'user_id' => $user_id,
            'provider' => 'PragmaticPlay',
            'status' => 1
        ])->first();

        $this->game_api_get('PragmaticPlay');
        $game_api = $this->game_api;      
    
        $kode_unik = substr(str_shuffle(1234567890),0,3);
        $this->trans_code = date('Ymds').$kode_unik.$user_id;
        $this->ext_id = $user_game->ext_id;
        
        $params = 'externalPlayerId='.$user_game->ext_id.'&secureLogin='.$game_api->api_key.$game_api->secret_key;
        $hashNeed = md5($params);
    
        $curl_request = $game_api->url_request.'/balance/current';
        $curl_postfields = "secureLogin=".$game_api->api_key."&externalPlayerId=".$user_game->ext_id."&hash=".$hashNeed;
         
        $result = $this->pragmatic_curl($curl_request, $curl_postfields);
        
        if(isset($result['balance'])){
            return $result['balance'];
        }else{
            return false;
        }
    }

    function pragmatic_history($ext_id){
        $date_played = date('Y-m-d');
        

        $this->game_api_get('PragmaticPlay');
        $game_api = $this->game_api;      

        $params2 = 'datePlayed='.$date_played.'&playerId='.$ext_id.'&secureLogin='.$game_api->api_key.'&timeZone=GMT +07:00'.$game_api->secret_key;
        $hashNeed2 = md5($params2);

        $curl_request = 'https://api.prerelease-env.biz/IntegrationService/v3/http/HistoryAPI/GetPlayedGames/';
        $curl_postfields = "secureLogin=".$game_api->api_key."&playerId=".$ext_id."&datePlayed=".$date_played."&timeZone=GMT%20%2B07%3A00&hash=".$hashNeed2;

        $result = $this->pragmatic_curl($curl_request, $curl_postfields);

        return $result;
    }

    function pragmatic_history_game($ext_id, $game_id){
        $date_played = date('Y-m-d');

        $this->game_api_get('PragmaticPlay');

        $game_api = $this->game_api;

        $params1 = 'datePlayed='.$date_played.'&gameId='.$game_id.'&playerId='.$ext_id.'&secureLogin='.$game_api->api_key.'&timeZone=GMT +07:00'.$game_api->secret_key;
        $hashNeed1 = md5($params1);

        $curl_request = 'https://api.prerelease-env.biz/IntegrationService/v3/http/HistoryAPI/GetGameRounds/';
        $curl_postfields = "secureLogin=".$game_api->api_key."&playerId=".$ext_id."&datePlayed=".$date_played."&timeZone=GMT%20%2B07%3A00&gameId=".$game_id."&hash=".$hashNeed1;

        $result = $this->pragmatic_curl($curl_request, $curl_postfields);
        
        return $result;
    }

    function pragmatic_transfer($user_id, $saldo_transfer){
        
        $this->game_api_get('PragmaticPlay');
        
        $game_api = $this->game_api;

        $game_user = Game_users::where([
            'provider' => 'PragmaticPlay',
            'user_id' => $user_id
        ])->first();

        if(empty($game_user)){
            return false;
        }
        
        $kode_unik = substr(str_shuffle(1234567890),0,3);
        $this->trans_code = date('Ymds').$kode_unik.$user_id;
        
        $this->ext_id = $game_user->ext_id;

        $params5 = 'amount='.$saldo_transfer.'&externalPlayerId='.$this->ext_id.'&externalTransactionId='.$this->trans_code.'&secureLogin='.$game_api->api_key.$game_api->secret_key;
        $hashNeed5 = md5($params5);
        
        $curl_request = $game_api->url_request.'/balance/transfer';
        $curl_postfields = "secureLogin=".$game_api->api_key."&externalPlayerId=".$this->ext_id."&externalTransactionId=".$this->trans_code."&amount=".$saldo_transfer."&hash=".$hashNeed5;
        
        $trans = $this->pragmatic_curl($curl_request, $curl_postfields);
    }

    function pragmatic_start_game($game_id){
        $user = auth()->user();

        $this->pragmatic_get_balance_pp($user->id);
        $this->pgsoft_get_balance_pp($user->id);
    
        $this->game_api_get('PragmaticPlay');

        $game_api = $this->game_api;

        // game start
        $urlweb = URL::to('game_list');
        $params2 = "cashierUrl={$urlweb}&externalPlayerId={$this->ext_id}&gameId={$game_id}&language=en&lobbyUrl={$urlweb}&platform=WEB&secureLogin={$game_api->api_key}{$game_api->secret_key}";
        $hashNeed2 = md5($params2);

        $curl_request = $game_api->url_request.'/game/start';
        $curl_postfields = "secureLogin=".$game_api->api_key."&externalPlayerId=".$this->ext_id."&gameId=".$game_id."&language=en&platform=WEB&cashierUrl=".$urlweb."&lobbyUrl=".$urlweb."&hash=".$hashNeed2;
        $game_start = $this->pragmatic_curl($curl_request, $curl_postfields);
        
        return $game_start['gameURL'];
    }

    /**
     * Get All Player Balance to pragmatic
     *
     * @return void
     */
    function pragmatic_get_balance_pp($user_id = 0){
        $game_users = $this->pragmatic_get_all_users($user_id);

        if(empty($game_users)){
            return true;
        }

        foreach($game_users as $rows){

            $balance = $this->pragmatic_check_balance($rows->user_id);
      
            $data = Game_users::find($rows->id);
            $data->balance = $balance;
            $data->save();

            $saldo = Saldo::where('user_id', $rows->user_id)->first();
            $saldo->save_saldo('game', $balance);
            
            $history = $this->pragmatic_history($rows->ext_id);

            if(empty($history['games'])){
                continue;
            }


            foreach($history['games'] as $games){
                $history_game = $this->pragmatic_history_game($rows->ext_id, $games['gameId']);

                if(empty($history_game['rounds'])){
                    continue;
                }

                foreach($history_game['rounds'] as $rounds){
                    if($rounds == 'Free spin'){
                        continue;
                    }
                    
                    $data_bet = new Game_betting();

                    $data_bet->user_id = $rows->user_id;
                    $data_bet->pid = 0;
                    $data_bet->game_id = $games['gameId'];
                    $data_bet->code = $games['gameName'];
                    $data_bet->periode = 0;
                    $data_bet->tebak = $rounds['roundId'];
                    $data_bet->posisi = null;
                    $data_bet->nominal = $rounds['betAmount'];
                    $data_bet->menang = null;
                    $data_bet->diskon = null;
                    $data_bet->bayar = $rounds['winAmount'];
                    $data_bet->jumlah = $rounds['balance'];
                    $data_bet->keterangan = $data_bet->bayar < $data_bet->nominal ? 'Kalah' : 'Menang';

                    $data_bet->created_at = isset($rounds['dateTime']) ? $rounds['dateTime'] : date('Y-m-d H:i:s');
                    $data_bet->status = 1;

                    $bet_check = Game_betting::where([
                        'user_id' => $data_bet->user_id,
                        'tebak' => $data_bet->tebak
                    ])->first();

                    if(empty($bet_check)){
                        $data_bet->save();
                    }                    
                }
            }
        }

        return true;
    }

    function pragmatic_get_all_users($user_id = 0){
        $src_user = [
            'provider' => 'PragmaticPlay',
            'status' => 1
        ];

        $src_user = $user_id === 0 ? $src_user : array_merge($src_user, ['user_id' => $user_id]);

        return Game_users::where($src_user)->get();
    }
    
    /**
     * Get curl for pragmatic
     * @param string $url_request
     * @param string $post_fields
     * @return array result
     */
    function pragmatic_curl($url_request, $post_fields){

        $curl = curl_init();
                                    
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_request,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_fields,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Cache-Control: no-cache"
            ),
        ));
                                  
        $response = curl_exec($curl);   

        return json_decode($response, true);
    }
    #endregion pragmatic

    #region pgsoft
    
    function pgsoft_create_user(){
        DB::beginTransaction();
        $users = auth()->user();
        
        if(empty($users)){
            echo "Harus login";
            die();
        }

        $game_users = new Game_users();
        $check_exist = $game_users->check_exist('pgsoft', $users->id);

        if($check_exist !== true){
            return true;
        }

        $this->game_api_get('pgsoft');

        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $uuid = $this->pgsoft_create_uuid();
        $url = $this->game_api->url_request.'external/v3/Player/Create?trace_id='.$uuid;
     
        $datas = $this->pgsoft_curl($url, "operator_token={$this->game_api->api_key}&secret_key={$this->game_api->secret_key}&player_name={$users->name}&currency=IDR&nickname={$users->name}");      
        
        $game_users = new Game_users();
        $game_users->user_id = $users->id;
        $game_users->provider = 'pgsoft';
        $game_users->ext_id = $uuid;
        $game_users->player_id = $uuid; 
        $game_users->balance = 0; 
        $game_users->created_at = date('Y-m-d H:i:s');
        $game_users->status = 1; 

        $game_users->save();

        DB::commit();
    }

    function pgsoft_start_game($game_id){
        $users = auth()->user();

        if(empty($users)){
            echo "Harus Login";
        }

        $this->pgsoft_create_user();

        $this->pragmatic_get_balance_pp($users->id);
        $this->pgsoft_get_balance_pp($users->id);
        $this->game_api_get('pgsoft');

        $data_login = $this->pgsoft_login();
        $ops = $data_login['token'];

        $playUrl = "https://m.pg-redirect.net/{$game_id}/index.html?ot={$this->game_api->api_key}&ops={$ops}&btt=1";
        header('Location:'.$playUrl);
        die();
        
        return $playUrl;
    }

    function pgsoft_transfer($user_id, $saldo_transfer){
        $users = User::find($user_id);


        if($saldo_transfer < 0){
            return $this->pgsoft_withdraw($user_id, abs($saldo_transfer) );
        }
        if(empty($users)){
            echo "User Not Found";
            die();
        }
        
        if(empty($users)){
            echo "Harus login";
            die();
        }

        $this->game_api_get('pgsoft');
        $player_name = $users->name;

        $kode_unik = substr(str_shuffle(1234567890),0,3);
        $kd_transaksi = date('Ymds').$kode_unik;

        $saldo = Saldo::where('user_id' , $users->id)->first();

        $amount = round($saldo_transfer / 1000, 2) ; // nominal di bagi 1000 dan 2 desimal Ex saldo 100.000 menjadi 100.00 saldo 50.000 jd 50.00

        $guid = $this->pgsoft_create_uuid();

        $url = $this->game_api->url_request.'external/Cash/v3/TransferIn?trace_id='.$guid;
        $post_fields = "operator_token={$this->game_api->api_key}&secret_key={$this->game_api->secret_key}&player_name=".$player_name."&Amount={$amount}&transfer_reference=".$kd_transaksi."&currency=IDR";

        $result = $this->pgsoft_curl($url, $post_fields);
    }

    
    function pgsoft_get_balance_pp($user_id = 0){
        $game_users = $this->pgsoft_get_all_users($user_id);

        if(empty($game_users)){
            return true;
        }

        foreach($game_users as $rows){
            $balance = $this->pgsoft_check_balance($rows->user_id);
      
            
            $data = Game_users::find($rows->id);
            $data->balance = $balance;
            $data->save();

            $saldo = Saldo::where('user_id', $rows->user_id)->first();
            $saldo->save_saldo('game', $balance);
        }

        return true;
    }

    function pgsoft_check_balance($user_id){
        $users = User::find($user_id);

        if(empty($users)){
            return false;    
        }

        $this->game_api_get('pgsoft');
        $player_name = $users->name;

        $guid = $this->pgsoft_create_uuid();

        $url_req = $this->game_api->url_request.'external/Cash/v3/GetPlayerWallet?trace_id='.$guid;
        $post_fields = "operator_token={$this->game_api->api_key}&secret_key={$this->game_api->secret_key}&player_name={$player_name}";
        
        $hasil = $this->pgsoft_curl($url_req, $post_fields);
        
        $newSaldos = empty($hasil) ? 0 : $hasil['data']['totalBalance'];
        $newSaldo = $newSaldos * 1000; // Renumerasi dikali 1000 kebalikan dari waktu proses deposit balance yang dibagi 1000

        return $newSaldo;
    }

    function pgsoft_get_all_users($user_id = 0){
        $src_user = [
            'provider' => 'pgsoft',
            'status' => 1
        ];

        $src_user = $user_id === 0 ? $src_user : array_merge($src_user, ['user_id' => $user_id]);

        return Game_users::where($src_user)->get();
    }



    function pgsoft_login(){
        $users = auth()->user();
        
        if(empty($users)){
            echo "Harus login";
            die();
        }
        
        $bytes = random_bytes(20);
        $token = bin2hex($bytes);

        $url = 'https://lobbyslot.my.id/api/pgsapi';
        $post_fields = "ops={$token}&playerName={$users->name}";
                            

        return [
            'result' => $this->pgsoft_curl($url, $post_fields),
            'token' => $token, 
        ];

    }

    function pgsoft_withdraw($user_id, $balance){
        $users = User::find($user_id);
        
        if(empty($users)){
            echo "Harus login";
            die();
        }
        $this->game_api_get('pgsoft');

        // chcck game user
        $game_usr = new Game_users();
        $game_user = $game_usr->check_exist('pgsoft', $user_id);
        if($game_user === false ) {
            return false;
        }
        
        $guidd = $this->pgsoft_create_uuid();
        
    
        $kode_unik = substr(str_shuffle(1234567890),0,3);
        $kd_transaksi = date('Ymds').$kode_unik;
        $requestID = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz123456789'),0,8);
    
        $url_request = $this->game_api->url_request.'external/Cash/v3/TransferAllOut?trace_id='.$guidd;
        $post_fields = "operator_token={$this->game_api->api_key}&secret_key={$this->game_api->secret_key}&player_name={$users->name}&transfer_reference=".$kd_transaksi."&currency=IDR";
        
        $this->pgsoft_curl($url_request, $post_fields);

        $saldo = Saldo::where('user_id', $user_id)->first();

        $new_saldo = ( $saldo->saldo + $saldo->bonus ) - $balance;

        $this->pgsoft_transfer($user_id, $new_saldo);

        return true;
    }

    function pgsoft_create_uuid(){
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        return 
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);   
    }

    
    function pgsoft_curl($url, $post_fields, $debug = false){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_fields,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Cache-Control: no-cache"
            ),
        ));
        
        $response = curl_exec($curl);
        if($debug){
            echo "tes : <br>";
            var_dump($response);
            die();
        }

        curl_close($curl);
        return json_decode($response, true);

    }
    #endregion connect apis

    #region utility

    function game_api_get($provider){
        if(!empty($this->game_api)){
            if($this->game_api->provider == $provider){
                return true;
            }
        }

        $this->game_api = $this->where([
            'provider' => $provider,
            'status' => 1
        ])->first();

        if(empty($this->game_api)){
            echo "CHECK API : ".$provider;
            die();
        }

        return true;
    }

    #endregion
}

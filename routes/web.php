<?php

use Illuminate\Http\Request;
use App\Http\Controllers\backoffice\BackofficeController;
use App\Http\Controllers\backoffice\BannerController;
use App\Http\Controllers\backoffice\BannerPromosiController;
use App\Http\Controllers\backoffice\DatamemberController;
use App\Http\Controllers\backoffice\Deposit_bank;
use App\Http\Controllers\backoffice\DepositbankController;
use App\Http\Controllers\backoffice\DepositController;
use App\Http\Controllers\backoffice\HistoritransaksiController;
use App\Http\Controllers\backoffice\IconController;
use App\Http\Controllers\backoffice\LogoController;
use App\Http\Controllers\backoffice\PernyataanController;
use App\Http\Controllers\backoffice\ProfilAdminController;
// use App\Http\Controllers\backoffice\PromosiController;
use App\Http\Controllers\backoffice\WithdrawController;
use App\Http\Controllers\backoffice\BonusController;
use App\Http\Controllers\backoffice\GameAPIController;
use App\Http\Controllers\backoffice\PengaturanSaldoController;
use App\Http\Controllers\backoffice\GameSettingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserDepositController;
use App\Http\Controllers\UserHistoryController;
use App\Http\Controllers\UserPernyataanController;
use App\Http\Controllers\UserWithdrawController; 
use App\Http\Controllers\PlayGameController; 
use App\Http\Controllers\backoffice\GameController; 
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\BannerPromosi;
use App\Models\Banner;
use App\Models\Game_list;
use App\Models\Game_api;
use App\Models\Game;
use App\Models\User;
use App\Models\Setting;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#region user ( no login allowed )

Route::get('/', function () {
    $setting = Setting::first();

    if($setting->template !== 'main'){
        return view('layouts.'.$setting->template.'.welcome');
    }
    
    return view('welcome');
});

Route::get('/promo_user', function () {
    $banners = BannerPromosi::all();
    return view('promosi', compact('banners'));
});

Route::get('/slots', function () {
    return view('slots');
});

Route::get('/sports', function () {
    return view('sport');
});

Route::get('/casino', function () {
    // return view('casino');

    $game_list = new Game_list();

    return view('games.game_list', [ 'title' => 'Casino', 'game_list' => $game_list->get_game_list('PragmaticPlay', 'LC')] );
});

Route::get('/p2p', function () {
    return view('p2p');
});

Route::get('/fish-hunter', function () {
    return view('fish-hunter');
});

Route::get('/lottery', function () {
    return view('lotre');
});

Route::get('/e-games', function () {
    return view('e-games');
});

Route::get('/cockfight', function () {
    return view('cockfight');
});
// game
Route::get('game-slot/pgsoft', function () {
    return view('game-slot.pgsoft');
});

Route::get('game-slot/pragmaticplay', function () {    
    $games = Game::where('game_provider', 'pragmatic')
        ->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'games' => $games] );
});

Route::get('game-slot/microgaming', function () {
    $games = Game::where('game_provider', 'microgaming')
        ->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'games' => $games] );
})->name('game.slot.microgaming');


Route::get('game-slot/pgsoft', function () {
    $game_list = Game_list::where([
        'provider' => 'PGSoft',
        'status' => 1
    ])->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'game_list' => $game_list] );
});

Route::get('game-slot/habanero', function () {
    $games = Game::where('game_provider', 'habanero')
        ->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'games' => $games] );
});

Route::get('game-slot/playngo', function () {
    $games = Game::where('game_provider', 'playngo')
        ->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'games' => $games] );
})->name('game.slot.playngo');

Route::get('game-slot/joker', function () {
    return view('game-slot.joker');
});
// menu
Route::get('/memo', function () {
    return view('memo');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/complain', function () {
    return view('complain');
});

Route::get('/refferal', function () {
    return view('refferal');
});

Route::get('/game_api', function () {
    $game_api = new Game_api();
    // $game_api->pragmatic_create_users();
    // $game_api->pragmatic_start_game();

    // return view('refferal');
});

Route::get('/game_list', function () {
    
    $game_list = Game_list::where([
        'data_type' => 'RNG',
        'provider' => 'PragmaticPlay',
        'status' => 1
    ])->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'game_list' => $game_list] );
});

Route::get('/game_list_new', function () {
    $game_list = Game_list::where('game_group_id', 'bet')->get();

    return view('games.game_list', [ 'title' => 'SLOT', 'game_list' => $game_list] );
});

Route::get('/game_process', function (Request $request) {
    $game_api = new Game_api();

    // create user when not exist
    $game_api->pragmatic_create_users();
    $game_id = $request->game_id;
    $provider = $request->provider;

    $game_data = Game_list::where([
        'game_id' => $game_id,
        'provider' => $provider,
        'status' => 1
    ])->first();

    $game_url = '';

    if($game_data->provider == 'PragmaticPlay'){
        $game_url = $game_api->pragmatic_start_game($game_id);
    }

    if($game_data->provider == 'PGSoft'){
        $game_url = $game_api->pgsoft_start_game($game_id);
    }
    
    return view('games.game_process', ['game_url' => $game_url ]);
});


Route::get('/game_api_balance', function () {
    $game_api = new Game_api();
    $game_api->pragmatic_get_balance_pp();
});

Route::get('/game_api_pg', function () {
    $game_api = new Game_api();
    $game_api->pgsoft_create_user();
});

Route::get('/game_api_pg_start', function (Request $request) {
    $game_api = new Game_api();
    
    $game_id = $request->game_id;
    $game_api->pgsoft_start_game($game_id);
});

Route::post('/admin_login', function () {
    $game_api = new Game_api();
    $game_api->pragmatic_get_balance_pp();
});

Route::get('/pp_new_game', function () {
    $game_api = new Game_api();
    $game_api->pragmatic_create_users();
});

Route::get('/pgsoft_wd', function () {
    $game_api = new Game_api();
    $game_api->pgsoft_check_balance(auth()->user()->id);
});


Route::get('/username_phone', function (Request $request) {
    
    $username = addslashes(base64_decode($request->username));
    $phone = addslashes(base64_decode($request->phone));

    // check  current username 
    $data_name = User::where([
        'name' => $username
    ])->first();

    // check current phone number
    $data_phone = User::where([
        'telp' => $phone
    ])->first();

    
    // true is avail
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'username' => empty($data_name),
        'phone' => empty($data_phone)
    ]);
});


#endregion

// Route::resource('/datamurid', DataMuridController::class);
// Route::post('/datawalikelas', [DataMuridController::class, 'store_walikelas']);
Route::get('/crawl-games', [GameController::class, 'CrawlingGame']);
Route::get('/play-game/{game_code}', [PlayGameController::class, 'playGame'])->name('play.game');
Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'admin'], function () {

        // ROUTE ADMINISTRATOR (Input Trans Only)
        Route::resource('/deposit', DepositController::class);
        Route::resource('/withdraw', WithdrawController::class);

        Route::resource('/histori_transaksi', HistoritransaksiController::class);
        Route::resource('/backoffice', BackofficeController::class);
        Route::resource('/profil_admin', ProfilAdminController::class);
        Route::put('/user-deposit/aksi/{id}', [UserDepositController::class, 'aksi']);    
        Route::put('/user-withdraw/aksi/{id}', [UserWithdrawController::class, 'aksi']);    
        Route::resource('/pengaturan_saldo', PengaturanSaldoController::class);

        
        Route::group(['middleware' => 'dev_mode'], function () {
            Route::resource('/deposit_bank', DepositbankController::class);
            // Route::resource('/promosi', PromosiController::class);

            Route::resource('/pernyataan', PernyataanController::class);
            Route::resource('/data_member', DatamemberController::class);
            Route::resource('/banner', BannerController::class);
            Route::resource('/banner_promosi', BannerPromosiController::class);
            Route::resource('/bonus', BonusController::class);

            Route::resource('/game_setting', GameSettingController::class);
            Route::resource('/game_api', GameAPIController::class);
            Route::get('/game_setting_lock', [GameSettingController::class,'lock']);
            Route::get('/game_setting_unlock', [GameSettingController::class,'unlock']);

            Route::resource('/setting', SettingController::class);
        });
    });

    // ROUTE USER 
    Route::resource('/user-deposit', UserDepositController::class);
    Route::get('/user-saldo-refresh', [UserDepositController::class, 'get_saldo']);
    Route::resource('/user-withdraw', UserWithdrawController::class);
    Route::resource('/user-history', UserHistoryController::class);
    Route::resource('/user-pernyataan', UserPernyataanController::class);

    Route::get('/ajaxprofileEdit', function () {
        return view('profile_edit');
    });
    
    Route::get('/ajaxchgPass', function () {
        return view('change_password');
    });

    Route::post('/ajaxchgPass', function(Request $request){
        $current_user = Auth::user();

        header('Content-Type: application/json; charset=utf-8');
        // password fullfiled
        if(Hash::check($request->currentPwd, $current_user->password)) {
            $data_user = Auth::user();
            $data_user->password = Hash::make($request->newPwd);
            $data_user->save();
            
            echo json_encode([
                'error' => false,
                'msg' => "Password telah berhasil diubah"
            ]);
        }else{
            echo json_encode([
                'error' => true,
                'msg' => "Password Tidak Sesuai, Coba ulangi kembali"
            ]);
        }
    });
    
    Route::get('/getBal', function () {
        return view('get_balance');
    });
    Route::get('/ajaxIDNBal', function () {
        return view('get_balance');
    });
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

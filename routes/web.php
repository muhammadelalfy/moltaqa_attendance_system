<?php

use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ZoomIntegrationController;
use Illuminate\Support\Facades\Route;
use Twilio\Rest\Client;
use App\Traits\Sms;

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
require __DIR__ . '/auth.php';

Route::get('send/sms', [SmsController::class,'send_sms']);
Route::get('/',function (){
    return view('pages.home');
})->middleware('auth')->name('pages');

Route::group(['namespace' => '\App\Http\Controllers'],function (){

    Route::get('/{page}/page', [PageController::class,'index'])->middleware('auth')->name('pages');
    Route::get('/{page}', [PageController::class,'index']);
//    Route::get('/{register}', [PageController::class,'index'])->name('register');
    Route::post('/attend', [AttendenceController::class,'attend_online']);
    Route::post('/is-attended', [AttendenceController::class,'is_attended'])->name('attendance');
    Route::post('/check-code', [AttendenceController::class,'check_code'])->name('check_code');
    Route::post('/download', [AttendenceController::class,'check_code'])->name('check_code');
    Route::get('/zoom/{id}', [ZoomIntegrationController::class, 'createMeeting'])->name('create-meeting');

});

//twillio
Route::get('sendSms', function () {


$sid = "ACc3a8f711a6f190c5deba565e5e308152";
$token = "8aa73e0d9de980f4af65a3fa4818a8d8";
//dd($sid,$token);
$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+20 112 212 7333", // to
        ["from" => "+12566454834", "body" => "Hi there we are abaad"]
    );

dd("message sent successfully");
});


//Route::get('sendSms', function () {

//    $response = \Illuminate\Support\Facades\Http::withHeaders([ 'accept' => 'application/json',
//    'content-type' => 'application/json',])->get('https://apis.deewan.sa/auth/v1/signin',);
//    $response = $client->request('POST', 'https://apis.deewan.sa/auth/v1/signin', [
//        'headers' => [
//            'accept' => 'application/json',
//            'content-type' => 'application/json',
//        ],
//    ]);

//    echo $response->body();
//
//    $client = new \GuzzleHttp\Client();

//
//    $basic = new \Vonage\Client\Credentials\Basic("fa40bd91", "PoPbD2HcAXkZdQDL");
//    $client = new \Vonage\Client($basic);
//    $response = $client->sms()->send(
//        new \Vonage\SMS\Message\SMS("201122127333", 'Abaad', 'connected')
//    );
////    966548078995
////    201551570052
//    $message = $response->current();
//
//    if ($message->getStatus() == 0) {
//        echo "The message was sent successfully\n";
//    } else {
//        echo "The message failed with status: " . $message->getStatus() . "\n";
//    }
//
//});

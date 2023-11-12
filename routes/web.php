<?php

use Illuminate\Support\Facades\Route;
use Twilio\Rest\Client;

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

Route::get('/{page}', [\App\Http\Controllers\PageController::class,'index'])->name('pages');

Route::get('/zoom/{id}', [\App\Http\Controllers\ZoomIntegrationController::class, 'createMeeting']);

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
require __DIR__ . '/auth.php';

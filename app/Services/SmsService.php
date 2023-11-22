<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    public function sendSms()
    {
        $app_id = config('credentials.sms.api_secret');
        $app_sec = config('credentials.sms.api_secret');
        $app_hash = base64_encode("{$app_id}:{$app_sec}");

        $messages = [
            "messages" => [
                [
                    "text" => "Hello, Mr Abdullah",
                    "numbers" => ["966548078995"],
                    "sender" => "ALMoltaqa"
                ]
            ]
        ];

        $url = "https://api-sms.4jawaly.com/api/v1/account/area/sms/send";
        $headers = [
            "Accept: application/json",
            "Content-Type: application/json",
            "Authorization: Basic {$app_hash}"
        ];

        $response = Http::withHeaders($headers)->post($url, $messages);

        $response_json = json_decode($response, true);

        if ($response->getStatusCode() === 200) {
            if (isset($response_json["messages"][0]["err_text"])) {
                echo $response_json["messages"][0]["err_text"];
            } else {
                echo "تم الارسال بنجاح  " . " job id:" . $response_json["job_id"];
            }
        } elseif ($response->getStatusCode() == 400) {
            echo $response_json["message"];
        } elseif ($response->getStatusCode() == 422) {
            echo "نص الرسالة فارغ";
        } else {
            echo "محظور بواسطة كلاودفلير. Status code: {$response->getStatusCode()}";
        }

    }

}

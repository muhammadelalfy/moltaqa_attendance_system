<?php

namespace App\Http\Controllers;
use App\Traits\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    use Sms;

    public function send_sms($pageName)
    {
        return $this->sendSms();
    }
}

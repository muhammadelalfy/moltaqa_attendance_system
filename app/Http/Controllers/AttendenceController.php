<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\User;
use App\Traits\Sms;
class AttendenceController extends Controller
{
    use Sms;
    public function attend_online()
    {
       User::where('id',auth()->user()->id)->update(['is_attended'=>'true' , 'attendance_type'=>'online']);
        return Meeting::first()->join_url;
    }

    public function send_sms(){
        return $this->sendSms();
    }
}

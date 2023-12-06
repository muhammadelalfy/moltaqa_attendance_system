<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Meeting;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class AttendenceController extends Controller
{

    public function attend_online()
    {
        $user = User::where('id', auth()->user()->id)->update(['is_attended' => 'true', 'attendance_type' => 'online']);
        $unique_number = unique_number();
        $user->certificate()->cteate(['number' => $unique_number]);
        return Meeting::first()->join_url;

    }

    function unique_number()
    {
        do {
            $number = random_int(1000000, 9999999);
        } while (Certificate::where("number", "=", $number)->first());

        return $number;
    }

    public function is_attended(Request $request)
    {
        $user = User::where('phone', $request->phone)->where('is_attended', 1)->first();

        if ($user->is_attended != null) {
            return view('pages.check-code');
        } else {
            return redirect()->back()->with(['error' => 'عفوا لا توجد شهادة لهذا المسخدم']);
        }
    }

    public function check_code(Request $request)
    {
        if (true) {
            $user = User::find(auth()->id());
            $certificate_number = $user->certification->number;
            return view('pages.download-certificate', compact('certificate_number'));
        } else {
            return redirect()->back()->with(['error' => 'عفوا الكود غير صحيح']);
        }

    }

    public function download_certificate()
    {
        $user = User::find(auth()->id());
        $certificate_number = $user->certification->number;
        $qr = QrCode::format('svg')->size(200)->errorCorrection('H')->generate('string');
        dd($qr);
        $pdf = Pdf::loadView('pages.download', compact(['qr','certificate_number']));
        return $pdf->stream('attendance certificate.pdf');
    }


}

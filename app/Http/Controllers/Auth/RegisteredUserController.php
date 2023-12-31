<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Patient;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laracasts\Flash\Flash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     * @return string
     */
    public function store(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();
            $request->input('type', 'customer');
            $user = User::create($request->all());
//dd($user);
            DB::commit();
//            $user->sendEmailVerificationNotification();
            return redirect('login')->with(['success' => 'registered successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            info('error occurred at ' . __LINE__ . ' at ' . __CLASS__ . ' class and the error is ' . $e);
        }

    }
}

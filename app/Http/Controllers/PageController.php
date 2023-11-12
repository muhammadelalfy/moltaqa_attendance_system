<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($pageName)
    {
//        dd($pageName);
        if ($pageName == 'login-page' || $pageName == 'register' || $pageName == 'reset-password')
            return view('auth.' . $pageName);
        return view('pages.' . $pageName);
    }
}

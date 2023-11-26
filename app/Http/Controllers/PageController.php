<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($pageName)
    {
//        dd($pageName);
        if ($pageName == 'login' || $pageName == 'register' || $pageName == 'reset-password') {
            $this->middleware('guest');
            return view('auth.' . $pageName);
        } elseif ($pageName == 'admin_evaluation_management' || $pageName == 'admin_overview' || $pageName == 'admin_questions') {
            return view('pages.admin.' . $pageName);
        }
        return view('pages.' . $pageName);
    }
}

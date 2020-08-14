<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // dd(env('APP_TITLE_ABBREVIATION'));
        return view('main');

        // return view('pages.auth.login');
    }
}

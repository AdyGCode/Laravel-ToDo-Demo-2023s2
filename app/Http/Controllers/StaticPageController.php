<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class StaticPageController extends Controller
{

    public function home(): View
    {
        return view('static.home');
    }

    public function privacy(): View
    {
        return view('static.privacy');
    }

    public function contact(): View
    {
        return view('static.contact');
    }

    public function icons(): View
    {
        return view('static.icons');
    }
    public function colours(): View
    {
        return view('static.colours');
    }



}

<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function movielist()
    {
        return view('movielist');
    }

    public function moviedetail()
    {
        return view('moviedetail');
    }
    public function moviecheckout()
    {
        return view('moviecheckout');
    }

}

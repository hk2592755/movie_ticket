<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function movielist()
    {



        $fetch=Movie::all();
        //dd($fetch);
        return view('movielist',['data'=>$fetch]);

    }



    public function moviedetail($id)
    {

        return view('moviedetail',['data' =>Movie::find($id)]);

    }

    public function ticketplan()
    {
        return view('ticketplan');
    }

    public function seatplan()
    {
        return view('seatplan');
    }

    public function moviecheckout()
    {
        return view('moviecheckout');
    }



}

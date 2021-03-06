<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\payment;

use \PDF;
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

    public function ticketplan($id)
    {



        return view('ticketplan',['data'=>Movie::find($id)]);
    }



    public function seatplan($id)
    {
         //return view('seatplan');

         return view('seatplan',['data' =>Movie::find($id)]);
    }



    public function moviecheckout($id)
    {

        return view('moviecheckout',['data' =>Movie::find($id)]);
    }

    // public function downloadPdf()
    // {
    //     $pdf = PDF::loadview('ticketplan');
    //     return $pdf->download('ticketplan.pdf');
    // }





}

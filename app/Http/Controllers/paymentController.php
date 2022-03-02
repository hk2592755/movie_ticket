<?php

namespace App\Http\Controllers;
use App\Models\payment;
use App\Models\Movie;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $find=Payment::all();
        //dd($find);
        return view('payment',['pay'=>$find]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function save(Request $request ,$id)
    {

        $payment = new Payment;

        $payment->name = $request->input('name');
        $payment->email = $request->input('email');
        $payment->phoneno = $request->input('phoneno');
        $payment->select = $request->input('select');
        $payment->nameofcard = $request->input('nameofcard');
        $payment->expiration = $request->input('expiration');
        $payment->cvv = $request->input('cvv');

        $payment->save();
        return redirect()->route('ticketplan',['id'=>$id]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

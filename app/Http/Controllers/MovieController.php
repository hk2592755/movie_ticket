<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->role;

        if($role=="1" )
        {

            return view('admin');
        }
        else{

            return view('welcome');
        }




    }

    public function add()
    {
        return view('/add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $movie = new Movie;

        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->genre = $request->input('genre');
        $movie->date = $request->input('date');

        if($request->hasFile('file_path'))
          {
             $file = $request->file('file_path');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads',$filename);
             $movie->file_path = $filename;
          }
        $movie->save();

        return redirect()->back()->with('success','Data Has been Inserted');


    }

    public function save()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {



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

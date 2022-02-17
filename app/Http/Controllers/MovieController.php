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
        $movie->cinema = $request->input('cinema');
        $movie->date = $request->input('date');
        $movie->time = $request->input('time');


        if($request->hasFile('file_path'))
          {
             $file = $request->file('file_path');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads',$filename);
             $movie->file_path = $filename;
          }

          if($request->hasFile('trailer_path'))
          {
             $file = $request->file('trailer_path');
             $extension = $file->getClientOriginalExtension();
             $filename = time().'.'.$extension;
             $file->move('uploads/trailers',$filename);
             $movie->trailer_path = $filename;
          }
        $movie->save();


        return redirect('show');


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
    public function show()
    {

        $fetch=Movie::all();
        //dd($fetch);
        return view('show',['data'=>$fetch]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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


        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Movie $fetch,$id)
    {
        $fetch=Movie::find($id);
        $fetch->delete();
        return redirect('show');

    }
}

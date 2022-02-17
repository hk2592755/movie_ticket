
@extends('layout1')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>Movie Table</h3>
      <div class="row">
        <div class="col-md-12">
          <div class="content-panel">
            <h4><a href="{{route('/add')}}" class="btn btn-primary" > Add Movie</a></h4>
            <hr>
            <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                  <th>Name</th>
                  <th>Release Year</th>
                  <th>Genre</th>
                  <th>Genre</th>
                  <th>Release Date</th>
                  <th>Time</th>
                  <th>Image</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $item )
                  <tr>
                      <td>{{$item->id}} </td>
                       <td>{{$item->name}} </td>
                      <td>{{$item->year}} </td>
                      <td>{{$item->genre}} </td>
                      <td>{{$item->cinema}} </td>
                      <td>{{$item->date}} </td>
                      <td>{{$item->time}} </td>
                      <td><img src="{{asset('uploads/' . $item->file_path)}}" style="width: 200px; height:200px;" > </td>
                      <td><a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>

                  </tr>

                  @endforeach


              </tbody>
            </table>
          </div>
        </div>


      </div>

    </section>
  </section>
  <!-- /MAIN CONTENT -->
  <!--main content end-->


@endsection

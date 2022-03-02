

@extends('layout1')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> ADD MOVIES</h3>
      <!-- BASIC FORM ELELEMNTS -->

      <div class="row mt">
        <div class="col-md-8">
          <div class="form-panel">
            <h3 class="mb"><i class="fa fa-plus"></i>Movies</h3>
            <form class="form-horizontal style-form" method="POST" action="{{route('/create')}}" enctype="multipart/form-data">
                @csrf

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Release Year</label>
                <div class="col-sm-10">
                  <input type="number" name="year" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Genre</label>
                <div class="col-sm-10">
                  {{-- <input type="text" name="genre" class="form-control"> --}}
                  <select name="genre" id="" class="form-control">
                      <option value="">Select Genre</option>
                      <option value="Action">Action </option>
                      <option value="Horror">Horror</option>
                      <option value="Comedy">Comedy</option>
                      <option value="Cartoon">Cartoon</option>
                      <option value="English">English</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Select Cinema</label>
                <div class="col-sm-10">
                  {{-- <input type="text" name="genre" class="form-control"> --}}
                  <select name="cinema" id="" class="form-control">
                      <option value="">Select Cinema</option>
                      <option value="NueplexCinemas">Nueplex Cinemas </option>
                      <option value="Cinepax">Cinepax</option>
                      <option value="CinegoldPlex">Cinegold Plex</option>
                      <option value="DreamlandCinema">Dreamland Cinema</option>
                      <option value="RioCinema">Rio Cinema</option>
                      <option value="ParadiseCinema">Paradise Cinema</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Release Date</label>
                <div class="col-sm-10">
                  <input type="date" name="date" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Time</label>
                <div class="col-sm-10">
                  <input type="time" name="time" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Choose Image</label>
                <div class="col-sm-10"  >
                  <input type="file" name="file_path" class="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2  control-label">Choose Trailer</label>
                <div class="col-sm-10">
                  <input type="file" name="trailer_path" class="">
                </div>
              </div>

              <input type="submit" name="insert" value="ADD MOVIE" class="btn btn-primary">

            </form>
          </div>
        </div>
        <!-- col-lg-12-->
      </div>

      <a href="{{route('movielist')}}">view on web</a>
@endsection

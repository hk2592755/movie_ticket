
@extends('layout1')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>Payment Table</h3>
      <div class="row">
        <div class="col-md-12">
          <div class="content-panel">
            <h4><a href="" class="btn btn-primary" >Payments</a></h4>
            <hr>
            <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Type</th>
                  <th>Name Of Card</th>
                  <th>Expiration</th>
                  <th>Cvv</th>


                </tr>
              </thead>
              <tbody>
                  @foreach ($pay as $item )
                  <tr>
                      <td>{{$item->id}} </td>
                       <td>{{$item->name}} </td>
                      <td>{{$item->email}} </td>
                      <td>{{$item->phoneno}} </td>
                      <td>{{$item->select}} </td>
                      <td>{{$item->nameofcard}} </td>
                      <td>{{$item->expiration}} </td>
                      <td>{{$item->cvv}} </td>


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

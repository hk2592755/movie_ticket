
@extends('layout')

@section('main')

<!-- ==========Banner-Section========== -->
<section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{asset('assets/images/banner/banner04.jpg')}}">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-content style-two">
                <h3 class="title">{{$data->name}}</h3>
                <div class="tags">
                    <a href="#0">{{$data->cinema}}</a>
                    <a href="#0">English - 2D</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Page-Title========== -->
<section class="page-title bg-one">
    <div class="container">
        <div class="page-title-area">
            <div class="item md-order-1">
                <a href="/seatplan" class="custom-button back-button">
                    <i class="flaticon-double-right-arrows-angles"></i>back
                </a>
            </div>
            <div class="item date-item">
                <span class="date">{{$data->date}}</span>

            </div>
            <div class="item">
                <h5 class="title">{{$data->time}}</h5>
                <p></p>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page-Title========== -->

<!-- ==========Movie-Section========== -->
<div class="movie-facility padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">


                <div class="checkout-widget checkout-card mb-0">
                    <h5 class="title">Payment Option </h5>


                    <form class="payment-card-form" method="POST" action="/save/{{$data->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="card4">Name</label>
                            <input type="text" name="name" id="card4" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="card4">Email</label>
                            <input type="text" name="email" id="card4" placeholder="Email"  required>
                        </div>
                        <div class="form-group w-100">
                            <label for="card2">Phone NO</label>
                            <input type="number"  name="phoneno" id="card2" required>
                        </div>
                        <div class="form-group w-100">
                            <label for="card1">Card Details</label>
                            <select  name="select" id="card1" class="form-control"  required>
                                <option value="">Select Option</option>
                                <option value="Creditcard">Credit Card</option>
                                <option value="Debitcard">Debit Card</option>
                                      </select>
                        </div>
                        <div class="form-group w-100">
                            <label for="card2"> Name on the Card</label>
                            <input type="text"  name="nameofcard" id="card2" required>
                        </div>
                        <div class="form-group">
                            <label for="card3">Expiration</label>
                            <input type="date" name="expiration" id="card3" placeholder="MM/YY" required>
                        </div>
                        <div class="form-group">
                            <label for="card4">CVV</label>
                            <input type="password" name="cvv" id="card4" placeholder="CVV" required>
                        </div>

                        <div class="form-group">

                            <a href="/ticketplan/{{$data->id}}"><input type="submit" class="custom-button" value="make payment"  onclick="myFunction()">
                            </a>
                            </div>

                        </form>



                </div>

            </div>

        </div>
    </div>
</div>
<!-- ==========Movie-Section========== -->
{{--
    <script>
function myFunction() {
  alert("Payment has been sent Successfully sent");
}
</script>

 --}}

@endsection

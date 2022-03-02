<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ticket</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js')}}"></script>

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
</head>
<body  id="editor">

    <div class="movie-facility padding-bottom padding-top" style="align-items: center" id="htmlContent" >
        <div class="container">
            <div class="row" >
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6">
                    <div class="booking-summery bg-one">
                        <h4 class="title">Your Ticket</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">
                                <span >Movie Name</span>
                                <span><img class="" src="{{asset('uploads/' . $data->file_path)}}" alt="movie" style="width: 150px; height:100px;"></span>

                            </h6>
                            </li>
                            <li>
                                <h6 class="subtitle">
                                <span  class="info">{{$data->name}}</span>
                            </h6>
                            </li>
                            <li>
                                <h6 class="subtitle"></h6>
                                <span class="info">English-2d</span>
                            </li>
                            <li>
                                <h6 class="subtitle">
                                <span >Cinema Name</span>
                            </h6>
                            <li>
                                <h6 class="subtitle"><span class="info">{{$data->cinema}}</span><span></span></h6>
                            {{--  --}}
                            </li>
                            <li>
                                <h6 class="subtitle">
                                <span >Movie Date</span>
                            </h6>
                        </li>
                        <li>
                            <h6 class="subtitle"></h6>
                            <span class="info">{{$data->date}}</span>
                        </li>
                            {{-- <li>
                                <h6 class="subtitle mb-0"><span>Tickets  Price</span><span>RS;800</span></h6>
                            </li> --}}
                        </ul>
                        <ul class="side-shape">
                            <li>
                                <h6 class="subtitle"><span>Seat No</span><span>A9 A10</span></h6>

                            </li>
                            <li>
                                <h6 class="subtitle"><span>Movie Time</span></h6>
                                <span class="info">{{$data->time}}</span>
                            </li>
                        </ul>
                        <ul>
                             <li>
                                <span class="info"><span>Total Price</span><span>Rs:800</span></span>

                            </li>
                        </ul>
                        <div class="proceed-area  text-center">
                            <a href="{{route('welcome')}}">
                            <button class="custom-button back-button" id="generatePDF" >Download Ticket</button>
                        </a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3">

                </div>


            </div>
        </div>

    </div>




    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/heandline.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
  var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

//margins.left, // x coord   margins.top, { // y coord
$('#generatePDF').click(function () {
    doc.fromHTML($('#htmlContent').html(), 15, 15, {

        'elementHandlers': specialElementHandlers
    });
    doc.save('ticket.pdf');
});

    </script>

</body>
</html>

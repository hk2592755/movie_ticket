

@extends('layout')



@section('main')

<!-- ==========Banner-Section========== -->
<section class="banner-section">
    <div class="banner-bg bg_img bg-fixed" data-background="assets/images/banner/banner01.jpg"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for
                <span class="color-theme cd-words-wrapper p-0 m-0">
                    <b class="is-visible">Movie</b>
                    <b>Event</b>
                    <b>Sport</b>
                </span>
            </h1>
            <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Ticket-Search========== -->
<section class="search-ticket-section padding-top pt-lg-0">
    <div class="container">
        <div class="search-tab bg_img" data-background="assets/images/ticket/ticket-bg01.jpg">
            <div class="row align-items-center mb--20">
                <div class="col-lg-6 mb-20">
                    <div class="search-ticket-header">
                        <h6 class="category">welcome to Boleto </h6>
                        <h3 class="title">what are you looking for</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <ul class="tab-menu ticket-tab-menu">
                        <li class="active">
                            <div class="tab-thumb">
                                <img src="assets/images/ticket/ticket-tab01.png" alt="ticket">
                            </div>
                            <span>movie</span>
                        </li>
                        <li>
                            <div class="tab-thumb">
                                <img src="assets/images/ticket/ticket-tab02.png" alt="ticket">
                            </div>
                            <span>events</span>
                        </li>
                        <li>
                            <div class="tab-thumb">
                                <img src="assets/images/ticket/ticket-tab03.png" alt="ticket">
                            </div>
                            <span>sports</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-area">
                <div class="tab-item active">
                    <form class="ticket-search-form">
                        <div class="form-group large">
                            <input type="text" placeholder="Search for Movies">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/city.png" alt="ticket">
                            </div>
                            <span class="type">city</span>
                            <select class="select-bar">
                                <option value="london">London</option>
                                <option value="dhaka">dhaka</option>
                                <option value="rosario">rosario</option>
                                <option value="madrid">madrid</option>
                                <option value="koltaka">kolkata</option>
                                <option value="rome">rome</option>
                                <option value="khoksa">khoksa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/date.png" alt="ticket">
                            </div>
                            <span class="type">date</span>
                            <select class="select-bar">
                                <option value="26-12-19">23/10/2020</option>
                                <option value="26-12-19">24/10/2020</option>
                                <option value="26-12-19">25/10/2020</option>
                                <option value="26-12-19">26/10/2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">cinema</span>
                            <select class="select-bar">
                                <option value="Awaken">Awaken</option>
                                <option value="dhaka">dhaka</option>
                                <option value="rosario">rosario</option>
                                <option value="madrid">madrid</option>
                                <option value="koltaka">kolkata</option>
                                <option value="rome">rome</option>
                                <option value="khoksa">khoksa</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="tab-item">
                    <form class="ticket-search-form">
                        <div class="form-group large">
                            <input type="text" placeholder="Search for Events">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/city.png" alt="ticket">
                            </div>
                            <span class="type">city</span>
                            <select class="select-bar">
                                <option value="london">London</option>
                                <option value="dhaka">dhaka</option>
                                <option value="rosario">rosario</option>
                                <option value="madrid">madrid</option>
                                <option value="koltaka">kolkata</option>
                                <option value="rome">rome</option>
                                <option value="khoksa">khoksa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/date.png" alt="ticket">
                            </div>
                            <span class="type">date</span>
                            <select class="select-bar">
                                <option value="26-12-19">23/10/2020</option>
                                <option value="26-12-19">24/10/2020</option>
                                <option value="26-12-19">25/10/2020</option>
                                <option value="26-12-19">26/10/2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">event</span>
                            <select class="select-bar">
                                <option value="angular">angular</option>
                                <option value="startup">startup</option>
                                <option value="rosario">rosario</option>
                                <option value="madrid">madrid</option>
                                <option value="koltaka">kolkata</option>
                                <option value="Last-First">Last-First</option>
                                <option value="wish">wish</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="tab-item">
                    <form class="ticket-search-form">
                        <div class="form-group large">
                            <input type="text" placeholder="Search fo Sports">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/city.png" alt="ticket">
                            </div>
                            <span class="type">city</span>
                            <select class="select-bar">
                                <option value="london">London</option>
                                <option value="dhaka">dhaka</option>
                                <option value="rosario">rosario</option>
                                <option value="madrid">madrid</option>
                                <option value="koltaka">kolkata</option>
                                <option value="rome">rome</option>
                                <option value="khoksa">khoksa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/date.png" alt="ticket">
                            </div>
                            <span class="type">date</span>
                            <select class="select-bar">
                                <option value="26-12-19">23/10/2020</option>
                                <option value="26-12-19">24/10/2020</option>
                                <option value="26-12-19">25/10/2020</option>
                                <option value="26-12-19">26/10/2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="assets/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">sports</span>
                            <select class="select-bar">
                                <option value="football">football</option>
                                <option value="cricket">cricket</option>
                                <option value="cabadi">cabadi</option>
                                <option value="madrid">madrid</option>
                                <option value="gadon">gadon</option>
                                <option value="rome">rome</option>
                                <option value="khoksa">khoksa</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Ticket-Search========== -->

<!-- ==========Movie-Main-Section========== -->
<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <div class="row flex-wrap-reverse justify-content-center">
            <div class="col-lg-3 col-sm-10  mt-50 mt-lg-0">
                <div class="widget-1 widget-facility">
                    <div class="widget-1-body">
                        <ul>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="assets/images/sidebar/icons/sidebar01.png" alt="sidebar"></span>
                                    <span class="cate">24X7 Care</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="assets/images/sidebar/icons/sidebar02.png" alt="sidebar"></span>
                                    <span class="cate">100% Assurance</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="assets/images/sidebar/icons/sidebar03.png" alt="sidebar"></span>
                                    <span class="cate">Our Promise</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="assets/images/sidebar/banner/banner01.jpg" alt="banner">
                        </a>
                    </div>
                </div>
                <div class="widget-1 widget-trending-search">
                    <h3 class="title">Trending Searches</h3>
                    <div class="widget-1-body">
                        <ul>
                            <li>
                                <h6 class="sub-title">
                                    <a href="#0">mars</a>
                                </h6>
                                <p>Movies</p>
                            </li>
                            <li>
                                <h6 class="sub-title">
                                    <a href="#0">alone</a>
                                </h6>
                                <p>Movies</p>
                            </li>
                            <li>
                                <h6 class="sub-title">
                                    <a href="#0">music event</a>
                                </h6>
                                <p>event</p>
                            </li>
                            <li>
                                <h6 class="sub-title">
                                    <a href="#0">NBA Games 2020</a>
                                </h6>
                                <p>Sports</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="assets/images/sidebar/banner/banner02.jpg" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="article-section padding-bottom">
                    <div class="section-header-1">
                        <h2 class="title">movies</h2>
                        <a class="view-all" href="movie-grid.html">View All</a>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="movie-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/movie/movie01.jpg" alt="movie">
                                    </a>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">alone</a>
                                    </h5>
                                    <ul class="movie-rating-percent">
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/movie/tomato.png" alt="movie">
                                            </div>
                                            <span class="content">88%</span>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/movie/cake.png" alt="movie">
                                            </div>
                                            <span class="content">88%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="movie-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/movie/movie02.jpg" alt="movie">
                                    </a>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">mars</a>
                                    </h5>
                                    <ul class="movie-rating-percent">
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/movie/tomato.png" alt="movie">
                                            </div>
                                            <span class="content">88%</span>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/movie/cake.png" alt="movie">
                                            </div>
                                            <span class="content">88%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="movie-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/movie/movie03.jpg" alt="movie">
                                    </a>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">venus</a>
                                    </h5>
                                    <ul class="movie-rating-percent">
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/movie/tomato.png" alt="movie">
                                            </div>
                                            <span class="content">88%</span>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <img src="assets/images/movie/cake.png" alt="movie">
                                            </div>
                                            <span class="content">88%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-section padding-bottom">
                    <div class="section-header-1">
                        <h2 class="title">events</h2>
                        <a class="view-all" href="events.html">View All</a>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="event-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/event/event01.jpg" alt="event">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">Digital Economy Conference 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="event-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/event/event02.jpg" alt="event">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">web design conference 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="event-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/event/event03.jpg" alt="event">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">digital thinkers meetup</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-section">
                    <div class="section-header-1">
                        <h2 class="title">sports</h2>
                        <a class="view-all" href="sports.html">View All</a>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/sports/sports01.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">football league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/sports/sports02.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world cricket league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="assets/images/sports/sports03.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">basket ball tournament 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Main-Section========== -->



@endsection

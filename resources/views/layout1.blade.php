

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Favicons -->
  <link href="{{asset('assets/admin_panel/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/admin_panel/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/admin_panel/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('assets/admin_panel/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="{{asset('assets/admin_panel/stylesheet" type="text/css" href="css/zabuto_calendar.css')}}">
  <link rel="{{asset('assets/admin_panel/stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('assets/admin_panel/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin_panel/css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('assets/admin_panel/lib/chart-master/Chart.js')}}"></script>


</head>
<body>

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b><span>DAShboard</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-theme">4</span>
                </a>
              <ul class="dropdown-menu extended tasks-bar">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 4 pending tasks</p>
                </li>
                <li>
                  <a href="index.html#">
                    <div class="task-info">
                      <div class="desc">Dashio Admin Panel</div>
                      <div class="percent">40%</div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>

                <li>
                  <a href="index.html#">
                    <div class="task-info">
                      <div class="desc">Product Development</div>
                      <div class="percent">80%</div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="external">
                  <a href="#">See All Tasks</a>
                </li>
              </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-theme">5</span>
                </a>
              <ul class="dropdown-menu extended inbox">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 5 new messages</p>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="{{asset('assets/admin_panel/img/ui-zac.jpg')}}"></span>
                    <span class="subject">
                    <span class="from">Zac Snider</span>
                    <span class="time">Just now</span>
                    </span>
                    <span class="message">
                    Hi mate, how is everything?
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="{{asset('assets/admin_panel/img/ui-divya.jpg')}}"></span>
                    <span class="subject">
                    <span class="from">Divya Manian</span>
                    <span class="time">40 mins.</span>
                    </span>
                    <span class="message">
                    Hi, I need your help with this.
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                    <span class="subject">
                    <span class="from">Dan Rogers</span>
                    <span class="time">2 hrs.</span>
                    </span>
                    <span class="message">
                    Love your new Dashboard.
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                    <span class="subject">
                    <span class="from">Dj Sherman</span>
                    <span class="time">4 hrs.</span>
                    </span>
                    <span class="message">
                    Please, answer asap.
                    </span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">See all messages</a>
                </li>
              </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">7</span>
                </a>
              <ul class="dropdown-menu extended notification">
                <div class="notify-arrow notify-arrow-yellow"></div>
                <li>
                  <p class="yellow">You have 7 new notifications</p>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                    Server Overloaded.
                    <span class="small italic">4 mins.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                    Memory #2 Not Responding.
                    <span class="small italic">30 mins.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                    Disk Space Reached 85%.
                    <span class="small italic">2 hrs.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">
                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                    New User Registered.
                    <span class="small italic">3 hrs.</span>
                    </a>
                </li>
                <li>
                  <a href="index.html#">See all notifications</a>
                </li>
              </ul>
            </li>
            <!-- notification dropdown end -->
          </ul>
          <!--  notification end -->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="login.html">Logout</a></li>
          </ul>
        </div>
      </header>




<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="profile.html"><img src="{{asset('assets/admin_panel/img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
        <h5 class="centered">Hussain Khan</h5>
        <li class="mt">
          <a class="active" href="index.html">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-plus"></i>
            <span>Create</span>
            </a>
          <ul class="sub">
            <li><a href="general.html">General</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="panels.html">Panels</a></li>
            <li><a href="font_awesome.html">Font Awesome</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-cogs"></i>
            <span>Components</span>
            </a>
          <ul class="sub">
            <li><a href="grids.html">Grids</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="todo_list.html">Todo List</a></li>
            <li><a href="dropzone.html">Dropzone File Upload</a></li>
            <li><a href="inline_editor.html">Inline Editor</a></li>
            <li><a href="file_upload.html">Multiple File Upload</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span>Extra Pages</span>
            </a>
          <ul class="sub">
            <li><a href="blank.html">Blank Page</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="lock_screen.html">Lock Screen</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="invoice.html">Invoice</a></li>
            <li><a href="pricing_table.html">Pricing Table</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="404.html">404 Error</a></li>
            <li><a href="500.html">500 Error</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Forms</span>
            </a>
          <ul class="sub">
            <li><a href="form_component.html">Form Components</a></li>
            <li><a href="advanced_form_components.html">Advanced Components</a></li>
            <li><a href="form_validation.html">Form Validation</a></li>
            <li><a href="contactform.html">Contact Form</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-th"></i>
            <span>Data Tables</span>
            </a>
          <ul class="sub">
            <li><a href="basic_table.html">Basic Table</a></li>
            <li><a href="responsive_table.html">Responsive Table</a></li>
            <li><a href="advanced_table.html">Advanced Table</a></li>
          </ul>
        </li>
        <li>
          <a href="inbox.html">
            <i class="fa fa-envelope"></i>
            <span>Mail </span>
            <span class="label label-theme pull-right mail-info">2</span>
            </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class=" fa fa-bar-chart-o"></i>
            <span>Charts</span>
            </a>
          <ul class="sub">
            <li><a href="morris.html">Morris</a></li>
            <li><a href="chartjs.html">Chartjs</a></li>
            <li><a href="flot_chart.html">Flot Charts</a></li>
            <li><a href="xchart.html">xChart</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-comments-o"></i>
            <span>Chat Room</span>
            </a>
          <ul class="sub">
            <li><a href="lobby.html">Lobby</a></li>
            <li><a href="chat_room.html"> Chat Room</a></li>
          </ul>
        </li>
        <li>
          <a href="google_maps.html">
            <i class="fa fa-map-marker"></i>
            <span>Google Maps </span>
            </a>
        </li>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->







                @yield('content')

                <footer class="site-footer">
                    <div class="text-center">
                      <p>
                        &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                      </p>
                      <div class="credits">

                      </div>
                      <a href="index.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                  </footer>









<!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('assets/admin_panel/lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('assets/admin_panel/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/admin_panel/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('assets/admin_panel/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('assets/admin_panel/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/admin_panel/lib/jquery.sparkline.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('assets/admin_panel/lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/admin_panel/lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/admin_panel/lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('assets/admin_panel/lib/sparkline-chart.js')}}"></script>
  <script src="{{asset('assets/admin_panel/lib/zabuto_calendar.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

</body>
</html>

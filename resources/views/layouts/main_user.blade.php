<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="OneTech shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Eventix | @yield('title')</title>
        <link href="{{('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.css"/>
        @yield('style')

        <style media="screen">
          .form-control{
            color: black !important;
          }

          .navbar-brand img{
            -webkit-filter: brightness(0) invert(1);
            filter: brightness(0) invert(1);
          }
        </style>

    </head>
    <body>
        <div class="navbar navbar-inverse bg-indigo">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{asset('images/logo-eventix.png')}}" alt="" width="100%">
                </a>

                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

                </ul>

                <div class="navbar-right">
                    <p class="navbar-text">Hello, {{Auth::user()->name}} !</p>
                    <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
                </div>
            </div>
        </div>

        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                <div class="sidebar sidebar-main sidebar-default">
                    <div class="sidebar-content">

                        <!-- User menu -->
                        <div class="sidebar-user-material">
                            <div class="category-content">
                                <div class="sidebar-user-material-content">
                                    <a href="#"><img src="data:image/png;base64,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" class="img-circle img-responsive" alt=""></a>
                                    <h6>{{Auth::user()->name}}</h6>
                                </div>

                                <div class="sidebar-user-material-menu">
                                    <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                                </div>
                            </div>

                            <div class="navigation-wrapper collapse" id="user-nav">
                                <ul class="navigation">
                                    <li onclick="logOut()"><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /user menu -->


                        <!-- Main navigation -->
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">

                                    <!-- Main -->
                                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                    <li id="nav-home"><a href="{{url('/user')}}"><i class="icon-home4"></i> <span>Home</span></a></li>
                                    <li id="nav-tickets"><a href="{{url('/user/ordered-tickets')}}"><i class="fa fa-ticket" aria-hidden="true"></i> <span>Ordered Tickets</span></a></li>
                                    <li id="nav-movies"><a href="{{url('/user/booked-movies')}}"><i class="fa fa-ticket" aria-hidden="true"></i> <span>Booked Movies</span></a></li>

                                    <!-- /main -->

                                    <!-- Forms -->
                                    <!-- /forms -->
                                    <!-- /data visualization -->
                                </ul>
                            </div>
                        </div>
                        <!-- /main navigation -->

                    </div>
                </div>
                <!-- /main sidebar -->
                <div class="content-wrapper">



                    <!-- Page header -->
                    <div class="page-header page-header-default">
                        <div class="page-header-content">
                            <div class="page-title">
                              @yield('header')

                            </div>
                        </div>
                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">
                      @yield('content')

                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; 2018. <a href="#">Eventix</a> by <a href="#">#</a>
                        </div>
                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>

                <form class="logout-form" action="{{url('logout')}}" method="post">
                  {{ csrf_field() }}
                  </form>
        <!-- Core JS files -->
        <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/pages/form_input_groups.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins/ui/ripple.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>

        <script type="text/javascript">
            function logOut(){
                $(".logout-form").submit();
            }
        </script>

        @yield('script')
    </body>
</html>

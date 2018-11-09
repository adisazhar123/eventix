<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="OneTech shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.css"/>
        @yield('style')

    </head>
    <body>
        <div class="navbar navbar-inverse bg-indigo">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  EvenTix
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
                    <p class="navbar-text">Hello, User 1!</p>
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
                                    <a href="#"><img src="{{asset('assets/images/placeholder.jpg')}}" class="img-circle img-responsive" alt=""></a>
                                    <h6>User 1</h6>
                                </div>

                                <div class="sidebar-user-material-menu">
                                    <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                                </div>
                            </div>

                            <div class="navigation-wrapper collapse" id="user-nav">
                                <ul class="navigation">
                                    <li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
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
                                    <li id="nav-home"><a href="{{url('/user/ordered-tickets')}}"><i class="fa fa-ticket" aria-hidden="true"></i> <span>Ordered Tickets</span></a></li>

                                    <!-- /main -->

                                    <!-- Forms -->
                                    <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
                                    <li>
                                        <a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
                                        <ul>
                                            <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                                            <li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
                                            <li><a href="form_input_groups.html">Input groups</a></li>
                                            <li><a href="form_controls_extended.html">Extended controls</a></li>
                                            <li><a href="form_floating_labels.html">Floating labels</a></li>
                                            <li>
                                                <a href="#">Selects</a>
                                                <ul>
                                                    <li><a href="form_select2.html">Select2 selects</a></li>
                                                    <li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
                                                    <li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
                                                    <li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="form_tag_inputs.html">Tag inputs</a></li>
                                            <li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
                                            <li><a href="form_editable.html">Editable forms</a></li>
                                            <li><a href="form_validation.html">Validation</a></li>
                                            <li><a href="form_inputs_grid.html">Inputs grid</a></li>
                                        </ul>
                                    </li>
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

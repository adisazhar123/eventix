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

        @yield('style')

    </head>
    <body>
        <div class="navbar navbar-inverse bg-indigo">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="{{asset('assets/images/logo_light.png')}}" alt=""></a>

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
                    <p class="navbar-text">Morning, Victoria!</p>
                    <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
                    
                    <ul class="nav navbar-nav">             
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-bell2"></i>
                                <span class="visible-xs-inline-block position-right">Activity</span>
                                <span class="status-mark border-orange-400"></span>
                            </a>

                            <div class="dropdown-menu dropdown-content">
                                <div class="dropdown-content-heading">
                                    Activity
                                    <ul class="icons-list">
                                        <li><a href="#"><i class="icon-menu7"></i></a></li>
                                    </ul>
                                </div>

                                <ul class="media-list dropdown-content-body width-350">
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                            <div class="media-annotation">4 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
                                        </div>
                                        
                                        <div class="media-body">
                                            <strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                            <div class="media-annotation">Feb 1, 05:46</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                 
                    </ul>
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
                                    <h6>Victoria Baker</h6>
                                    <span class="text-size-small">Santa Ana, CA</span>
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
                                    <li><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                    <!-- /main -->

                                    <!-- Forms -->
                                    <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
                                    <li>
                                        <a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
                                        <ul>
                                            <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                                            <li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
                                            <li class="active"><a href="form_input_groups.html">Input groups</a></li>
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
                                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Input Groups</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">

                        <!-- Input group addons -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Input group addons</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group-lg">Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input></code>. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a single <code>.form-control</code>. Place one add-on or button on either side of an input. You may also place one on both sides of an input. Multiple add-ons on a single side and multiple form-controls in a single input group aren't supported.</p>

                                <form class="form-horizontal" action="#">
                                    <fieldset class="content-group">
                                        <legend class="text-bold">Text addon</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="Left addon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right addon">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control" placeholder="Left and right addons">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="content-group">
                                        <legend class="text-bold">Icon addon</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Left icon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right icon">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-menu6"></i></span>
                                                    <input type="text" class="form-control" placeholder="Left and right icons">
                                                    <span class="input-group-addon"><i class="icon-inbox"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="content-group">
                                        <legend class="text-bold">Spinner addon</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-spinner2 spinner"></i></span>
                                                    <input type="text" class="form-control" placeholder="Left spinner">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right spinner">
                                                    <span class="input-group-addon"><i class="icon-spinner2 spinner"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-spinner2 spinner"></i></span>
                                                    <input type="text" class="form-control" placeholder="Left and right spinners">
                                                    <span class="input-group-addon"><i class="icon-spinner2 spinner"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <!-- /input group addons -->


                        <!-- Input group buttons -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Input group buttons</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group-lg">Optional buttons as addons. Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-btn</code> to wrap the buttons. Input group buttons support all available button options except sizing - all buttons height will be adjusted automatically according to the input group size.</p>

                                <form class="form-horizontal" action="#">
                                    <fieldset class="content-group">
                                        <legend class="text-bold">Button addons</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Button</button>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Left button">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right button">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Button</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-btn">  
                                                        <button class="btn btn-default btn-icon" type="button"><i class="icon-user"></i></button>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Left and right buttons">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Button</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="content-group">
                                        <legend class="text-bold">Button dropdown addons</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Left dropdown">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right dropdown">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Left and right dropdowns">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="content-group">
                                        <legend class="text-bold">Segmented button addons</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default">Action</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-icon" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Left buttons">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right buttons">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default">Action</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-icon" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default text input</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default">Button</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-icon" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>

                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>

                                                    <input type="text" class="form-control" placeholder="Left and right buttons">

                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-icon"><i class="icon-user"></i></button>
                                                        <button type="button" class="btn btn-default dropdown-toggle btn-icon" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">One more line</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend class="text-bold">Color options</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Contextual button</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-danger" type="button">Button</button>
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Danger button">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Custom color button</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Teal button">
                                                    <span class="input-group-btn">
                                                        <button class="btn bg-teal" type="button">Button</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <!-- /input group buttons -->


                        <!-- Input group options -->
                        <div class="panel panel-flat content-group-lg">
                            <div class="panel-heading">
                                <h5 class="panel-title">Input group options</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p class="content-group-lg">Besides default addon options, input groups support different variations of checkboxes, radio buttons, switches, contextual validation state options, icons in different positions. All colors can be easily changed in LESS variables, options and positions also can be mixed. However avoid using <code>&lt;select></code> elements here as they cannot be fully styled in WebKit browsers and <code>&lt;textarea></code> elements here as their rows attribute will not be respected in some cases.</p>

                                <form class="form-horizontal" action="#">
                                    <fieldset class="content-group">
                                        <legend class="text-bold">Sizing options</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">XLarge input group</label>
                                            <div class="col-lg-10">
                                                <div class="input-group input-group-xlg">
                                                    <span class="input-group-addon"><i class="icon-office"></i></span>
                                                    <input type="text" class="form-control" placeholder=".input-group-xlg">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Large input group</label>
                                            <div class="col-lg-10">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon"><i class="icon-mention"></i></span>
                                                    <input type="text" class="form-control" placeholder=".input-group-lg">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default input group</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-git-pull-request"></i></span>
                                                    <input type="text" class="form-control" placeholder=".input-group">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Small input group</label>
                                            <div class="col-lg-10">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-addon"><i class="icon-statistics"></i></span>
                                                    <input type="text" class="form-control" placeholder=".input-group-sm">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Mini input group</label>
                                            <div class="col-lg-10">
                                                <div class="input-group input-group-xs">
                                                    <span class="input-group-addon"><i class="icon-mail-read"></i></span>
                                                    <input type="text" class="form-control" placeholder=".input-group-xs">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="content-group">
                                        <legend class="text-bold">Validation states</legend>

                                        <div class="form-group has-warning">
                                            <label class="control-label col-lg-2 text-semibold">Warning</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-check"></i></span>
                                                    <input type="text" class="form-control" placeholder=".has-warning">
                                                </div>
                                                <span class="help-block">Warning input group helper</span>
                                            </div>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label col-lg-2 text-semibold">Success</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-comment"></i></span>
                                                    <input type="text" class="form-control" placeholder=".has-success">
                                                </div>
                                                <span class="help-block">Success input group helper</span>
                                            </div>
                                        </div>

                                        <div class="form-group has-error">
                                            <label class="control-label col-lg-2 text-semibold">Error</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-graph"></i></span>
                                                    <input type="text" class="form-control" placeholder=".has-error">
                                                </div>
                                                <span class="help-block">Error input group helper</span>
                                            </div>
                                        </div>


                                        <div class="form-group has-warning has-feedback">
                                            <label class="control-label col-lg-2 text-semibold">Warning with icon</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-help"></i></span>
                                                    <input type="text" class="form-control" placeholder=".has-warning">
                                                </div>
                                                <div class="form-control-feedback">
                                                    <i class="icon-notification2"></i>
                                                </div>
                                                <span class="help-block">Warning input group helper</span>
                                            </div>
                                        </div>

                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label col-lg-2 text-semibold">Success with icon</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-graduation"></i></span>
                                                    <input type="text" class="form-control" placeholder=".has-success">
                                                </div>
                                                <div class="form-control-feedback">
                                                    <i class="icon-checkmark-circle"></i>
                                                </div>
                                                <span class="help-block">Success input group helper</span>
                                            </div>
                                        </div>

                                        <div class="form-group has-error has-feedback">
                                            <label class="control-label col-lg-2 text-semibold">Error with icon</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-droplets"></i></span>
                                                    <input type="text" class="form-control" placeholder=".has-error">
                                                </div>
                                                <div class="form-control-feedback">
                                                    <i class="icon-cancel-circle2"></i>
                                                </div>
                                                <span class="help-block">Error input group helper</span>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend class="text-bold">Addon options</legend>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default checkbox</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" checked="checked">
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Default checkbox addon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Styled checkbox</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox" class="styled" name="input-addon-checkbox" checked="checked">
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Styled checkbox addon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Default radio button</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio" name="addon-radio">
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Unstyled radio addon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Styled radio button</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio" name="addon-radio" class="styled" checked="checked">
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Styled radio addon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Switchery toggle</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon switchery-xs">
                                                        <input type="checkbox" class="switchery" checked="checked">
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Switchery toggle addon">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <!-- /input group options -->


                        <!-- Touchspin spinners -->
                        <h6 class="content-group text-semibold">
                            Touchspin spinners
                            <small class="display-block">Touch friendly input spinner component</small>
                        </h6>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Bootstrap touchspin</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <p class="content-group">Basically Touchspin uses default Bootstrap <code>input-group</code> component styling with ability to add extra classes to the buttons and addons to match your design perfectly.</p>

                                        <div class="form-group">
                                            <label>Example with postfix: </label>
                                            <input type="text" value="55" class="touchspin-postfix">
                                        </div>

                                        <div class="form-group">
                                            <label>Example with prefix: </label>
                                            <input type="text" value="0" class="touchspin-prefix">
                                        </div>

                                        <div class="form-group">
                                            <label>Init with empty value: </label>
                                            <input type="text" value="" class="touchspin-empty">
                                        </div>

                                        <div class="form-group">
                                            <label>Incremental/decremental step on up/down change: </label>
                                            <input type="text" value="10" class="touchspin-step">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Advanced spinners</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <p class="content-group">Depending on your needs, you can easily swith off mousewheel support, change steps and increments, use more complex examples with button groups and dropdowns.</p>

                                        <div class="form-group">
                                            <label>Button group example</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control touchspin-button-group" value="50">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-primary">Action</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Value attribute is not set: <span class="text-muted">applying settings.initval</span></label>
                                            <input type="text" value="" class="touchspin-set-value">
                                        </div>

                                        <div class="form-group">
                                            <label>Value is set explicitly to 33: <span class="text-muted">skipping settings.initval</span></label>
                                            <input type="text" value="33" class="touchspin-set-value">
                                        </div>

                                        <div class="form-group">
                                            <label>No mousewheel support: </label>
                                            <input type="text" value="10" class="touchspin-no-mousewheel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /touchspin spinners -->


                        <!-- Touchspin layouts -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Horizontal spinners</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <p class="content-group">Touchspin supports default Bootstrap <code>input-group</code> component sizing classes, applied to the input or wrapped in <code>div</code> with these classes.</p>

                                        <div class="form-group">
                                            <label>Large spinner</label>
                                            <input type="text" value="55" class="input-lg touchspin-basic">
                                        </div>

                                        <div class="form-group">
                                            <label>Default spinner</label>
                                            <input type="text" value="55" class="touchspin-basic">
                                        </div>

                                        <div class="form-group">
                                            <label>Small spinner</label>
                                            <input type="text" value="55" class="touchspin-basic input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Vertical spinners</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <p class="content-group">Also Touchspin library supports <code>vertical</code> spinner controls orientation, that appear on the right side. Buttons and icons are fully customizable.</p>

                                        <div class="form-group">
                                            <label>Large spinner</label>
                                            <input type="text" value="55" class="touchspin-vertical input-lg">
                                        </div>

                                        <div class="form-group">
                                            <label>Default spinner</label>
                                            <input type="text" value="55" class="touchspin-vertical">
                                        </div>

                                        <div class="form-group">
                                            <label>Small spinner</label>
                                            <input type="text" value="55" class="touchspin-vertical input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /touchspin layouts -->


                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                        </div>
                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>

        @yield('content')

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

        <script type="text/javascript">
            function logOut(){
                $(".logout-form").submit();
            }
        </script>

        @yield('script')
    </body>
</html>

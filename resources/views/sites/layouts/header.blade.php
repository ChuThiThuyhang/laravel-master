f<!DOCTYPE html>
<html>

<!-- Mirrored from vision.to/garden-plant/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 04:53:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Garden-Plants &amp; Care Service HTML5 Template | Product Details Page</title>
<!-- Stylesheets -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="/css/bootstrap-margin-padding.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
    <header class="main-header" id="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fa fa-circle"></span> Hello guest! Welcome to Garden-care, Inc.</a></li>
                    </ul>
                </div>
                <!-- Top Right -->
                <div class="top-right">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fa fa-phone"></span> (+012)-345-67890</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> 9am - 5pm</a></li>
                        <li><a href="mailto:noreply@regulator.com"><span class="fa fa-at"></span> info@yours.com</a></li>
                        <li><a href="#"><span class="fa fa-map-marker"></span> Find us on map</a></li>
                    </ul>
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container clearfix">

                <!--Outer Box-->
                <div class="outer-box">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index-1.html"><img src="/img/logo.png" alt="garnen-help"></a>
                    </div>

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                                <li class="dropdown current"><a href="/">Home</a>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="dropdown"><a href="/articles/create">Create Article</a>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    @auth
                    <div class="appoinment-btn">
                    @endauth
                    @guest
                    <div class="appoinment-btn" style="position: absolute;
                        right: -97px;
                        top: 25px">
                    @endguest
                        @guest
                        <!-- Modal: donate now Starts -->
                        <a class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1" data-toggle="modal" href="#modal-register-now">Register</a>
                        <div class="modal fade" id="modal-register-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog style-one" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Make an Appoinment</h4>
                              </div>
                              <div class="modal-body">
                                <div class="appoinment-form-outer">
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="form-group has-feedback ">
                                            <input type="text" name="name" class="form-control" value="" placeholder="Full name">
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                            </div>
                                        <div class="form-group has-feedback ">
                                            <input type="email" name="email" class="form-control" value="" placeholder="Email">
                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                            </div>
                                        <div class="form-group has-feedback ">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                            </div>
                                        <div class="form-group has-feedback ">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
                                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                                            </div>
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal: donate now Ends -->
                        <!-- Modal: donate now Starts -->
                        <a class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1" data-toggle="modal" href="#modal-donate-now">Login</a>
                        <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog style-one" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Make an Appoinment</h4>
                              </div>
                              <div class="modal-body">
                                <div class="appoinment-form-outer">
                                    <form action="{{route('login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email address:</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Password:</label>
                                            <input type="password" class="form-control" id="pwd" name="password">
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Remember me</label>
                                        </div>
                                        <button type="submit" class="btn btn-default" name="remember">Login</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal: donate now Ends -->
                        @endguest
                        @auth
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1">Logout</button>
                        </form>
                        @endauth


                    </div>
                    
                </div>
            </div>
        </div><!-- Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
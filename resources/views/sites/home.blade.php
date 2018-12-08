f<!DOCTYPE html>
<html>

<!-- Mirrored from vision.to/garden-plant/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 04:53:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Garden-Plants &amp; Care Service HTML5 Template | Homepage One</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/bootstrap-margin-padding.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
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
                        <a href="index-1.html"><img src="img/logo.png" alt="garnen-help"></a>
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
                                <li><a href="#">About Us</a></li>
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
    
    
    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="http://images.sunflower.vn/wp-content/uploads/2015/08/20150807-ha-noi-ho-guom1.jpg"  data-saveperformance="off"  data-title="Awsome Service">
                    <img src="http://images.sunflower.vn/wp-content/uploads/2015/08/20150807-ha-noi-ho-guom1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfl tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>WE PROVIDE</h2></div>
                    
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>THE INFORMATION OF HANOI CITY</h2></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="-100"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn theme-btn">Hanoi's Project</a></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="100"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn style-two theme-btn">Hanoi's Article</a></div></div>
                    
                    </li>
                    
                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="https://2.bp.blogspot.com/-3dk2VZ1KJys/UiXEfFdDQ1I/AAAAAAAAAcU/g967vTDvZsY/s1600/ha-noi-www.cungphuot.info.jpg"  data-saveperformance="off"  data-title="Awsome Service">
                        <img src="https://2.bp.blogspot.com/-3dk2VZ1KJys/UiXEfFdDQ1I/AAAAAAAAAcU/g967vTDvZsY/s1600/ha-noi-www.cungphuot.info.jpg"  alt=""  data-bgposition="center 25%" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                        <div class="tp-caption lfl tp-resizeme"
                        data-x="right" data-hoffset="0"
                        data-y="center" data-voffset="-100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>THE PROJECT </h2></div>
                        
                        
                        <div class="tp-caption lfr tp-resizeme"
                        data-x="right" data-hoffset="0"
                        data-y="center" data-voffset="-40"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>IS BEING INVESTED</h2></div>
                        
                        <div class="tp-caption lfb tp-resizeme"
                        data-x="right" data-hoffset="-200"
                        data-y="center" data-voffset="40"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn theme-btn">Hanoi's Project</a></div></div>
                        
                        <div class="tp-caption lfb tp-resizeme"
                        data-x="right" data-hoffset="0"
                        data-y="center" data-voffset="40"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn style-two theme-btn">Hanoi's Article</a></div></div>
                    
                    </li>
                    
                    <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="https://www.dulichvietnam.com.vn/data/image/tin-du-lich/ho-guom-ha-noi.jpg"  data-saveperformance="off"  data-title="Awsome Service">
                    <img src="https://www.dulichvietnam.com.vn/data/image/tin-du-lich/ho-guom-ha-noi.jpg"  alt=""  data-bgposition="center 35%" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfl tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>WE PROVIDE THE ARTICLE</h2></div>
                    
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>ABOUT HANOI</h2></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="-100"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn theme-btn">Hanoi's Project</a></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="100"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn style-two theme-btn">Hanoi's Article</a></div></div>
                    
                    </li>
                    
                    
                </ul>
                
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    
    <!--Featured Three Column-->
    <section class="featured-three-column">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="inner-box">
                        <figure class="image">
                            <a href="#"><img src="img/resource/featured-image-1.jpg" alt=""></a>
                            <div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="#" class="overlay-link"></a></div>
                        </figure>
                        <div class="content">
                            <h3>Design & Planting</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            <div class="link"><a href="#" class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> MORE INFO</a></div>
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <article class="inner-box">
                        <figure class="image">
                            <a href="#"><img src="img/resource/featured-image-2.jpg" alt=""></a>
                            <div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="#" class="overlay-link"></a></div>
                        </figure>
                        <div class="content">
                            <h3>Lawn & Garden Care</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            <div class="link"><a href="#" class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> MORE INFO</a></div>
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <article class="inner-box">
                        <figure class="image">
                            <a href="#"><img src="img/resource/featured-image-3.jpg" alt=""></a>
                            <div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="#" class="overlay-link"></a></div>
                        </figure>
                        <div class="content">
                            <h3>Irrigation and Drainage</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            <div class="link"><a href="#" class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> MORE INFO</a></div>
                        </div>
                    </article>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    <!--Top Services-->
    <section class="top-services">
        <div class="auto-container">
            <div class="sec-title">
                <h3>WE PROVIDE INFORMATION ABOUT</h3>
                <h2>HANOI CITY</h2>
                <div class="line"></div>
            </div>
            <div class="row clearfix">
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-nature-7"></span></div>
                        <div class="content">
                            <h3>Excellent Services</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-nature-1"></span></div>
                        <div class="content">
                            <h3>Landscape Design</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-gardening"></span></div>
                        <div class="content">
                            <h3>Garden Care</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-animal"></span></div>
                        <div class="content">
                            <h3>Insect Control</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-nature-2"></span></div>
                        <div class="content">
                            <h3>Rubbish Removal</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                <!--Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <article class="inner-box">
                        <div class="icon"><span class="flaticon-tool"></span></div>
                        <div class="content">
                            <h3>lawn moving</h3>
                            <div class="text">
                                <p>Proin nec lacus lacus. Sed vitae consectetur est, et mattis felis. Fusce lacinia nibh vitae fermentum finibus. Donec malesuada efficitur dapibus. Cras euismod nunc tellus, eget tempor purus.</p>
                            </div>
                            
                        </div>
                    </article>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    <!--Why Us Section-->
    <section class="why-us-section">
        
        <div class="bg-grey"></div>
        <div class="bg-image" style="background-image:url(http://images6.fanpop.com/image/photos/40400000/Hanoi-deedragongirl-40457230-2048-1152.jpg);"></div>
        
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12 content-column">
                    <article class="inner-box">
                        <div class="sec-title style-two style-three">
                            <h2>Welcomes to Hanoi!</h2>
                            <div class="line"></div>
                        </div>
                        
                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">1</div>
                            <h4>The long history </h4>
                            <p>From 1010 until 1802, it was the most important political centre of Vietnam. It was eclipsed by Huế, the imperial capital of Vietnam during the Nguyễn Dynasty (1802–1945)</p>
                         </div>
                         
                         <div class="block">
                            <div class="number wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms">2</div>
                            <h4>During two wars</h4>
                            <p>The city was occupied by the Imperial Japanese in 1940 and liberated in 1945, when it briefly became the seat of the Viet Minh government after Ho Chi Minh proclaimed the independence of Vietnam. However, the French returned and reoccupied the city in 1946. After nine years of fighting between the French and Viet Minh forces, Hanoi became the capital of an independent North Vietnam in 1954.</p>
                         </div>
                         
                         <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">3</div>
                            <h4>Location, topography</h4>
                            <p>Hanoi is located in northern region of Vietnam, situated in the Vietnam's Red River delta, nearly 90 km (56 mi) away from the coastal area. Hanoi contains three basic kinds of terrain, which are the delta area, the midland area and mountainous zone. In general, the terrain is gradually lower from the north to the south and from the west to the east, with the average height ranging from 5 to 20 meters above the sea level. The hills and mountainous zones are located in the northern and western part of the city. The highest peak is at Ba Vi with 1281 m, located west of the city proper.</p>
                         </div>
                    
                    </article>
                </div>
            </div>
        </div>
    </section>

    
    <!--Start Our Department Areas-->
    <section class="pt-60" data-bg-color="#f1f1f1">
        <div class="auto-container pb-35">
            <div class="sec-title">
                <h3>THE ARTICLE ABOUT</h3>
                <h2>HANOI CITY</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content mt-50">
                <div class="row">

                    @foreach($articles as $article)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="img/resource/featured-image-4.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-tool-1"></i>
                                <h4 class="title">{{ $article->title }}</h4>
                                <p class="details pt-5">
                                    {{ $article->sologan }}
                                </p>
                                 <a href="{{route('articles.show', ['article' => $article->id])}}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>              
            </div>
        </div>
    </section>

    <!--Get Quote Section-->
    <section class="get-quote">
        <div class="container p-0">
            <div class="row clearfix">
                
                <!--Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 p-0">
                    <img class="img-responsive" src="http://images6.fanpop.com/image/photos/40400000/Hanoi-deedragongirl-40457230-2048-1152.jpg" alt="">
                </div>
                
                <!--Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 p-sm-20">
                    <br>
                    <div class="sec-title style-three">
                        <h3>Get Free Quote</h3>
                        <h2>Estimating Price For Your Needs</h2>
                        <div class="line"></div>
                    </div>
                    <div class="form">
                        <form method="post" action="http://vision.to/garden-plant/index-1.html">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="fname" value="" placeholder="First Name *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="lname" value="" placeholder="Last Name *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" value="" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="phone" value="" placeholder="Phone *" required>
                                </div>
                                <div class="col-md-6 date col-sm-6 col-xs-12 form-group">
                                    <input class="datepicker" type="text" name="date" value="" placeholder="Appoinment Date *" required>
                                </div>
                                <div class="col-md-6 col-sm-6 time col-xs-12 form-group">
                                    <input class="timepicker" type="text" name="time" value="" placeholder="Appoinment Time *" required>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea placeholder="Describe Your Needs to Us" required></textarea>
                                </div>
                                
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 form-group text-center">
                                    <button type="submit" class="theme-btn normal-btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
                
                
            </div>
        </div>
    </section>

    
    <!--Fact Counter-->
    <section class="fact-counter">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="700" data-stop="1500">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">SUCCESSFULL PROJECT</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="9108">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">HAPPY PEOPLE</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="500" data-stop="80">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">AWARD WINNING</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="1200" data-stop="619">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">RUNNING PROJECT</h4>
                </article>
                
            </div>
        </div>
    </section>
    
    <!--Main Footer-->
    <footer class="main-footer">
        
        <!--Footer Upper-->        
        <div class="footer-upper">
            <!--Go Up Button-->
            <div class="go-up">
                <div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About GARDEN PLATN</h2>
                            <div class="text">
                                <p>Phasellus at quam tristique, cursus tellus vitae, convallis neque. Sed a lacinia sapien. Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante in elementum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae.</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget links">
                            <h2>Useful Links</h2>   
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Services</a></li>
                                <li><a href="#">Garden &amp; Care Guide</a></li>
                                <li><a href="#">Special Services</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget twitter-feed">
                            <h2>Twitter Feed</h2>
                            <div class="twitter" 
                                data-twitter-query-count="3" 
                                data-twitter-name="envato" 
                                data-slide-count="2" 
                                data-enable-slide="true">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget newsletter-widget">
                            <h2>Newsletter Subscribe</h2>
                            <div class="text"><p>Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa tortor eget ante.</p>
                            </div>
                            <br>                            
                            <div class="form-box">
                                <form method="post" action="http://vision.to/garden-plant/index-1.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter your email here..." required>                                                
                                        <button type="submit" class="btn-submit"><span class="icon fa fa-long-arrow-right"></span></button>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-info">
                        <ul>
                            <li><div class="info-title"><span class="fa fa-phone"></span> Call Us Anytime</div><p class="info">(+012)-345-67890</p></li>
                            <li><div class="info-title"><span class="fa fa-clock-o"></span> Opening Hours</div><p class="info">8:00 am - 6:00 pm</p></li>
                            <li><div class="info-title"><span class="fa fa-at"></span> Email Us At</div><p class="info"><a href="mailto:info@your-domain.com">info@your-domain.com</a></p></li>
                        </ul>
                    </div>                
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <!--Copyright-->
                <div class="copyright">2016 &copy; Garden-Plants Service. </div>
                <div class="social-links">
                    <a href="#" class="icon fa fa-facebook-f"></a>
                    <a href="#" class="icon fa fa-twitter"></a>
                    <a href="#" class="icon fa fa-pinterest"></a>
                    <a href="#" class="icon fa fa-youtube-play"></a>
                    <a href="#" class="icon fa fa-envelope"></a>
                </div>
            </div>
        </div>
        
    </footer>
    
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/js-collection.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from vision.to/garden-plant/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 04:53:13 GMT -->
</html>

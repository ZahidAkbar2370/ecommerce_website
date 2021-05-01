<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
       
    <link rel="shortcut icon" href="{{URL::to('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <style type="text/css">
        .sociallinks i:hover
        {
            color: white;
            background-color: #0083C9;
        }
    </style>
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                   <div class="col-sm-6">
                      
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +92 3081312527</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>  zahidjakhar2370@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://web.facebook.com/zahid.akbarjakhar.5/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/zahid_jakhar" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/zahid-akbar-jakhar-62467519b/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li class="sociallinks"><a href="https://www.instagram.com/zahidjakhar2370/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="sociallinks"><a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{url('index')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                              
                            </div>
                            
                            <div class="btn-group">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            @if(!empty(Auth::user()))
                                <ul class="nav navbar-nav">
                                    <li><a href="profile"><i class="fa fa-user"></i> Account</a></li>
                                    <li><a href="{{url('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="view-cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="{{url('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                </ul>
                            @else
                                <ul class="nav navbar-nav">
                                    <li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
                                     <li><a href="register"><i class="fa fa-unlock"></i> Register</a></li>

                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/header-middle-->
    

    <!--header-bottom-->

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{url('index')}}" class="active">Home</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->
    


    <!--slider-->

   

   
    
    @yield('content')
    
<!--Footer-->
    
    <footer id="footer">
        <div class="footer-widget">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="single-widget text-justify">
                            <h2>ABOUT <span>e</span>-shopper</h2>
                            <p class="text-justify">Lerom Law Firm was founded in Toronto on the confidence that the best way to serve you is to be on the same wavelength with your goals, in accord with your moment in life or business, and resourceful for your prosperity. Guided by the big goals of diversity, inclusion, and the economic prosperity of Canada, we achieve the best results for our great clients looking for new opportunities in one of the best countries in the world.</p>
                        </div>
                    </div>

                    <div class="col-md-1">
                        
                    </div>

                    <div class="col-md-2">
                        <div class="single-widget">
                            <h2>QUICK LINK</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{url('index')}}">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    
                   
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                     
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Developed by <span><a target="_blank" href="https://github.com/ZahidAkbar2370">Zahid Akbar Jakhar</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
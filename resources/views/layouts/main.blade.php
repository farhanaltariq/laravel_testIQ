<!doctype html>
<html lang="en">

<head>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel='stylesheet' href="{{ secure_asset('webSPP') }}/assets/css/bootstrap.min.css">
        <link rel='stylesheet' href="{{ secure_asset('webSPP') }}/assets/css/animate.min.css">
        <link rel='stylesheet' href="{{ secure_asset('webSPP') }}/assets/css/font-awesome.min.css" />
        <link rel='stylesheet' href="{{ secure_asset('webSPP') }}/assets/css/style.css" />

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="icon" href="{{ secure_asset('webSPP') }}/assets/img/brand/box2.png" type="image/png">


    </head>

<body>

    <body>
        <!-- Begin Hero Bg -->
        <div id="parallax">
        </div>
        <!-- End Hero Bg
		================================================== -->
        <!-- Start Header
		================================================== -->
        <header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Your Logo -->
                    <a href="#hero" class="navbar-brand">Logo <span class="lighter">Company</span></a>
                </div>
                <!-- Start Navigation -->
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#about">About Us</a>
                        </li>
                        <li>
                            <a href="#service">Service</a>
                        </li>
                        <li>
                            <a href="#contactarea">Contact</a>
                        </li>
                        <li>
                            <a href="login"><img src="{{ secure_asset('webSPP') }}/assets/img/icons/png/100-log-in.png" width="30" alt="login"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')

        <!-- Credits 
	=============================================== -->
        <section id="credits" class="text-center">
            <span class="social wow zoomIn">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-skype"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </span><br />
            Copyright &copy;<a href="#">2022 Bina Pisikologi Indonesia</a>
        </section>
        <!-- Bootstrap core JavaScript
		================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ secure_asset('webSPP') }}/assets/js/jquery.min.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/waypoints.min.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/jquery.localScroll.min.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/validate.js"></script>
        <script src="{{ secure_asset('webSPP') }}/assets/js/common.js"></script>
    </body>

</html>
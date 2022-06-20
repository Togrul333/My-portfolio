<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Togrul Sahbazov</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="{{asset('Front/')}}/img/fav.png" type="{{asset('Front/')}}/image/png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset('Front/')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('Front/')}}/fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('Front/')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('Front/')}}/css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="{{asset('Front/')}}/css/nivo-lightbox/default.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('Front/')}}/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-code"></i> Togrul Sahbazov</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#page-top" class="page-scroll">Home</a></li>
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                <li><a href="#contact" class="page-scroll">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="intro-text">
                    <h1>Back-end developer</h1>
                    @if(\Illuminate\Support\Facades\Session::has('info'))
                        <div class="alert alert-success " role="alert">
                            {{\Illuminate\Support\Facades\Session::get('info')}}
                        </div>
                    @endif
{{--                    <p>Web Design • Photography • Product Design</p>--}}
                    <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2>About Me</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6"> <img src="{{asset('Front/')}}/img/men1.jpeg" class="img-responsive" alt=""> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <p>• Разработка программного обеспечения</p>
                    <p>• Оптимизация sql запросов</p>
                    <p>• Создание API для приложения.</p>
                    <p>• Анализ и исправление ошибок в веб-приложениях.</p>
                    <p> PHP - Laravel      ,
                        OOP ,
                        REST API ,
                        MySQL ,
                        JSON</p>
                    <p> HTML  , CSS  , JavaScript ,
                        Vue js ,
                        GIT</p>
                    <a href="#portfolio" class="btn btn-default btn-lg page-scroll">My Portfolio</a> </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Portfolio</h2>
            <hr>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">BLOG</a></li>
                        <li><a href="#" data-filter=".photography">E-commerce</a></li>
                        <li><a href="#" data-filter=".product">Others</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">
{{--                others ->product | blog-> web | e-commerce->photography --}}
                <div class="col-sm-6 col-md-3 col-lg-3 photography">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="{{config('app.ecommerce_url')}}" >
                                <img src="{{asset('Front/')}}/img/portfolio/E_MVS.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 product">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="{{config('app.network')}}" >
                                <img src="{{asset('Front/')}}/img/portfolio/network.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 product">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="{{config('app.restoran')}}" >
                                <img src="{{asset('Front/')}}/img/portfolio/Restoran.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="{{config('app.Blog')}}" >
                                <img src="{{asset('Front/')}}/img/portfolio/Esas_sehife.jpeg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Get In Touch</h2>
            <hr>
        </div>
        <div class="col-md-8 col-md-offset-2">
{{--            <form method="post" action="{{route('sendMessage')}}"  name="sentMessage" id="contactForm" novalidate>--}}
            <form method="post" action="{{route('sendMessage')}}"  name="sentMessage" id="contactForm" >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-default btn-lg">Send Message</button>
            </form>
            <div class="social">
                <ul>
                    <li><a target="_blank"  href="https://www.linkedin.com/in/%D1%82%D0%BE%D0%B3%D1%80%D1%83%D0%BB-%D1%88%D0%B0%D1%85%D0%B1%D0%B0%D0%B7%D0%BE%D0%B2-517138229/"><i class="fa fa-linkedin " ></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/togrulshakhbazov/"><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://github.com/Togrul333"><i class="fa fa-github"></i></a></li>
{{--                    <li><a href="#"><i class="fa fa-codepen"></i></a></li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container text-center">
        <div class="fnav">
            <p>   &copy; 2022   - togrulshahbazov@gmail.com </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('Front/')}}/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/bootstrap.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/SmoothScroll.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/nivo-lightbox.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/jquery.isotope.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/contact_me.js"></script>
<script type="text/javascript" src="{{asset('Front/')}}/js/main.js"></script>
</body>
</html>

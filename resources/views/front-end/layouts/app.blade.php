<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- title -->
        <title>9Thanuki.codes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('css/animate.css ') }}" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <!-- et line icon -->
        <link rel="stylesheet" href="{{ asset('css/et-line-icons.css') }}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/style.css ')}}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
        <!--[if IE]>
        <script src="{{ asset('js/html5shiv.js') }}"></script>
        <![endif]-->

        <style>
            /* - Blog Post */
            div.type-post {
                text-align: center;
            }
            .type-post {
                margin-bottom: 50px;
            }
            .type-post .entry-cover {
                position: relative;
            }
            .type-post .entry-cover > a {
                display: inline-block;
                max-width: 100%;
                position: relative;
            }
            .type-post .entry-cover .post-meta ~ a::before {
                background-color: rgba(0,0,0,0.35);
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                opacity: 0;
                -webkit-transition: all 1s ease 0s;
                -moz-transition: all 1s ease 0s;
                -o-transition: all 1s ease 0s;
                transition: all 1s ease 0s;
            }
            .type-post:hover .entry-cover .post-meta ~ a::before {
                opacity: 1;
            }
            .type-post .entry-cover .post-meta {
                position: absolute;
                left: 25px;
                right: 25px;
                bottom: 10px;
                z-index: 1;
            }
            .type-post .entry-cover .post-meta > span {
                color: #fff;
                font-size: 14px;
                font-weight: 600;
                opacity: 0;
                animation-duration: 0.5s;
            }
            .type-post:hover .entry-cover .post-meta > span {
                opacity: 1;
            }
            .type-post .entry-cover .post-meta > span > a {
                color: #fff;
                text-transform: uppercase;
                text-decoration: none;
            }
            .type-post .entry-cover .post-meta > span.byline {
                float: left;
                text-align: left;
            }
            .type-post:hover .entry-cover .post-meta > span.byline {
                animation-name: slideInLeft;
            }
            .type-post .entry-cover .post-meta > span.post-date {
                float: right;
                text-align: right;
            }
            .type-post:hover .entry-cover .post-meta > span.post-date {
                animation-name: slideInRight;
            }
            .type-post .entry-content {
                display: inline-block;
                max-width: 100%;
                margin-top: 27px;
            }
            .blog-single .type-post .entry-content {
                margin-top: 50px;
            }
            div.type-post .entry-content {
                padding-left: 15px;
                padding-right: 15px;
            }
            .type-post .entry-header > span {
                color: #a1a1a1;
                font-size: 14px;
                letter-spacing: 0.18px;
                line-height: 2;
                text-transform: uppercase;
            }
            .type-post .entry-header > span > a {
                color: #a1a1a1;
                text-decoration: none;
                -webkit-transition: all 1s ease 0s;
                -moz-transition: all 1s ease 0s;
                -o-transition: all 1s ease 0s;
                transition: all 1s ease 0s;
            }
            .type-post .entry-header > span > a:hover {
                color: #151515;
            }
            .type-post .entry-header .entry-title {
                color: #151515;
                font-family: 'Montserrat', sans-serif;
                font-size: 24px;
                font-weight: bold;
                letter-spacing: -0.6px;
                line-height: 1.25;
                margin: 5px 0 16px;
                padding-bottom: 18px;
                position: relative;
            }
            .type-post:not(.post-position) .entry-header .entry-title::before {
                background-color: #e1e1e1;
                bottom: 0;
                content: "";
                height: 2px;
                margin: 0 auto;
                position: absolute;
                left: 0;
                right: 0;
                width: 30px;
            }
            .type-post .entry-header .entry-title > a {
                color: #151515;
                text-decoration: none;
                -webkit-transition: all 1s ease 0s;
                -moz-transition: all 1s ease 0s;
                -o-transition: all 1s ease 0s;
                transition: all 1s ease 0s;
            }
            .type-post .entry-header .entry-title > a:hover {
                color: #717171;
            }
            .type-post .entry-content p {
                color: #717171;
                letter-spacing: 0.150px;
                line-height: 1.6;
                -webkit-hyphens: auto;
                -moz-hyphens: auto;
                hyphens: auto;
            }

            .type-post .entry-content p:last-of-type {
                margin-bottom: 0;
            }

            .type-post .entry-content > a,
            .type-post .entry-content > a::before {
                -webkit-transition: all 0.5s ease 0s;
                -moz-transition: all 0.5s ease 0s;
                -o-transition: all 0.5s ease 0s;
                transition: all 0.5s ease 0s;
            }
            .type-post .entry-content > a {
                color: #a1a1a1;
                display: inline-block;
                font-size: 14px;
                letter-spacing: 0.18px;
                line-height: 2;
                margin-top: 12px;
                position: relative;
                text-decoration: none;
                text-transform: uppercase;
                animation-duration: 0.6s;
            }
            .type-post .entry-content > a::before {
                background-color: #151515;
                content: "";
                left: 0;
                position: absolute;
                bottom: 0;
                height: 2px;
                width: 0;
            }
            .type-post .entry-content > a:hover {
                color: #151515;
            }
            .type-post:hover .entry-content > a {
                animation-name: bounceIn;
            }
            .type-post .entry-content > a:hover::before {
                width: 100%;
            }
            .type-post.post-position {
                position: relative;
                margin-bottom: 60px;
            }
            .type-post.post-position .entry-cover > a::before {
                background-color: rgba(0,0,0,0.45);
                bottom: 0;
                content: "";
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                opacity: 1;
            }
            .type-post.post-position .entry-content {
                left: 15px;
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translate(0%, -50%);
                -webkit-transform: translate(0%, -50%);
                -moz-transform: translate(0%, -50%);
                -ms-transform: translate(0%, -50%);
                margin-top: 0;
            }
            .type-post.post-position .entry-content .entry-header > span {
                font-weight: bold;
            }
            .type-post.post-position .entry-content .entry-header > span > a,
            .type-post.post-position .entry-header .entry-title > a {
                color: #fff;
            }
            .type-post.post-position .entry-header .entry-title {
                padding-bottom: 0;
                margin-bottom: 3px;
            }
            .type-post.post-position .entry-content > a {
                color: #fff;
                font-weight: bold;
            }
            .type-post.post-position .entry-content > a::before {
                background-color: #fff;
            }

            .blog-paralle .type-post .entry-content p,
            .blog-masonry-box .entry-content p:last-of-type {
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <!-- navigation -->
        <nav class="navbar no-margin-bottom alt-font">
            <div class="container navigation-menu">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-lg-2 col-md-3 navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand inner-link no-padding-lr" href="{{ route('home') }}"><img src="{{ asset('images/logo-thanuki.png') }}" alt=""></a>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-9 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('home') }}" class="inner-link">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Category <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-2 pull-right header-right text-right sm-display-none">
                        <a href="https://khunrebirth.github.io/Thanuki.me/" class="btn-small-white btn btn-very-small no-margin inner-link" target="_blank">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->

        @yield('content')

        <!-- footer -->
        <footer class="wow fadeIn bg-gray">
            <div class="container">
                <div class="row border-bottom padding-eight xs-padding-fifteen no-padding-lr xs-no-padding-lr">
                    <div class="col-md-12 col-sm-12 text-center xs-margin-eleven xs-no-margin-top xs-no-margin-lr">
                        <div class="footer-social position-relative top4">
                            <!-- social media link -->
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <!-- end social media link -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <span class="text-small text-uppercase letter-spacing-1 alt-font">All right reserved © by <a href="https://9thanuki.codes" target="_blank">9thanuki.codes</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/skrollr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('js/page-scroll.js') }}"></script>
        <!-- owl carousel -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
        <!-- counter  -->
        <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        @stack('scripts')
    </body>
</html>

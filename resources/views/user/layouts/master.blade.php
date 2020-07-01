<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::to('user/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ URL::to('user/style.css')}}">

    <title>@yield('title')</title>
</head>
<body>

@include('user.partials.preloader')


<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
{{--    <div class="top-header-area bg-img bg-overlay" style="background-image: url({{ URL::to('user/img/bg-img/header.jpg')}});">--}}
{{--        <div class="container h-100">--}}
{{--            <div class="row h-100 align-items-center justify-content-between">--}}
{{--                <div class="col-12 col-sm-6">--}}
{{--                    <!-- Top Social Info -->--}}
{{--                    <div class="top-social-info">--}}
{{--                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>--}}
{{--                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
{{--                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>--}}
{{--                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>--}}
{{--                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-6 col-lg-5 col-xl-4">--}}
{{--                    <!-- Top Search Area -->--}}
{{--                    <div class="top-search-area">--}}
{{--                        <form action="#" method="post">--}}
{{--                            <input type="search" name="top-search" id="topSearch" placeholder="Search">--}}
{{--                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Logo Area -->
    <div class="logo-area">
        <a href="{{route('user.home')}}"><img src="{{ URL::to('user/img/core-img/logo.png')}}" alt=""></a>
    </div>

    <!-- Navbar Area -->
    <div class="bueno-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-center" id="buenoNav">

                    <!-- Toggler -->
{{--                    <div id="toggler"><img src="{{ URL::to('user/img/core-img/toggler.png')}}" alt=""></div>--}}

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('user.home') }}">Galvenā</a></li>
                                <li><a href="{{ route('user.about.me') }}">Par mani</a></li>
                                <li><a href="#">Receptes</a>
                                    <div class="megamenu">
                                        @foreach($categories as $category)
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{ route('user.category',$category->id) }}">- {{$category->title}}</a></li>
                                            </ul>
                                        @endforeach

                                    </div>
                                </li>
                                <li><a href="{{ route('user.contacts')}}">Kontakti</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

@yield('content')

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Footer Nav -->
                <div class="footer-nav">
                    <ul>
                        <li><a href={{ route('user.home') }}>Galvenā</a></li>
                        <li><a href={{ route('user.about.me') }}>Par mani</a></li>
                        <li><a href="{{ route('user.contacts') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ URL::to('user/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{ URL::to('user/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('user/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{ URL::to('user/js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{ URL::to('user/js/active.js')}}"></script>
</body>
</html>

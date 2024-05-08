
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/icons.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- slick slider menu css file -->
    <link rel="stylesheet" href="{{asset('home/css/slick.min.css')}}">
    <!-- animate animation css file -->
    <link rel="stylesheet" href="{{asset('home/css/animate.min.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('home/style.css')}}">

</head>

<body class="body-wrapper dark">
@inject('injected','App\Defaults\Custom')


<!-- header end -->
<header class="header header-1 header-3 dark_header">
    <div class="top-header top-header_4 d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8">
                    <div class="header-cta">
                        <ul>
                            <li><a><i class="fal fa-clock"></i> Sun – Sat: 24/7</a></li>
                            @if(!empty($web->phone))
                                <li><a><i class="icon-phone"></i>{{$web->phone}}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-4">
                    <div class="header-right-socail d-flex justify-content-end align-items-center">
                        <h6 class="font-la color-white fw-600">Follow On:</h6>

                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container p-0">
            <div class="main_wrapper">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu main-menu_4">
                            <ul>
                                <li >
                                    <a href="{{url('/')}}" >Home</a>
                                </li>
                                <li >
                                    <a href="{{url('about')}}" >About</a>
                                </li>

                                <li ><a href="#">Pages</a>
                                    <ul >
                                        <li ><a href="{{url('plans')}}" >Plans</a></li>
                                        <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                        <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                        <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                                    </ul>
                                </li>

                                <li ><a href="#" >Services</a>
                                    <ul >
                                        @foreach($injected->getServices() as $service)
                                            <li ><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li ><a href="#" >Account</a>
                                    <ul >
                                        <li ><a href="{{route('login')}}" >Login</a></li>

                                        <li ><a href="{{route('register')}}" >Register</a></li>
                                    </ul>
                                </li>

                                <li ><a href="{{url('contact')}}" >Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">

                        <a href="{{route('register')}}" class="theme-btn btn__2 d-none d-sm-block">Get Started <i class="far fa-chevron-double-right"></i></a>
                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                            <div class="mobile-nav-wrap">
                                <div id="hamburger" class="color-primary">
                                    <i class="fal fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu - responsive menu  -->
<div class="mobile-nav">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li >
                        <a href="{{url('/')}}" >Home</a>
                    </li>
                    <li >
                        <a href="{{url('about')}}" >About</a>
                    </li>

                    <li ><a href="#">Pages</a>
                        <ul >
                            <li ><a href="{{url('plans')}}" >Plans</a></li>
                            <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                            <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                            <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                        </ul>
                    </li>

                    <li ><a href="#" >Services</a>
                        <ul >
                            @foreach($injected->getServices() as $service)
                                <li ><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li ><a href="#" >Account</a>
                        <ul >
                            <li ><a href="{{route('login')}}" >Login</a></li>

                            <li ><a href="{{route('register')}}" >Register</a></li>
                        </ul>
                    </li>

                    <li ><a href="{{url('contact')}}" >Contact</a></li>
                </ul>
            </div>

            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">Contact Info</h6>

                    <ul>
                        <li><a><i class="fal fa-clock"></i> Mon – SUN: 24/7</a></li>
                        <li><a href="mailto:{{$web->email}}"><i class="icon-email"></i>{{$web->email}}</a></li>
                        <li>
                            <a class="header-contact d-flex align-items-center">
                                <div class="icon">
                                    <i class="icon-call"></i>
                                    <!-- <img src="{{asset('home/img/icon/phone-1.svg')}}" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                    <h5 class="fw-500">+123 556 8824</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Follow On:</h6>

                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="offcanvas-overlay"></div>
<!-- header end -->
<!-- <div class="header-gutter home"></div> -->

@yield('content')

<!-- footer start -->
<footer class="footer-1 overflow-hidden">
    <div class="footer-top mb-xs-5 mb-sm-10 mb-md-15 mb-lg-20 mb-25 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-footer-wid site_info_box">
                        <a href="{{url('/')}}" class="d-block mb-20">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                        </a>

                        <div class="description font-la color-white">
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid contact_widget">
                    <h4 class="wid-title mb-30 color-white">Working Time</h4>

                    <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                        <div class="wid-contact pb-30 mb-25">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Mon - Sat: 24/7</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Sunday: 24/7</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                    <ul>
                        <li><a href="{{url('about')}}">About us</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                        <li><a href="{{url('plans')}}">Plans</a></li>
                        <li><a href="{{url('faqs')}}">FAQs</a></li>
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->


            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid">
                    <h4 class="wid-title mb-30 color-white">Office Location</h4>

                    @if(!empty($web->phone))
                        <li><span>Call:</span> <a href="tel:{{$web->phone}}">{{$web->phone}}</a></li>
                    @endif
                    <li><span>Email:</span> <a href="mailto:{{$web->email}}">{{$web->email}}</a></li>
                    <li><span>Address:</span> <a>{{$web->address}}</a></li>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->
        </div>
    </div>

    <div class="footer-bottom overflow-hidden">
        <div class="container">
            <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    &copy; 2013 - {{date('Y')}} <a href="{{url('/')}}">{{$siteName}}</a> | All Rights Reserved.
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!--  ALl JS Plugins
====================================== -->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/modernizr.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easing.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/slick.min.js')}}"></script>
<script src="{{asset('home/js/scrollUp.min.js')}}"></script>
<script src="{{asset('home/js/counterup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.sticky-kit.js')}}"></script>
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('home/js/active.js')}}"></script>
</body>
</html>

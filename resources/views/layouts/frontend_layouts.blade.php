<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon_1.ico">
    <title>Aim 2B Well</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('frontend') }}/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
        @guest

                @else
                    <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">মোট কেনাকাটা : <span>00 ৳</span></div>
                    </div>
                </div>
                @endguest
            </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}

                            <div class="header__top__right__auth">
                                <li><a href="{{ route('login') }}"><i class="fa fa-user"></i>সাইন-ইন / রেজিস্টার  </a></li>
                            </div>
                             
                             



                           {{--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="" > {{ __('প্রোফাইল ') }} </a>
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i>

                                        {{ __('লগ-আউট') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
               <li class="active"><a href="">Home</a></li>

                <li><a href="./shop-grid.html">Shop</a></li>
                           
                <li><a href="./blog.html">Blog</a></li>

                <li><a href="./contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
       
    </div>
    <!-- Humberger End -->




   
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>support@aim2bwell.com</li>
                                <li>৫০০ টাকার  অর্ডারের জন্য বিনামূল্যে শিপিং</li>
                            </ul>
                        </div>
                    </div>


                     <div class="col-lg-6 col-md-6">
                         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <div  class="site-name">Aim 2B Well . Com</div>
               
                 <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}

                            <div class="header__top__right__auth">
                                <li><a href="{{ route('login') }}"><i class="fa fa-user"></i>সাইন-ইন / রেজিস্টার  </a></li>
                            </div>
                             
                             



                           {{--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="" > {{ __('প্রোফাইল ') }} </a>
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i>

                                        {{ __('লগ-আউট') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
            
    </div>
    </div>

     

    </div>
                   
            <div class="container">
                @if(session('success'))
                <div class="alert alert-success alart-dismissible fade show" role="alert">
                  <strong>{{ (session('success')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href=""><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="./shop-grid.html">Shop</a></li>
                           
                            <li><a href="./blog.html">Blog</a></li>

                            <li><a href="./contact.html">Contact Us</a></li>
                             

                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i>Cart</a></li>
                            

                        </ul>
                    </nav>
                </div>
                @guest

                @else
                    <div class="col-lg-3">
                    <div class="header__cart">
                        @php
                            $total = App\Cart::all()->where('user_ip',request()->ip()) 
                            ->sum(function($t){
                                return $t->price * $t->qty;
                            });
                            $quantity = App\Cart:: where('user_ip',request()->ip())->sum('qty')
                        @endphp
                        <ul>
                            {{-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> --}}
                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i><span> {{ $quantity }}</span></a></li>
                        </ul>
                        <div class="header__cart__price">মোট কেনাকাটা : <span>{{ $total }} ৳</span></div>
                    </div>
                </div>
                @endguest
                

            </div>

            <div class="humberger__open">
            <i class="fa fa-bars"></i>
    </div>
            
        </div>
    </header>
    <!-- Header Section End -->

       
 <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>সকল ক্যাটাগরি </span>
                        </div>


                        @php
                            $categories = App\Category::where('status',1)->latest()-> get();
                        @endphp
                        <ul>

                           

                         @foreach($categories as $row)
                            <li><a href="#">{{ $row->category_name }}</a></li>
                            @endforeach

                           
                           
                        </ul>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                               
                                <input  type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn"> <i class="fa fa-search"> </i> খুঁজুন </button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+8801773841134</h5>
                                <span>৭ দিন ২৪ ঘন্টা  স্বাস্থ সহায়তা </span>
                            </div>
                        </div>
                    </div>

               

                   

                    
    

@yield('content')
 

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{ asset('frontend') }}/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>ঠিকানা: ঢাকা,বাংলাদেশ</li>
                            <li>মোবাইল: +৮৮০১</li>
                            <li>ইমেল: support@aim2bwell.com</li>
                        </ul>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>উপকারী সেবা </h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                           
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                          
                        </ul>
                    </div>
                </div>

                
                <div class="col-lg-4 col-md-12 ">
                    <div class="footer__widget">
                       <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text, text-center"><p>
                             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> <a href="https://aim2bwell.com" target="_blank"> Aim 2B Well</a></p>
                 </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>



</body>

</html>
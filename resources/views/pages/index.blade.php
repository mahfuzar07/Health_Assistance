@extends('layouts.frontend_layouts')
@section('content')



                    <div class="hero__item set-bg" data-setbg="{{ asset('frontend') }}/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>aim2bwell.com</span>
                            <h2>Your Health <br/>Is Our Priority</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
<!-- Hero Section End -->

 <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">

                    @foreach($products as $product)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset($product->image_1) }}">
                            <h5><a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>আমাদের পণ্য</h2>
                    </div>
                    <div class="featured__controls">


                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach($categories as $cat)
                            <li data-filter=".filter{{ $cat-> id }}">{{ $cat-> category_name }}</li>
                            
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($categories as $cat)
                @php
                    $products = App\Product::where('category_id',$cat->id)->where('status',1)->latest()-> get();
                @endphp
                @foreach ($products as $product)
                   
                <div class="col-lg-3 col-md-4 col-sm-6 mix filter{{ $cat->id }}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->image_1) }}">
                            <ul class="featured__item__pic__hover">

                                {{-- <button type="" style="border-radius: 50%;">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                </button> --}}

                                <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="price" value="{{ $product->price }}">

                                  

                                  <button type="submit" style="border-radius: 50%;">
                                    <li><i class="fa fa-shopping-cart"></i></li>
                                    </button>
                                </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name }}</a></h6>
                            <h5>{{ $product->price }} ৳</h5>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
      <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>স্বাস্থ্য বার্তা </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('frontend/img/blog/blog-2.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('frontend/img/blog/blog-3.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->



@endsection

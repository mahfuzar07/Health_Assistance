    @extends('layouts.frontend_layouts')
    @section('home') active @endsection
    @section('content')


        <div class="hero__item set-bg" data-setbg="{{ asset('frontend') }}/img/hero/banner.jpg">
            <div class="hero__text">
                <span>aim2bwell.com</span>
                <h2>Your Health <br />Is Our Priority</h2>
                <p>আপনার ঔষধ খুঁজুন, অর্ডার করুন এবং দ্রুত ডেলিভারী নিন </p>
                <a href="{{ route('shop.page') }}" class="primary-btn">SHOP NOW</a>
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

                        @foreach ($products as $product)
                            <div class="col-lg-3">
                                <div class="categories__item set-bg" data-setbg="{{ asset($product->image_1) }}">
                                    <h5><a
                                            href="{{ url('product/details/' . $product->id) }}">{{ $product->product_name }}</a>
                                    </h5>
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
                                @foreach ($categories as $cat)
                                    <li data-filter=".filter{{ $cat->id }}">{{ $cat->category_name }}</li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                    @foreach ($categories as $cat)
                        @php
                            $products = App\Product::where('category_id', $cat->id)
                                ->where('status', 1)
                                ->latest()
                                ->get();
                        @endphp
                        @foreach ($products as $product)

                            <div class="col-lg-3 col-md-4 col-sm-6 mix filter{{ $cat->id }}">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->image_1) }}">
                                        <ul class="featured__item__pic__hover">



                                            <form action="{{ url('add/to-cart/' . $product->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="price" value="{{ $product->price }}">



                                                <button type="submit" style="border-radius: 50%;">
                                                    <li><i class="fa fa-shopping-cart"></i></li>
                                                </button>
                                            </form>
                                        </ul>
                                    </div>
                                    <div class="featured__item__text">
                                        <h6><a
                                                href="{{ url('product/details/' . $product->id) }}">{{ $product->product_name }}</a>
                                        </h6>
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







        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="latest-product__text">
                            <h4>নতুন পণ্য</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($lts_p as $product)
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset($product->image_1) }}"
                                                    style="height:100px;width:100px;" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $product->product_name }}</h6>
                                                <span>{{ $product->price }} ৳</span>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($lts_p as $product)
                                        <a href="{{ url('product/details/' . $product->id) }}"
                                            class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset($product->image_1) }}"
                                                    style="height:100px;width:100px;" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $product->product_name }}</h6>
                                                <span>{{ $product->price }} ৳</span>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6">
                        <div class="latest-product__text">
                            <h4>নতুন স্বাস্থ্য বার্তা</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($blogs as $blog)
                                        <a href="{{ url('post/details/' . $blog->id) }}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset($blog->image) }}" style="height:100px;width:100px;"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $blog->post_title }}</h6>
                                                <span>{{ $blog->created_at->format(' j F Y') }}</span>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($blogs as $blog)
                                        <a href="{{ url('post/details/' . $blog->id) }}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset($blog->image) }}" style="height:100px;width:100px;"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{ $blog->post_title }}</h6>
                                                <span>{{ $blog->created_at->format(' j F Y') }}</span>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- Latest Product Section End -->

        <!--consultant Section Begin -->
        <section class="latest-product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="section-title">
                            <h2>আমাদের স্বাস্থ্য পরামর্শক গণ</h2>
                        </div>
                        <div class="categories__slider owl-carousel">

                            @foreach ($consultants as $row)
                                <div class="col-lg-3">
                                    <div class="card" style="width: 13rem;">
                                        <img src="{{ asset('uploads/documents/consultant/' . $row->avatar) }}"
                                            class="card-img-top" style=" height: 9rem;">
                                        <h6 class="text-center badge badge-primary"><i class="fa fa-user-md"></i>
                                            {{ $row->name }} </h6>

                                        <div class="card-body">
                                            <h6 class=""> {{ $row->profession }} </h6>
                                            <h6 class=""> {{ $row->institute }} </h6>
                                            <h6 class="text-primary"><b> {{ $row->specialist }}</b> </h6>
                                            <p class=""><i class="fa fa-phone"></i> {{ $row->phone_number }}</p>


                                            <a href="{{ route('chatcon', $row->id . '-' . str_slug($row->name)) }}"><button
                                                    type="button" class="btn btn-primary btn-sm"><i
                                                        class="fa fa-envelope"></i> Message
                                                </button></a>


                                            <a href=""><button type="button" class="btn btn-primary btn-sm"><i
                                                        class="fa fa-video-camera"></i> Calling </button></a>


                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <!-- consultant Section End -->





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
                    @foreach ($blogs as $row)

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ $row->image }}" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> {{ $row->created_at->format('j F Y') }}</li>
                                        <li> <i class="fa fa-user"></i> {{ $row->joincon->name }}</li>
                                    </ul>
                                    <h5><a href="{{ url('post/details/' . $row->id) }}">{{ $row->post_title }}</a>
                                    </h5>
                                    <p>{{ $row->short }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

    @endsection

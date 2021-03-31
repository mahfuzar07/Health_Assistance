@extends('layouts.frontend_layouts')
@section('shop') active @endsection
@section('content')

</div>
</div>
</section>


    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend') }}/img/breadcrumb.jpg">
        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <div class="breadcrumb__text">
	                        <h2>শপ </h2>
	                        {{-- <div class="breadcrumb__option">
	                            <a href="{{ url('/home') }}">Home</a>
	                            <span>Shop</span>
	                        </div> --}}
	                    </div>
	                </div>
	            </div>
        </div>
    </section>


        <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>সকল ক্যাটাগরি</h4>

                          
                            @php
                            $categories = App\Category::where('status',1)->latest()-> get();
                        @endphp
                        <ul>

                           

                         @foreach($categories as $row)
                            <li><a href="{{ url('category/product-show/'.$row-> id) }}">{{ $row->category_name }}</a></li>
                            @endforeach

                           
                           
                        </ul>
                        </div>

                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="1000">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>নতুন পণ্য</h4>
                                
                                    <div class="latest-product__slider owl-carousel">
		                            <div class="latest-prdouct__slider__item">
		                                @foreach ($lts_p as $product)
		                                <a href="#" class="latest-product__item">
		                                    <div class="latest-product__item__pic">
		                                        <img src="{{ asset($product->image_1) }}" style="height:100px;width:100px;" alt="">
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
		                                <a href="{{ url('product/details/'.$product->id) }}" class="latest-product__item">
		                                    <div class="latest-product__item__pic">
		                                        <img src="{{ asset($product->image_1) }}" style="height:100px;width:100px;" alt="">
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
                    </div>
                </div>

                <div class="col-lg-9 col-md-7">
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="section-title">
                        <h2>আমাদের সকল পণ্য</h2>
                    </div>
                    
                </div>
                 </div>
                    
                    
                    <div class="filter__item">
                    <div class="row">
                    	 @foreach ($productsp as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset($product->image_1) }}">
                                    <ul class="product__item__pic__hover">
                                         <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="price" value="{{ $product->price }}">

                                  

                                  <button type="submit" style="border-radius: 50%;">
                                    <li><i class="fa fa-shopping-cart"></i></li>
                                    </button>
                                </form>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                	<h6><a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name }}</a></h6>
                            <h5>{{ $product->price }} ৳</h5>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach


                        
                    </div>
                    <div>
                      {{ $productsp->links() }}
                     
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->










@endsection
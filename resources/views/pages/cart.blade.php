@extends('layouts.frontend_layouts')
@section('cart') active @endsection
@section('content')

  </div>
     </div>
    </section>

 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend') }}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>কেনাকাটা</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



          
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--=======================allart =================================--}}
                	@if(session('cart_delete'))
                <div class="alert alert-danger alart-dismissible fade show" role="alert">
                  <strong>{{ (session('cart_delete')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif

                @if(session('qty_update'))
                <div class="alert alert-success alart-dismissible fade show" role="alert">
                  <strong>{{ (session('qty_update')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif
{{--======================= End allart =================================--}}
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">পণ্য</th>
                                    <th>মূল্য</th>
                                    <th>পরিমাণ</th>
                                    <th>মোট মূল্য</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($carts as $cart)
                            	
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset($cart->product->image_1) }}" alt=""
                                        style="height: 80px;width: 80px;">
                                        <h5>{{ $cart->product->product_name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $cart->price }} ৳
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                        	<form action="{{ url('cart/quantity/update/'.$cart->id) }}" method="POST">
                                            @csrf
                                            <div class="pro-qty">
                                            
                                                <input type="text" name="qty" value="{{ $cart->qty }}" min="1">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-success">Update Quantity
                                            </button>
                                            </form>
                                        </div>
                                    </td>

                                    <td class="shoping__cart__total">
                                        {{ $cart->price * $cart->qty }} ৳
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        
                                        	<a href="{{ url('cart/remove/'.$cart->id) }}"><span class="icon_close"></span></a>

                                            

                                        
                                    </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">

                    	<a href="{{ route('shop.page') }}" class="primary-btn cart-btn "><button
                       	class="btn btn-info">কেনাকাটা চালিয়ে যান</button></a>


                    	{{-- <a href="#" class="primary-btn cart-btn cart-btn-right">Upadate Cart</a> --}}
                        

                        
                    </div>
                </div>
                <div class="col-lg-6">
                   @if (Session::has('coupon'))
                     @else   
                    
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>ডিসকাউন্ট-কোড </h5>
                            <form action="{{ url('coupon/apply') }}" method="POST">
                            	@csrf
                                <input type="text" name="coupon_code" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>


                    
                    @endif
                </div>




                <div class="col-lg-6">
{{--=======================allart =================================--}}

                @if(session('coupon_invalid'))
                <div class="alert alert-danger alart-dismissible fade show" role="alert">
                  <strong>{{ (session('coupon_invalid')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif

                @if(session('coupon_apply'))
                <div class="alert alert-success alart-dismissible fade show" role="alert">
                  <strong>{{ (session('coupon_apply')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif
{{--=================================== end allart=========================================== --}}
                    <div class="shoping__checkout">
                        <h5>সর্ব-মোট কেনাকাটা </h5>
                        <ul>
                            
                            @if (Session::has('coupon'))
                            <li>মোট <span>{{ $subtotal }} টাকা</span></li>
                            <li>সংযুক্ত কুপন কোড <span>{{ session()->get('coupon')['coupon_code'] }} <a href="{{ url('coupon/delete') }}"><i class="fa fa-trash" ></i></a></span>
                            </li>

                            <li>ডিসকাউন্ট <span>{{ session()->get('coupon')['discount'] }} %
                            ({{$discount= $subtotal * session()->get('coupon')['discount'] /100 }} ৳)
                            </span></li>

                            <li>সর্ব-মোট মূল্য <span>{{ $subtotal - $discount }} টাকা</span></li>
                             @else

                             <li>মোট <span>{{ $subtotal }} টাকা</span>
                             </li>

                             @endif
                            
                        </ul>
                        <a href="{{ url('checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    


@endsection

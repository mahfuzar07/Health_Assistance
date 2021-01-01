@extends('layouts.frontend_layouts')
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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/home') }}">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{ route('place-order') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Full Name<span>*</span></p>
                                        <input type="text" name="full_name" value="{{ Auth::user()->name }}" >
                                        @error('full_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                    </div>
                                </div>
                             </div>
                            <div class="checkout__input">
                                <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email"  value="{{ Auth::user()->email }}">
                                        @error('email')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                    </div>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" placeholder="Street Address" class="checkout__input__add">
                                 @error('address')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city">
                                @error('city')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                            </div>
                            <div class="checkout__input">
                                <p>State<span>*</span></p>
                                <input type="text" name="state">
                                @error('state')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="post_code">
                                @error('post_code')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone">
                                        @error('phone')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                    </div>
                                </div>
                                
                            </div>
                
                            <div class="checkout__input">
                                <p>Order notes (optional)<span></span></p>
                                <input type="text" name="order_note"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                
                                <div class="checkout__order__products">Products  <span>Total</span></div>
                                @foreach ($carts as $cart)
                                <ul>
                                    <li>{{ $cart->product->product_name }} - ({{ $cart->qty }})<span>{{ $cart->price * $cart->qty }} ৳</span></li>
                                    
                                </ul>
                                @endforeach

                                @if (Session::has('coupon'))
                                <div class="checkout__order__subtotal">Subtotal <span>{{ $subtotal }} টাকা</span></div>

                               <div class="checkout__order__subtotal">Discount <span>{{ session()->get('coupon')['discount'] }} %
                            ({{$discount= $subtotal * session()->get('coupon')['discount'] /100 }} টাকা)</span></div>

                                <div class="checkout__order__total">Total <span>{{ $subtotal - $discount }} টাকা</span></div>

                                <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                <input type="hidden" name="discount" value="{{ session()->get('coupon')['discount'] }}">
                                <input type="hidden" name="total" value="{{ $subtotal - $discount }}">


                                @else
                                <div class="checkout__order__total">Total <span>{{ $subtotal }} টাকা</span></div>
                                <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                <input type="hidden" name="total" value="{{ $subtotal }}">

                             
                                 @endif


                                
                                <div class="checkout__input__checkbox">
                                    <div><h4>Select payment method</h4></div>
                                    <label for="HandCash">
                                        Hand Cash
                                        <input type="checkbox" id="HandCash" value="Hand Cash" name="payment_type">
                                         
                                        <span class="checkmark"></span>
                                       
                                    </label>
                                    @error('payment_type')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="bkash">
                                        bkash
                                        <input type="checkbox" id="bkash" value="B kash" name="payment_type">

                                        <span class="checkmark"></span>
                                        
                                    </label>
                                  
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->




@endsection


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
                        <h2>Order Done</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


         <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            
           <h3>@if(session('OrderComplete'))
                <div class="alert alert-success alart-dismissible fade show" role="alert">
                  <strong>{{ (session('OrderComplete')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif
            </h3> 
        </div>
    </section>
    <!-- Checkout Section End -->


@endsection
@extends('layouts.frontend_layouts')
@section('content')

</div>
</div>
</section>


    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend') }}/img/breadcrumb.jpg">
        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <div class="breadcrumb__text">
	                        <h2>Profile</h2>
	                        <div class="breadcrumb__option">
	                            <a href="{{ url('/home') }}">Home</a>
	                            <span>Shop</span>
	                        </div>
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
                            <h4>Profile Menu</h4>
                            <ul>
                                <li>
                                  <a href="{{ route('user.profile') }}"><i class="fa fa-address-card" aria-hidden="true"></i></i> Dashboard</a>
                                  <a href="{{ route('user.orders') }}"><i class="fa fa-truck" aria-hidden="true"></i></i> Orders Details</a>
                                  <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Inbox</a>

                                </li>
                              </ul>
                        </div>
                        <hr>
                     </div>
                </div>
                <div class="col-lg-9 col-md-7">
                  <div><h4>User Information Details</h4></div>
                  <hr>
                 <div class="row">
                 <div class="col-md-12">
                                                
                   <div class="pull-left m-t-30">
                                                   
                    <address>
                     <strong>Name :</strong> {{ Auth::user()->name }}<br>
                     <strong>Email: </strong > {{ Auth::user()->email }}<br>
                      <strong>Address: </strong> <br>
                     </address>
                  </div>
                 <div class="pull-right m-t-30">
                                                   

                                                   
                                                    
               </div>
             </div>
             </div>


                    
           
                    



                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->










@endsection
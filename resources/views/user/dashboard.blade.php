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
	                        <h2> আপনার প্রোফাইল </h2>
	                        
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
                            <h4>প্রোফাইল মেনু</h4>
                            <ul>
                                <li>
                                  <a href="{{ route('user.profile') }}"><i class="fa fa-address-card" aria-hidden="true"></i></i> ড্যাশবোর্ড</a>
                                  <a href="{{ route('user.orders') }}"><i class="fa fa-truck" aria-hidden="true"></i></i> অর্ডার তথ্য বিবরণ</a>
                                  <a href="{{ route('user.consultant') }}"><i class="fa fa-user-md" aria-hidden="true"></i> স্বাস্থ্য পরামর্শদাতা</a>
                                  <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> ইনবক্স</a>

                                </li>
                              </ul>
                        </div>
                        <hr>
                     </div>
                </div>


                <div class="col-lg-9 col-md-7">
                  <div><h4>আপনার তথ্য বিবরণ</h4></div>
                  <hr>
                 <div class="row">
                 <div class="col-md-12">
                                                
                   <div class="pull-left m-t-30">
                                                   
                    <address>
                     <strong> নাম :</strong> {{ Auth::user()->name }}<br>
                     <strong> ই-মেল: </strong > {{ Auth::user()->email }}<br>
                     <strong> ঠিকানা: </strong> <br>
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
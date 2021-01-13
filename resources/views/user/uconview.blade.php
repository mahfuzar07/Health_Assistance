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
	                        <h2> স্বাস্থ্য পরামর্শ গণ  তথ্য </h2>
	                        
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
                                  <a href="{{ route('user.consultant') }}"><i class="fa fa-user-md" aria-hidden="true"></i>  স্বাস্থ্য পরামর্শদাতা</a>
                                  <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> ইনবক্স</a>

                                </li>
                              </ul>
                        </div>
                        <hr>
                     </div>
                </div>


                <div class="col-lg-9 col-md-7">
                  <div><h4>স্বাস্থ পরামর্শগণের তথ্য বিবরণ</h4></div>
                  <hr>
                   @php
                            $consultants = App\Consultant::where('status',0)->latest()-> get();
                        @endphp

                  
                  <div class="row">
                    @foreach ($consultants as $row)
                  <div class="col-lg-4 ">
                    
                  <div class="card" style="width: 13rem;">
                <img src="{{asset('uploads/documents/consultant/'. $row-> avatar) }}"class="card-img-top" style=" height: 13rem;">
                <div class="card-body">
                  <h5 class="card-title"><i class="fa fa-user-md"></i> {{ $row-> name }} </h5>
                  <p class="card-text"><i class="fa fa-phone"></i> {{ $row-> phone_number}}</p>
                  <a href=""><button  type="button" class="btn btn-primary"><i class="fa fa-envelope"></i> বার্তা পাঠান  </button></a>
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
    <!-- Product Section End -->










@endsection
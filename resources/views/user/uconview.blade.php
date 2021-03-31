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
	                        <h2> স্বাস্থ্য  পরামর্শকগণ </h2>

	                    </div>
	                </div>
	            </div>
        </div>
    </section>


    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-5" {{-- style="margin-top: 6%;" --}}>
                <div><h4>প্রোফাইল মেন্যু </h4></div>
                  <hr>

                      <div class="list-group">
  <a href="{{ route('user.profile') }}" class="list-group-item list-group-item-action "><i class="fa fa-address-card" aria-hidden="true"></i>
    ড্যাশবোর্ড
  </a>
  <a href="{{ route('user.orders') }}" class="list-group-item list-group-item-action"><i class="fa fa-truck" aria-hidden="true"></i> অর্ডার তথ্য বিবরণ</a>
  
  <a href="{{ route('user.consultant') }}" class="list-group-item list-group-item-action active"><i class="fa fa-user-md" aria-hidden="true"></i> স্বাস্থ্য পরামর্শদাতা</a>
  
  <a href="{{ route('blood.page') }}" class="list-group-item list-group-item-action"><i class="fa fa-hospital-o" aria-hidden="true"></i> ব্লাড অনুসন্ধান</a>
 
</div>
   </div>


                <div class="col-lg-9 col-md-7">
                  <div><h4 class="text-center">স্বাস্থ্য  পরামর্শকগণের তথ্য বিবরণ</h4></div>
                  <hr>
                   @php
                            $consultants = App\Consultant::where('status',0)->latest()-> get();
                        @endphp


                  <div class="row">
                    @foreach ($consultants as $row)
                  <div class="col-lg-3 ">

                  <div class="card" style="width: 13rem;">
                <img src="{{asset('uploads/documents/consultant/'. $row-> avatar) }}"class="card-img-top" style=" height: 8.5rem;">
                <div class="card-body">
                  <h5 class="card-title"><i class="fa fa-user-md"></i> {{ $row-> name }} </h5>
                  <h5 class="card-title"> {{ $row-> profession }} </h5>
                  <h5 class="card-title  text-primary"> {{ $row-> specialist }} </h5>
                  <p class="card-text"><i class="fa fa-phone"></i> {{ $row-> phone_number}}</p>
                  <a href="{{ route('chatcon',$row->id.'-'.str_slug($row->name)) }}"><button  type="button" class="btn btn-primary"><i class="fa fa-envelope"></i> বার্তা পাঠান  </button></a>
                </div>

              </div>
              <hr>
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

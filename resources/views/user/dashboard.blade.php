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
                  <div><h4>প্রোফাইল মেন্যু </h4></div>
                  <hr>
                   <div class="list-group">
                              <a href="{{ route('user.profile') }}" class="list-group-item list-group-item-action active"><i class="fa fa-address-card" aria-hidden="true"></i>
                                ড্যাশবোর্ড
                              </a>
                              <a href="{{ route('user.orders') }}" class="list-group-item list-group-item-action"><i class="fa fa-truck" aria-hidden="true"></i> অর্ডার তথ্য বিবরণ</a>
                              <a href="{{ route('user.consultant') }}" class="list-group-item list-group-item-action"><i class="fa fa-user-md" aria-hidden="true"></i> স্বাস্থ্য পরামর্শদাতা</a>

                              <a href="{{ route('blood.page') }}" class="list-group-item list-group-item-action"><i class="fa fa-hospital-o" aria-hidden="true"></i> ব্লাড অনুসন্ধান</a>

                             {{--  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a> --}}
                    </div>
                         </div>

                  <div class="col-md-9">
                  <div class="tab-content" id="nav-tabContent">

                  <div><h4 class="text-center">আপনার তথ্য বিবরণ</h4></div>
                  <hr>
                   <div class="card bg-secondary text-center">

              <div class="card-body">
                <div class="row">
                <div class="col-lg-4">
                  <div class="card" style="width: 15rem;">
                 <div class="card-body bg-primary" >
                  <h5 class="card-title text-white">অর্ডার করেছেন</h5>
                  <p class="card-text text-white">[ {{ $orders }} ]</p>

                </div>

              </div>
           </div>
    <div class="col-lg-4">
      <div class="card" style="width: 15rem;">
                 <div class="card-body bg-primary">
                  <h5 class="card-title text-white"> পরামর্শ সেবা নিয়েছেন </h5>
                  <p class="card-text text-white">[ 0 ]</p>

                </div>

              </div>
    </div>

    <div class="col-lg-4">
      <div class="card" style="width: 15rem;">
                 <div class="card-body bg-primary">
                  <h5 class="card-title text-white"> পোস্ট করেছেন</h5>
                  <p class="card-text text-white">[ 0 ]</p>

                </div>

              </div>
    </div>

    </div>
  </div>

</div>

<hr>
                <div class="card">

                  <div class="card-body ">
                    <div class="row ">
                  <div class="col-md-5" >
                    <div class="pull-left m-t-30 " >

                    <address>
                     <strong>নাম </strong><br>
                     <strong>ই-মেল</strong ><br>
                     <strong>মোবাইল নং</strong ><br>
                     <strong>ব্লাড গ্রুপ</strong ><br>

                     </address>
                  </div>

                 <div class="pull-right m-t-30">
                      <address>
                     <strong>: {{ Auth::user()->name }}</strong> <br>
                     <strong>: {{ Auth::user()->email }} </strong> <br>
                     <strong>: {{ Auth::user()->phone }} </strong> <br>
                     <strong>: {{ Auth::user()->blood_grp }} </strong> <br>

                     </address>
                  </div>
                   </div>

                  <div class="col-md-7 ">



                  </div>

              </div>

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

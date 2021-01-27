@extends('layouts.frontend_layouts')
@section('blood') active @endsection
@section('content')

</div>
</div>
</section>


    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend') }}/img/breadcrumb.jpg">
        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 text-center">
	                    <div class="breadcrumb__text">
	                        <h2> ব্লাড ব্যাংক </h2>
                            <h5 class="text-white"><i class="fa fa-heart"></i> আমার রক্তে যদি সহযোগিতা করে মুমূর্ষ রোগীর প্রাণ তাহলে আমি কেন করবোনা স্বেচ্ছায় রক্ত দেন <i class="fa fa-heart"></i></h5>
	                        
	                    </div>
	                </div>
	            </div>
        </div>
    </section>


        <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5">
                    <div class="blog__sidebar">

                    	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-hospital-o"></i> ব্লাড এর জন্য পোস্ট করুন

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title text-center" id="exampleModalLabel"> ব্লাড এর জন্য পোস্ট করুন
        <p> <i class="fa fa-heart"></i> আপনার প্রয়োজনে আমরা সকলেই আপনার পাশেই আছি <i class="fa fa-heart"></i></p> </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="{{ route('store-blood') }}" method="POST">
         @csrf
         <div class="row">
                        <div class="col-lg-12 col-md-6">
                         <div class="checkout__input">
                                        <p>রোগীর নাম</p>
                                        <input type="text" name="full_name" placeholder="রোগীর নাম লিখুন" >
                                                    @error('full_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                    </div>
                            <div class="checkout__input">
                                <p>হাসপাতালের নাম </p>
                                <input type="text" name="hospital_name" placeholder="হাসপাতালের নাম লিখুন" >
                                                    @error('hospital_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                            </div>
                            <div class="checkout__input">
                                <p>ঠিকানা</p>
                                <input type="text" name="address" placeholder="সড়ক নং , উপজেলা, জেলা " class="checkout__input__add">
                               
                                     @error('address')
                                     <strong class="text-danger">{{ $message }}</strong>
                                      @enderror
                             </div>
                             <div class="row">
                                <div class="col-lg-9">
                                    <div class="checkout__input">
                                        <p>মোবাইল নং</p>
                                        <input type="text" name="phone" placeholder="মোবাইল নং" >
                                                    @error('phone')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="checkout__input">
                                      <p>ব্লাড গ্রুপ </p>
                                        <input type="text" name="blood_group" placeholder="" >
                                                    @error('blood_group')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>রোগীর অতিরিক্ত বিবরণ</p>
                                <input type="text" name="note"
                                    placeholder="রোগীর অতিরিক্ত কিছু বিবরণ থাকলে এখানে লিখুন">

                                
                                                    @error('note')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                            </div>
                            
                        </div>

                       
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-l-10 pull-right"> পোস্ট  করুন  </button>
               
                </form>
        
      </div>
     
    </div>
  </div>
</div>
<hr>
                            <div class="blog__sidebar__item">
                           
                        
                  
                            
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-10 col-md-7 ">
                    <div class="section-title">
                        <h2>জরুরী রক্তের প্রয়োজন</h2>


                    </div>

                    <div class="row">

                        @foreach ($bloods as $blood)
                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="blog__item">
                               <div class="blog__item__text">
                                    <h5>রোগীর নাম : {{ $blood-> full_name  }}</h5>
                                    <h6>হাসপাতাল : {{ $blood->  hospital_name }}</h6>
                                    <h6>রক্তের গ্ৰুপ: <b>{{ $blood-> blood_group  }}</b></h6>
                                    <h6>যোগাযোগের ঠিকানা:  {{ $blood-> address  }}</h6>
                                    
                                    <h6>মোবাইল নং: <b>{{ $blood->  phone }}</b> </h6>
                                    <h6> রোগীর অতিরিক্ত বিবরণ:{{ $blood->  note }}</h6>

                                    <ul>
                                        
                                    <li><i class="fa fa-calendar-o"></i> {{ $blood-> created_at->diffForHumans()  }}</li>

                                        {{-- <li><i class="fa fa-comment-o"> কমেন্ট </i> 5</li> --}}
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                         
                       </div>

                       <div>
                      {{ $bloods->links() }}
                     
                    </div>

            </div>
        </div>
    </section>
    <!-- Blog Section End -->










@endsection
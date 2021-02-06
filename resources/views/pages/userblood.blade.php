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
                            {{-- <h5 class="text-white"><i class="fa fa-heart"></i> আমার রক্তে যদি সহযোগিতা করে মুমূর্ষ রোগীর প্রাণ তাহলে আমি কেন করবোনা স্বেচ্ছায় রক্ত দেন <i class="fa fa-heart"></i></h5> --}}
	                        
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
<hr>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title text-center" id="exampleModalLabel"> ব্লাড এর জন্য পোস্ট করুন </h5>

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


<div class="blog__sidebar__item">
     <div class=" col-lg-12 form-group">
    <form method="get" action="{{ route('search.blood') }}" >
               <input  type="search" name="search" class="form-control">

               <button style="margin-top:10px" class="btn btn-primary" type="submit">ব্লাড খুঁজুন</button>
               </form>

                 </div> 

              </div>


                     
                        
                    </div>
                </div>

                <div class="col-lg-10 col-md-7 ">
                    <div class="section-title">
                        <h2>রক্তের জন্য যোগাযোগ করুন</h2>

                      
                    </div>
                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Mark</th>
                              <th scope="col">Name</th>
                              <th scope="col">blood group</th>
                              <th scope="col">Contacts number</th>
                              <th scope="col">Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                              $i =1;
                               @endphp
                            @foreach ($users as $user)
                            <tr>
                              <td>{{ $i ++ }}</td>
                              <td><input type="checkbox" id="" value="" name=""></td>
                              <td>{{ $user-> name  }}</td>
                              <td><b>{{ $user-> blood_grp  }}</b></td>
                              <td>{{ $user->  phone }}</td>
                              <td>{{ $user->  email }}</td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>


                       {{-- <div>
                      {{ $bloods->links() }}
                     
                    </div> --}}

            </div>
        </div>
    </section>
    <!-- Blog Section End -->










@endsection
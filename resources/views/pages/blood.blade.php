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
	                        
	                    </div>
	                </div>
	            </div>
        </div>
    </section>


        <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
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
      	<form action="" method="POST">
         @csrf
         <div class="row">
                        <div class="col-lg-12 col-md-6">
                         <div class="checkout__input">
                                        <p>রোগীর নাম</p>
                                        <input type="text">
                                    </div>
                            <div class="checkout__input">
                                <p>হাসপাতালের নাম </p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>ঠিকানা</p>
                                <input type="text" placeholder="সড়ক নং , উপজেলা, জেলা " class="checkout__input__add">
                             </div>
                             <div class="row">
                                <div class="col-lg-9">
                                    <div class="checkout__input">
                                        <p>মোবাইল নং</p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="checkout__input">
                                      <p>ব্লাড গ্রুপ </p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>রোগীর অতিরিক্ত বিবরণ</p>
                                <input type="text"
                                    placeholder="রোগীর অতিরিক্ত কিছু বিবরণ থাকলে এখানে লিখুন">
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
                            <h4>রিসেন্ট ব্লাড পোস্ট </h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                   <div class="blog__sidebar__recent__item__text">
                                        <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                               <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        
                                    </ul>
                                    <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                        quaerat </p>
                                    
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->










@endsection
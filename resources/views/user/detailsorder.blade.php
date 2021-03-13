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
	                        <h2> আপনার অর্ডার</h2>
	                        
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
  <a href="{{ route('user.orders') }}" class="list-group-item list-group-item-action active"><i class="fa fa-truck" aria-hidden="true"></i> অর্ডার তথ্য বিবরণ</a>
  
  <a href="{{ route('user.consultant') }}" class="list-group-item list-group-item-action"><i class="fa fa-user-md" aria-hidden="true"></i> স্বাস্থ্য পরামর্শদাতা</a>
  
  <a href="{{ route('blood.page') }}" class="list-group-item list-group-item-action"><i class="fa fa-hospital-o" aria-hidden="true"></i> ব্লাড অনুসন্ধান</a>
 {{--  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a> --}}
</div>
  </div>


                <div class="col-lg-9 col-md-7">
                 <div class="shoping__cart__table">
                       <table id="datatable" class="table table-hover">

                                                      <thead>
                                                          <tr> 
                                                              <th>Order#</th>
                                                              <th>Order Date</th>
                                                              <th>Invoice No.</th>
                                                              <th>Payment Type</th>
                                                              <th>Sub Total</th>
                                                              <th>Total</th>
                                                              <th>Status</th>
                                                           </tr>
                                                      </thead>

                                               
                                                      <tbody>

                                                          @php
                                                              $i =1;
                                                          @endphp
                                                          @foreach($orders as $order)
                                                          <tr>
                                                              <td>{{ $i ++ }}</td>
                                                              <td> {{ $order-> created_at }}</td>
                                                              <td>{{ $order-> invoice_no }}</td>

                                                              <td>{{ $order-> payment_type }}</td>


                                                              <td>Tk. {{ $order-> subtotal }}</td>
                                                              <td>Tk. {{ $order-> total }}</td>

                                                              <td>
                                                                  @if($order-> status == 1)
                                                                  <span class="badge badge-danger">Pending</span>
                                                                  @else
                                                                  <span class="badge badge-success">Success</span>
                                                                  @endif

                                                              </td>

                                                              <td>
                                                                  <a href="{{ url('user/orders/view/'.$order-> id) }}"class="btn btn-primary"><i class="fa fa-eye"></i> View</a>
                                                              </td>
                                                          </tr>
                                                          @endforeach
                                                      </tbody>


                                                  </table>
                                                  
                    </div>

                    
                </div>


                


            </div>
        </div>
    </section>
    <!-- Product Section End -->










@endsection
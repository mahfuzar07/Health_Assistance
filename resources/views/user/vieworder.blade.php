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
	                        <h2>আপনার অর্ডার বিবরণ</h2>
	                        
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

</div>
      </div>

                <div class="col-lg-9 col-md-7">

                  <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 
                                                {{-- class="text-right"><img src="images/logo_dark.png" alt="velonic" --}}>Aim 2be Well . com</h4>

                                                
                                            </div>
                                            
                                            <div class="pull-right">
                                                <h4>Invoice No # 
                                                    <strong> {{ $order-> invoice_no }}</strong>
                                                </h4>
                                            </div>
                                           
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>{{ $shipping->full_name }}</strong><br>
                                                      <strong>{{ $shipping->email }}</strong><br>
                                                      <i class="fa fa-phone"> {{ $shipping->phone }}</i><br>
                                                      </address>
                                                      <address>
                                                      <strong>Address</strong><br>
                                                      <strong>House/Road: </strong >{{ $shipping->address }}<br>
                                                      <strong>City: </strong >{{ $shipping->city }}<br>
                                                      <strong>State: </strong >{{ $shipping->state }}, {{ $shipping->post_code }}
                                                     </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong > {{ $order-> created_at }}</p>
                                                     <p><strong>Payment Type: </strong > {{ $order-> payment_type }}</p>

                                                    
                                                    <p class="m-t-10"><strong>Order Status: </strong> 
                                                        @if($order-> status == 1)
                                                                <span class="badge badge-danger">Pending</span>
                                                                @else
                                                                <span class="badge badge-success">Success</span>
                                                                @endif</p>
                                                    </p>

                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>Serial No #</th>
                                                            <th>Product code</th>
                                                            <th>Item</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Price</th>
                                                            <th>Total Price</th>
                                                            
                                                        </tr></thead>
                                                        <tbody>
                                                            @php
                                                            $i =1;
                                                        @endphp
                                                            @foreach($orderItems as $row)
                                                            
                                                            <tr>
                                                                <td>{{ $i ++ }}</td>
                                                                <td>{{ $row->product->product_code}}</td>
                                                                <td>{{ $row->product_name}}</td>
                                                                <td>{{ $row->product_qty}}</td>
                                                                <td>{{ $row->product->price}}</td>
                                                                <td>{{ $row->product->price * $row->product_qty }}</td>
                                                               
                                                            </tr>
                                                            @endforeach 
                                                             
                                                        </tbody>
                                                    </table>


                                                </div>

                                            </div>

                                        </div>
                                         <hr>

                                      

                                         <div class="pull-right m-t-30">
                                                <p class="text-right m-t-30"><b>Sub-total: </b>{{ $order->subtotal }}</p>
                                                <p class="text-right"><b>Discount: </b>
                                                    @if($order-> discount == NULL)
                                                                <span class="badge badge-danger">No Discount</span>
                                                                @else
                                                                <span class="badge badge-success">{{ $order-> discount }} %</span>
                                                                @endif</p>
                                                <hr>

                                                <h4 class="text-right m-t-30"><b>Total: </b>{{ $order->total }}</h4>
                                             </div>
                                            
                                        
                                    

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <div class="pull-left m-t-30">
                                                    
                                                    <address>
                                                      <strong>Order Special Note #</strong><br>
                                                      {{ $shipping->order_note }}
                                                     
                                                     </address>
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
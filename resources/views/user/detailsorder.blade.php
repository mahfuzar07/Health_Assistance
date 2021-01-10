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
                                  <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Create Question</a>

                                </li>
                              </ul>
                        </div>
                        <hr>
                     </div>
                </div>


                <div class="col-lg-9 col-md-7">
                 <div class="shoping__cart__table">
                       <table id="datatable" class="table table-hover">

                                                      <thead>
                                                          <tr> 
                                                              <th>Order</th>
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
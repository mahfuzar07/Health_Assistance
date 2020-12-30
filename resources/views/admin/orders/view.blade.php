@extends('admin.admin_layouts')
@section('orders') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Orders Details </h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="{{ url('admin/home') }}">Admin</a></li>
                                    <li class="active">Orders-View</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
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
                                                      {{ $shipping->address }}<br>
                                                      {{ $shipping->city }}<br>
                                                      {{ $shipping->state }}, {{ $shipping->post_code }}<br>
                                                      

                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong > {{ $order-> created_at }}</p>
                                                     <p class="m-t-10"><strong>Order ID: </strong> {{ $shipping->order_id }}</p>
                                                     <p><strong>Payment Type: </strong > {{ $order-> payment_type }}</p>

                                                    
                                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>

                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>S No.</th>
                                                            <th>Product Id</th>
                                                            <th>Product code</th>
                                                            <th>Item</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Price</th>
                                                            
                                                        </tr></thead>
                                                        <tbody>
                                                        	@php
                                                            $i =1;
                                                        @endphp
                                                        	@foreach($orderItems as $row)
                                                        	
                                                            <tr>
                                                                <td>{{ $i ++ }}</td>
                                                                <td>{{ $row->product_id}}</td>
                                                                <td>{{ $row->product->product_code}}</td>
                                                                <td>{{ $row->product_name}}</td>
                                                                <td>{{ $row->product_qty}}</td>
                                                                <td>{{ $row->product->price}}</td>
                                                               
                                                            </tr>
                                                            @endforeach 
                                                             
                                                        </tbody>
                                                    </table>


                                                </div>

                                            </div>

                                        </div>
                                         <hr>
                                         <div class="row" style="border-radius: 5px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Sub-total: </b>{{ $order->subtotal }}</p>
                                                <p class="text-right"><b>Discount: </b>
                                                	@if($order-> discount == NULL)
                                                                <span class="badge badge-danger">No Discount</span>
                                                                @else
                                                                <span class="badge badge-success">{{ $order-> discount }} %</span>
                                                                @endif</p>


                                                                

                                                          
                                                <hr>
                                                
                                                <h3 class="text-right ">Total: {{ $order->total }}</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    
                                                    <address>
                                                      <strong>Order Special Note #</strong><br>
                                                      {{ $shipping->order_note }}
                                                     
                                                     </address>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                            </div>
                                        </div>
                                       

                                    </div>
                                </div>

                            </div>

                        </div>

                        


                        

                               
                </div> <!-- content -->

                

            </div>
        </div>


@endsection()


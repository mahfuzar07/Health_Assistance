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
                                <h4 class="pull-left page-title">Orders Details Table</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="{{ url('admin/home') }}">Admin</a></li>
                                    <li class="active">Orders</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr> 
                                                            <th>SL.No</th>
                                                            <th>Order Date</th>
                                                            <th>Invoice No</th>
                                                            <th>Payment Type</th>
                                                            <th>Sub Total</th>
                                                            <th>Discount</th>
                                                            <th>Total</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($orders as $order)
                                                        <tr>
                                                            <td>{{ $i ++ }}</td>
                                                            <td>{{ $order-> created_at }}</td>
                                                            <td>{{ $order-> invoice_no }}</td>

                                                            <td>{{ $order-> payment_type }}</td>


                                                            <td>Tk. {{ $order-> subtotal }}</td>
                                                            


                                                            <td>
                                                                @if($order-> discount == NULL)
                                                                <span class="badge badge-danger">No Discount</span>
                                                                @else
                                                                <span class="badge badge-success">{{ $order-> discount }} %</span>
                                                                @endif

                                                            </td>
                                                            
                                                            <td>Tk. {{ $order-> total }}</td>

                                                            <td>
                                                                @if($order-> status == 1)
                                                                <span class="badge badge-danger">Pending</span>
                                                                @else
                                                                <span class="badge badge-success">Success</span>
                                                                @endif

                                                            </td>

                                                            <td>
                                                                <a href="{{ url('admin/orders/view/'.$order-> id) }}"class="btn btn-primary"><i class="fa fa-eye"></i> View</a>

                                                                @if($order-> status == 1)
                                                                <a href="{{ url('admin/orders/success/'.$order-> id) }}"class="btn btn-success"><i class="fa fa-toggle-off">
                                                                    
                                                                </i>  Success</a>
                                                                @else
                                                                <a href="{{ url('admin/orders/pending/'.$order-> id) }}"class="btn btn-danger"><i class="fa fa-toggle-on">
                                                                    
                                                                </i> </a>
                                                                @endif

                                                            </td>

                                                            
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>


                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         <!-- End Row -->

                        
                       


                    </div> <!-- container -->


                        

                               
                </div> <!-- content -->

                

            </div>
        </div>


@endsection()


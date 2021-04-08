@extends('admin.admin_layouts')
@section('coupon') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Coupon Table</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li class="active">Coupon</li>
                                </ol>
                            </div>
                        </div>


                         <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus-square"></i> ADD COUPON
</button>
<hr>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Coupon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('store.coupon') }}" method="POST">
         @csrf
            <div class="form-group">
                <input type="text" name="coupon_code" class="form-control"  placeholder="Enter coupon code">

                @error('coupon_code')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="discount" class="form-control"  placeholder="Discount amount">
                @error('discount')
                <strong class="text-danger">{{ $message }}</strong>
                 @enderror
            </div>
            <button type="submit" class="btn btn-success  waves-effect waves-light m-l-10 pull-right">ADD</button>
        </form>
        
      </div>
      
    </div>
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
                                                        	<th>Serial No.</th>
                                                            <th>Coupon</th>
                                                            <th>Discount</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($coupons as $coupon)
                                                        <tr>
                                                        	<td>{{ $i ++ }}</td>
                                                            <td>{{ $coupon-> coupon_code}}</td>
                                                            <td>{{ $coupon-> discount}} %</td>
                                                            <td>
                                                                @if($coupon-> status == 1)
                                                                <span class="label label-success">Active</span>
                                                                @else
                                                                <span class="label label-danger">Inactive</span>
                                                                @endif

                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/coupon/edit/'.$coupon-> id) }}"class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                <a href="{{ url('admin/coupon/delete/'.$coupon-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i></a>
                                                                
                                                                @if($coupon-> status == 1)
                                                                <a href="{{ url('admin/coupon/inactive/'.$coupon-> id) }}" class="btn btn-danger"><i class="fa fa-toggle-on"></i> </a>
                                                                @else
                                                                <a href="{{ url('admin/coupon/active/'.$coupon-> id) }}"class="btn btn-success"><i class="fa fa-toggle-off">
                                                                    
                                                                </i> Active</a>
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


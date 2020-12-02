@extends('admin.admin_layouts')

@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Coupon</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Coupon</a></li>
                                    <li class="active">Edit</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Update Coupon</h3></div>
                                    <div class="panel-body">
                                    
                                        <form action="{{ route('update.coupon') }}" method="POST">
                                            @csrf

                                            <input type="hidden" value="{{ $coupon->id }}" type="text" name="id" class="form-control">
                                         



                                            <div class="form-group">
                                                <label class="sr-only">Coupon Code</label>
                                                <input value="{{ $coupon->coupon_code }}" type="text" name="coupon_code" class="form-control">
                                            </div>
                                           
                                            <button  type="submit" class="btn btn-success waves-effect waves-light m-l-10">Update</button>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                             
                  
                        
                       


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                

            </div>
        </div>


@endsection()


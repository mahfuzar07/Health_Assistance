@extends('admin.admin_layouts')
@section('productmn') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Users Table</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">product</a></li>
                                    <li class="active">Manage Product</li>
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
                                                            <th>Product Image</th>
                                                            <th>Category</th>
                                                            <th>Product Name</th>
                                                            
                                                            <th>product Code</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            
                                                            <th>Status</th>
                                                            
                                                            
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($products as $row)
                                                        <tr>
                                                            <td>{{ $i ++ }}</td>
                                                            <td>
                                 <img src="{{ asset($row->image_1) }}" width="50px" height="50px" alt="">

                                                            </td>

                                                            <td>{{ $row-> join-> category_name}}</td>

                                                            <td>{{ $row-> product_name }}</td>

                                                            <td>{{ $row-> product_code }}</td>
                                                            <td>{{ $row-> product_quantity }}</td>
                                                            <td>{{ $row-> price }}</td>
                                                            <td>
                                                                @if($row-> status == 1)
                                                                <span class="badge badge-success">Active</span>
                                                                @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                                @endif

                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/product/edit/'.$row-> id) }}"class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                                                <a href="{{ url('admin/product/delete/'.$row-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i></a>
                                                                
                                                                @if($row-> status == 1)
                                                                <a href="{{ url('admin/product/inactive/'.$row-> id) }}"class="btn btn-danger"><i class="fa fa-toggle-on">
                                                                    
                                                                </i> </a>
                                                                @else
                                                                <a href="{{ url('admin/product/active/'.$row-> id) }}"class="btn btn-success"><i class="fa fa-toggle-off">
                                                                    
                                                                </i>  Active</a>
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


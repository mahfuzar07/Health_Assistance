@extends('admin.admin_layouts')
@section('product2') active @endsection
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
                                                            <th>Category</th>
                                                            <th>Product Name</th>
                                                            <th>product Slug</th>
                                                            <th>product Code</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Short Description</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Image-1</th>
                                                            <th>Images-2</th>
                                                            <th>Images-3</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    {{-- <tbody>
                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($users as $user)
                                                        <tr>
                                                        	<td>{{ $i ++ }}</td>
                                                            <td>{{ $user-> name }}</td>
                                                            <td>{{ $user-> email}}</td>
                                                            <td>
                                                                @if($user-> status )
                                                                <span class="badge badge-success">Active</span>
                                                                @else
                                                                <span class="badge badge-success">Active</span>
                                                                @endif

                                                            </td>

                                                            <td>
                                                                
                                                                <a href="{{ url('admin/user/delete/'.$user-> id) }}"class="btn btn-danger"> Delete</a>
                                                            </td>

                                                            @endforeach
                                                            
                                                        </tr>
                                                    </tbody> --}}


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


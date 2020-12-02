@extends('admin.admin_layouts')
@section('all user') active @endsection
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
                                    <li class="active">All Users</li>
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
                                                        	<th>Serial No.</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            {{-- <th>Status</th> --}}
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($users as $user)
                                                        <tr>
                                                        	<td>{{ $i ++ }}</td>
                                                            <td>{{ $user-> name }}</td>
                                                            <td>{{ $user-> email}}</td>
                                                            {{-- <td>
                                                                @if($user-> status==1 )
                                                                <span class="badge badge-success">Active</span>
                                                                @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                                @endif

                                                            </td> --}}

                                                            <td>
                                                                
                                                                <a href="{{ url('admin/user/delete/'.$user-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"> Delete</a>

                                                                {{-- @if($user-> status == 1)
                                                                <a href="{{ url('admin/product/inactive/'.$user-> id) }}"class="btn btn-danger">Inactive</a>
                                                                @else
                                                                <a href="{{ url('admin/product/active/'.$user-> id) }}"class="btn btn-success">Active</a>
                                                                @endif --}}
                                                            </td>

                                                            @endforeach
                                                            
                                                        </tr>
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


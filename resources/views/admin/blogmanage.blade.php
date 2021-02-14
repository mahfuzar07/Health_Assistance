@extends('admin.admin_layouts')
@section('blog') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Product Table</h4>
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
                                                            <th>Author Name</th>
                                                            <th>Post Category</th>
                                                            {{-- <th>View Post</th> --}}
                                                            <th>Post Title</th>
                                                            <th>Post Create</th>
                                                            <th>Post Update</th>
                                                            
                                                            <th>Status</th>
                                                            
                                                            
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($blogs as $row)
                                                        <tr>
                                                            <td>{{ $i ++ }}</td>
                                                            <td>{{ $row-> joincon-> name}}</td>
                                                            <td>{{ $row-> join-> category_name}}</td>

                                                           {{--  <td>{{ $row-> view }}</td> --}}
                                                            <td>{{ $row-> post_title }}</td>

                                                            <td>{{ $row-> created_at }}</td>
                                                            <td>{{ $row-> updated_at }}</td>
                                                            
                                                            <td>
                                                                @if($row-> status == 1)
                                                                <span class="badge badge-danger">Pending</span>
                                                                @else
                                                                <span class="badge badge-success">Published</span>
                                                                @endif

                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/post/view/'.$row-> id) }}"class="btn btn-info"><i class="fa fa-eye"></i></a>

                                                                <a href="{{ url('admin/post/delete/'.$row-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i></a>
                                                                
                                                              {{--   @if($row-> status == 1)
                                                                <a href="{{ url('admin/post/inactive/'.$row-> id) }}"class="btn btn-success"><i class="fa fa-toggle-off">
                                                                    
                                                                </i>Published </a>
                                                                @else
                                                                <a href="{{ url('admin/post/active/'.$row-> id) }}"class="btn btn-danger"><i class="fa fa-toggle-on">
                                                                    
                                                                </i></a>
                                                                @endif --}}



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


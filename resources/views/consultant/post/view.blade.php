@extends('consultant.consultant_layouts')
@section('blog post') active @endsection
@section('consultant_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Post Table</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Consultant</a></li>
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
                                                            <th>Post Image</th>
                                                            <th>Post Category</th>
                                                            <th>Total views</th>
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
                                                            <td>
                                 <img src="{{ asset($row->image) }}" width="80px" height="50px" alt="">

                                                            </td>

                                                            <td>{{ $row-> join-> category_name}}</td>

                                                            <td>{{ $row-> view}}</td>
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
                                                                <a href="{{ url('consultant/post/edit/'.$row-> id) }}"class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                <a href="{{ url('consultant/post/delete/'.$row-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i></a>
                                                                
                                                        



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


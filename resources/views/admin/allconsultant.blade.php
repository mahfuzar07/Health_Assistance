@extends('admin.admin_layouts')
@section('All Consultant') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Consultant Table</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li class="active">All Consultant</li>
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
                                                            <th>Image</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone No</th>
                                                            <th>Profession</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($consultants as $row)
                                                        <tr>
                                                            <td>{{ $i ++ }}</td>
                                                            <td>
                                                                <a href=""><img src="{{asset('uploads/documents/consultant/'. $row-> avatar) }}" 
                                        style="height:60px;width:60px;" alt="user-img" class="img-circle"> </a>
                                                            </td>
                                                            <td>{{ $row-> name }} </td>
                                                            <td>{{ $row-> email }}</td>
                                                            <td>{{ $row-> phone_number }}</td>
                                                            <td>{{ $row-> profession }}</td>
                                                            <td>
                                                                @if($row-> status == 1)
                                                                <span class="badge badge-success">Active</span>
                                                                @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                                @endif
                                                            </td>
                                                            
                                                            

                                                            <td>
                                                                
                                                                <a href=""class="btn btn-primary"><i class="fa fa-eye"></i> View</a>

                                                                <a href=""class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i> Delete</a>
                                                                
                                                                @if($row-> status == 1)
                                                                <a href=""class="btn btn-danger"><i class="fa fa-toggle-on">
                                                                    
                                                                </i>  </a>
                                                                @else
                                                                <a href=""class="btn btn-success"><i class="fa fa-toggle-off">
                                                                    
                                                                </i>  Active</a>
                                                                @endif

                                                                
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


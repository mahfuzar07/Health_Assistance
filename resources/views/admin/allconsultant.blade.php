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
                                                        @foreach($consultants as $con)
                                                        <tr>
                                                            <td>{{ $i ++ }}</td>
                                                            <td>
                                                                <a href=""><img src="{{asset('uploads/documents/consultant/'. $con-> avatar) }}" 
                                        style="height:60px;width:60px;" alt="user-img" class="img-circle"> </a>
                                                            </td>
                                                            <td>{{ $con-> name }} </td>
                                                            <td>{{ $con-> email }}</td>
                                                            <td>{{ $con-> phone_number }}</td>
                                                            <td>{{ $con-> profession }}</td>
                                                            <td>
                                                                @if($con-> status == 1)
                                                                <span class="badge badge-danger"> Pending</span>
                                                                @else
                                                                <span class="badge badge-success">Active</span>
                                                                @endif
                                                            </td>
                                                            
                                                            

                                                            <td>
                                                                
                                                                <a href="{{ url('admin/consultant/view/'.$con-> id) }}"class="btn btn-primary"><i class="fa fa-eye"></i></a>

                                                                <a href="{{ url('admin/consultant/delete/'.$con-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i></a>
                                                                
                                                                @if($con-> status == 1)
                                                                <a href="{{ url('admin/consultant/active/'.$con-> id) }}"class="btn btn-success"><i class="fa fa-toggle-off">
                                                                    
                                                                </i> Active</a>
                                                                @else
                                                                <a href="{{ url('admin/consultant/inactive/'.$con-> id) }}"class="btn btn-danger"><i class="fa fa-toggle-on">
                                                                    
                                                                </i></a>
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


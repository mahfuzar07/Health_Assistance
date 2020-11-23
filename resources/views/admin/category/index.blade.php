@extends('admin.admin_layouts')
@section('category') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Categories Table</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li class="active">Categories</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add Categories</h3></div>
                                    <div class="panel-body">
                                    
                                        <form action="{{ route('store.category') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label class="sr-only">Category Name</label>
                                                <input type="text" name="category_name" class="form-control"  placeholder="Enter category name">

                                                @error('category_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                            </div>
                                           
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-l-10">ADD</button>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                             
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
                                                        	<th>Category Id</th>
                                                            <th>Category Name</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($categories as $category)
                                                        <tr>
                                                        	<td>{{ $i ++ }}</td>
                                                            <td>{{ $category-> category_name }}</td>
                                                            <td>
                                                                @if($category-> status == 1)
                                                                <span class="badge badge-success">Active</span>
                                                                @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                                @endif

                                                            </td>
                                                            <td>
                                                                <a href="{{ url('admin/categories/edit/'.$category-> id) }}"class="btn btn-primary"> Edit</a>

                                                                <a href="{{ url('admin/categories/delete/'.$category-> id) }}"class="btn btn-danger"> Delete</a>
                                                                
                                                                @if($category-> status == 1)
                                                                <a href="{{ url('admin/categories/inactive/'.$category-> id) }}"class="btn btn-danger">Inactive</a>
                                                                @else
                                                                <a href="{{ url('admin/categories/active/'.$category-> id) }}"class="btn btn-success">Active</a>
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


@extends('admin.admin_layouts')

@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Categories</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li class="active">Edit</li>
                                </ol>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Update Categories</h3></div>
                                    <div class="panel-body">
                                    
                                        <form action="{{ route('update.category') }}" method="POST">
                                            @csrf

                                            <input type="hidden" value="{{ $category->id }}" type="text" name="id" class="form-control">
                                         



                                            <div class="form-group">
                                                <label class="sr-only">Category Name</label>
                                                <input value="{{ $category->category_name }}" type="text" name="category_name" class="form-control">
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


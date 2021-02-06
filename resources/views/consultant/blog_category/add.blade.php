@extends('consultant.consultant_layouts')
@section('category') active @endsection
@section('consultant_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                       
                            @if(session('update'))
                <div class="alert alert-success alart-dismissible fade show" role="alert">
                  <strong>{{ (session('update')) }}</strong>

                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times</span>
                </button>
                </div>
                                    
                @endif
                      

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Blog Category Table</h4>
                                    <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li class="active">Categories</li>
                                </ol>
                            </div>
                        </div>


                        <!-- Button trigger modal -->
<button type="button" class="btn btn-info  " data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus-square"></i> ADD CATEGORY
</button>
<hr>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('store.category') }}" method="POST">
         @csrf
         <div class="form-group">
         <label class="sr-only">Category Name</label>
         <input type="text" name="category_name" class="form-control"  placeholder="Enter category name">

           @error('category_name')
           <strong class="text-danger">{{ $message }}</strong>
            @enderror
                </div>

            <div class="form-group">
         <label class="sr-only">Category Description</label>
         <input type="text" name="category_description" class="form-control"  placeholder="Enter category description">

           @error('category_description')
           <strong class="text-danger">{{ $message }}</strong>
            @enderror
                </div>
                                           
             <button type="submit" class="btn btn-success waves-effect waves-light m-l-10 pull-right"> ADD </button>
        </form>
        
      </div>
      
    </div>
  </div>
</div>




                       {{--  <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Add Categories</h3></div>
                                    <div class="panel-body">

                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                             
                        </div> --}}
                         
                         
                            

                       


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
                                                          <th>Create By</th>
                                                            <th>Category Name</th>
                                                            <th>Category Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>

                                                        @php
                                                            $i =1;
                                                        @endphp
                                                        @foreach($blogcategories as $category)
                                                        <tr>
                                                        	<td>{{ $i ++ }}</td>
                                                          <td>{{ $category->join-> name }}</td>
                                                            <td>{{ $category-> category_name }}</td>
                                                           
                                                            <td>{{ $category-> category_description }}</td>
                                                            <td>
                                                                @if($category-> status == 1)
                                                                <span class="badge badge-success">Active</span>
                                                                @else
                                                                <span class="badge badge-danger">Inactive</span>
                                                                @endif

                                                            </td>
                                                            <td>
                                                                <a href="{{ url('consultant/categories/edit/'.$category-> id) }}"class="btn btn-info"><i class="fa fa-edit"></i></a>

                                                                <a href="{{ url('consultant/categories/delete/'.$category-> id) }}"class="btn btn-danger" onclick="return confirm('Are you sure to Delete This Item')"><i class="fa fa-trash"></i></a>
                                                               
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


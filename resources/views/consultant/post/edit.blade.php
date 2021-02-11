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
                                <h4 class="pull-left page-title">ADD POST</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="">Consultant</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li class="active">Add post</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    {{-- <div class="panel-heading"><h3 class="panel-title">Add Product</h3></div> --}}
                                    <div class="panel-body">
                                       
                                        <form class="form-horizontal"  action="{{ route('update-post') }}" method="POST" enctype="multipart/form-data"  > 
                                           
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $blogs->id }}">




                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Blog Category</label>
                                                <div class="col-sm-3">
                                                    <select name="blogcategory_id" class="form-control">
                                                        <option>Choose Category</option>

                                                         @foreach ($blogcategories as $category)

                                    <option  value="{{ $category-> id }}" {{ $category-> id == $blogs-> blogcategory_id ? "selected":"" }}>{{ $category-> category_name }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                    @error('blogcategory_id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                    
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="post_title" placeholder="Post Title" class="form-control" value="{{ $blogs-> post_title }}">
                                                    @error('post_title')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                   
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Short Description</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="short" placeholder="Post Title" class="form-control" value="{{ $blogs-> short }}">
                                                    @error('short')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                   
                                                </div>
                                            </div>
                                            
                                           <div class="form-group">
                                                <label class="col-md-2 control-label">Post Body</label>
                                                <div class="col-md-10">
                                                    <textarea name="post_body" placeholder="Write Product Long Description...." class="summernote" 
                                                    >{{ $blogs-> post_body }}</textarea>

                                                    @error('post_body')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-2 control-label"><h3>Images</h3></label>
                                                 </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Set Image</label>
                                                <div class="col-md-3">
                                                    <input name="image" type="file"  class="form-control" value="">

                                                     @error('image')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>


                                                
                                               </div>


                                               


                                              


                                               <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                
                                                    <button type="submit"  class="btn btn-success waves-effect waves-light m-l-10  col-md-5">   Update Post </button>
                                               
                                                
                                               </div>


                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->


                        
                        
                               
                </div> <!-- content -->

                

            </div>
        </div>


@endsection()


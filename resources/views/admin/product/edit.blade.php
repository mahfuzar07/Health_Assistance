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
                                <h4 class="pull-left page-title">Edit Product</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li class="active">Edit Product</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    {{-- <div class="panel-heading"><h3 class="panel-title">Add Product</h3></div> --}}
                                    <div class="panel-body">
                                       
                                        <form class="form-horizontal"  action="{{ route('update-product') }}" method="POST" enctype="multipart/form-data"  > 
                                           
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">




                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-3">
                                                    <select name="category_id" class="form-control">
                                                        <option>Choose Category</option>

                                                         @foreach ($categories as $category)

                                    <option  value="{{ $category-> id }}" {{ $category-> id == $product-> category_id ? "selected":"" }}>{{ $category-> category_name }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                    @error('category_id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                    
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Name</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="product_name" placeholder="Product Name" class="form-control" value="{{ $product->product_name }}">
                                                    @error('product_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                   
                                                </div>
                                            </div>
                                            
                                            

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Code</label>
                                                <div class="col-md-3">
                                                    <input type="text"name="product_code" placeholder="Product Code" class="form-control" value="{{ $product->product_code }}">
                                                    @error('product_code')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Quantity</label>
                                                <div class="col-md-3">
                                                    <input type="text"name="product_quantity" placeholder="Product Quantity" class="form-control" value="{{ $product->product_quantity }}">

                                                    @error('product_quantity')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Price</label>
                                                <div class="col-md-2">
                                                    <input type="text"name="price" placeholder="Product Price" class="form-control" value="{{ $product->price }}">
                                                    @error('price')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                <label class="col-md-0 control-label">Tk</label>
                                            </div>

                                            
                                           
                                                                                
                                                                               
                                                                                                             
                                                <div class="form-group">
                                                <label class="col-md-2 control-label">Short Description</label>
                                                <div class="col-md-8">
                                                    <textarea name="short_description"placeholder="Write Product Short Description...." class="summernote" value="" >{{ $product->short_description }}</textarea>

                                                    @error('short_description')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea name="description" placeholder="Write Product Long Description...." class="summernote">{{ $product->description }}</textarea>

                                                    @error('description')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"><h3>Images</h3></label>
                                                 </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image</label>
                                                <div class="col-md-3">
                                                     
                                                    <input name="image_1" type="file"  class="form-control" value="">

                                                   <img src="{{ asset($product-> image_1) }}" alt="" height="120px;" width="120px;">

                                                     @error('image_1')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>


                                                
                                               </div>

                                               <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image</label>
                                                <div class="col-md-3">

                                                   
                                                    <input name="image_2" type="file" class="form-control" value="">

                                                     <img src="{{ asset($product-> image_2) }}" alt="" height="120px;" width="120px;">

                                                     @error('image_2')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                     
                                                </div>
                                                
                                               </div>


                                               <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image</label>
                                                <div class="col-md-3">
                                                    
                                                    <input name="image_3" type="file" class="form-control" value="">
                                                    <img src="{{ asset($product-> image_3) }}" alt="" height="120px;" width="120px;">
                                                    
                                                     @error('image_3')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                            
                                                </div>
                                                
                                               </div>

                                                <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                
                                                    <button type="submit"  class="btn btn-success waves-effect waves-light m-l-10  col-md-5">   Update Product  </button>
                                               
                                                
                                               </div>


                                               


                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>


                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->


                        
                        
                               
                </div> <!-- content -->

                

            </div>
        </div>


@endsection()


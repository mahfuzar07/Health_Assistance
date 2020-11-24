@extends('admin.admin_layouts')
@section('product1') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Add Product</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li class="active">Add Products</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    {{-- <div class="panel-heading"><h3 class="panel-title">Add Product</h3></div> --}}
                                    <div class="panel-body">
                                       
                                        <form class="form-horizontal"  action="{{ route('store-product') }}" method="POST" enctype="multipart/form-data"  > 
                                           
                                            @csrf




                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-3">
                                                    <select name="category_id" class="form-control">
                                                        <option>Choose Category</option>

                                                         @foreach ($categories as $category)

                                    <option  value="{{ $category-> id }}">{{ $category-> category_name }}</option>
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
                                                    <input type="text" name="product_name" placeholder="Product Name" class="form-control" value="">
                                                    @error('product_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                   
                                                </div>
                                            </div>
                                            
                                            {{-- <div class="form-group">
                                                <label class="col-md-2 control-label">Slug</label>
                                                <div class="col-md-3">
                                                    <input type="text" placeholder="Product Slug" class="form-control" value="">

                                                    @error('product_slug')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div> --}}

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Code</label>
                                                <div class="col-md-3">
                                                    <input type="text"name="product_code" placeholder="Product Code" class="form-control" value="">
                                                    @error('product_code')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Quantity</label>
                                                <div class="col-md-3">
                                                    <input type="text"name="product_quantity" placeholder="Product Quantity" class="form-control" value="">

                                                    @error('product_quantity')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Price</label>
                                                <div class="col-md-2">
                                                    <input type="text"name="price" placeholder="Product Price" class="form-control" value="">
                                                    @error('price')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                                <label class="col-md-0 control-label">Tk</label>
                                            </div>

                                            
                                           
                                                                                
                                                                               
                                                                                                             
                                                <div class="form-group">
                                                <label class="col-md-2 control-label">Short Description</label>
                                                <div class="col-md-8">
                                                    <textarea name="short_description"placeholder="Write Product Short Description...." class="summernote"></textarea>

                                                    @error('short_description')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea name="description" placeholder="Write Product Long Description...." class="summernote"></textarea>

                                                    @error('description')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image-1</label>
                                                <div class="col-md-3">
                                                    <input name="image_1" type="file"  class="form-control" value="">

                                                     @error('image_1')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>


                                                
                                               </div>


                                               <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image-2</label>
                                                <div class="col-md-3">
                                                    <input name="image_2" type="file" class="form-control" value="">
                                                     @error('image_2')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                                     
                                                </div>
                                                
                                               </div>


                                               <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image-3</label>
                                                <div class="col-md-3">
                                                    <input name="image_3" type="file" class="form-control" value="">
                                                     @error('image_3')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror

                                            
                                                </div>
                                                
                                               </div>


                                               <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                
                                                    <button type="submit"  class="btn btn-success waves-effect waves-light m-l-10  col-md-5">   Add Product  </button>
                                               
                                                
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


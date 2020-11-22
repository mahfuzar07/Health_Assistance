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
                                       
                                        <form class="form-horizontal" role="form" action="" method="POST"  > 
                                            @csrf




                                        <div class="form-group">
                                                <label class="col-sm-2 control-label">Select Category</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Name</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Slug</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Code</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Quantity</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product price</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" value="">
                                                </div>
                                                <label class="col-md-0 control-label">Tk</label>
                                            </div>

                                            
                                           
                                                                                
                                                                               
                                                                                                             
                                                <div class="form-group">
                                                <label class="col-md-2 control-label">Short Description</label>
                                                <div class="col-md-8">
                                                    <div class="summernote"></div>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Description</label>
                                                <div class="col-md-10">
                                                    <div class="summernote"></div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Product Image-1</label>
                                                <div class="col-md-3">
                                                    <input type="file" class="form-control" value="">
                                                </div>
                                                
                                               </div>


                                               <div class="form-group">
                                                <label class="col-md-2 control-label">Product Images-2</label>
                                                <div class="col-md-3">
                                                    <input type="file" class="form-control" value="">
                                                </div>
                                                
                                               </div>


                                               <div class="form-group">
                                                <label class="col-md-2 control-label">Product Images-3</label>
                                                <div class="col-md-3">
                                                    <input type="file" class="form-control" value="">
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


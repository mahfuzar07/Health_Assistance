@extends('admin.admin_layouts')
@section('blog') active @endsection
@section('admin_content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    
                

                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('images/big/bg.jpg')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="{{asset('uploads/documents/consultant/'.   
                                        $blogs->joincon-> avatar) }}"class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white">Author: {{ $blogs-> joincon-> name }}</h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                   
                     <div class="row user-tabs">
                        <div class="col-lg-12 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">Post Details</span> 
                                </a> 
                            </li> 
                            
                        <div class="indicator"></div></ul> 
                        </div>
                        
                    </div>
                        
                    
                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <div class="tab-content profile-tab-content"> 
                            <div class="tab-pane active" id="home-2"> 
                                <div class="row">
                                    <div class="col-lg-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Post Details</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $blogs-> joincon-> email }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $blogs-> joincon-> phone_number}}</p>
                                                </div>
                                                 <div class="about-info-p">
                                                    <strong>Post Status</strong>
                                                    <br/>
                                                    <p>
                                                    @if($blogs-> status == 1)
                                                        <span class="badge badge-danger">Pending</span>
                                                         @else
                                                        <span class="badge badge-success">Published</span>
                                                        @endif</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Post Category</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $blogs->join-> category_name }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Post Create </strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $blogs-> created_at }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Post Updated</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ $blogs-> updated_at }}</p>
                                                </div>
                                               
                                                
                                            </div> 
                                        </div>
                                        
                                    </div>


                                    <div class="col-lg-8 ">
                                       <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Post</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="text-center">
                                                    <img class="thumb-lg  img-thumbnail" alt="profile-image" src="{{asset($blogs-> image )}}"
                                        style="height:200px;width:300px; margin-bottom:20px;">
                                                </div>
                                              
                                                
                                      
                                        <p><strong>TITLE: {{ $blogs-> post_title }}</strong></p>
                                        

                                                <p>{{ $blogs-> short }}</p>

                                                <p>{!! $blogs-> post_body !!}</p>

                                            </div> 

                                        </div> 
                                     </div> 
                                        

                                        

                                    </div>

                                </div>
                            </div> 

                    </div> 
                    </div>

                    </div>
                </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    
                </footer>

            </div>



@endsection()


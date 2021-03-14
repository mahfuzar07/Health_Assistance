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
                                <h4 class="pull-left page-title">Consultant Information Details</h4>
                                <ol class="breadcrumb pull-right">
                                    
                                    <li><a href="#">Admin</a></li>
                                    <li class="active">All Consultant</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11">
                                                
                            <div class="pull-left m-t-30">
                            <address>
                            <p><strong>Name: </strong > {{ $consultants-> name }}</p>

                            <p><strong>Email: </strong > {{ $consultants-> email }}</p>

                            <p><strong>Phone No: </strong > {{ $consultants-> phone_number }}</p>

                            <p><strong>Profession: </strong > {{ $consultants-> profession }}</p>
                            <p><strong>Specialist: </strong > {{ $consultants-> specialist }}</p>

                            <p><strong>Institute: </strong > {{ $consultants-> institute }}</p>

                            <p><strong>NID Number: </strong > {{ $consultants-> idn }}</p>

                            <p><strong>Reg (BMDC): </strong > {{ $consultants-> reg }}</p>

                            <p><strong>Join Date: </strong > {{ $consultants-> created_at->format('j F Y') }}</p>

                            <p><strong>Address: </strong > {{ $consultants-> address }}</p>

                            <p><strong>Activity Status: </strong > 
                            @if($consultants-> status == 1)
                                <span class="badge badge-danger"> Pending</span>
                                 @else
                                 <span class="badge badge-success ">Active</span>
                                @endif</p>



                        </address>
                    </div>
                    <div class="pull-right m-t-30">
                        <img src="{{asset('uploads/documents/consultant/'. $consultants-> avatar) }}" 
                          style="height:160px;width:160px;" alt="user-img" {{-- class="img-circle" --}}>

                        <h4><strong>Activity Status: </strong >

                        @if($consultants-> status == 1)
                        <span class="badge badge-danger"> Pending</span>
                        @else
                        <span class="badge badge-success ">Active</span>
                        @endif
                        </h4>

              </div>
                   </div>
                 </div>

                        
                       


    </div> <!-- container -->
                               
    </div> <!-- content -->

                

    </div>
</div>


@endsection()


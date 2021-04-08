@extends('consultant.consultant_layouts')
@section('Dashboard') active @endsection

@section('consultant_content')

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
                                        Auth::user()->avatar) }}"class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white">{{ Auth::user()->name }} </h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                                                                      
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">About Me</span>
                                </a>
                            </li>
                           {{--  <li class="tab">
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs">Activities</span>
                                </a>
                            </li> --}}

                            <li class="tab" >
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">Settings</span>
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
                                    <div class="col-md-3">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Personal Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> name }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> email }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> phone_number }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Profession</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> profession }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Specialist</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> specialist}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Institute</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> institute }}</p>
                                                </div>

                                                <div class="about-info-p">
                                                    <strong>Identification Number</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> idn }}</p>
                                                </div><div class="about-info-p">
                                                    <strong>Registration Number (BMDC)</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> reg }}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Joinning Date</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> created_at->format(' j F Y') }}</p>
                                                </div>

                                                <div class="about-info-p m-b-0">
                                                    <strong>Address</strong>
                                                    <br/>
                                                    <p class="text-muted">{{ Auth::user()-> address }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->
                                    </div>


                                    <div class="col-md-9">
                                        <!-- Personal-Information -->
                                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="fa fa-question"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{ $messages }}</span>
                                        Total Question
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="fa fa-file-text"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{ $blogs->count() }}</span>
                                        Total Post
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="fa fa-user"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{ $users }}</span>
                                        Total Users
                                    </div>
                                </div>
                            </div>
                           
                        </div> <!-- End row--><!-- Personal-Information -->


<div class="panel-body">
            <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                <th>S.No</th>
                <th>Post Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Status</th>
                </tr>
             </thead>
                    <tbody>
                        @php
                        $i =1;
                        @endphp
                        @foreach($blogs as $blogs)
                        <tr>
                        <td>{{ $i ++ }}</td>
                        <td>{{ $blogs-> post_title }}</td>
                        <td>{{ $blogs-> join-> category_name}}</td>
                        <td>{{ $blogs-> created_at->format('d-m-Y {{-- h:i A --}}') }} </td>
                        <td>
                           @if($blogs-> status == 1)
                            <span class="label label-warning">Pending</span>
                            @else
                            <span class="label label-success">Published</span>
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







                            <div class="tab-pane" id="settings-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Edit Profile</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="FullName">Full Name</label>
                                                <input type="text" value="{{ Auth::user()-> name }}" id="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" value="{{ Auth::user()-> email }}" id="Email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">phone</label>
                                                <input type="text" value="{{ Auth::user()-> phone_number }}" id="Username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Profession</label>
                                                <input type="text" value="{{ Auth::user()-> profession }}" id="Username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Institute</label>
                                                <input type="text" value="{{ Auth::user()-> institute }}" id="Username" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="Username">Address</label>
                                                <input type="text" value="{{ Auth::user()-> address }}" id="Username" class="form-control">
                                            </div>



                                            <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Update Profile</button>

                                             <button class="btn btn-danger waves-effect waves-light w-md pull-right" type="submit">Delete Your Account</button>

                                        </form>


                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2021 © Aim 2Be Well.
                </footer>

            </div>

@endsection

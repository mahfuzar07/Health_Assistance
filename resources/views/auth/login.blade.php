@extends('admin.admin_layouts')
@section('admin_content')





<div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h2 class="text-center m-t-10 text-white"> Aim 2Be Well </h2>
                    <h3 class="text-center m-t-10 text-white"> ইউজারের অংশে প্রবেশ করুন</h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                    
                    @csrf
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="email" class="col-md-8 col-form-label text-md-right">{{ __('ই-মেইল  ') }}</label>
                            <input class="form-control input-lg " id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="password" class="col-md-8 col-form-label text-md-right">{{ __('পাসওয়ার্ড') }}</label>
                            <input class="form-control input-lg" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br>

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup">
                                    মনে রাখুন
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">LogIn</button>
                        </div>


                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> আপনি কি পাসওয়ার্ড ভুলে গেছেন?</a>
                            @endif
                        </div>
                        <div class="col-sm-5 text-right">

                             @if (Route::has('register'))
                                <a  href="{{ route('register') }}"><i class="fa fa-user"></i> নতুন একাউন্ট খুলুন </a>
                            @endif

                            
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

@endsection

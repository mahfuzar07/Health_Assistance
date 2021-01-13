@extends('admin.admin_layouts')
@section('admin_content')



        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                     <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
                   
                </div> 


                <div class="panel-body">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full-Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="password" class="col-md-8 col-form-label text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="password-confirm" class="col-md-8 col-form-label text-md-right">{{ __('Confirm-password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><br>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox" checked="">
                                <label for="checkbox-signup">
                                    I accept <a href="#">Terms and Conditions</a>
                                </label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button><br><br>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('login') }}"><i class="fa fa-user"></i> Already have account?</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

@endsection

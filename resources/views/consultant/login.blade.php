<!DOCTYPE html>

<html>
     
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon_1.ico">

        <title>Aim 2Be Well</title>

        <!-- Base Css Files -->
        <link href="{{ asset('backend') }}/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('backend') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{ asset('backend') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{ asset('backend') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('backend') }}/css/animate.css" rel="stylesheet" />
        <!--google font-->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

         <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    

        <!-- Waves-effect -->
        <link href="{{ asset('backend') }}/css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('backend') }}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('backend') }}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet" type="text/css" />

      

        <script src="{{ asset('backend') }}/js/modernizr.min.js"></script>

        


        
    </head>


    <body>





<div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img">
                    <div class="bg-overlay"></div>
                    <h2 class="text-center m-t-10 text-white"> Aim 2Be Well </h2>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Consultant</strong> </h3>
                </div>


                <div class="panel-body">
                    @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('verify-consultant.login') }}">

                    @csrf

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="email" class="col-md-8 col-form-label text-md-right">{{ __('E-MAIL ') }}</label>
                            <input class="form-control input-lg " id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="email" class="col-md-8 col-form-label text-md-right">{{ __('PASSWORD  ') }}</label>
                            <input class="form-control input-lg" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    Remember me
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
                            <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            @endif
                        </div>
                        <div class="col-sm-5 text-right">

                             @if (Route::has('register'))
                                <a  href="{{ route('consultant.registetion') }}"><i class="fa fa-user"></i> Create an account</a>
                            @endif


                        </div>
                    </div>
                </form>
                </div>

            </div>
        </div>

<script>
            var resizefunc = [];
        </script>
        <script src="{{ asset('backend') }}/js/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('backend') }}/js/waves.js"></script>
        <script src="{{ asset('backend') }}/js/wow.min.js"></script>
        <script src="{{ asset('backend') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{ asset('backend') }}/js/jquery.scrollTo.min.js"></script>
        <script src="{{ asset('backend') }}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{ asset('backend') }}/assets/fastclick/fastclick.js"></script>
        <script src="{{ asset('backend') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{ asset('backend') }}/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>
    
    </body>
</html>

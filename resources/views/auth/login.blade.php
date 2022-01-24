<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="{{ URL::asset('css/index-style.css') }}" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<link rel="icon" href="img/logo.ico"/>
	<title> Welcome to STI College Malolos! - Login Page</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>

			<div class="col-lg-6 col-md-6 infinity-form-container">				
				<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					<div class="text-center mb-3 mt-5">
						<img src="img/logo - 2.png" width="200px">
					</div>
					<div class="text-center mb-4">
			      <h4>STI COLLEGE MALOLOS</h4>
				</div>

			    <!-- Form dito mars okez -->
                <div class="card-body">
					<form method="POST" action="{{ route('login') }}">
                        
                    @csrf
						<!-- Emaiiiil -->
                         <div class="form-group row">
                                   <div class="col-md-12">

                                    <!-- <span><i class="fa fa-envelope-o"></i></span> -->
                                    <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      
                            <div class="form-group row">
                                <div class="col-md-12">

                                    <!-- <span><i class="fa fa-envelope-o"></i></span> -->
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

						<div class="row mb-3">

						<!-- Remember Checkbox -->
			        <div class="col-auto d-flex align-items-center">
			          <div class="custom-control custom-checkbox">
			            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
			          </div>
			        </div>
					 </div>
					 
			 	    <!-- Login Button -->
			      		<div class="mb-3 text-center"> 
                          <button type="submit" class="btn btn-block">
                                    {{ __('Login') }}
                                </button>                            
						</div>

                        <div class="mb-3 text-center">
                            @if (Route::has('password.request'))
                                    <a class="register-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
						
                        <div class="text-center mb-5 text-white">Don't have an account? 
							<a class="register-link" href="{{url ('/register') }}">Register here</a>

			     		</div>
					</form>
                    </div>
				</div>					
			</div>
				


		</div>
	</div>	
</body>
</html>
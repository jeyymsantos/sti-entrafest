<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
      <link href="{{ URL::asset('css/register-style.css') }}" rel="stylesheet" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/logo.png" />
      <title> Welcome to STI College Malolos! - Register Page</title>
       
    </head>
<body>

    
  <div class="container">
   
    <img src="img/logo.png" style="float:left-top;width:100px;height:90px;">
    
    <div class="title">Registration</div>
    <div class="content">

    <form method="POST" action="{{ route('register') }}">
    @csrf

        <div class="user-details">
          <div class="input-box">
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
          </div>
         
          <div class="input-box">
            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        </div>


          <div class="input-box">
          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        </div>
        
          <div class="input-box">
            <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
            </div>
        </div>
        
        <div class="button">
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </div>

        <div class="register-mare text-center mb-5 text-white">Do you have an account? 
          <a class="register-link" href="{{url ('/') }}">Login here</a>
           </div>
      </form>
    </div>
  </div>

</body>
</html>
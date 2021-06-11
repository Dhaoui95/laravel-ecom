<link rel="stylesheet" href="/css/login.css">
<style>
    body {
      background-image: url('assets/img/paper-1.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
    </style>
<div class="login-wrap" style="padding-top: ">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio"  name="tab" class="sign-up"><a href="register" for="tab-2" class="tab">Sign Up</a>
		<div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
			<div class="sign-in-htm">
				<div class="group">
					<label for="email" class="label">{{ __('E-Mail Address') }}</label>
					<input id="email" type="email" @error('email') is-invalid @enderror" class="input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
					<label for="password" class="label">{{ __('Password') }}</label>
					<input id="password" type="password" class="input" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="group">
					<input  type="checkbox" name="remember" class="check" id="remember" {{ old('remember') ? 'checked' : '' }}>
					<label for="remember"><span class="icon"></span></label>
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <br />
                      
                       
				<div class="group">
                    <button type="submit" class="button" >
                        {{ __('Login') }}
                    </button>
                </div>
                <p style="margin-left:150px">OR</p>
                        
                <hr>
                
                        <p style="margin-left:1550px">OR</p>
                        <br />
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                              <a href="{{url('/redirect')}}" class="btn btn-primary">Login with Facebook</a>
                            </div>
                        </div>
				<div class="hr"></div>
				<div class="foot-lnk">
					@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
				</div>
			</div>
            </form>
		</div>
    </div>
   
</div>



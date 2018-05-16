@extends('layouts.app')

@section('content')
<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading"> 
            <h3 class="text-center m-t-10"> Sign In to <strong>Laravel</strong> </h3>
        </div> 

        <form class="form-horizontal m-t-40" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}                        
            <div class="form-group ">
                <div class="col-xs-12">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
									@if ($errors->has('email'))
										<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
									<input id="password" type="password" class="form-control" name="password" required>
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <label class="cr-styled">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <i class="fa"></i> 
                        Remember me
                    </label>
                </div>
            </div>
            
            <div class="form-group text-right">
                <div class="col-xs-12">
									<button type="submit" class="btn btn-primary w-md">
										Log In
									</button>
                </div>
            </div>
            <div class="form-group m-t-30">
                <div class="col-sm-7">
                    <a href="href="{{ route('password.request') }}""><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
                <div class="col-sm-5 text-right">
                    <a href="{{ route('register') }}">Create an account</a>
                </div>
            </div>
        </form>

    </div>
    </div>
@endsection

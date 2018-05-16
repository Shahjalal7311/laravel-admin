@extends('layouts.app')
@section('content')
<div class="wrapper-page animated fadeInDown">
			<div class="panel panel-color panel-primary">
				<div class="panel-heading">
					<h3 class="text-center m-t-10"> Create a new Account </h3>
				</div>

				<form class="form-horizontal m-t-40" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<div class="col-xs-12">
							<input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
								@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
						</div>
					</div>

					<div class="form-group ">
						<div class="col-xs-12">
							<input id="name" type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>
								@if ($errors->has('name'))
									<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

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
								<input type="checkbox" checked>
								<i class="fa"></i> I accept <strong><a href="#">Terms and Conditions</a></strong> </label>
						</div>
					</div>

					<div class="form-group text-right">
						<div class="col-xs-12">
							<button class="btn btn-purple w-md" type="submit">
								Register
							</button>
						</div>
					</div>

					<div class="form-group m-t-30">
						<div class="col-sm-12 text-center">
							<a href="{{ route('login') }}">Already have account?</a>
						</div>
					</div>
				</form>

			</div>
		</div>
@endsection

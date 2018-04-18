@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>
	<div class="col-xs-12 col-sm-10 col-md-4 col-lg-4">
		<br>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="panel-title text-center">Đăng nhập</h2>
			</div>
			<div class="panel-body">
				<form action="{{ route('login') }}" method="POST" role="form">
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="" placeholder="Nhập email" name="email" value="{{ old('email') }}">
						@if($errors->has('email'))
						<span class="text text-danger">{!!$errors->first('email')!!}</span>
						@endif
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="" placeholder="Nhập password" name="password" value="{{ old('password') }}">
						@if($errors->has('password'))
						<span class="text text-danger">{!!$errors->first('password')!!}</span>
						@endif
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember">
								Remember Me
							</label>
						</div>
					</div>
					<div class="form-group">
						@if(Session::has('thatbai'))
						<span class="text text-danger">{{ Session::get('thatbai') }}</span>
						@endif
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
					<br>
					<p>Bạn chưa có tài khoản? Đăng ký</p>
				</form>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-2 col-md-4 col-lg-4"></div>
</div>
@endsection
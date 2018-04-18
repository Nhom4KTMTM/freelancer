@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<br>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">TẠO TÀI KHOẢN MIỄN PHÍ</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							<!-- name input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="name">Họ và tên</label>  
								<div class="col-md-8">
									<input id="name" name="name" type="text" placeholder="Ví dụ: Tạ Minh Đức" class="form-control input-md" value="{{ old('name') }}">
									@if($errors->has('name'))
									<span class="text-danger">{{ $errors->first('name') }}</span>
									@endif
								</div>
							</div>
							<!-- email input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="lname">Địa chỉ email</label>  
								<div class="col-md-8">
									<input id="lname" name="email" type="text" placeholder="Email đăng nhập" class="form-control input-md" value="{{ old('email') }}" >
									@if($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
							<!-- Password input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="email">Mật khẩu</label>  
								<div class="col-md-8">
									<input id="email" name="password" type="password" placeholder="Mật khẩu" class="form-control input-md"  value="{{ old('password') }}">
									@if($errors->has('password'))
									<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
								</div>
							</div>
							<!-- Password input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="password">Xác nhận mật khẩu</label>
								<div class="col-md-8" value="{{ old('confirm_password') }}" >
									<input id="password" name="confirm_password" type="password" placeholder="Nhập lại mật khẩu" class="form-control input-md" >
									@if($errors->has('confirm_password'))
									<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
									@endif
								</div>
							</div>
							<!-- SDT input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="SDT">Số điện thoại</label>
								<div class="col-md-8">
									<input id="SDT" name="phone" type="text" placeholder="Số điện thoại" class="form-control input-md" value="{{ old('phone') }}">
									@if($errors->has('phone'))
									<span class="text-danger">{{ $errors->first('phone') }}</span>
									@endif
								</div>
							</div>

							<!-- Thành phố input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="thanhpho">Tỉnh/ Thành phố</label>
								<div class="col-md-8">
									<select name="city" class="form-control" id="sel1">
										@foreach($city as $city)
										<option value= "{{ $city->id }}" {{ old('city')==$city->id ? "selected" : ""}}>{{ $city->name }}</option>
										@endforeach
									</select>
									@if($errors->has('city'))
									<span class="text-danger">{{ $errors->first('city') }}</span>
									@endif
								</div>
							</div>
							{!! csrf_field() !!}
							<!-- Button (Double) -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="save"></label>
								<div class="col-md-8">
									<button id="save" name="save" class="btn btn-success">Đăng ký</button>

								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		</div>
	</div>

</div>
@endsection
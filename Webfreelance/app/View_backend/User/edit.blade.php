@extends('backend')
@section('title','Tài khoản')
@section('con','Chỉnh sửa tài khoản')
@section('content')
<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<strong>Chỉnh sửa tài khoản</strong>
					</div>
					<div class="card-block">
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nf-email">Tên</label>
								<input type="text" id="nf-email" name="name" class="form-control" value="{{$user->name}}">
								@if($errors->has('name'))
								<span class="text-danger">{{$errors->first('name')}}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="nf-email">Email</label>
								<input type="text" id="nf-email" name="email" class="form-control" value="{{$user->email}}">
								@if($errors->has('email'))
								<span class="text-danger">{{$errors->first('email')}}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="nf-email">Số điện thoại</label>
								<input type="text" id="nf-email" name="phone" class="form-control" value="{{$user->phone}}">
								@if($errors->has('email'))
								<span class="text-danger">{{$errors->first('phone')}}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="nf-email">File ảnh</label>
								<div>
								<img src="{{url('Uploads/image')}}/{{$user->image}}" alt="" width="200px">
								<br><br>	
								</div>								
								<input type="file" id="file-input" name="image">
								@if($errors->has('image'))
								<span class="text-danger">{{$errors->first('image')}}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="nf-email">Mật khẩu&nbsp;(<label style="color: red">Thay đổi mật khẩu hãy nhập</label>)</label>
								<input type="password" id="nf-email" name="password" class="form-control">
								@if($errors->has('password'))
								<span class="text-danger">{{$errors->first('password')}}</span>
								@endif
							</div>
							<div class="form-group">
								<label for="nf-email">Nhập lại mật khẩu &nbsp;(<label style="color: red">Thay đổi mật khẩu hãy nhập</label>)</label>
								<input type="password" id="nf-email" name="re_password" class="form-control">
								@if($errors->has('re_password'))
								<span class="text-danger">{{$errors->first('re_password')}}</span>
								@endif
							</div>
							<div class="form-group row">
								<label class="col-md-3 form-control-label">Trạng thái</label>
								<div class="col-md-9">
									<label class="radio-inline" for="inline-radio1">
										<input type="radio" id="inline-radio1" name="status" value="1" @if($user->status==1) checked @endif>Hiện
									</label>
									<label class="radio-inline" for="inline-radio2">
										<input type="radio" id="inline-radio2" name="status" value="0" @if($user->status==0) checked @endif>Ẩn
									</label>
								</div>
							</div>

						</div>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="card-footer">
							<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Cập nhật</button>
						</div>
						
					</div>
				</form>                                               
			</div>
		</div>
	</div>
</div>
@stop
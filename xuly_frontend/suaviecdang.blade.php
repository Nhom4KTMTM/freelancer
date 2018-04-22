@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3 class="text-center">Đăng việc mới</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-success">
					<div class="panel-body">
						<form action="" method="POST" role="form" enctype="multipart/form-data">
							{!!csrf_field()!!}
							<div class="form-group">
								<label for="">Chọn lĩnh vực</label>
								<select class="form-control" name="linhvuc">
									@foreach($categoryparent as $cat)
									<option disabled><--{{ $cat->name }}--</option>
									@foreach($cat->cat_child as $catchild)
									<option value="{{ $catchild->id }}" @if($catchild->id == $viecdang->linhvuc) selected @endif >&nbsp;&nbsp;-->{{ $catchild->name }}</option>
									@endforeach	
									option
									@endforeach
								</select>

							</div>
							<div class="form-group">
								<label for="">Đặt tên cụ thể cho công việc</label>
								<input type="text" name="name" id="inputName" class="form-control" value="{{$viecdang->name}}" placeholder="VD:Thiết kế trang web">
							</div>
							@if($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
							@endif
							<div class="form-group">
								<label for="">Thông tin đầy đủ về yêu cầu</label>
								<textarea name="content" id="input" class="form-control" rows="5" placeholder="Ví dụ: Các giao diện website cần thiết kế như trang chủ, xem hàng, thanh toán...">{{$viecdang->content}}
								</textarea>
							</div>
							@if($errors->has('content'))
							<span class="text-danger">{{ $errors->first('content') }}</span>
							@endif
							<div class="form-group">
								<label for="">Tài liệu đính kèm<span class="text-muted">Thay đổi thì nhập</span></label>
								<input type="file" name="tailieu" id="input">
							</div>
							<div class="form-group">
								<label for="">Hạn cuối nhận chào giá</label>
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name="tg_hethan" value="{{$viecdang->tg_hethan}}" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>	
							@if($errors->has('tg_hethan'))
							<span class="text-danger">{{ $errors->first('tg_hethan') }}</span>
							@endif
							<div class="form-group">
								<label for="">Nơi cần tuyển</label>
								<select name="city" id="inputCity" class="form-control" required="required">
									@foreach($city as $city)
									<option value="{{$city->id}}"  @if($city->id == $viecdang->city) selected @endif>{{$city->name}}</option>
									@endforeach
								</select>
							</div>
							@if($errors->has('city'))
							<span class="text-danger">{{ $errors->first('city') }}</span>
							@endif
							<div class="form-group">
								<label for="">Số tiền tối đa bạn có thể trả</label>
								<input type="text" name="money" id="inputMonney" class="form-control" value="{{$viecdang->money}}"  placeholder="VD:5000000">
							</div>
							@if($errors->has('money'))
							<span class="text-danger">{{ $errors->first('money') }}</span>
							@endif
							<button type="submit" class="btn btn-primary">Đăng việc</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
	</div>
	@endsection
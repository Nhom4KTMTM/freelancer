@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4>Cập nhật việc</h4>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			{!!csrf_field()!!}
			<div class="form-group">
				<label for="">Đề XUẤT CHI PHÍ</label>
				<input type="text" class="form-control" id="" placeholder="VD:500000" name="money" value="{{ $chaogia->money }}">
			</div>
			<div class="form-group">
				<label for="">DỰ KIẾN HOÀN THÀNH </label>
				<select name="tghoanthanh" id="input" class="form-control" required="required" name="tghoanthanh">
					<option value="1" @if($chaogia->tghoanthanh == 1) selected @endif >1 Ngày</option>
					<option value="2" @if($chaogia->tghoanthanh == 2) selected @endif >2 Ngày</option>
					<option value="3" @if($chaogia->tghoanthanh == 3) selected @endif >3 Ngày</option>
					<option value="5" @if($chaogia->tghoanthanh == 5) selected @endif >5 Ngày</option>
					<option value="7" @if($chaogia->tghoanthanh == 7) selected @endif >7 Ngày</option>
					<option value="10" @if($chaogia->tghoanthanh == 10) selected @endif >10 Ngày</option>
					<option value="14" @if($chaogia->tghoanthanh == 14) selected @endif >2 Tuần</option>
					<option value="21" @if($chaogia->tghoanthanh == 21) selected @endif >3 Tuần</option>
					<option value="28" @if($chaogia->tghoanthanh == 28) selected @endif >4 Tuần</option>
					<option value="42" @if($chaogia->tghoanthanh == 42) selected @endif >6 Tuần</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="VD:01643855262" name="phone" value="{{$chaogia->phone}}">
			</div>
			<div class="form-group">
				<label for="">Skype</label>
				<input type="text" class="form-control" id="" placeholder="" name="skype" value="{{$chaogia->skype}}">
			</div>
		</div>
<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
			<div class="form-group">
				<label for="">ĐỀ XUẤT THUYẾT PHỤC KHÁCH HÀNG</label>
				<textarea name="content" id="inputContent" class="form-control" rows="7">{{$chaogia->content}}</textarea>
			</div>
			<div class="form-group">
				<label for="">Tài liệu đính kèm<span class="text-muted">(Thay đổi thì nhập)</span></label>
				<input type="file" id="" placeholder="VD:500000" name="tailieu">
			</div>
			<button type="submit" class="btn btn-success">Gửi chào giá</button>
		</div>
</div>		
@endsection
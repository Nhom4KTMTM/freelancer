@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br>
				<strong>{{ $work->name }}</strong>
				<p>{{ $work->content }}</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br>
				<div class="panel panel-default">
					<div class="panel-body">
						<strong>Thông tin dự án</strong>
						<p><span class="text-muted">Ngày đăng:</span> {{$work->created_at}}</p>
						<p><span class="text-muted">Ngày hết hạn:</span> {{$work->tg_hethan}}</p>
						<p><span class="text-muted">Địa điểm:</span> {{$work->thanhpho->name}}</p>
						<p><span class="text-muted">Ngân sách:</span> {{ $work->money }} đ</p>
						<br>
						<strong>Thông tin khách hàng</strong>
						<p>{{$work->khachhang->name}}</p>
						<p><span class="text-muted">Chức danh:</span>{{ $work->khachhang->chucdanh }}</p>
						<p><span class="text-muted">Đến từ:</span>{{ $work->khachhang->thanhpho->name }}</p>
						<p><span class="text-muted">Số điện thoại:</span> {{ $work->khachhang->phone }}</p>
						<p><span class="text-muted">Skype:</span> {{ $work->khachhang->skype }}</p>						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4><strong>Thông tin chào giá</strong></h4>
	</div>
</div>
<div class="row">
	@if(Auth::check() && Auth::user()->groups=='2')
	@if($work->status == 1)
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			{!!csrf_field()!!}
			<div class="form-group">
				<label for="">Đề XUẤT CHI PHÍ</label>
				<input type="text" class="form-control" id="" placeholder="VD:500000" name="money">
			</div>
			<div class="form-group">
				<label for="">DỰ KIẾN HOÀN THÀNH </label>
				<select id="input" class="form-control" required="required" name="tghoanthanh">
					<option value="1">1 Ngày</option>
					<option value="2">2 Ngày</option>
					<option value="3">3 Ngày</option>
					<option value="5">5 Ngày</option>
					<option value="7">7 Ngày</option>
					<option value="10">10 Ngày</option>
					<option value="14">2 Tuần</option>
					<option value="21">3 Tuần</option>
					<option value="28">4 Tuần</option>
					<option value="42">6 Tuần</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="VD:01643855262" name="phone" value="{{Auth::user()->phone}}">
			</div>
			<div class="form-group">
				<label for="">Skype</label>
				<input type="text" class="form-control" id="" placeholder="" name="skype" value="{{Auth::user()->skype}}">
			</div>
		</div>
		<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
			<div class="form-group">
				<label for="">ĐỀ XUẤT THUYẾT PHỤC KHÁCH HÀNG</label>
				<textarea name="content" id="inputContent" class="form-control" rows="7"></textarea>
			</div>
			<div class="form-group">
				<label for="">Thêm tài liệu đính kèm<span class="text-muted">(Không bắt buộc)</span></label>
				<input type="file" id="" placeholder="VD:500000" name="tailieu">
			</div>
			<button type="submit" class="btn btn-success">Gửi chào giá</button>
		</div>
	</div>
</form>
@endif
@elseif(Auth::check() && Auth::user()->groups=='3')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a href="{{route('capnhat',['id'=>Auth::user()->id])}}" title="">Cập nhật đầy đủ thông tin để có thể chào giá</a>
	</div>
@else
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a href="{{ route('login')}}" title="">Đăng nhập để có thể chào giá</a>
	</div>
@endif
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h4><strong>Người chào giá</strong></h4>
</div>
@foreach($nguoichaogia as $nguoichaogia)
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<img src="{{url('Uploads/image')}}/{{$nguoichaogia->nguoinhan->image}}" class="img-responsive" alt="Image">
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<p><a href="{{route('taikhoan',['id'=>$nguoichaogia->id_nguoinhan])}}"><b>{{ $nguoichaogia->nguoinhan->name }}</b></a></p>
					<p class="tptt">{{ $nguoichaogia->nguoinhan->thanhpho->name }} | {{ $nguoichaogia->nguoinhan->linhvuctin->name }}</p>
					<p><span class="text-muted">Chào giá:</span>{{ $nguoichaogia->money }} đ</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
</div>
@endsection
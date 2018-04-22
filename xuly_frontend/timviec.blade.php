@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="" method="GET">
					<div class="form-group">
						<label for="email">Tên việc</label>
						<input type="text" name="name" id="inputName" class="form-control" value="" placeholder="Tên việc">
					</div>
					<div class="form-group">
						<label for="email">NGÀNH NGHỀ</label>
						<select class="form-control" name="category">
							<option value="">Tất cả</option>
							@foreach($categoryparent as $cat)
								<option disabled>--{{ $cat->name }}--</option>
								@foreach($cat->cat_child as $catchild)
									<option value="{{ $catchild->id }}">&nbsp;&nbsp;-->{{ $catchild->name }}</option>
								@endforeach	
								option
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="email">THÀNH PHỐ</label>
						<select class="form-control" name="city">
							<option value="">Toàn quốc</option>
							@foreach($city as $city)
							<option value="{{$city->id}}">{{$city->name}}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-success btn-center">Tìm kiếm</button>
					<br>
				</form>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<div class="row">
			@foreach($work as $works)
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<p><a href="{{ route('chitiettimviec',['id'=>$works->id]) }}"><b>{{ $works->name }}</b></a></p>
						<p><span class="glyphicon glyphicon-user" ></span>&nbsp;<a href="{{route('taikhoan',['id'=>$works->id_nguoithue])}}">{{ $works->khachhang->name }}</a></p>
						<p class="tptt">{{ $works->thanhpho->name }} | {{ $works->linhvuctin->name }} | {{ $works->money }} đ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@if($works->status == 1)<span style="color:green">Hạn chào giá: </span>{{ $works->tg_hethan }}@else<span style="color:red">Hết hạn chào giá </span>@endif</p>
						<p>{{ substr($works->content,0,250) }}...<a href="{{ route('chitiettimviec',['id'=>$works->id]) }}">Xem thêm</a></p>
						<p>{{ $works->chaogia->count() }} chào giá</p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{ $work->links() }}
			</div>
		</div>
	</div>
</div>
@endsection
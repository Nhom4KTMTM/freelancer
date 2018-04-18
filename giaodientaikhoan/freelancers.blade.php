@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="" method="GET">
					<div class="form-group">
						<label for="email">Tên Freelance</label>
						<input type="text" name="name" id="inputName" class="form-control" value="" placeholder="Tên Freelance">
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
			@foreach($user as $works)
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<img src="{{url('Uploads/image')}}/{{$works->image}}" class="img-responsive" alt="Image">
						</div>
						<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
						<p><a href="{{route('taikhoan',['id'=>$works->id])}}"><b>{{ $works->name }}</b></a></p>
						<p class="tptt">{{ $works->thanhpho->name }} | {{ $works->linhvuctin->name }} | {{ $works->money }} đ</p>
						<p>{{ substr($works->gioithieubt,0,250) }}...<a href="{{route('taikhoan',['id'=>$works->id])}}">Xem thêm</a></p>
						</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{ $user->links() }}
			</div>
		</div>
	</div>
</div>
@endsection
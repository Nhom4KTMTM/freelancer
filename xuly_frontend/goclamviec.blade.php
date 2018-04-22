@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4>Góc làm việc</h4>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4 class="text-success">Nhận việc</h4>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="" method="GET" class="form-inline" role="form">
			<div class="form-group">
				<select name="nhanviec" id="inputTrangthai" class="form-control" >
					<option value="">Tất cả</option>
					<option value="0">Đang chờ phê duyệt</option>
					<option value="1">Việc được nhận</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		</form>
	</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Tên dự án</th>
					<th>Chào giá</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($nhanviec as $nv)
				<tr>
					<td><a href="{{route('chitiettimviec',['id' => $nv->id_work])}}" title="">{{$nv->congviec->name}}</a></td>
					<td>{{number_format($nv->money)}} đ</td>
					<td>@if($nv->status == 0)Đợi phê duyệt @else Đã nhận @endif</td>
					<td><a class="btn btn-primary" data-toggle="modal" href='#modal-{{$nv->id}}'>Chào giá</a>
						@if($nv->status == 0)
						&nbsp<a class="btn btn-success" href="{{route('suanhanviec',['id'=>$nv->id])}}" role="button">Cập nhật</a></td>
						@endif
					</tr>
					<div class="modal fade" id="modal-{{$nv->id}}">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Chào giá</h4>
								</div>
								<div class="modal-body">
									<p>Đề xuất chi phí: {{number_format($nv->money)}}</p>
									<p>Thời gian hoàn thành:
										@if($nv->tghoanthanh == 1)
										1 Ngày
										@elseif($nv->tghoanthanh == 2)
										2 Ngày
										@elseif($nv->tghoanthanh == 3)
										3 Ngày
										@elseif($nv->tghoanthanh == 5)
										5 Ngày
										@elseif($nv->tghoanthanh == 7)
										7 Ngày
										@elseif($nv->tghoanthanh == 10)
										10 Ngày
										@elseif($nv->tghoanthanh == 14)
										2 Tuần
										@elseif($nv->tghoanthanh == 21)
										3 Tuần
										@elseif($nv->tghoanthanh == 28)
										4 Tuần
										@elseif($nv->tghoanthanh == 42)
										6 Tuần
										@endif
									</p>
									@if(!empty($nv->tailieu))
									<p>Tài liệu: <a href="{{route('downloadtin',['id' => $nv->id])}}"><i class="glyphicon glyphicon-download-alt"></i> </a>
									</p>
									@endif
									<p>Số điện thoại:{{$nv->phone}}</p>
									<p>Skype:{{$nv->skype}}</p>
									<p>Đề xuất thuyết phục khách hàng:</p>
									<p>{{$nv->content}}</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</tbody>
			</table>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{$nhanviec->links()}}
			</div>
		</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h4 class="text-success">Việc đã đăng</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="" method="GET" class="form-inline" role="form">
				<div class="form-group">
					<select name="trangthai" id="inputTrangthai" class="form-control">
						<option value="">Tất cả</option>
						<option value="0">Đang chờ phê duyệt</option>
						<option value="1">Đang đăng</option>
						<option value="2">Hết hạn</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Tìm kiếm</button>
			</form>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Tên dự án</th>
					<th>Chào giá</th>
					<th>Thời gian hết hạn</th>
					<th>Ngân sách</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($viecdang as $vd)
				<tr>
					<td><a href="{{route('chitiettimviec',['id' => $vd->id])}}" title="">{{$vd->name}}</a></td>
					<td>{{ $vd->chaogia->count() }}</td>
					<td>{{ $vd->tg_hethan }}</td>
					<td>{{number_format($vd->money)}} đ</td>
					<td>@if($vd->status == 0)Đợi phê duyệt @elseif($vd->status == 1) Đang đăng @else Hết hạn @endif</td>
					<td><a class="btn btn-primary" href="{{route('chitietviecdang',['id'=>$vd->id])}}">Chi tiết chào giá</a>
						&nbsp<a class="btn btn-success" href="{{route('getsuaviecdang',['id'=>$vd->id])}}" role="button">Cập nhật</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{$nhanviec->links()}}
			</div>
		</div>
	</div>
	@endsection
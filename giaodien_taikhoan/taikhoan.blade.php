@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4 class="text text-center">THÔNG TIN TÀI KHOẢN</h4>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<img src="{{url('Uploads/image')}}/{{$user->image}}" class="img-responsive">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<p><h4>{{$user->name}}</h4></p>
				@if($user->groups !=3)
				<p><i class="glyphicon glyphicon-bookmark"></i> {{$user->linhvuctin->name}}</p>
				<p class="text-muted"><i class="glyphicon glyphicon-user"></i>&nbsp;{{$user->chucdanh}}</p>
				@endif
				<p class="text-muted"><i class="glyphicon glyphicon-map-marker"></i> &nbsp;{{$user->thanhpho->name}}</p>
				<p class="text-muted"> <i class="glyphicon glyphicon-euro"></i> {{number_format($user->money)}}</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4>Giới thiệu</h4>
				<p>{{$user->gioithieubt}}</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4>Công việc</h4>
			</div>
			@foreach($takejob as $take)
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<p><a href="{{ route('chitiettimviec',['id'=>$take->id_work]) }}">{{ $take->congviec->name}}</a></p>
							<p>
								@if($take->nhanxet == NULL)
									Chưa có nhận xét
								@else
									{{$take->nhanxet}}
								@endif
							</p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<p>
								@if($take->danhgia == NULL)
								Được giao việc
							@else
								@if($take->danhgia == 5)
									Đánh giá:Xuất sắc
								@elseif($take->danhgia == 4)
								Đánh giá:Tốt
								@elseif($take->danhgia == 3)
								Đánh giá:Khá
								@elseif($take->danhgia == 2)
								Đánh giá:Trung bình
								@elseif($take->danhgia == 1)
								Đánh giá:Tệ	
								@endif
							@endif
							</p>
							<p>
								{{number_format($take->money)}} VNĐ
							</p>
						</div>
					</div>
				</div>

			</div>
			@endforeach
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				{{ $takejob->links() }}
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br>
				<div class="panel panel-default">
					<div class="panel-body">
						<h4>Thông tin liên lạc</h4>
						<p><i class="glyphicon glyphicon-earphone"></i>&nbsp;{{$user->phone}}</p>
						<p><i class="glyphicon glyphicon-envelope"></i>&nbsp;{{$user->email}}</p>
						<p><i class="glyphicon glyphicon-comment"></i>&nbsp;{{$user->skype}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
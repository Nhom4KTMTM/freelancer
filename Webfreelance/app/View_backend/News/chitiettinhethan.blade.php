@extends('backend')
@section('title','Quản lý tin')
@section('con','Chi tiết tin hết hạn')
@section('content')
<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Chi tiết tin
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-3">
										<img src="{{url('Uploads/image')}}/{{$new->khachhang->image}}" class="img-thumbnail" alt="admin@bootstrapmaster.com" width="100%">
									</div>
									<div class="col-md-9">
										<h3 style="color: green">{{$new->khachhang->name}}</h3>
										<table>
											<tr>
												<td style="font-weight: bold;">
													Chức danh:
												</td>
												<td>{{$new->khachhang->chucdanh}}</td>
											</tr>
											
											
											<tr>
												<td style="font-weight: bold;">Thành phố:</td>
												<td>{{$new->thanhpho->name}}</td>
											</tr>                           				
										</table>
									</div>

								</div>
								<div class="row">
									<div class="col-md-12">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4>THÔNG TIN TIN</h4>
									</div>
									<div class="col-md-12">
										<table>
											<tr>
												<td style="font-weight: bold;">Tên việc cần tuyển:</td>
												<td>
													{{$new->name}}
												</td>
											</tr>
											<tr>

												<td style="font-weight: bold;">Lĩnh vực cần tuyển:</td>
												<td >
													{{$new->linhvuctin->name}}
												</td>
											</tr>
											
											@if($new->tailieu)
											<tr>

												<td style="font-weight: bold;">Tài liệu đính kèm:</td>
												<td >
													<a href="{{route('backend.downloadtinpheduyet',['id'=>$new->id])}}" title="">Tải xuống</a>
												</td>
											</tr>
											@endif
											<tr>
												<td style="font-weight: bold;">Ngân sách dự kiến:</td>
												<td>{{number_format($new->money)}}</td>
											</tr>
											<tr>
												<td style="font-weight: bold;">Hết hạn chào giá:</td>
												<td>{{$new->tg_hethan}}</td>
											</tr>
											<tr>
												<td style="font-weight: bold;">Nơi cần thuê:</td>
												<td>{{$new->thanhpho->name}}</td>
											</tr>									
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<br>
										<h4>THÔNG TIN YÊU CẦU</h4>
									</div>
									<div class="col-md-12">
										{!!$new->content!!}
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<br>
										<a href="{{route('backend.tinhethan')}}" title="" class="btn btn-success btn-xs">Quay lại</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<h4><strong>THÔNG TIN LIÊN HỆ</strong></h4>
								
								<i class="fa fa-phone fa-lg m-t-2" style="color:green"></i>&nbsp;&nbsp;&nbsp;{{$new->khachhang->phone}}
								<br>
								<i class="fa fa-envelope-o fa-lg m-t-2" style="color:green"></i>&nbsp;&nbsp;&nbsp;{{$new->khachhang->email}}<br>
								<i class="fa fa-skype fa-lg m-t-2" style="color:green"></i>&nbsp;&nbsp;&nbsp;{{$new->khachhang->skype}}
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p><h4 style="text-align: center;">NGƯỜI CHÀO GIÁ</h4></p>
							</div>
							@foreach($nguoinhan as $nguoinhan)
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-2">
										<img src="{{url('Uploads/image')}}/{{$nguoinhan->ttnguoinhan->image}}" alt="" class="img-thumbnail" width="100%">
									</div>
									<div class="col-md-8">
										<h4 style="color: green">{{$nguoinhan->ttnguoinhan->name}}</h4>

										<p>Chào giá:&nbsp;<strong>{{number_format($nguoinhan->money)}}</strong></p>
										<p>Thời gian hoàn thành:&nbsp;<strong>{{$nguoinhan->tghoanthanh}}</strong></p>
									</div>
									<div class="col-md-2">
										<div class="col-md-2">
                            	@if($nguoinhan->status==1)<strong style="color:green">Được chọn</strong>@endif
                            	
                            </div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
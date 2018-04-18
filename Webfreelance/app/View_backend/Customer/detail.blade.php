@extends('backend')
@section('title','Khách hàng')
@section('con','Chi tiết khách hàng')
@section('content')
<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Chi tiết khách hàng
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-3">
										<img src="{{url('Uploads/image')}}/{{$customer->image}}" class="img-thumbnail" alt="admin@bootstrapmaster.com" width="100%">
									</div>
									<div class="col-md-9">
										<h3 style="color: green">{{$customer->name}}</h3>
										<table>
											<tr>
												<td style="font-weight: bold;">
													Chức danh:
												</td>
												<td>{{$customer->chucdanh}}</td>
											</tr>
											   
											  
											<tr>
												<td style="font-weight: bold;">Thành phố:</td>
												<td>{{$customer->thanhpho->name}}</td>
											</tr> 
											<tr>
													<td style="font-weight: bold;">Portfolio hoặc CV:</td>
													<td><a href="{{route('backend.dowloadcv',['id'=>$customer->id])}}" title="">Tải xuống</a></td>
											</tr>                          				
										</table>
									</div>

								</div>
								<div class="row">
									<div class="col-md-12">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4>KINH NGHIỆM LÀM VIỆC</h4>
									</div>
									<div class="col-md-12">
										<table>
											<tr>
													<td style="font-weight: bold;">Lĩnh vực chuyên môn:</td>
													<td >
														{{$customer->linhvucc->name}}
													</td>
												</tr>
												<tr>
													<td style="font-weight: bold;">Trình độ:</td>
													<td>
														@if($customer->trinhdo==1)
											Mới đi làm
											@elseif($customer->trinhdo==2)
											Đã có kinh nghiệm
											@else
											Chuyên gia				
											@endif
													</td>
												</tr>
												<tr>
													<td style="font-weight: bold;">Số tiền đã kiếm được:</td>
													<td>{{number_format($customer->money)}}</td>
												</tr>
																						
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<br>
										<h4>GIỚI THIỆU</h4>
									</div>
									<div class="col-md-12">
										{!!$customer->gioithieubt!!}
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<br>
										<a href="{{route('backend.khachhang')}}" title="" class="btn btn-success btn-xs">Quay lại</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">

								<h4>THÔNG TIN LIÊN HỆ</h4>
								
									<i class="fa fa-phone fa-lg m-t-2" style="color:green"></i>&nbsp;&nbsp;&nbsp;{{$customer->phone}}
								<br>
<i class="fa fa-envelope-o fa-lg m-t-2" style="color:green"></i>&nbsp;&nbsp;&nbsp;{{$customer->email}}<br>
									<i class="fa fa-skype fa-lg m-t-2" style="color:green"></i>&nbsp;&nbsp;&nbsp;{{$customer->skype}}
								
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
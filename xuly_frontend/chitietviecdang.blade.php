@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4><strong>Người chào giá</strong></h4>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Người chào giá</th>
					<th>Giá đề xuất</th>
					<th>Thời gian hoàn thành</th>
					<th>Số điện thoại</th>
					<th>Skype</th>
					<th>Trạng thái</th>
					<th>Nhận chào giá</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($nguoichaogias as $nguoichaogia)
				<tr>
					<td>{{ $nguoichaogia->nguoinhan->name }}</td>
					<td>{{ $nguoichaogia->money }}</td>
					<td>			
					@if($nguoichaogia->tghoanthanh == 1)
						1 Ngày
						@elseif($nguoichaogia->tghoanthanh == 2)
						2 Ngày
						@elseif($nguoichaogia->tghoanthanh == 3)
						3 Ngày
						@elseif($nguoichaogia->tghoanthanh == 5)
						5 Ngày
						@elseif($nguoichaogia->tghoanthanh == 7)
						7 Ngày
						@elseif($nguoichaogia->tghoanthanh == 10)
						10 Ngày
						@elseif($nguoichaogia->tghoanthanh == 14)
						2 Tuần
						@elseif($nguoichaogia->tghoanthanh == 21)
						3 Tuần
						@elseif($nguoichaogia->tghoanthanh == 28)
						4 Tuần
						@elseif($nguoichaogia->tghoanthanh == 42)
						6 Tuần
					@endif</td>
					<td>{{ $nguoichaogia->phone }}</td>
					<td>{{ $nguoichaogia->skype }}</td>
					<td>
						@if($nguoichaogia->status == 0)
						Chưa nhận
						@else($nguoichaogia->status == 1)
						Nhận việc	
						@endif
					</td>
					<td>
						@if($nguoichaogia->status == 0)
						<a class="btn btn-info" href="{{route('chapnhanchaogia',['id'=>$nguoichaogia->id,'id_work'=>$nguoichaogia->id_work])}}" role="button"> <i class="glyphicon glyphicon-ok"></i> </a></td>
						@endif
						<td>
							<a class="btn btn-success" data-toggle="modal" href='#modal-{{$nguoichaogia->id}}'> Chi tiết</a>
							@if($nguoichaogia->status !=0)
							<a class="btn btn-primary" data-toggle="modal" href='#modal-{{$nguoichaogia->id}}d'>Đánh giá </a>
							@endif
						</td>

						<div class="modal fade" id="modal-{{$nguoichaogia->id}}">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
										<p>Người chào giá:{{$nguoichaogia->nguoinhan->name}}</p>
										<p>Giá đề xuất:{{ $nguoichaogia->money }}</p>
										<p>Thời gian hoàn thành: 
											@if($nguoichaogia->tghoanthanh == 1)
											1 Ngày
											@elseif($nguoichaogia->tghoanthanh == 2)
											2 Ngày
											@elseif($nguoichaogia->tghoanthanh == 3)
											3 Ngày
											@elseif($nguoichaogia->tghoanthanh == 5)
											5 Ngày
											@elseif($nguoichaogia->tghoanthanh == 7)
											7 Ngày
											@elseif($nguoichaogia->tghoanthanh == 10)
											10 Ngày
											@elseif($nguoichaogia->tghoanthanh == 14)
											2 Tuần
											@elseif($nguoichaogia->tghoanthanh == 21)
											3 Tuần
											@elseif($nguoichaogia->tghoanthanh == 28)
											4 Tuần
											@elseif($nguoichaogia->tghoanthanh == 42)
											6 Tuần
											@endif
										</p>
										<p>Số điện thoại: {{ $nguoichaogia->phone }}</p>
										<p>Skype: {{ $nguoichaogia->skype }}</p>
										<p>Đề xuất thuyết phục</p>
										<p>{{ $nguoichaogia->content }}</p>
										@if(!empty($nguoichaogia->tailieu))
										<p>Tài liệu đính kèm: <a href="{{route('downloadtin',['id' => $nguoichaogia->id])}}"><i class="glyphicon glyphicon-download-alt"></i> </a>
										</p>
										@endif
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="modal-{{$nguoichaogia->id}}d">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
										<h4 class="text-center">Nhận xét</h4>
										<form action="{{route('nhanxet',['id'=>$nguoichaogia->id,'id_work'=>$nguoichaogia->id_work])}}" method="POST" role="form">
											{!!csrf_field()!!}
											<div class="form-group">
												<label for="">Nhận xét Freelance</label>
												<textarea name="nhanxet" id="input" class="form-control" rows="3" required="required">{{$nguoichaogia->nhanxet}}</textarea>
											</div>											
											<div class="form-group">
												<label for="">Đánh giá Freelance</label>
												<select name="danhgia" id="inputDanhgia" class="form-control" required="required">
													<option value="5" @if($nguoichaogia->danhgia == 5) selected @endif>Xuất sắc</option>
													<option value="4"  @if($nguoichaogia->danhgia == 4) selected @endif>Tốt</option>
													<option value="3"  @if($nguoichaogia->danhgia == 3) selected @endif>Khá</option>
													<option value="2"  @if($nguoichaogia->danhgia == 2) selected @endif>Trung bình</option>
													<option value="1"  @if($nguoichaogia->danhgia == 1) selected @endif>Tệ</option>
												</select>
											</div>
											<button type="submit" class="btn btn-primary">Đưa đánh giá</button>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</tr>
							@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{$nguoichaogias->links()}}
		</div>
	</div>
	@endsection
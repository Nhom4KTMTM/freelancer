@extends('backend')
@section('title','Thành phố')
@section('con','Thêm thành phố')
@section('content')
<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<strong>Thêm mới thành phố</strong>
					</div>
					<div class="card-block">
						<form action="" method="post">
							<div class="form-group">
								<label for="nf-email">Tên thành phố</label>
								<input type="text" id="nf-email" name="name" class="form-control">
								@if($errors->has('name'))
									<span class="text-danger">{{$errors->first('name')}}</span>
								@endif
							</div>
							<div class="form-group row">
                                            <label class="col-md-3 form-control-label">Trạng thái</label>
                                            <div class="col-md-9">
                                                <label class="radio-inline" for="inline-radio1">
                                                    <input type="radio" id="inline-radio1" name="status" value="1" checked>Hiện
                                                </label>
                                                <label class="radio-inline" for="inline-radio2">
                                                    <input type="radio" id="inline-radio2" name="status" value="0">Ẩn
                                                </label>
                                            </div>
                                        </div>
					
					</div>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="card-footer">
						<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Thêm mới</button>
					</div>
						
				</div>
				</form>                                               
			</div>
		</div>
	</div>
</div>
@stop
@extends('backend')
@section('title','Banner')
@section('con','Thêm banner')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Thêm mới banner</strong>
                    </div>
                    <div class="card-block">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nf-email">Tên banner</label>
                                <input type="text" id="nf-email" name="name" class="form-control" value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nf-email">Đường dẫn</label>
                                <input type="text" id="nf-email" name="link" class="form-control" value="{{old('link')}}">
                                @if($errors->has('link'))
                                    <span class="text-danger">{{$errors->first('link')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nf-email">Thứ tự</label>
                                <input type="text" id="nf-email" name="thutu" class="form-control" value="{{old('thutu')}}">
                                @if($errors->has('thutu'))
                                    <span class="text-danger">{{$errors->first('thutu')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                               <label for="nf-email">File ảnh</label>
                               <input type="file" id="file-input" name="image">
                                @if($errors->has('image'))
                                    <span class="text-danger">{{$errors->first('image')}}</span>
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
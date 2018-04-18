@extends('backend')
@section('title','Danh mục')
@section('con','Thêm danh mục')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Thêm mới danh mục</strong>
                    </div>
                    <div class="card-block">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nf-email">Tên danh mục</label>
                                <input type="text" id="nf-email" name="name" class="form-control">
                                @if($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <fieldset class="form-group">
                                        <label>Danh mục cha</label>
                                        <div class="controls">
                                            <select id="select2-1" class="form-control" name="parent">
                                                <option value="0">Danh mục cha</option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </fieldset>
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
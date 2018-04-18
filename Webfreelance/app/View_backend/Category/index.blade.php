@extends('backend')
@section('title','Danh mục')
@section('content')
 <div class="container-fluid">
    <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Danh mục
                            <div class="card-actions">
                                <a href="http://l-lin.github.io/angular-datatables/#/gettingStarted">
                                    <small class="text-muted">docs</small>
                                </a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên danh mục</th>
                                        <th>Hình ảnh</th>
                                        <th>Danh mục cha</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        <td>{{$cat->name}}</td>
                                        <td><img src="{{url('Uploads/image')}}/{{$cat->image}}" alt="" width="100px"></td>
                                        <td>
                                             @if($cat->cat_parent)
                                                 {{$cat->cat_parent->name}}
                                             @else
                                                  Danh mục cha
                                              @endif
                                        </td>
                                        <td>
                                            @if($cat->status==0)
                                          <span class="label label-default label-lg">Ẩn</span>
                                          @else  
                                          <span class="label label-primary label-lg">Hiện</span>
                                          @endif
                                        </td>
                                        <td>
                                           
                                            <a class="btn btn-info" href="{{route('backend.suadanhmuc',['id'=>$cat->id])}}">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger" href="{{route('backend.xoadanhmuc',['id'=>$cat->id])}}">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@stop

@extends('backend')
@section('title','Banner')
@section('content')
 <div class="container-fluid">
    <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Banner
                            
                        </div>
                        <div class="card-block">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên banner</th>
                                        <th>Thứ tự</th>
                                        <th>Đường dẫn</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($slider as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        <td><img src="{{url('Uploads/image')}}/{{$cat->image}}" alt="" width="120px"></td>
                                        <td>{{$cat->name}}</td>
                                        <td>{{$cat->thutu}}</td>
                                        <td>{{$cat->link}}</td>
                                        <td>
                                             @if($cat->status==0)
                                          <span class="label label-default label-lg">Ẩn</span>
                                          @else  
                                          <span class="label label-primary label-lg">Hiện</span>
                                          @endif
                                        </td>
                                        <td>
                                             <a class="btn btn-info" href="{{route('backend.suabanner',['id'=>$cat->id])}}">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger" href="{{route('backend.xoabanner',['id'=>$cat->id])}}">
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

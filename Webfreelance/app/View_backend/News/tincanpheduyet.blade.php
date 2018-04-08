@extends('backend')
@section('title','Quản lý tin')
@section('con','Tin cần phê duyệt')
@section('content')
 <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Tin cần phê duyệt
                            
                        </div>
                        <div class="card-block">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Người đăng</th>
                                        <th>Tiêu đề tin</th>
                                        <th>Thể loại</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày hết hạn</th>
                                        <th>Phê duyệt</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($new as $new)
                                    <tr>
                                        <td>{{$new->id}}</td>
                                        <td>{{$new->khachhang->name}}</td>
                                        <td>{{$new->name}}</td>
                                        <td>{{$new->linhvuctin->name}}</td>
                                        <td>{{$new->created_at}}</td>
                                        <td>{{$new->tg_hethan}}</td>
                                        <td><a class="btn btn-info" href="{{route('backend.pheduyet',['id'=>$new->id])}}">
                                               <i class="fa fa-check-square-o"></i>
                                            </a></td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('backend.chitiettinpheduyet',['id'=>$new->id])}}" title="" ><i class="fa fa-search-plus"></i></a>
                                            <a class="btn btn-danger" href="{{route('backend.xoatin',['id'=>$new->id])}}">
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
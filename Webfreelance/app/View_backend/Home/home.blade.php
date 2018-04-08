@extends('backend')
@section('title','Tổng quan')
@section('con','Tổng quan')
@section('content')
<div class="container-fluid">
	<div class="animated fadeIn">
                    <div class="row row-equal">
                        <div class="col-sm-6 col-md-6">
                            <div class="card card-inverse card-info">
                                <div class="card-block">
                                    <div class="h1 text-muted text-xs-right m-b-2">
                                        <i class="icon-people"></i>
                                    </div>
                                    <div class="h4 m-b-0">{{ $tongviecdang }}</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Việc đang đăng</small>
                                    
                                </div>
                            </div>
                        </div>
                        <!--/col-->
                        <!--/col-->
                        <div class="col-sm-6 col-md-6">
                            <div class="card card-inverse card-success">
                                <div class="card-block">
                                    <div class="h1 text-muted text-xs-right m-b-2">
                                        <i class="icon-speech"></i>
                                    </div>
                                    <div class="h4 m-b-0">{{ $tongvieccanpheduyet }}</div>
                                    <small class="text-muted text-uppercase font-weight-bold">Việc cần phê duyệt</small>                                    
                                </div>
                            </div>
                        </div>
                        <!--/col-->
                        <!--/col-->
                    </div>
                    <!--/row-->
                    <div class="card">
                        <div class="card-header">
                            Việc cần phê duyệt
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
                                        <td><a class="btn btn-info" href="{{route('backend.homepheduyet',['id'=>$new->id])}}">
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
                    <!--/.card-->
                    <!--/.row-->
                    <!--/.row-->
                </div>	
</div>
@stop

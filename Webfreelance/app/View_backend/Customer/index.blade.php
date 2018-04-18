@extends('backend')
@section('title','Khách hàng')
@section('content')
 <div class="container-fluid">
    <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Khách hàng
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
                                        <th>Ảnh</th>
                                        <th>Tên Khách hàng</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Lĩnh vực</th>
                                        <th>Tiền kiếm được</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        
                                        <td><img src="{{url('Uploads/image')}}/{{$cat->image}}" alt="" width="120px"></td>
                                        <td>{{$cat->name}}</td>
                                        <td>{{$cat->email}}</td>
                                        <td>{{$cat->phone}}</td>
                                        <td>{{$cat->linhvucc->name}}</td>
                                        <td>{{number_format($cat->money)}}</td>
                                        <td>
                                           
                                            <a class="btn btn-info" href="{{route('backend.chitiet',['id'=>$cat->id])}}">
                                                <i class="fa fa-search-plus"></i>
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

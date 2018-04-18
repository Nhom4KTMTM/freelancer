@extends('backend')
@section('title','Tài khoản')
@section('content')
 <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Tài khoản
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
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $city)
                                    <tr>
                                        <td>{{$city->id}}</td>
                                        <td><img src="{{url('Uploads/image')}}/{{$city->image}}" alt="" width="100px"></td>
                                        <td>{{$city->name}}</td>
                                        <td>{{$city->email}}</td>
                                        <td>
                                            @if($city->status==1)
                                          <span class="label label-primary label-lg">Kích hoạt</span>
                                            @else
                                           <span class="label label-default label-lg">Không kích hoạt</span>
                                            @endif
                                        </td>
                                        <td>
                                           
                                            <a class="btn btn-info" href="{{route('backend.suataikhoan',['id'=>$city->id])}}">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger" href="{{route('backend.xoataikhoan',['id'=>$city->id])}}">
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
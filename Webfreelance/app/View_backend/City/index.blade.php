@extends('backend')
@section('title','Thành phố')
@section('content')
 <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Thành phố
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
                                        <th>Tên thành phố</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($city as $city)
                                    <tr>
                                        <td>{{$city->id}}</td>
                                        <td>{{$city->name}}</td>
                                        <td>
                                            @if($city->status==1)
                                          <span class="label label-primary label-lg">Hiện</span>
                                            @else
                                           <span class="label label-default label-lg">Ẩn</span>
                                            @endif
                                        </td>
                                        <td>
                                           
                                            <a class="btn btn-info" href="{{route('backend.suathanhpho',['id'=>$city->id])}}">
                                                <i class="fa fa-edit "></i>
                                            </a>
                                            <a class="btn btn-danger" href="{{route('backend.xoathanhpho',['id'=>$city->id])}}">
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
@extends('layout')
@section('content')
<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="slider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class=""></li>
							<li data-target="#slider" data-slide-to="1" class=""></li>
							<li data-target="#slider" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item">
								<img src="{{url('/')}}/public/frontend/img/slider/slide1.jpg" width="100%">
								
							</div>
							<div class="item">
								<img src="{{url('/')}}/public/frontend/img/slider/slide2.png" width="100%">
								<div class="container">
									
								</div>
							</div>
							<div class="item active">
								<img src="{{url('/')}}/public/frontend/img/slider/slide3.jpg" width="100%">
								
							</div>
						</div>
						<a class="left carousel-control" href="#" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="text text-center text-primary">Dịch vụ thuê Freelance</h2>
					<p class="text-center">Được cung cấp và đảm bảo 100%</p>
				</div>
			</div>
			<div class="row">
				@foreach($category as $cat)
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<a href="{{route('timviec')}}?category={{$cat->id}}" ><img src="{{url('/Uploads')}}/image/{{$cat->image}}" class="img-responsive" alt="Image" width="100%"></a>
					<h4 class="text text-center"><a href="{{route('timviec')}}?category={{$cat->id}}">{{$cat->name}}</a></h4>
				</div>
				@endforeach
			</div>
			<div class="row">
				<br>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p class="text-center"><a href="" class="btn btn-primary btn-lg">Xem tất cả dịch vụ</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3 class="text text-center text-primary">VINH DANH TRÊN BÁO CHÍ</h3>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<p class="text-center"><img src="{{url('/')}}/public/frontend/img/ex.png" alt="Image"></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<p class="text-center"><img src="{{url('/')}}/public/frontend/img/logoDantricomvn.png" alt="Image"></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
					<p class="text-center"><img src="{{url('/')}}/public/frontend/img/sea.png" alt="Image"></p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
					<p class="text-center"><img src="{{url('/')}}/public/frontend/img/cnn.png" alt="Image"></p>
				</div>
			</div>
			<div class="row">
				<br>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h1 class="text-center"><b>2300</b></h1>
					<h4 class="text-center"><b>FREELANCERS</b></h4>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h1 class="text-center"><b>230000</b></h1>
					<h4 class="text-center"><b>DỰ ÁN ĐÃ ĐĂNG</b></h4>
				</div>
			</div>
@endsection
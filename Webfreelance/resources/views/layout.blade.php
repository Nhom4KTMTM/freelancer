<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Freelancer</title>
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/frontend/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" href="{{url('/')}}/public/frontend/css/style.css">

</head>
<body>
	<header class="header">
		<nav class="navbar navbar-default menu" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="{{url('/')}}/public/frontend/img/logo.png" alt="" height="100%" width="70px"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Thuê Freelancer</a></li>
						<li><a href="#">Tìm việc</a></li>
						<li><a href="#">Đăng việc làm-tuyển Freelancer</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<img src="{{url('/')}}/public/frontend/img/2209.jpg" width="50px">
								<span class="hidden-md-down">Lê Quôc Huy <i class="glyphicon glyphicon-chevron-down"></i></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#" title="">Góc làm việc</a></li>
								<li><a href="#">Tài khoản cá nhân</a></li>
								<li><a href="#">Cập nhật thông tin cá nhân</a></li>
								<li><a href="#">Đăng xuất</a></li>
							</ul>
						</li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>	
	</header><!-- /header -->
	<!-- main -->
	<main class="main">
		<div class="container-fluid">
			@yield('content')
		</div>	
	</main>
	<!-- end main -->
	<footer class="footer" style="background:#4d4d4d">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
					<a href="" title=""><img src="{{url('/')}}/public/frontend/img/logo.png" alt="" width="100%"></a>
				</div>
				<div class="col-xs-6 col-sm-5 col-md-5 col-lg-5">
					<br>
					<p style="color:#fff">Freelancer Việt Nam - Lựa chọn số 1 của doanh nghiệp <br>© 2013 - 2017 vLance.vn</p>
					<p><a href="" title="" style="color:#fff">Giới thiệu|</a>
						<a href="" title="" style="color:#fff">Liên hệ|</a>
						<a href="" title="" style="color:#fff">Quy định</a></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
						<h5 style="color:#fff">KẾT NỐI NGAY</h5>
						<i class="fab fa-facebook fa-2x" style="color:#fff"></i>&nbsp;
						<i class="fab fa-google-plus fa-2x" style="color:#fff"></i>&nbsp;
						<i class="fab fa-twitter-square fa-2x" style="color:#fff"></i>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<small  style="color:#fff">Chủ quản: Công ty TNHH vLance Việt Nam - Giấy phép đăng ký kinh doanh số 0106252670 - Cấp ngày 05/08/2013 - Tại Sở Kế hoạch và Đầu tư Hà Nội.
						Địa chỉ: Tầng 4, số 2, ngõ 68, đường Nam Đồng, phường Nam Đồng, quận Đống Đa, Hà Nội - Hỗ trợ: hotro@vlance.vn - ĐT: (+84)-024.6684.1818</small>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="{{url('/')}}/public/frontend/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="{{url('/')}}/public/frontend/js/bootstrap.min.js"></script>	
	</body>
	</html>

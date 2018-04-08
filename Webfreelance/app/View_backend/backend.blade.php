<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LeafUI Admin - UI Admin Kit Powered by Bootstrap 4">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="LeafUI Admin - UI Admin Kit Powered by Bootstrap 4">
    <!-- <link rel="shortcut icon" href="{{url('/')}}/public/Backend/assets/ico/favicon.png"> -->
    <title>Quản lý frelance</title>
    <!-- Main styles for this application -->
    <link href="{{url('/')}}/public/Backend/assets/css/style.css" rel="stylesheet">
</head>
<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#"></a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">☰</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right hidden-md-down">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{url('/')}}/public/Backend/assets/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="hidden-md-down">admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-xs-center">
                            <strong>Tài khoản</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-lock"></i>Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-title">
                    TỔNG QUAN
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('backend.home')}}"><i class="icon-speedometer"></i>Tổng quan</a>
                </li>
                <li class="divider"></li>
                <li class="nav-title">
                    CHỨC NĂNG
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-image fa-xs"></i> Banner</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.banner')}}"><i class="fa fa-image"></i>Banner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.thembanner')}}"><i class="fa fa-image"></i>Thêm banner</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Danh mục</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.danhmuc')}}"><i class="icon-puzzle"></i> Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.themdanhmuc')}}"><i class="icon-puzzle"></i>Thêm danh mục</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-map"></i>Thành phố</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.thanhpho')}}"><i class="icon-map"></i> Thành phố</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.themthanhpho')}}"><i class="icon-map"></i>Thêm thành phố</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-newspaper-o"></i>Quản lý tin</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.tincanpheduyet')}}"><i class="fa fa-newspaper-o"></i>Tin cần phê duyệt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.tindangdang')}}"><i class="fa fa-newspaper-o"></i> Tin đang đăng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.tinhethan')}}"><i class="fa fa-newspaper-o"></i> Tin hết thời hạn</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-user"></i>TÀI KHOẢN</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.khachhang')}}"><i class="icon-user"></i>Khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.taikhoan')}}"><i class="icon-user"></i> Ban quản trị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend.themtaikhoan')}}"><i class="icon-user"></i> Thêm quản trị</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Main content -->
    
    <main class="main">
    <ol class="breadcrumb r-0">
                <li><a href="#">Home</a></li>
                <li><a href="#">@yield('title')</a></li>
                <li class="active">@yield('con')</li>
            </ol>
        <div class="row"> 
           <!-- Lỗi -->
           <div class="col-lg-12">
             @if(Session::has('success'))
             <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('success')!!}
            </div>
            
            @endif
            @if(Session::has('error'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {!!Session::get('error')!!}
            </div>
            @endif
          </div>
        </div>
        <!-- Breadcrumb -->
        @yield('content')
        <!-- /.conainer-fluid -->
    </main>
    <footer class="footer">
        <span class="text-left">
            <a href="https://genesisui.com/theme.html?id=alba">Freelance</a>
        </span>
        <span class="pull-right">
            Làm bởi <a href="">Nhóm 4</a>
        </span>
    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{url('/')}}/public/Backend/assets/js/libs/jquery.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/tether.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/bootstrap.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/pace.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{url('/')}}/public/Backend/assets/js/libs/Chart.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/views/shared.js"></script>
    <!-- GenesisUI main scripts -->
    <script src="{{url('/')}}/public/Backend/assets/js/app.js"></script>
    <!-- Plugins and scripts required by this views -->
    <script src="{{url('/')}}/public/Backend/assets/js/libs/jquery.maskedinput.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/moment.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/select2.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/daterangepicker.min.js"></script>
    <!-- Custom scripts required by this view -->
    <script src="{{url('/')}}/public/Backend/assets/js/views/forms.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/public/Backend/assets/js/libs/dataTables.bootstrap.min.js"></script>
    <!-- Custom scripts required by this view -->
    <script src="{{url('/')}}/public/Backend/assets/js/views/tables.js"></script>

</body>
</html>
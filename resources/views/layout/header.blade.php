    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                                @if (request()->session()->has('hotenUser'))
                                @if (request()->session()->get('role')=='user')
                                <a href="useradmin">{{ request()->session()->get('hotenUser')}} </a>
                                 <div class="register">
                                <a href="/logout"> Đăng xuất</a>
                            </div>
                                @else
                                <a href="/admin">{{ request()->session()->get('hotenUser')}} </a>
                                 <div class="register">
                                <a href="/logout"> Đăng xuất</a>
                            </div>
                                @endif

                                @else
                                <a href="/showlogin">Đăng Nhập</a>
                                @endif

                            </div>
                           
                        </div>
                        <!-- Search Button Area -->

                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-5 col-sm-6">
                            <!--  Top Social bar start -->
                            <marquee direction="right">CHÀO MỪNG ĐẾN VỚI KHÁM PHÁ ĐÀ THÀNH</marquee>
                        </div>
                    <div class="col-7 col-sm-6">
                            <div class="signup-search-area d-flex align-items-center justify-content-end">

                                <!-- Search Button Area -->
                                <div class="search_button">
                                        <a class="searchBtn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-hidden-form">
                                        <form action="tim-kiem" method="get">
                                                {{ csrf_field() }}
                                            <input type="search" name="search" id="search-anything" placeholder="Tìm kiếm">
                                            <input type="submit" value="" class="d-none">
                                            <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </form>
                                    </div>
                            </div>
                        </div>

            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="/" class="yummy-logo"><img src="../../public/img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Trang chủ <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Khám phá</a>
                                    <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                        <a class="dropdown-item" href="/danhmuc/1">Địa điểm ăn uống</a>
                                        <a class="dropdown-item" href="/danhmuc/2">Du lịch</a>
                                        <a class="dropdown-item" href="/danhmuc/3">Giải trí</a>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/listblog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Liên hệ</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

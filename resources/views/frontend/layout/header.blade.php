<header class="header-area">
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="frontend/img/logovku.png" alt="" style=""></a>
                            </div>
                            <div class="login-content">
                                <a href="{{url('login')}}">Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <div class="classy-navbar-toggler">
                            <span class="nabarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('welcome')}}">Trang chủ</a></li>
                                    <li><a href="{{route('about.us')}}">Giới thiệu</a></li>
                                    <li><a href="#">Thông tin</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('rules')}}">Nội quy KTX</a></li>
                                            <li><a href="{{route('sevice')}}">Dịch vụ</a></li>
                                            <li><a href="{{route('activity')}}">Hoạt động</a></li>
                                            <li><a href="{{route('fee')}}">Bảng giá</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{('student')}}">Sinh viên</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('student')}}">Thông báo</a></li>
                                            <li><a href="{{route('student')}}">Điện &amp; nước</a></li>
                                            <li><a href="{{route('student')}}">Thanh toán</a></li>
                                            <li><a href="{{route('student')}}">Tổ quản lí</a></li>
                                        </ul>                                       
                                    </li>
                                    <li><a href="{{route('course')}}">Đăng kí nội trú</a></li>
                                    <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(84) 236 366 7113</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
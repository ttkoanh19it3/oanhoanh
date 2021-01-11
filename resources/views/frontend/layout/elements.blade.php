<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KÍ TÚC XÁ</title>

    <link rel="icon" href="{{('frontend/img/core-img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom-icon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/classy-nav.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">

</head>

<body>
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

     @include('frontend.layout.header')

    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Đăng kí nội trú online</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="course.html">Đăng kí nội trú</a></li>
            <li class="brea active" aria-current="page">Đăng kí nội trú online</li>
        </ol>
    </nav>        

    <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">
            
    <div class="container">
        <div class="row justify-content-between">
                <div class="contact-form">
                    <h3>Đăng kí nội trú kí túc xá</h3>
                    <p></p><p> </p>                

                    <form action="succeed.html" action="mailto: bttrang.19it3@sict.udn.vn" method="get" >
                            <div class="container"></div>
                            <div id="exTab2" >
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="1">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Họ và tên đệm</label>
                                                <input type="text" name="hotendem" class="form-control" placeholder="Họ Và Tên Đệm" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Tên</label>
                                                <input type="text" name="ten" class="form-control" placeholder="Tên" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Mã sinh viên</label>
                                                <input type="text" name="masv" class="form-control" placeholder="Mã Sinh Viên" value="">
                                            </div>                                            
                                        </div>
                                        </br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Lớp</label>
                                                <input type="text" name="lop" class="form-control" placeholder="Lớp" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Ngày Sinh </label>
                                                <input type="text" name="ngsinh" class="form-control" value="" placeholder="dd/mm/yyyy"><br />
                                            </div> 
                                            <div class="col-md-4">
                                                <label>Giới Tính</label> <br>
                                                Nam <input type="radio" name="sex"  value="0"> &nbsp &nbsp &nbsp &nbsp &nbsp

                                                Nữ <input type="radio" name="sex" value="1">
                                            </div>                                        
                                        </div>
                                        </br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Số CMND</label>
                                                <input type="text" name="cmnd" class="form-control" placeholder="Số CMND" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Ngày Cấp</label>
                                                <input type="text" name="ngcap" class="form-control" placeholder="dd/mm/yyyy" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Nơi Cấp</label>
                                                <input type="Text" name="noicap" class="form-control" placeholder="Ví dụ: Đà Nẵng" value="">
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Tên Phụ huynh</label>
                                                <input type="Text" name="tenphuhuynh" class="form-control" placeholder="Tên:" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Số điện thoại GD</label>
                                                <input type="text" name="sodtgd" class="form-control" placeholder="Số ĐT gia đình" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Hộ khẩu thường trú</label>
                                                <input type="text" name="hokhau" class="form-control" placeholder="Hộ khẩu thường trú" value="">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Số DT cá nhân</label>
                                                <input type="Text" name="sodt" class="form-control" placeholder=" Số ĐT cá nhân" value=""><br />
                                            </div>
                                            <div class="col-md-4">
                                                    <label id="txtdki">Địa chỉ email</label>
                                                    <input type="Text" name="email" class="form-control" placeholder="Email" value="">
                                                </div>                                        
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <button class="btn academy-btn mt-30" type="submit">Gửi</button>
                        <hr width="100%">
                    </form>
                </div>
            
        </div>
    </div>

        </div>
    </section>
    
     @include('frontend.layout.footer')

    <script src="{{asset('/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>

    <script src="{{asset('/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    
    <script src="{{asset('/frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('/frontend/js/active.js')}}"></script>
</body>

</html>
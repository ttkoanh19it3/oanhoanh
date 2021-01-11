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
            <h2>Hoạt động</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="activity.html">Hoạt động</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chủ nhật xanh tháng 7</li>
        </ol>
    </nav>

    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h6>Hoạt động chủ nhật xanh tháng 7</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>Sáng nay 12/07/2020 TQL KTX khu V đã tổ chức ra quân dọn vệ sinh trong và ngoài khuôn viên Ký Túc Xá với sự tham gia hơn 100 đoàn viên thanh niên, sinh viên nội trú KTX tham gia.</p>
                <p>Buổi sáng hôm nay, chúng ta đã làm sạch cỏ ở phía trước KTX , 2 bên hàng rào, quét dọn, thu gom rác thải xung quanh khu A và B, lau chùi cầu thang, vệ sinh, lau dọn phòng tự học, quét mạng nhện trần hành lang.</p>
                <p>Các bạn sinh viên tham gia đầy đủ, ra quân với tinh thần hăng hái, nhuyệt huyết, góp phần làm cho KTX xanh sạch đẹp</p>
                <p>Một lần nữa cảm ơn tinh thần lao động tích cực của các bạn.</p>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/bg-img/107736159_1190004161335293_7496989251174671073_o.jpg" alt="">
                        <img src="img/bg-img/106552284_1190004098001966_194316555652169540_o.jpg" alt="">
                        <img src="img/bg-img/106508741_1190004034668639_2297218381329087637_o.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
  @include('frontend.layout.dki')
  @include('frontend.layout.footer')

    <script src="{{asset('/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>

    <script src="{{asset('/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    
    <script src="{{asset('/frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('/frontend/js/active.js')}}"></script>
</body>

</html>
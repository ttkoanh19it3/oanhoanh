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
            <h2>Nội quy KTX</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Thông tin</li>
            <li class="brea active" aria-current="page">Nội quy KTX</li>
        </ol>
    </nav>         

    <div>
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_01.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_02.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_03.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_05.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_06.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_07.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_08.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_09.jpg" width="1000">
        <img src="http://ktxdn.vn/wp-content/uploads/2017/01/merged_Page_10.jpg" width="1000">
    </div>

    <div class="container">
        <div class="vc_btn3-container vc_btn3-right">
            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-primary" href="http://ktxdn.vn/wp-content/uploads/2018/02/Quy-chế-quản-lý-KTX-2018-1.pdf" title="Quy chế" target="_blank">Download</a>
        </div>
        <div class="vc_empty_space"  style="height: 32px" >
            <span class="vc_empty_space_inner"></span>
        </div>        
    </div>
 
     @include('frontend.layout.footer')

    <script src="{{asset('/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>

    <script src="{{asset('/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    
    <script src="{{asset('/frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('/frontend/js/active.js')}}"></script>
</body>

</html>
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
            <h2>Giới thiệu</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
        </ol>
    </nav>

    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Chào mừng đến với KTX Đại học CNTT & TT Việt Hàn</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <h6>Địa chỉ: Nam Kỳ Khởi Nghĩa, Ngũ Hành Sơn, Đà Nẵng</h6>
                    <p>Kí túc xá Trường Đại học Công nghệ thông tin và Truyền thông Việt - Hàn thuộc Đô thị Đại học Đà Nẵng, nằm trên địa bàn phường Hòa Quý, quận Ngũ Hành Sơn, Tp. Đà Nẵng, là nơi sinh hoạt và học tập của hơn 2000 sinh viên Đại học Đà Nẵng, trong đó có trường Đại học Công nghệ thông tin và Truyền thông Việt - Hàn và Khoa Y dược.</p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <h6>Đối tượng được thuê phòng ở kí túc xá trường:</h6>
                    <p>Sinh viên đang học tại trường.<br />
                    Sinh viên, học viên cao học các trường lân cận.<br />
                    Các đơn vị tổ chức tập huấn, đào tạo, bồi dưỡng tại trường hoặc khu vực lân cận.<br />
                    Những cá nhân, tổ chức đang sinh sống, học tập và làm việc tại Tp. Đà Nẵng có nhu cầu thuê phòng ở</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/bg-img/105588246_169952601231379_2081956209976896732_o.jpg" alt="">
                        <img src="img/bg-img/107838123_1190004058001970_231206781669535749_o.jpg" alt="">
                        <img src="img/bg-img/107938673_1190003938001982_6660525752526758163_o.jpg" alt="">
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
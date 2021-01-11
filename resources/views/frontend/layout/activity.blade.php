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
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hoạt động</li>
        </ol>
    </nav>   
    
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Các hoạt động tiêu biểu</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Trung thu cho em</h5>
                            <span>17/8/2020</span>
                            <p>Chương trình tình nguyện trung thu cho em gẫy quỹ ủng hộ trẻ em hiếu học.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/71244534_916380532055597_3471605022926569472_o.jpg);"></div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>Chủ nhật xanh</h5>
                            <span>12/7/2020</span>
                            <p> Các bạn sinh viên sẽ ra quân dọn vệ sinh khuôn viên phòng ở tại kí túc xá để đảm bảo một môi trường sống đáp ứng ba tiêu chí xanh – sạch – đẹp.</p>
                            <a href="cnxt7.html" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/107938673_1190003938001982_6660525752526758163_o.jpg);"></div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Giáo dục giới tính</h5>
                            <span>30/6/2020</span>
                            <p>Các bạn sinh viên nội trú Ký túc xá được các chuyên gia đến từ Cục dân số Thành phố Đà Nẵng tập huấn về giáo dục giới tính.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/105551728_169952954564677_4004612592679977256_n.jpg);"></div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Radio yêu thương</h5>
                            <span>29/6/2020</span>
                            <p>Nơi gửi gắm nhắn nhủ những tâm tư tình cảm ẩn danh, được nghe nhạc hàng tuần, thỏa sức thể hiện bản thân với tinh thần văn nghệ.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/1920x1080-3-scaled.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
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
    

    @include('frontend.layout.header')

    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            @foreach ($banner as $item)
            <div class="single-hero-slide bg-img" style="background-image: url(upload/{{$item->imgurl}}); height: 600px;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Đại học Đà Nẵng</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Kí túc xá <br>ĐẠI HỌC VIỆT - HÀN</h2>
                                <a href="about-us.html" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- Single Hero Slide -->


     

        </div>
    </section>
    

    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>Sức chứa</h4>
                            <p>Tổng sức chứa cho hơn 4000 sinh viên.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <h4>Internet</h4>
                            <p>Hệ thống wifi nhanh và miễn phí, liên tục trong 24h.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            <h4>Thể thao</h4>
                            <p>Kí túc xá có hai khu thể thao phức hợp cho sinh viên.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-icon">
                            <i class="icon-like"></i>
                        </div>
                        <div class="course-content">
                            <h4>Phòng ở</h4>
                            <p>Hệ thống phòng ở sạch sẽ, hiện đại, đầy đủ tiện nghi, đảm bảo an ninh trật tự.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                            <h4>Ăn uống</h4>
                            <p>sẽ được trải nghiệm, được tham gia các hoạt động vui chơi, giải trí lành mạnh tại kí túc xá.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="course-content">
                            <h4>Hoạt động</h4>
                            <p>Sinh viên sẽ được trải nghiệm, được tham gia các hoạt động vui chơi, giải trí lành mạnh tại kí túc xá.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Các hoạt động tiêu biểu</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Trung thu cho em</h5>
                            <span>Dịp trung thu hằng năm</span>
                            <p>Chương trình tình nguyện trung thu cho em gẫy quỹ ủng hộ trẻ em hiếu học.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(frontend/img/bg-img/71244534_916380532055597_3471605022926569472_o.jpg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>Chủ nhật xanh</h5>
                            <span>Chủ nhật hàng tháng</span>
                            <p> Các bạn sinh viên sẽ ra quân dọn vệ sinh khuôn viên phòng ở tại kí túc xá để đảm bảo một môi trường sống đáp ứng ba tiêu chí xanh – sạch – đẹp.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(frontend/img/bg-img/107938673_1190003938001982_6660525752526758163_o.jpg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Giáo dục giới tính</h5>
                            <span>Mỗi năm một lần</span>
                            <p>Các bạn sinh viên nội trú Ký túc xá được các chuyên gia đến từ Cục dân số Thành phố Đà Nẵng tập huấn về giáo dục giới tính.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(frontend/img/bg-img/105551728_169952954564677_4004612592679977256_n.jpg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Radio yêu thương</h5>
                            <span>Hai tuần một lần</span>
                            <p>Nơi gửi gắm nhắn nhủ những tâm tư tình cảm ẩn danh, được nghe nhạc hàng tuần, thỏa sức thể hiện bản thân với tinh thần văn nghệ.</p>
                            <a href="#" class="btn academy-btn btn-sm">Xem thêm</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/1920x1080-3-scaled.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>Bạn có muốn đăng kí nội trú?</h3>
                        <a href="elements.html" class="btn academy-btn">Đăng kí ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layout.footer')
    <script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>

    <script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    
    <script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/active.js')}}"></script>
</body>

</html>
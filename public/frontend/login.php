!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KÍ TÚC XÁ</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function validate(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if ( username === "btttrang.19it3@sict.udn.vn" && password === "thutrang"){
                alert ("Đăng nhập thành công!");
            }
            else{
            alert("Sai email hoặc mật khẩu!");
        }
     return false;
     }
    </script>

</head>

<body>
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <header class="header-area">

        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Đăng nhập</h2>
                    <form class="login-form" method="get" action="index2.html">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                            <input type="text" class="form-control" id="username" value="btttrang.19it3@sict.udn.com" placeholder="Nhập email của bạn">
                    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" value="thutrang" placeholder="Nhập mật khẩu">
                        </div>
              
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Ghi nhớ</small>
                            </label>
                        <button type="submit" onclick="validate()" class="btn btn-login float-right">Đăng nhập</button>
                    </div>  
                    </form>
                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://media.thuonghieucongluan.vn/uploads/2018_08_15/bannerkhutay-1534293393.jpg" alt="First slide">
                    </div>
                </div>
            </div>      
        </div>
    </section>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>
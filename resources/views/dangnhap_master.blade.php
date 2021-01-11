<!DOCTYPE html>
<html class="no-js" lang="">
   	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<title>@yield('title')</title>
    	<meta name="description" content="">
     	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="{{asset('img/image.png')}}">	
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style type="text/css">
            .login-sec h2:after{content:" "; width:100px; height:5px; background: #83c331; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        </style>
    </head>
    <body >
		<section class="login-block" style="background: #61ba6d;background:-webkit-linear-gradient(to right, #61ba6d, #83c331);background: linear-gradient(to right, #61ba6d, #83c331);" >
    		<div class="container" >
    			<div class="row" style="margin-left: 330px; width: 900px;">
        			<div class="col-md-6 login-sec" style="color:black; ">
            			<h2 class="text-center" style="color:#61ba6d;">Ký túc xá <br> <br>Đại học CNTT & TT Việt Hàn</h2>
							@yield('content')
					</div>
                    
            </div>
        </section>
    </body>
</html>
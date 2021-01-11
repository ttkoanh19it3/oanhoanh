@extends('dangnhap_master')
@section('title','Login')
@section('content')
	<form method="post" class="login-form" action="{{url('login')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }} ">
		<div class="form-group">
			<label for="exampleInputEmail1" class="text-uppercase">Email:</label>
			<input type="email" class="form-control" name="email" placeholder="Email"
				required maxlength="30">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1" class="text-uppercase">Password:</label>
			<input type="Password" class="form-control" name="password" required autocomplete="off" placeholder="Mật khẩu"
            	required maxlength="30">
		</div>
		<div class="form-check" style="margin-left: 30px;">
			<button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #61ba6d, #83c331);">Đăng nhập</button>
			@if($errors->has('password'))
				<span id="msg" class="errorMsg">{{$errors->first('password')}}</span>
			@endif
			@if(Session::has('flag'))
				<span id="msg" class="errorMsg">{{Session::get('message')}}</span>
			@endif
		</div>
	</form>
	<div class="login-bottom-links">
		<a href="{{route('register')}}" class="link">Tạo tài khoản</a>
		<br>
       	<a href="{{route('forgot')}}" class="links">Quên mật khẩu ?</a>
       	<br>
       	<a href="{{route('welcome')}}"><button style="margin-left: 500px; width: 100px;" >Quay về</button></a>
	</div>	
@endsection
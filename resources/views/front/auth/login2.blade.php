<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>LogIn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ asset('plugins/modern-admin/css/bootstrap.min.ccs') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('plugins/modern-admin/css/style.ccs') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('plugins/modern-admin/css/font-awesome.ccs')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{asset('plugins/modern-admin/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('plugins/modern-admin/js/bootstrap.min.js') }}"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="{{ asset('plugins/modern-admin/images/logo.png') }}" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form>
		<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
</body>
</html>

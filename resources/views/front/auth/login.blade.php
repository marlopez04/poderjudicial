<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" href="{{ asset('plugins/modern-admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/modern-admin/css/style.css')}}">
</head>
<body id="login">
  <div class="login-logo">
  		<h2 class="form-heading">Juzgado IV </h2>
  </div>
  <div class="app-cam">
	{!! Form::open(['route'=>'front.auth.login', 'method' => 'POST']) !!}
		{!! Form::text('name', null,['class' => 'text', 'placeholder' => 'usuario'])!!}
		{!! Form::password('password', ['class' =>'password', 'placeholder' => '*********'])!!}
		{!! Form::submit('Acceder', ['class' => 'submit'])!!}
<!--
		<input type="text" class="text" value="Usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'usuario';}">

		<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
			<div class="clearfix"></div>
		</ul>
-->
	{!! Form::close()!!}
  </div>
</body>
</html>

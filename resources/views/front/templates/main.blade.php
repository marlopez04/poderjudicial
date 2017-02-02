<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Validation :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('plugins/modern-admin/css/bootstrap.min.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('plugins/modern-admin/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/modern-admin/css/font-awesome.css')}}"><!-- jQuery -->

<script src="{{ asset('plugins/modern-admin/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('plugins/modern-admin/js/bootstrap.min.js')}}"></script>

<!---------------------- por si las dudas  ---->

<script src="{{ asset('plugins/modern-admin/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('plugins/modern-admin/js/custom.js')}}"></script>
<!-- Graph JavaScript -->
<script src="{{ asset('plugins/modern-admin/js/d3.v3.js')}}"></script>
<script src="{{ asset('plugins/modern-admin/js/rickshaw.js')}}"></script>

<!---------------------- por si las dudas  ---->

</head>
<body>
<div id="wrapper">

   <!-- Header -->  
@include('front.templates.partials.header')

   <!-- Header -->

     <!-- Navigation -->
@include('front.templates.partials.nav')
     <!-- Navigation -->
  <div id="page-wrapper">
    

    @yield('content')


<!-- @include('front.templates.partials.footer')

      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="{{ asset('plugins/modern-admin/css/custom.css')}}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('plugins/modern-admin/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('plugins/modern-admin/js/custom.js')}}"></script>
</body>
</html>

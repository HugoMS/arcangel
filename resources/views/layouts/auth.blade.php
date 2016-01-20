<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arcangel Excursionismo y Adrenalina | Log in</title>
    <meta content="width=device-width,maximum-scale=1,initial-scale=1,user-scalable=0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="" />
    <meta name="description" content="" /> 
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/blue.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="/favicon.ico" rel="shortcut icon"/>
    <script src="{{ URL::asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script>
    var BASE_URL = '<?php echo URL::to('/'); ?>';
	(function (d, t) {
	  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	  bh.type = 'text/javascript';
	  bh.src = '//www.bugherd.com/sidebarv2.js?apikey=iskobxxxx6etza6gub5x1q';
	  s.parentNode.insertBefore(bh, s);
	  })(document, 'script');
    </script>
</head>
<body id="response" class="fondo-login">
	 <!-- authorization-form Start -->
    <div class="authorization-form-wrap">
        <div class="authorization-form">
            <div class="authorization-form__in" >

                @yield('content')
   	     	</div>
        </div>
    </div>  
    <!-- authorization-form end --> 

      
    <!-- Bootstrap -->  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   	<script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
   	<script src="{{ URL::asset('assets/js/icheck.min.js') }}"></script>
        @yield('scripts')
</body>
</html>		
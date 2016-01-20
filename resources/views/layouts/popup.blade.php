<!DOCTYPE html>
<html lang="en">
<head>
    <title>SirenMd</title>
    <meta content="width=device-width,maximum-scale=1,initial-scale=1,user-scalable=0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="" />
    <meta name="description" content="" /> 
    <meta name="keywords" content="" /> 
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/icon.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}" media="all"/>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="favicon.ico" rel="shortcut icon"/>
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
<body>  
    <!-- wrapper Start -->
    <div class="wrapper">
        <!-- page Start -->
        <section class="page">
            <div class="container">
                <div class="page-in">
                    @yield('content')
                </div>
            </div>    
        </section>
        <!-- page end -->
    </div>   
    <!-- wrapper end --> 
   	<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script src="{{ URL::asset('assets/js/jquery.fancybox.pack.js') }}"></script>
    
   	<!-- Bootstrap -->
   	<script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
</body>
</html>		
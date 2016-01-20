<!DOCTYPE html>
<html lang="en" class="app">
<head>  
	<meta charset="utf-8" />
  	<title>@yield('title', Config::get('site.name'))</title>
  	<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <link rel="stylesheet" href="{{ URL::asset('admin/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/icon.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('admin/css/') }}" type="text/css" />
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('admin/js/ie/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('admin/js/ie/respond.min.js') }}"></script>
    <script src="{{ URL::asset('admin/js/ie/excanvas.js') }}"></script>
  <![endif]-->
</head>
<body class="" >
	<section class="vbox">
    	<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      		<div class="navbar-header aside-md dk">
        	<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          		<i class="fa fa-bars"></i>
        	</a>
            <a href="/admin" class="navbar-brand">
              <img src="{{ URL::asset('/admin/images/logo.png') }}" class="m-r-sm" alt="scale">
            </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
              <i class="fa fa-cog"></i>
            </a>
 			</div>
      		<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        		<li class="hidden-xs">
          			<section class="dropdown-menu aside-xl animated flipInY">
            			<section class="panel bg-white">
              				<div class="panel-heading b-light bg-light">
                				<strong>You have <span class="count">2</span> notifications</strong>
              				</div>
              				<div class="list-group list-group-alt">
                				<a href="#" class="media list-group-item">
                                <span class="pull-left thumb-sm">
                                	<img src="{{ URL::asset('admin/images/a0.png') }}" alt="..." class="img-circle">
                                </span>
                              	<span class="media-body block m-b-none">
                                	Use awesome animate.css<br>
                                	<small class="text-muted">10 minutes ago</small>
                              	</span>
                				</a>
                                <a href="#" class="media list-group-item">
                               		<span class="media-body block m-b-none">
                                    1.0 initial released<br>
                                    <small class="text-muted">1 hour ago</small>
                                 	</span>
                                </a>
              				</div>
              				<div class="panel-footer text-sm">
                				<a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                				<a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              				</div>
            			</section>
          			</section>
        		</li>
        		<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
           	 			<span class="thumb-sm avatar pull-left">
              				<img src="{{ URL::asset('/admin/images/a0.png') }}" alt="...">
            			</span>
            			John.Smith <b class="caret"></b>
          			</a>
          			<ul class="dropdown-menu animated fadeInRight">            
            			<li>
              				<a href="#">Profile</a>
            			</li>
            			<li class="divider"></li>
            			<li>
              				<a href="#" data-toggle="ajaxModal" >Logout</a>
            			</li>
          			</ul>
        		</li>
      		</ul>      
    	</header>
		<section>
      		<section class="hbox stretch">
        		<!-- .aside -->
        		<aside class="bg-black aside-md hidden-print hidden-xs" id="nav">          
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="thumb avatar pull-left m-r">                        
                                                <img src="{{ URL::asset('/admin/images/a0.png') }}" class="dker" alt="...">
                                                <i class="on md b-black"></i>
                                            </span>
                                            <span class="hidden-nav-xs clear">
                                                <span class="block m-t-xs">
                                                  <strong class="font-bold text-lt">John.Smith</strong> 
                                                  <b class="caret"></b>
                                                </span>
                                                <span class="text-muted text-xs block">Art Director</span>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">                      
                                            <li>
                                                <a href="#">Profile</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>                
    
                                <!-- nav -->                 
                                <nav class="nav-primary hidden-xs">
                                    <ul data-ride="collapse" class="nav nav-main">
                                        <li>
                                            <a class="auto" href="{{ URL::to('admin/users') }}">
                                                <i class="i i-users3 icon"></i>
                                                <span class="font-bold">Users</span>
                                            </a>
                                        </li>
                                     	<li>
                                     		<a class="auto" href="{{ URL::to('admin/users') }}">
                                        		<i class="fa fa-building-o"></i>
                                        		<span class="font-bold">Organizations</span>
                                      		</a>
                                    	</li>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                        	</div>
                    	</section>
                
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                            <i class="i i-logout"></i>
                            </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                                <i class="i i-circleleft text"></i>
                                <i class="i i-circleright text-active"></i>
                            </a>
                        </footer>
                	</section>
        		</aside>
        		<!-- /.aside -->
        
                <section id="content">
                    <section class="vbox">
                        <section class="scrollable wrapper">
                            @yield('content')	
                        </section>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
      		</section>
		</section>
	</section>
	<script src="{{ URL::asset('admin/js/jquery.min.js') }}"></script>
   	<!-- Bootstrap -->
   	<script src="{{ URL::asset('admin/js/bootstrap.js') }}"></script>
    <!-- App -->
    <script src="{{ URL::asset('admin/js/app.js') }}"></script>  
    <script src="{{ URL::asset('admin/js/slimscroll/jquery.slimscroll.min.js') }}"></script>
    @yield('scripts')
    <script src="{{ URL::asset('admin/js/app.plugin.js') }}"></script>
</body>
</html>
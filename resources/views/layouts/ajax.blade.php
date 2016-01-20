<?php $session_teams = session('teams'); ?>
<!-- wrapper Start -->
<div class="wrapper">
    <!-- header Start -->
    <header class="header">
        <h1 class="logo">
            <a href="/">Siren MD</a>
        </h1>
        <ul class="user-panel">
            <li<?php echo (!empty($session_teams->totalCount) && $session_teams->totalCount <= 1)?' class="hidden-dropdown"':''?>>
                <div class="user-panel__item">
                    <div class="user-panel__photo">
                        <img src="{{ session('userTeamImage') }}" alt="{{ session('userTeamName') }}" />
                    </div>
                    <div class="user-panel__info">
                        <h4>{{ session('userOrg') }}</h4>
                        <span>{{ session('userTeamName') }}</span>
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
                <div class="user-panel__dropdown">
                    <a href="#" class="btn btn-default btn-s-sm" id="change-teams">Change Teams</a>
                </div>
            </li>
            <li>
                <div class="user-panel__item">
                    <div class="user-panel__photo">
                        <img src="{{ session('userimageUrl') }}" id="user-photo" alt="{{ session('userFirstName').' '.session('userLastName') }}" />
                    </div>
                    <div class="user-panel__info">
                        <h4 id="user-full-name">{{ session('userFirstName').' '.session('userLastName') }}</h4>
                        @if(Session::has('userHeadDoctor'))
                        <span>Head Doctor</span>
                        @else
                        <span>{{ session('userRole') }}</span>
                        @endif
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
                <div class="user-panel__dropdown">
                    <ul>
                        <li>
                            <a href="{{ URL::to('change-password') }}">Change Password</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('logout') }}">Log Out</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </header>
    <!-- header end --> 

    <!-- page Start --> 
    <div class="page">
        <!-- sidebar Start --> 
        <aside class="sidebar">
            <nav class="main-navi">
                <ul>
                    <li<?php echo Request::segment(1) == 'new-updates'?' class="selected"':''?>>
                        <a href="{{ URL::to('new-updates') }}" class="main-navi__item">
                            <span class="main-navi__item__in">
                                <span id="notificationCount"><i class="load">&nbsp;</i>New Updates</span>
                            </span>
                        </a>
                    </li>
                    <li<?php echo Request::segment(1) == 'cases'?' class="selected"':''?>>
                        <a href="{{ URL::to('cases') }}" class="main-navi__item">
                            <span class="main-navi__item__in">
                                <span>My Cases</span>
                            </span>
                        </a>
                    </li>
                    <li<?php echo Request::segment(1) == 'athletes'?' class="selected"':''?>>
                        <a href="{{ URL::to('athletes') }}" class="main-navi__item">
                            <span class="main-navi__item__in">
                                <span>Athletes</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- sidebar end --> 

        <!-- main-content Start --> 
        <section class="main-content">
             @yield('content')
        </section>
        <!-- main-content end --> 
        
        <!-- footer Start -->
        <footer class="footer">
            <div class="footer__in">
                <nav class="footer__navi">
                    <ul>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>    
                <p class="copy">&copy; {!! date("Y") !!} Teleport Med, LLC</p>
            </div>    
        </footer>
        <!-- footer end -->
    </div>
    <!-- page end --> 
</div>   
<!-- wrapper end --> 

<div style="display:none;">
    <div id="teams">
        <div style="max-width:445px; min-width: 350px;">
            <dl class="change-teams<?php echo (!empty($session_teams->data) && count($session_teams->data) > 5)?' scroll-y':''; ?>">
                <dt>Choose Team</dt>
                @if(!empty($session_teams->data))
                    @foreach($session_teams->data as $team)
                        @if($team->id == Request::cookie('userTeamID'))
                        <dd class="selected">
                            <span class="change-teams__item">
                                <img src="{{ $team->imageUrl }}" alt="{{ $team->name }}" />
                                <span class="change-teams__item__info">
                                    <span class="change-teams__name">{{ $team->org->name }}</span>
                                    <span class="change-teams__sport">{{ $team->name }} ({{ $team->notificationCount }})</span>
                                </span> 
                            </span>
                        </dd>
                        @else
                        <dd>
                            <a href="{{ URL::to('teams/change/'.$team->id).'/?redirect='.Request::path() }}" target="_parent" class="change-teams__item">
                                <img src="{{ $team->imageUrl }}" alt="{{ $team->name }}" />
                                <span class="change-teams__item__info">
                                    <span class="change-teams__name">{{ $team->org->name }}</span>
                                    <span class="change-teams__sport">{{ $team->name }} ({{ $team->notificationCount }})</span>
                                </span> 
                            </a>
                        </dd>
                        @endif
                    @endforeach
                @endif
            </dl>
        </div>
    </div>
</div>

<!--<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-68804115-1', 'auto');
	ga('send', 'pageview');
</script>
--> 

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
<script src="{{ URL::asset('assets/js/jquery.fancybox.pack.js') }}"></script>   
<script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
@if(Session::has('first_enter') && $session_teams->totalCount > 1)
<script>
    $(document).ready(function(){
        $.fancybox({
            content: $('#teams').html(),
            type: 'inline',
            beforeShow: function(){
                $('body').addClass("info-popup");
            },
            afterClose: function() {
                $('body').removeClass("info-popup");	
            } 
        });
    });
</script>
@endif	
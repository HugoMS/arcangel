<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo !empty($title) ? $title . ' | ' : ''?>Arcangel Excursionismo y Adrenalina</title>
    <meta content="width=device-width,maximum-scale=1,initial-scale=1,user-scalable=0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/toggle-switch.css') }}" media="all"/>
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" media="all"/>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="/favicon.ico" rel="shortcut icon"/>
    <script src="{{ URL::asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script type='text/javascript'>
        (function (d, t) {
            var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
            bh.type = 'text/javascript';
            bh.src = '//www.bugherd.com/sidebarv2.js?apikey=iskobxxxx6etza6gub5x1q';
            s.parentNode.insertBefore(bh, s);
        })(document, 'script');
    </script>


    <script>
        var BASE_URL = '<?php echo URL::to('/'); ?>';

        (function (d, t) {
            var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
            bh.type = 'text/javascript';
            bh.src = '//www.bugherd.com/sidebarv2.js?apikey=iskobxxxx6etza6gub5x1q';
            s.parentNode.insertBefore(bh, s);
        })(document, 'script');
    </script>

    <!-- start Mixpanel -->
    <!--	<script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
    mixpanel.init("1def772505fe9f9dd8af51f984d034e5");
    
	mixpanel.identify('{{ session('userID') }}');
	mixpanel.time_event("session length");
    </script>-->
    <!-- end Mixpanel -->

</head>
<body id="page_response">
<?php $session_teams = session('teams'); ?>
        <!-- wrapper Start -->
<div class="wrapper">
    <!-- header Start -->
    <header class="header">
        <h1 class="logo">
            <a href="/">Arcangel Excursionismo y Adrenalina</a>
        </h1>
        <ul class="user-panel">
            <li<?php echo (!empty($session_teams->totalCount) && $session_teams->totalCount <= 1) ? ' class="hidden-dropdown"' : ''?>>
                <div class="user-panel__item">
                    <div class="user-panel__photo">
                        <img src="{{ session('userTeamImage') }}" alt="{{ session('userTeamName') }}"/>
                    </div>
                    <div class="user-panel__info">
                        <h4>{{ session('userOrg') }}</h4>
                        <span>{{ session('userTeamName') }}</span>
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
                <div class="user-panel__dropdown">
                    <a href="javascript:void(0);" data-fancybox-type="iframe" class="btn btn-default btn-s-sm"
                       id="change-teams">Change Teams</a>
                </div>
            </li>
            <li>
                <div class="user-panel__item">
                    <div class="user-panel__photo">
                        <img src="{{ session('userimageUrl') }}" id="user-photo"
                             alt="{{ session('userDisplayName') }}"/>
                    </div>
                    <div class="user-panel__info">
                        <h4 id="user-full-name">{{ session('userDisplayName') }}</h4>
                        @if(session('userHeadDoctor'))
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
                            <a href="#edit-profile" class="fancybox_with_class">Edit Profile</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('logout') }}" id="logout"
                               data-userid="<?php echo session('userID'); ?>">Log Out</a>
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
                    <li<?php echo Request::segment(1) == 'new-updates' ? ' class="selected"' : ''?>>
                        <a href="{{ URL::to('new-updates') }}" class="main-navi__item">
                                <span class="main-navi__item__in">
                                    <span id="notificationCount"><i class="load">&nbsp;</i>New Updates</span>
                                </span>
                        </a>
                    </li>
                    <li<?php echo Request::segment(1) == 'cases' ? ' class="selected"' : ''?>>
                        <a href="{{ URL::to('cases') }}" class="main-navi__item">
                                <span class="main-navi__item__in">
                                    <span>My Cases</span>
                                </span>
                        </a>
                    </li>
                    <li<?php echo Request::segment(1) == 'athletes' ? ' class="selected"' : ''?>>
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
                            <a href="http://sirenmd.com/terms-and-conditions/" target="_blank">TERMS & CONDITIONS</a>
                        </li>
                        <li>
                            <a href="http://sirenmd.com/contact-us/" target="_blank">Contact</a>
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
            <dl class="change-teams<?php echo (!empty($session_teams->data) && count($session_teams->data) > 5) ? ' scroll-y' : ''; ?>">
                <dt>Choose Team</dt>
                @if(!empty($session_teams->data))
                    @foreach($session_teams->data as $team)
                        @if($team->id == Request::cookie('userTeamID'))
                            <dd class="selected">
                                <a href="javascript:void(0);" onclick="$.fancybox.close();">
                                <span class="change-teams__item">
                                    <img src="{{ $team->imageUrl }}" alt="{{ $team->name }}"/>
                                    <span class="change-teams__item__info">
                                        <span class="change-teams__name">{{ $team->org->name }}</span>
                                        <span class="change-teams__sport">{{ $team->name }}
                                            ({{ $team->notificationCount }})</span>
                                    </span> 
                                </span>
                                </a>
                            </dd>
                        @else
                            <dd>
                                <a href="{{ URL::to('teams/change/'.$team->id).'/?redirect='.Request::path() }}"
                                   target="_parent" class="change-teams__item">
                                    <img src="{{ $team->imageUrl }}" alt="{{ $team->name }}"/>
                                    <span class="change-teams__item__info">
                                        <span class="change-teams__name">{{ $team->org->name }}</span>
                                        <span class="change-teams__sport">{{ $team->name }}
                                            ({{ $team->notificationCount }})</span>
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

<div style="display:none;">
    <div id="edit-profile">
        <div style="max-width:555px; min-width: 400px;" class="add-athlete__form " id="edit-profile-popup">
            <div class="add-athlete-header">
                Edit Profile Information
            </div>
            <form class="select-athlete-wrap edit-profile-user">
                <fieldset style="text-align: center;margin: 0">
                    <img src="{{  \Session::get('userimageUrl') != '' ?\Session::get('userimageUrl') :  "https://s3.amazonaws.com/api-images-development/athlete.png"}}"
                         class="img-circle add-athlete-image" id="imageProfile" width="120">
                    <input type="file" name="imageProfile" id="realImageProfileUpload" style="visibility: hidden;"/>
                </fieldset>
                <fieldset>
                    <input type="text" placeholder="First name" name="firstNameUser"
                           value="{{  \Session::get('userFirstName')}}" id="firstNameUser"/>
                </fieldset>
                <fieldset>
                    <input type="text" placeholder="Last name" name="lastNameUser"
                           value="{{  \Session::get('userLastName')}}" id="lastNameUser"/>
                </fieldset>
                <fieldset>
                    <input type="email" placeholder="Email" name="email" value="{{  \Session::get('userEmail')}}"
                           id="email"/>
                </fieldset>
                <fieldset>
                    <input id="phone-user" name="telephone" type="tel" required placeholder="Phone Number"
                           value="{{  \Session::get('userPhone')}}" class="mobile-number-user"/>
                </fieldset>
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>
            </form>
            <div class="text-error" id="text-message-error-phone">

            </div>
            <div class="add-athlete-header" id="save-edit-profile">
                Save
            </div>
        </div>

        <div id="code-Verification" class=" add-athlete__form " style="display: none;">
            <div class="add-athlete-header">
                Verify Phone
            </div>
            <div class="verify-phone-user">
                Please wait momentarily while we send you a verification code.
            </div>
            <div class="verify-phone-user">
                <fieldset>
                    <input id="code-user" name="code-user" type="text" required placeholder="Code Verification" value=""/>
                </fieldset>
                <div class="text-error" id="text-message-error">

                </div>
            </div>
            <div class="add-athlete-header" id="save-edit-profile-number">
                Verify Phone Number
            </div>
        </div>
    </div>
    <input type="hidden" value="{{  \Session::get('userFirstName')}}" id="fnudefault"/>
    <input type="hidden" value="{{  \Session::get('userLastName')}}" id="lnudefault"/>
    <input type="hidden" value="{{  \Session::get('userEmail')}}" id="eudefault"/>
    <input type="hidden" value="{{  \Session::get('userPhone')}}" id="pudefault"/>
    <input type="hidden" value="{{  \Session::get('userimageUrl')}}" id="iudefault"/>
</div>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-68804115-1', 'auto');
    ga('send', 'pageview');
</script>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('assets/js/intlTelInput.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
<script>
    $(document).ready(function () {
        $(".mobile-number-user").intlTelInput({
            allowExtensions: true,
            autoFormat: true,
            autoPlaceholder: true,
            preferredCountries: ["us"],
            dropdownContainer: 'body',
            utilsScript: "/assets/js/utils.js",
            customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
                return "+" + selectedCountryData.dialCode + " " + selectedCountryPlaceholder;
            }
        });
    });
</script>
@if(Session::has('first_enter') && $session_teams->totalCount > 1)
    <script>
        $(document).ready(function () {
            $.fancybox({
                content: $('#teams').html(),
                type: 'inline',
                beforeShow: function () {
                    $('body').addClass("info-popup");
                },
                afterClose: function () {
                    $('body').removeClass("info-popup");
                }
            });
        });
    </script>
@endif
@yield('scripts')
</body>
</html>		
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ session('clienteAvatar') != '' ?  session("clienteAvatar")  : asset("AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            @if (Auth::check())
            <div class="pull-left info">
                <p>
                        {{Auth::user()->name}}
                    </p>
                <!-- Status -->
                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            </div>
            @endif
        </div>

        <!-- search form (Optional) <ar></ar>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            @if (Auth::check())
            <li class="active"><a href="{{ URL::to('home') }}"><span>Noticias</span></a></li>
            <li><a href="{{ URL::to('travels') }}"><span>Mis Viajes</span></a></li>
            <li class="treeview">
                <a href="#"><span>Viajes Arcangel</span> </a>

            </li>
             @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
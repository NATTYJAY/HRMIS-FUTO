@include('includes.admin.admin-head')
<body class="app sidebar-mini rtl" >
<div id="global-loader" ></div>
<div class="page">
    <div class="page-main">
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    @include('includes.admin.admin-side')
    <!-- Sidebar menu-->

        <!-- app-content-->
        <div class="app-content app-sidemenu">

            @yield('content')
        </div>
        <!-- app-content-->
    </div>
</div>
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="icon-arrow-up"></i></a>
@include('includes.admin.admin-footer')

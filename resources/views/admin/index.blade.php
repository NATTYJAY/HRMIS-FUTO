@extends('layouts.admin')

@section('content')
<div class="side-app">
    <div class="main-content">

        <!-- Top navbar -->
        <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>


                <a class="navbar-brand pt-0 d-md-none" href="#">
                    <img src="" class="navbar-brand-img" alt="HRMIS">
                </a>
                <!-- Form -->

                <!-- User -->

                <li class="nav-item dropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="feather icon-power text-danger"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
                </ul>
            </div>
        </nav>
        <!-- Top navbar-->

        <!-- Page content -->
        <div class="container-fluid pt-8">

            <div class="card shadow overflow-hidden">
                <div class="">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
                            <div class="text-center">
                                <p class="text-light">
                                    <i class="side-menu__icon fe fe-arrow-down"></i>
                                    Total Faculty
                                </p>
                                <h2 class="text-primary text-xxl">15</h2>
                                <a href="#" class="btn btn-outline-primary btn-pill btn-sm">View</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
                            <div class="text-center">
                                <p class="text-light">
                                    <i class="side-menu__icon fe fe-arrow-up"></i>
                                    Departments
                                </p>
                                <h2 class="text-yellow text-xxl">523</h2>
                                <a href="#" class="btn btn-outline-yellow btn-pill btn-sm">View</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
                            <div class="text-center">
                                <p class="text-light">
                                    <i class="fe fe-check"></i>
                                    Staffs
                                </p>
                                <h2 class="text-warning text-xxl">785</h2>
                                <a href="#" class="btn btn-outline-warning btn-pill btn-sm">View</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
                            <div class="text-center">
                                <p class="text-light">
                                    <i class="fe fe-cast"></i>
                                    Memorandum
                                </p>
                                <h2 class="text-danger text-xxl">125</h2>
                                <a href="#" class="btn btn-outline-danger btn-pill btn-sm">View</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
                            <div class="text-center">
                                <p class="text-light">
                                    <i class="fe fe-cloud-drizzle"></i>
                                    Applied Leaves
                                </p>
                                <h2 class="text-success text-xxl">30</h2>
                                <a href="#" class="btn btn-outline-success btn-pill btn-sm">View</a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 stats">
                            <div class="text-center">
                                <p class="text-light">
                                    <i class="fe fe-droplet"></i>
                                    Students
                                </p>
                                <h2 class="text-primary text-xxl">12</h2>
                                <a href="#" class="btn btn-outline-primary btn-pill btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-6">
                    <div class="card shadow">
                        <div class="card-header bg-transparent border-0">
                            <h2 class=" mb-0">Last 5 Registered Staffs</h2>
                        </div>
                        <div class="">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap align-items-center">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Staff Name</th>
                                                <th>Email</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John Kingdom</td>
                                                <td class="text-sm font-weight-600">king@yahoo.com</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Peace peace</td>
                                                <td class="text-sm font-weight-600">Peace@yahoo.com</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td >Jeremiah</td>
                                                <td class="text-sm font-weight-600">jere@yahoo.com</td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" hidden >
                    <!-- Chart -->
                    <div id="echart" class="chart-dropshadow h-400"></div>
                </div>
                <div class="col-xl-6">
                    {{--<div class="card  shadow overflow-hidden">--}}

                        {{--<div class="card-body">--}}
                            <!-- Chart -->
                            <div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
                            {{--<div id="echart2" class="chart-dropshadow h-400"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            <p class="text-sm font-weight-500">Copyright 2019 © All Rights Reserved. HRMIS</p>
                        </div>
                    </div>

                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>
</div>

@stop

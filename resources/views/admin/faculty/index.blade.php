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
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0" data-toggle="dropdown" href="#" role="button">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle"><img alt="Image placeholder" src="../assets/img/faces/female/32.jpg"></span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 ">HOD</span>
                                </div>
                            </div></a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">

                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ni ni-user-run"></i> <span>Logout</span></a>
                        </div>
                    </li>
                    </ul>
                </div>
            </nav>
            <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="alert alert-default" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                    <span class="alert-inner--text"><strong>Faculty</strong> Add Faculty, View and Edit Faculty Here</span>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="card shadow">

                            <div class="card-header">
                                <h2 class="mb-0">Add Faculty Here</h2>
                            </div>
                            <div class="card-body">
                                @if(session('success_msg'))
                                    <div class="alert alert-success" role="alert">
                                        <span class="alert-inner--text"><strong>{{ session('success_msg') }}</strong></span>
                                    </div>
                                @endif
                                    @if(session('error_msg'))
                                        <div class="alert alert-success" role="alert">
                                            <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                                            <span class="alert-inner--text"><strong>{{ session('error_msg') }}</strong></span>
                                        </div>
                                    @endif
                                <form class="form-horizontal" role="form" action="{{ route('admin.save') }}" method="POST">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="form-label">Faculty Name</label>
                                    <input type="text" class="form-control" name="fac_name" placeholder="Text.." required="required">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Faculty Description</label>
                                    <div class="input-group">
                                        <textarea required="required" class="form-control" name="fac_desc" rows="3" placeholder="Write a large text here ..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <input type="submit" name="submit" class="btn btn-outline-default mt-1 mb-1" value="Submit">
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
{{--Tables Faculties--}}
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">Alter Faculty</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">S/N</th>
                                            <th class="wd-15p">Name</th>
                                            <th class="wd-20p">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($fac as $key => $faculty)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$faculty->fac_name}}</td>
                                                <td>
                                                    <span class="badge badge-pill badge-warning" id="{{$faculty->id}}"><b>Edit</b></span>
                                                    <span class="badge badge-pill badge-danger" id="{{$faculty->id}}"><b>Delete</b></span></td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Tables Faculties ends here--}}
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
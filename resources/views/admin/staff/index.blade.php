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
                <div class="alert alert-info" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                    <span class="alert-inner--text"><strong>Staff</strong> Add Staff, View and Edit Staff Here</span>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">Add Staff Details</h2>
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
                                    <form class="form-horizontal" role="form" action="{{ route('admin.staff.save') }}" method="POST">
                                        {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Department</label>
                                            <div class="input-group">
                                                <select class="form-control select2 w-100" name="dept_id" >
                                                    <option selected="selected">Select Department</option>
                                                    @foreach($dept as $department)
                                                        <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="fname" placeholder="Text..">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lname" placeholder="Text..">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" placeholder="Text..">
                                    </div>
                                </div>


                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <input type="submit"  class="btn btn-outline-default mt-1 mb-1" value="Add Staff">
                                    </div>
                                </div>
                                    </form>

                            </div>
                        </div>
                    </div>
{{--Tables Faculties--}}

                    {{--Tables Faculties ends here--}}
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">Alter Staff</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">S/N</th>
                                            <th class="wd-15p">First Name</th>
                                            <th class="wd-15p">Last Name</th>
                                            <th class="wd-15p">Email</th>
                                            <th class="wd-15p">Staff ID Number</th>
                                            <th class="wd-15p">Department</th>
                                            <th class="wd-20p">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($staff as $key => $staffs)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$staffs->fname}}</td>
                                                <td>{{$staffs->lname}}</td>
                                                <td>{{$staffs->email}}</td>
                                                <td>{{$staffs->staff_idNo}}</td>
                                                <td>{{$staffs->dept->dept_name}}</td>
                                                <td>
                                                    <a href="staff/profile/{{$staffs->id}}" ><span class="badge badge-pill badge-primary"><b>View/Edit</b></span></a>
                                                    <span class="badge badge-pill badge-danger" id="{{$staffs->id}}"><b>Delete</b></span></td>

                                            </tr>
                                        @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
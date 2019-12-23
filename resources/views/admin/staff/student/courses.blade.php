@extends('layouts.admin')

@section('content')

    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->
        @include('includes.admin.admin-nav')

        {{--@include('includes.modals')--}}
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="page-header mt-0 shadow p-3">

                    <div class="btn-group mb-0">

                    </div>
                </div>
                {{--<div class="row">--}}
                {{--<div class="col-md-6 col-lg-6 col-xl-6">--}}
                {{--<div class="card p-3 px-4 shadow">--}}
                {{--<div>Total Registered Courses</div>--}}
                {{--<div class="py-2 m-0 text-center h1 text-green">12</div>--}}

                {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6 col-lg-6 col-xl-6">--}}
                {{--<div class="card p-3 px-4 shadow">--}}
                {{--<div>Total Leave Granted</div>--}}
                {{--<div class="py-2 m-0 text-center h1 text-red">122</div>--}}

                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}

                <div class="row">
                    <div class="col-lg-5">
                            <form class="form-horizontal" role="form" action="{{ route('admin.studentCourses.save') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="card border-success shadow">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h2 class="mb-0">Course Registration</h2>
                                        </div>
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
                                        @if(session('exist_msg'))
                                        <div class="alert alert-danger" role="alert">
                                        <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                                        <span class="alert-inner--text"><strong>{{ session('exist_msg') }}</strong></span>
                                        </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">

                                                    <label class="form-label">Add Courses</label>
                                                    <select class="form-control select2 w-100" multiple="multiple" data-placeholder="Select Course(s)" name="coursesStudents[]">
                                                        @foreach($studentc as $key => $studentcs)
                                                            <option value="{{$studentcs->courseID}}">{{$studentcs->courseName}}</option>
                                                        @endforeach
                                                            <input name="stuId" type="hidden" value="{{$studentcs->id}}">
                                                    </select>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning" role="alert">
                                                    <span class="alert-inner--icon"></span>
                                                    <span class="alert-inner--text"><strong>Please Note: Only Courses that belong to the Student Department is displayed.</strong></span>
                                                </div>
                                            </div>

                                        </div>
                                        {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label class="form-label">First Name</label>--}}
                                        {{--<input type="text" class="form-control" placeholder="Course Name" name="fname" required="required">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label class="form-label">Last Name</label>--}}
                                        {{--<input type="text" class="form-control" required="required" name="lname" placeholder="Course Code">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="form-label">Reg No.</label>--}}
                                                    {{--<input type="text" class="form-control" required="required" name="regNo" placeholder="Registration Number">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                            {{--<label class="form-label">PassWord</label>--}}
                                            {{--<input type="number" class="form-control" required="required" name="password" placeholder="Semester">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <input type="submit" class="btn btn-warning btn-pill mt-1 mb-1" value="Add Course">


                                    </div>
                                </div>

                            </form>

                    </div>
                    <div class="col-lg-7">
                        <div class="card shadow">
                            <div class="card-header">
                            <h2 class="mb-0">Course Registration Details</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">S/N</th>
                                            <th class="wd-15p">Course Name</th>
                                            <th class="wd-20p">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($studentCus as $key => $studentCuss)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{strtoupper($studentCuss->courseName)}}</td>
                                                <td>
                                                    <a href="#" class=""><span class="badge badge-pill badge-warning updatecourse " id="{{$studentCuss->id}}"><b>Edit</b></span></a>
                                                    <span class="badge badge-pill badge-danger" id="{{$studentCuss->id}}"><b>Delete</b></span></td>

                                            </tr>
                                        @endforeach
                                        {{--<td>1</td>--}}
                                        {{--<td>i want to go then </td>--}}
                                        {{--<td>i want to go then </td>--}}
                                        {{--<td><span class="badge badge-warning">Edit</span> <span class="badge badge-danger">Delete</span></td>--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
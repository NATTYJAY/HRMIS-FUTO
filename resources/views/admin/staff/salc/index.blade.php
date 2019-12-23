@extends('layouts.admin')

@section('content')

    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->
        @include('includes.admin.admin-nav')
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="page-header mt-0 shadow p-3">

                    <div class="btn-group mb-0">

                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-5">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">WorkLoad</h2>
                            </div>
                            <form class="form-horizontal" role="form" id="CourseSave" method="POST">
                                {{--{{ csrf_field() }}--}}
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label class="form-label">Choose Department</label>
                                                <select class="form-control select2 w-100" id="deptselect" name="dept_id" required="required">
                                                    <option selected="selected" disabled="disabled">Select Department</option>
                                                    @foreach($dept as $key => $department)
                                                        <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <label class="form-label">Select Lecturer</label>
                                                <select class="form-control select2 w-100" id="lecturers" name="staff_id" required="required">
                                                    <option selected="selected" disabled="disabled">Select Lecturer</option>

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label class="form-label">Select Course</label>
                                                <select class="form-control select2 w-100" id="courses" name="course_id" required="required">
                                                    <option selected="selected" disabled="disabled">Select Course</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label class="form-label">Class Size</label>
                                               <input type="text" name="classSize" placeholder="Class Size" required="required" class="form-control">

                                            </div>
                                        </div>
                                    </div>



                                    <input type="submit" class="btn btn-warning btn-pill mt-1 mb-1" value="Save Course">


                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card shadow">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">S/N</th>
                                            <th class="wd-15p">Staff Name</th>
                                            <th class="wd-15p">Course Name</th>
                                            <th class="wd-15p">Course Code</th>
                                            <th class="wd-20p">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($assign as $key => $assigned)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td> {{strtoupper($assigned->fname)}}  {{strtoupper($assigned->lname)}}</td>
                                                <td>{{strtoupper($assigned->courseName)}}</td>
                                                <td>{{strtoupper($assigned->courseCode)}}</td>
                                                <td>
                                                    <a href="#"><span class="badge badge-pill badge-success" id="{{$assigned->id}}"><b>View</b></span></a>
                                                    <span class="badge badge-pill badge-danger" id=""><b>Delete</b></span></td>

                                            </tr>
                                        @endforeach
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
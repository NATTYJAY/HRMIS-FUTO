@extends('layouts.students')

@section('contentss')
    <div class="side-app">
        <div class="main-content">
            <!-- Top navbar -->
        @include('includes.students.nav')
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="page-header mt-0 shadow p-3">

                    <div class="btn-group mb-0">

                    </div>
                </div>
                <div class="row ">
                    <div class="col-xl-6 col-md-6">
                        <div class="card shadow overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">Registered Courses</h3>
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="text-primary mb-0">513 </h3>
                                    </div>
                                </div>
                            </div>
                            <span class="bar" data-peity='{ "fill": ["#00c3ed"]}'>5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="card shadow overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">Ripple</h3>
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="text-danger mb-0">88</h3>
                                    </div>
                                </div>
                            </div>
                            <span class="bar" data-peity='{ "fill": ["#d62649"]}'>4,5,6,5,2,4,4,8,4,6,2,3,4,5,4,5,2,8</span>
                        </div>
                    </div>

                </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card border-primary shadow">
                        <div class="card-body">
                           <form>
                               <label>Choose Course</label>
                               <select class="form-control select2 w-100" >
                                   <option selected="selected">Alabama</option>
                                   <option>Alaska</option>
                                   <option>California</option>
                                   <option>Delaware</option>
                                   <option>Tennessee</option>
                                   <option>Texas</option>
                                   <option>Washington</option>
                               </select>
                           </form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">S/N</th>
                                            <th class="wd-15p">Course Name</th>
                                            <th class="wd-15p">Lecturer Name</th>
                                            <th class="wd-20p">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>999</td>
                                            <td>bhhhhhhhhhhhhhhhhhhhhhhhhh</td>
                                            <td>
                                                <a href="#" class=""><span class="badge badge-pill badge-success " id=""><b>Access</b></span></a>
                                                </td>

                                        </tr>
                                        {{--@foreach($course as $key => $courses)--}}
                                            {{--<tr>--}}
                                                {{--<td>{{$key + 1}}</td>--}}
                                                {{--<td>{{$courses->courseCode}}</td>--}}
                                                {{--<td>{{$courses->courseName}}</td>--}}
                                                {{--<td>--}}
                                                    {{--<a href="#" class=""><span class="badge badge-pill badge-warning updatecourse " id="{{$courses->id}}"><b>Edit</b></span></a>--}}
                                                    {{--<span class="badge badge-pill badge-danger" id="{{$courses->id}}"><b>Delete</b></span></td>--}}

                                            {{--</tr>--}}
                                        {{--@endforeach--}}
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


                <!-- Footer -->

                <!-- Footer -->
            </div>
            {{--Main body goes here please--}}


            {{--Main Body ends Here Please--}}
        </div>
    </div>

@stop
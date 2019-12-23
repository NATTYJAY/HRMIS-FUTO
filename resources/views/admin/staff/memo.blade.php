@extends('layouts.admin')

@section('content')

    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->
            @include('includes.admin.admin-nav')
            <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="alert alert-info" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                    <span class="alert-inner--text"><strong>Memo</strong> Add Memo, View and Edit Memo Here</span>
                </div>
                {{--<form action="#" class="form-horizontal" method="POST" id="acceptform">--}}
                <form class="form-horizontal" role="form" action="{{ route('admin.memo.save') }}" method="POST">
                    {{ csrf_field() }}
                    {{--<input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">--}}
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">Send Memo</h2>
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
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Department</label>
                                            <div class="input-group">
                                                <select class="form-control select2 w-100 dept" >
                                                    <option selected="selected" disabled="disabled"> Select Department</option>
                                                    @foreach($dept as $department)
                                                        <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Select Lecturer</label>
                                            <div class="input-group">
                                                <select class="form-control select2 w-100" id="staff" required="required" name="staff_id" >

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="form-label">Memo Title</label>
                                            <input type="text" required="required" class="form-control" name="memo_title" placeholder="Text..">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="form-label">Memo Type</label>
                                            <select required="required" class="form-control select2 w-100" name="memo_type" >
                                                <option selected="selected">sick</option>
                                                <option value="heal" >heal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Memo Body</label>
                                    <div class="input-group">
                                        <textarea required="required" class="form-control" name="memo_body"></textarea>
                                    </div>
                                </div>


                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <input type="submit" class="btn btn-outline-default mt-1 mb-1" value="Submit">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    {{--<input type="hidden" class="form-control" value="">--}}
                    {{--<input type="hidden" class="form-control" id="" name="_method" value="PUT">--}}
                    {{--Tables Faculties--}}

                    {{--Tables Faculties ends here--}}
                </div>
                </form>
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
                                            <th class="wd-15p">Staff ID Number</th>
                                            <th class="wd-15p">Memo Title</th>
                                            <th class="wd-15p">Memo Body</th>
                                            <th class="wd-20p">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($memos as $key => $memo)

                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$memo->user->fname}}</td>
                                                <td>{{$memo->user->lname}}</td>
                                                <td>{{$memo->user->staff_idNo}}</td>
                                                <td>{{$memo->memo_title}}</td>

                                                <td>{{(new \App\Http\Controllers\Admin\StaffMemoController)->shortstring($memo->memo_body,40)}}</td>
                                                <td>
                                                    <a href="viewMemo/{{$memo->id}}"><span class="badge badge-pill badge-success" id=""><b>View</b></span></a>
                                                    <span class="badge badge-pill badge-danger" id="{{$memo->id}}"><b>Delete</b></span></td>

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
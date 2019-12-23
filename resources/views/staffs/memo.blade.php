@extends('layouts.staffs')

@section('contentstaffs')

    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->
        @include('includes.staff.nav')
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="alert alert-info" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>

                    <span class="alert-inner--text"><strong>Hello,</strong> To view your memo select the memo you want to view and click on view memo</span>

                </div>
                {{--<form action="#" class="form-horizontal" method="POST" id="acceptform">--}}

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">View Memo</h2>
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
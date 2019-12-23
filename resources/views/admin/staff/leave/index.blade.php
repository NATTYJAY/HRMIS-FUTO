@extends('layouts.admin')

@section('content')

    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->
        @include('includes.admin.admin-nav')
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="alert alert-warning" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                    <span class="alert-inner--text"><strong>Leave</strong> Leave Computation Goes Here</span>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p">S/N</th>
                                            <th class="wd-15p">Fname</th>
                                            <th class="wd-15p">Lname</th>
                                            <th class="wd-15p">Picture</th>
                                            <th class="wd-15p">Staff ID</th>

                                            <th class="wd-15p">Leave Reasons</th>
                                            <th class="wd-20p">Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($leaves_staff as $key => $leave_staffs)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$leave_staffs->user->fname}}</td>
                                                <td>{{$leave_staffs->user->lname}}</td>
                                                <td><img src="/{{$leave_staffs->user->img_path}}" class="rounded-circle" width="50"> </td>
                                                <td>{{$leave_staffs->user->staff_idNo}}</td>
                                                <td>{{$leave_staffs->leave_reasons}}</td>
                                                <td>
                                                    @if($leave_staffs->status == 0)
                                                        <input type="hidden" class="form-control staff_id" value="{{$leave_staffs->staff_id}}">
                                                        <a href="reject/{{$leave_staffs->id}}"><span class="badge badge-danger reject" id="{{$leave_staffs->id}}">Reject</span></a>
                                                        <a href="staffcompute/{{$leave_staffs->id}}"><span class="badge badge-success">Compute</span></a>
                                                        @elseif($leave_staffs->status == 1)
                                                        <span class="badge badge-success">Granted from <span class="badge-dark">{{$leave_staffs->leave_recommended_yr}}</span>TO <span class="badge-dark">{{$leave_staffs->leaveActualYear}}
                                                                @if(($leave_staffs->leaveActualYear - $leave_staffs->leave_recommended_yr) > 1)
                                                                    ({{$leave_staffs->leaveActualYear - $leave_staffs->leave_recommended_yr}}) Years
                                                                @else
                                                                    ({{$leave_staffs->leaveActualYear - $leave_staffs->leave_recommended_yr}}) Year
                                                                @endif
                                                            </span>
                                                        </span>
                                                        @elseif($leave_staffs->status == 2)
                                                        <span class="badge badge-danger">Rejected</span>
                                                        @endif
                                                </td>
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
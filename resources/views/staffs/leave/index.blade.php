@extends('layouts.staffs')

@section('contentstaffs')
    <div class="side-app">
        <div class="main-content">
            <!-- Top navbar -->
        @include('includes.staff.nav')
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">
                <div class="page-header mt-0 shadow p-3">

                    <div class="btn-group mb-0">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <div class="card p-3 px-4 shadow">
                            <div>Total Leave Applied</div>
                            <div class="py-2 m-0 text-center h1 text-green">{{(new \App\Http\Controllers\Staff\StaffLeave)->count_total_leave()}}</div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <div class="card p-3 px-4 shadow">
                            <div>Total Leave Granted</div>
                            <div class="py-2 m-0 text-center h1 text-red">{{(new \App\Http\Controllers\Staff\StaffLeave)->count_accepted_leave()}}</div>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4">
                        <div class="card p-3 px-4 shadow">
                            <div>Total Leave Rejected</div>
                            <div class="py-2 m-0 text-center h1 text-blue">{{(new \App\Http\Controllers\Staff\StaffLeave)->count_rejected_leave()}}</div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="card shadow">
                            <div class="card-header">
                                <h2 class="mb-0">Leave Application</h2>
                            </div>
                            <form class="form-horizontal" role="form" action="{{ route('staff.leave.save') }}" method="POST">
                                {{ csrf_field() }}
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
                                    @if(session('exist_msg'))
                                        <div class="alert alert-danger" role="alert">
                                            <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                                            <span class="alert-inner--text"><strong>{{ session('exist_msg') }}</strong></span>
                                        </div>
                                    @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Leave Type</label>
                                            <input type="text" class="form-control" name="leave_type" value="Sabastical Leave" placeholder="Sabastical Leave" required="required" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Leave Applied Year</label>
                                            <input type="text" class="form-control" required="required" name="leave_applied_year" value="{{date('Y')}}" readonly="readonly" placeholder="Leave Applied Year">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Leave Start Year</label>
                                            <input type="text" class="form-control" required="required" name="leave_start_yr" placeholder="Year Only">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Leave End Year</label>
                                            <input type="text" class="form-control" required="required" name="leave_end_yr" placeholder="Year Only">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Leave Reasons</label>
                                            <input type="text" class="form-control" required="required" name="leave_reasons" placeholder="Leave Reasons">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info btn-pill mt-1 mb-1" value="Send Leave">


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
                                            <th class="wd-15p">Leave Reasons</th>
                                            {{--<th class="wd-15p">Start date</th>--}}
                                            {{--<th class="wd-15p">End date</th>--}}
                                            <th class="wd-20p">Status</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($leave_staff as $key => $leave_staffs)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$leave_staffs->leave_reasons}}</td>
                                                {{--<td>{{$leave_staffs->leave_start_yr}}</td>--}}
                                                {{--<td>{{$leave_staffs->leave_end_yr}}</td>--}}
                                                @if($leave_staffs->status == 0)
                                                <td><span class="badge badge-warning">Pending...</span></td>
                                                @elseif($leave_staffs->status == 1)
                                                    <td>
                                                    <span class="badge badge-success">Granted from
                                                        <span class="badge-dark">{{$leave_staffs->leave_recommended_yr}}</span>TO <span class="badge-dark">{{$leave_staffs->leaveActualYear}}
                                                            @if(($leave_staffs->leaveActualYear - $leave_staffs->leave_recommended_yr) > 1)
                                                                ({{$leave_staffs->leaveActualYear - $leave_staffs->leave_recommended_yr}}) Years
                                                            @else
                                                                ({{$leave_staffs->leaveActualYear - $leave_staffs->leave_recommended_yr}}) Year
                                                            @endif
                                                            </span>
                                                    </span>
                                                    </td>
                                                    @elseif($leave_staffs->status == 2)
                                                    <td><span class="badge badge-danger">Rejected</span></td>
                                                    @endif
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
            {{--Main body goes here please--}}


            {{--Main Body ends Here Please--}}
        </div>
    </div>

@stop
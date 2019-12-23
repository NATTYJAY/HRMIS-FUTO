@extends('layouts.admin')

@section('content')

    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->
        @include('includes.admin.admin-nav')
        <!-- Top navbar-->

            <!-- Page content -->
            <div class="container-fluid pt-8">

                <div class="row">
                    <div class="col-xl-3">
                        <div class="card shadow overflow-hidden">
                            <div class="card-body">
                                <div class="widget text-center">
                                    <h4 class="text-muted mt-2 mb-0">System Recommended Year For </h4>
                                    <br>

                                    @foreach($status as $statuss)

                                        <div class="alert alert-danger" role="alert">
                                        <span class="alert-inner--text"><strong>
                                                 {{strtoupper($statuss->fname)}}   {{strtoupper($statuss->lname)}}

                                            </strong></span>

                                        </div>
                                        @if($statuss->staff_status == 7)
                                        <span class="badge badge-warning">Professor   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @elseif($statuss->staff_status == 6)
                                        <span class="badge badge-success">Assoc Professor   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @elseif($statuss->staff_status == 5)
                                        <span class="badge badge-info">Senior Lecturer   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @elseif($statuss->staff_status == 4)
                                        <span class="badge badge-dark">Lecturer 2   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @elseif($statuss->staff_status == 3)
                                        <span class="badge badge-default">Lecturer 1   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @elseif($statuss->staff_status == 2)
                                        <span class="badge badge-primary">Assistant Lecturer   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @elseif($statuss->staff_status == 1)
                                        <span class="badge badge-danger">Graduate Assistant   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                        @endif
                                    @endforeach
                                    {{--@foreach($status as $statuss)--}}

                                        {{--@if($statuss == 7)--}}
                                            {{--<span class="badge badge-warning">Professor</span>--}}
                                        {{--@elseif($statuss == 6)--}}
                                            {{--<span class="badge badge-success">Assoc Professor</span>--}}
                                        {{--@elseif($statuss == 5)--}}
                                            {{--<span class="badge badge-info">Senior Lecturer</span>--}}
                                        {{--@elseif($statuss == 4)--}}
                                            {{--<span class="badge badge-dark">Lecturer 2</span>--}}
                                        {{--@elseif($statuss == 3)--}}
                                            {{--<span class="badge badge-default">Lecturer 1</span>--}}
                                        {{--@elseif($statuss == 2)--}}
                                            {{--<span class="badge badge-primary">Assistant Lecturer</span>--}}
                                        {{--@elseif($statuss == 1)--}}
                                            {{--<span class="badge badge-danger">Graduate Assistant</span>--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}

                                    <h2 class="display-2 mb-0">{{$recommended_year}}</h2>

                                </div>
                            </div>
                            <span class="updating-chart" data-peity='{ "fill": ["#ffa21d"]}'>5,3,9,6,5,9,2,5,3,6,7,8,6</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow">

                            <div class="card-header">
                                <h2 class="mb-0">Specify the Number of Years for this Staff from {{$recommended_year}} </h2>
                            </div>
                            <form class="form-horizontal" method="POST" id="leaveForm">
                                <input type="hidden" class="form-control" name="_token" id="_token" value="{{csrf_token()}}">
                            <div class="card-body">
                                <div  id="msggs" role="alert">
                                        <span class="alert-inner--text"><strong>


                                            </strong></span>

                                </div>
                                <div class="form-group">
                                    <label class="form-label">Number of Years</label>
                                    <div class="row gutters-xs">
                                        <div class="col">
                                            <input type="text" class="form-control noY" value="0" placeholder="E.g. 1 Year or 2 Years or etc">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" hidden="hidden">
                                    <label class="form-label">Recommended Years</label>
                                    <div class="row gutters-xs">
                                        <div class="col">
                                            <input type="text" class="form-control rY" value="{{$recommended_year}}" name="leave_recommended_yr">
                                            <input type="text" class="form-control id" name="id" value="{{$id}}">
                                            <input type="text" class="form-control id" name="staff_id" value="{{$staff_id}}">
                                            <input type="text" class="form-control id" name="leaveActualYear" id="leaveActual" >
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary "   value="Notify Staff">

                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="card border-success shadow">
                            <div class="card-body text-success">
                                <h4 class="card-title">Staff Official Leave Period is between</h4>
                                <p class="card-text">FROM <h2>{{$recommended_year}}</h2></p>
                                TO
                                <h2><p class="card-text toY"></p></h2>
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
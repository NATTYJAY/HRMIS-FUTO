@extends('layouts.admin')


@section('content')
    @include('includes.modalEdit')
    <div class="side-app">
        <div class="main-content">

            <!-- Top navbar -->

    <div class="container-fluid pt-2">
        @include('includes.admin.admin-nav')
        <style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
        <div class="page-header mt-0 shadow p-3">

            <div class="btn-group mb-0">

            </div>
        </div><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-profile  overflow-hidden">
                    <div class="card-body text-center cover-image" data-image-src="{{asset('assets/img/photos/8.jpg')}}">
                        <div class=" card-profile">
                            <div class="row justify-content-center">
                                <div class="">
                                    <div class="">
                                        <a href="#">
                                            @foreach($staff as $staffs)
                                                <img src="/{{$staffs->img_path}}" width="150" class="rounded-circle" alt="profile">


                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-3 text-white">{{$staffs->fname}}  {{$staffs->lname}}</h3>
                        <p class="mb-4 text-white"><span class="badge badge-pill badge-primary"><b>Staff</b></span></p>
                        @endforeach
                        {{--<button class="btn btn-primary btn-sm">--}}
                        {{--<span class="fab fa-twitter"></span> Follow--}}
                        {{--</button>--}}
                        {{--<a href="#" class="btn btn-success btn-md"><i class="fe fe-edit" aria-hidden="true"></i> Edit profile</a>--}}
                    {{----}}
                    </div>
                    <div class="card-body">
                        <div class="nav-wrapper p-0">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i class="fe fe-arrow-right-circle mr-2"></i>Academic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fe fe-file-plus mr-2"></i>Work Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active show mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="true"><i class="fe fe-book mr-2"></i>Basic Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="fe fe-folder mr-2"></i>Change Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-0 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="fe fe-settings mr-2"></i>Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card shadow ">
                    <div class="card-body pb-0">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="row">
                                    <a style="float: right; margin-bottom:10px;" href="#" class="btn btn-info btn-md" data-toggle="modal" data-target="#academicModal"><i class="fe fe-edit" aria-hidden="true"></i> Edit Academic Info</a>
                                    @foreach($academy as $academic)
                                    <div class="col-md-12">
                                        <ul class="cbp_tmtimeline">
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">25/11/2018</span> <span class="large">Degree</span></time>
                                                <div class="cbp_tmicon bg-primary"><i class="zmdi zmdi-account"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">{{strtoupper($academic->degree)}}</a></h2>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span>School Attended</span></time>
                                                <div class="cbp_tmicon bg-yellow"><i class="zmdi zmdi-label"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">{{strtoupper($academic->school_attended)}}</a></h2>

                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>Field Of Study</span></time>
                                                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">{{strtoupper($academic->field_study)}}</a></h2>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>Specialization</span></time>
                                                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">{{strtoupper($academic->specialization)}}</a> </h2>


                                                </div>
                                            </li>

                                            <a style="float: left; margin-bottom:10px;" class="btn btn-primary btn-xs" href="{{ route('file-download',$academic->staff_id) }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('download-file').submit();">
                                                <i class="fe fe-download" aria-hidden="true"></i> Download
                                            </a>

                                            <form id="download-file" action="{{ route('file-download',$academic->staff_id) }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                            {{--<li>--}}
                                                {{--<time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>01:22 PM</span> <span>Two weeks ago</span></time>--}}
                                                {{--<div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>--}}
                                                {{--<div class="cbp_tmlabel">--}}
                                                    {{--<h2><a href="javascript:void(0);">Job Meeting</a></h2>--}}
                                                    {{--<p class="text-sm">You have a meeting at <strong>Laborator Office</strong> Today.</p>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Month ago</span></time>--}}
                                                {{--<div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>--}}
                                                {{--<div class="cbp_tmlabel">--}}
                                                    {{--<h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">Laborator</a></h2>--}}
                                                    {{--<blockquote class="mb-0 text-sm">Great place, feeling like in home.</blockquote>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        </ul>
                                    </div>
                                        @endforeach
                                </div>


                                <p class="mb-4"></p>
                            </div>
                            <div aria-labelledby="tabs-icons-text-2-tab" class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel">

                                <div class="row">
                                    <a style="float: right; margin-bottom:10px;" href="#"  data-toggle="modal" data-target="#workModal" class="btn btn-info btn-md"><i class="fe fe-edit" aria-hidden="true"></i> Edit Work Info</a>

                                    <div class="col-md-12">
                                        <div class="content content-full-width" id="content">
                                            <!-- begin profile-content -->
                                            <div class="profile-content">
                                                <!-- begin tab-content -->
                                                <div class="tab-content p-0">
                                                    <!-- begin #profile-friends tab -->
                                                    <div class="tab-pane fade in active show" id="profile-friends">
                                                        <div class="row row-space-2"  style="margin-bottom: 20px;">
                                                            <!-- end col-6 -->
                                                            @foreach($work as $works)
                                                            <table id="customers">
                                                                <tr>
                                                                    <th>Details</th>
                                                                    <th>Info</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rank</td>
                                                                    <td>
                                                                        @if($works->status == 7)
                                                                            <span class="badge badge-warning">Professor   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @elseif($works->status == 6)
                                                                            <span class="badge badge-success">Assoc Professor   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @elseif($works->status == 5)
                                                                            <span class="badge badge-info">Senior Lecturer   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @elseif($works->status == 4)
                                                                            <span class="badge badge-dark">Lecturer 2   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @elseif($works->status == 3)
                                                                            <span class="badge badge-default">Lecturer 1   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @elseif($works->status == 2)
                                                                            <span class="badge badge-primary">Assistant Lecturer   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @elseif($works->status == 1)
                                                                            <span class="badge badge-danger">Graduate Assistant   <span class="alert-inner--icon"><i class="fe fe-download"></i></span></span>
                                                                        @endif

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Assumption Of Duty</td>
                                                                    <td>{{$works->date_assumption_duty}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Of Ractification</td>
                                                                    <td>{{$works->date_ractification}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Last Promoted Year</td>
                                                                    <td>{{date('Y',$works->PromotedYear)}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>First Appointment</td>
                                                                    <td>{{$works->status_first_appoint}}</td>
                                                                </tr>


                                                            </table>
                                                            @endforeach
                                                            <p class="mb-4"></p>
                                                        </div><!-- end row -->
                                                    </div><!-- end #profile-friends tab -->
                                                </div><!-- end tab-content -->
                                            </div><!-- end profile-content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                @foreach($staff as $staffs)
                                    <a style="float: right; margin-bottom:10px;" href="#" data-toggle="modal" data-target="#basicModal" class="btn btn-info btn-md"><i class="fe fe-edit" aria-hidden="true"></i> Edit Basic Info</a>
                                    <div class="table-responsive border "  style="margin-bottom: 20px;">

                                        <table class="table row table-borderless w-100 m-0 ">
                                            <tbody class="col-lg-6 p-0">
                                            <tr>
                                                <td><strong>Full Name :</strong>  {{$staffs->fname}}  {{$staffs->lname}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nationality :</strong> {{$staffs->nationality}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Marital Status :</strong>  {{$staffs->marital_status}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Gender :</strong>  {{$staffs->gender}}</td>
                                            </tr>
                                            </tbody>
                                            <tbody class="col-lg-6 p-0">
                                            <tr>
                                                <td><strong>Staff ID :</strong> {{$staffs->staff_idNo}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Age :</strong> {{$staffs->age}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email :</strong> {{$staffs->email}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Phone :</strong>  {{$staffs->phone}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                {{--<div class="row profile ng-scope">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<div class="card">--}}
                                {{--<form class="mt ng-pristine ng-valid" action="#">--}}
                                {{--<div class="form-group mb-0">--}}
                                {{--<label class="sr-only" for="new-event">New event</label>--}}
                                {{--<textarea class="form-control border-top-0 border-left-0 border-right-0 border-radius-0" id="new-event" placeholder="Post something..." rows="3"></textarea>--}}
                                {{--</div>--}}
                                {{--<div class="btn-toolbar">--}}
                                {{--<div class="btn-group"><a href="#" class="btn btn-sm btn-gray"><i class="fa fa-camera fa-lg"></i></a> <a href="#" class="btn btn-sm btn-gray"><i class="fa fa-map-marker fa-lg"></i></a>--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="btn btn-danger btn-sm pull-right">Post</button>--}}
                                {{--</div>--}}
                                {{--</form>--}}
                                {{--</div>--}}
                                {{--<div class="activities">--}}
                                {{--<section class="event card shadow">--}}
                                {{--<div class="d-flex">--}}
                                {{--<span class="thumb-sm avatar pull-left mr-sm"><img class="img-circle" src="../assets/img/faces/female/32.jpg" alt="..."></span>--}}
                                {{--<div >--}}
                                {{--<h4 class="event-heading"><a href="#">John doe</a> <small><a href="#">@nils</a></small></h4>--}}
                                {{--<p class="text-xs text-muted">February 22, 2014 at 01:59 PM</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<p class="text-sm mb-0">There is no such thing as maturity. There is instead an ever-evolving process of maturing. Because when there is a maturity, there is ...</p>--}}
                                {{--<footer>--}}
                                {{--<ul class="post-links">--}}
                                {{--<li><a href="#">1 hour</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Comment</a>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</footer>--}}
                                {{--</section>--}}
                                {{--<section class="event card shadow">--}}
                                {{--<h4 class="event-heading"><a href="#">john doe</a> <small>@jess</small></h4>--}}
                                {{--<p class="text-xs text-muted">February 22, 2014 at 01:59 PM</p>--}}
                                {{--<p class="text-sm mb-0">Check out this awesome photo I made in Italy last summer. Seems it was lost somewhere deep inside my brand new HDD 40TB. Thanks god I found it!</p>--}}
                                {{--<footer>--}}
                                {{--<div class="clearfix">--}}
                                {{--<ul class="post-links mt-sm pull-left pb-2">--}}
                                {{--<li><a href="#">1 hour</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">Comment</a>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                {{--<ul class="post-comments mt-sm mb-0">--}}
                                {{--<li class="d-flex"><span class="thumb-sm avatar float-left mr-sm "><img class="img-circle" src="../assets/img/faces/female/32.jpg" alt="..."></span>--}}
                                {{--<div class="comment-body">--}}
                                {{--<h6 class="author fw-semi-bold">Ignacio Abad <small>6 mins ago</small></h6>--}}
                                {{--<p class="text-xs">Hey, have you heard anything about that?</p>--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                {{--<li><span class="thumb-sm avatar float-left mr-sm"><img class="img-circle" src="../assets/img/faces/female/2.jpg" alt="..."></span>--}}
                                {{--<div class="comment-body">--}}
                                {{--<input class="form-control input-sm" type="text" placeholder="Write your comment...">--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</footer>--}}
                                {{--</section>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                                <p>Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
                                <p class="mb-4">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        </div>
    </div>





@stop
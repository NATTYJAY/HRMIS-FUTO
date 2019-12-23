@extends('layouts.staffs')


@section('content')
<div class="container-fluid pt-2">
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
    <div class="row">
        <div class="col-md-12">
            <div class="card card-profile  overflow-hidden">
                <div class="card-body text-center cover-image" data-image-src="../assets/img/profile-bg.jpg">
                    <div class=" card-profile">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="">
                                    <a href="#">
                                        <img src="../assets/img/faces/female/32.jpg" class="rounded-circle" alt="profile">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-3 text-white">Cori Stover</h3>
                    <p class="mb-4 text-white">Administrator</p>
                    {{--<button class="btn btn-primary btn-sm">--}}
                        {{--<span class="fab fa-twitter"></span> Follow--}}
                    {{--</button>--}}
                    <a href="#" class="btn btn-success btn-md"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit profile</a>
                </div>
                <div class="card-body">
                    <div class="nav-wrapper p-0">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i class="fas fa-home mr-2"></i>General Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-user mr-2"></i>Work Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active show mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="true"><i class="far fa-images mr-2"></i>Academic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="fas fa-newspaper mr-2"></i>Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-0 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="fas fa-cog mr-2"></i>More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card shadow ">
                <div class="card-body pb-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                            <div class="table-responsive border ">
                                <table class="table row table-borderless w-100 m-0 ">
                                    <tbody class="col-lg-6 p-0">
                                    <tr>
                                        <td><strong>Full Name :</strong> Cori Stover</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Location :</strong> USA</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Languages :</strong> English, German, Spanish.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>DOB :</strong> 18/02/1992</td>
                                    </tr>
                                    </tbody>
                                    <tbody class="col-lg-6 p-0">
                                    <tr>
                                        <td><strong>Occupation :</strong> Administrator</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Website :</strong> ansta.com</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email :</strong> coristover@ansta.com</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone :</strong> +222-6652-6325</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                         <p class="mb-4"></p>
                        </div>
                        <div aria-labelledby="tabs-icons-text-2-tab" class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content content-full-width" id="content">
                                        <!-- begin profile-content -->
                                        <div class="profile-content">
                                            <!-- begin tab-content -->
                                            <div class="tab-content p-0">
                                                <!-- begin #profile-friends tab -->
                                                <div class="tab-pane fade in active show" id="profile-friends">
                                                    <div class="row row-space-2">
                                                        <!-- end col-6 -->
                                                        <table id="customers">
                                                            <tr>
                                                                <th>Company</th>
                                                                <th>Contact</th>
                                                                <th>Country</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Alfreds Futterkiste</td>
                                                                <td>Maria Anders</td>
                                                                <td>Germany</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Berglunds snabbköp</td>
                                                                <td>Christina Berglund</td>
                                                                <td>Sweden</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Centro comercial Moctezuma</td>
                                                                <td>Francisco Chang</td>
                                                                <td>Mexico</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ernst Handel</td>
                                                                <td>Roland Mendel</td>
                                                                <td>Austria</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Island Trading</td>
                                                                <td>Helen Bennett</td>
                                                                <td>UK</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Königlich Essen</td>
                                                                <td>Philip Cramer</td>
                                                                <td>Germany</td>
                                                            </tr>

                                                        </table>
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
                            <div class="row">
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/14.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/19.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/20.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/4.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/5.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/6.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/7.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/8.jpg" alt="gallery">
                                    </div>
                                </div>
                                <div class="col-lg-4 profile-image">
                                    <div class="card shadow">
                                        <img src="../assets/img/photos/9.jpg" alt="gallery">
                                    </div>
                                </div>
                            </div>
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





@stop
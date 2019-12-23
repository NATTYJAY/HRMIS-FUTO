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
               <div class="col-xl-6 col-lg-6">
                  <div class="card shadow">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="card shadow ">
                                 <div class="card-body">
                                    <div class="widget text-center">
                                       <small class=" h3">Staff Enrollment</small>
                                       <h2 class="text-xxl text-success mb-0">10%</h2>Complete
                                       <a href="{{url('/staff/enroll')}}"><p class="mb-0"><span class="text-white"><i class="btn-primary badge">Complete Enrollment</i></span></p></a>

                                    </div>
                                 </div>
                                 <span class="bar" data-peity='{ "fill": ["#18b16f"]}'>5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span>
                              </div>

                           </div>
                           <div class="col-xl-6">
                              <div class="card shadow">
                                 <div class="card-body">
                                    <div class="widget text-center">
                                       <small class="h3">Leave Application</small>
                                       <h2 class="text-xxl text-danger mb-0">8</h2> Granted Leave
                                       <a href="{{url('/staff/leave')}}"><p class="mb-0"><span class="text-white"><i class="btn-warning badge">Apply For Leave</i></span></p></a>

                                    </div>
                                 </div>
                                 <span class="bar" data-peity='{ "fill": ["#d62649"]}'>5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span>
                              </div>

                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-12">
                              <div class="card shadow">
                                 <div class="card-body">
                                    <div class="widget text-center">
                                       <small class="h3">Memos</small>
                                       <h2 class="text-xxl text-yellow mb-0">5</h2>
                                        <a href="{{url('/staff/memos')}}"><p class="mb-0"><span class="text-white"><i class="badge" style="background-color: #ffa21d">Check Memos</i></span></p></a>

                                    </div>
                                 </div>
                                 <span class="bar" data-peity='{ "fill": ["#ffa21d"]}'>5,4,5,2,8,4,5,6,5,2,4,4,8,4,6,2,3,4</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-6 col-xl-6">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="card shadow overflow-hidden">
                           <div class="card-body">
                              <div class="widget text-center">
                                 <div><i class="fe fe-globe fa-5x text-yellow"></i></div>
                                 <h4 class="text-muted mt-2 mb-0">Total Leave</h4>
                                 <h2 class="display-2 mb-0">25</h2>
                                 <a href="#" class="btn btn-outline-yellow mt-3 btn-sm btn-pill">view all</a>
                              </div>
                           </div>
                           <span class="updating-chart" data-peity='{ "fill": ["#ffa21d"]}'>5,3,9,6,5,9,2,5,3,6,7,8,6</span>
                        </div>
                     </div>

                  </div>
                  <!-- /projects -->
               </div>

            </div>
         </div>
         {{--Main body goes here please--}}


         {{--Main Body ends Here Please--}}
      </div>
   </div>

@stop
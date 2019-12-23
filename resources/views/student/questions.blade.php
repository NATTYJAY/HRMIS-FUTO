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
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card shadow">
                          <div class="card-header">
                              <h2 class="mb-0">Questions</h2>
                          </div>
                          <div class="card-body">
                              <div id="wizard1">
                                  <h2>Interpersonal Skills Appraisal</h2>
                                  <section>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <input type="text" value="{{$cusID}}" hidden="hidden" id="courseID">
                                              <input type="text" value="{{$uId}}" hidden="hidden" id="lecturerID">
                                              <input type="text" value="{{$sID}}" hidden="hidden" id="studentID">
                                              <p class="description mb-0"><b>1. Is your teacher able to put across his lessons in easy to understand form? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time1" name="all_time1" value="1" />
                                                  <label>All the time</label>
                                                  <input type="radio" id="some_times"  name="all_time1" value="0.5" />
                                                  <label>Sometimes</label>
                                                  <input type="radio" id="never"  name="all_time1" value="0"/>
                                                  <label>Never</label>
                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>2. How often is your teacher able to show real life applications of class concepts? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time2" value="1" />
                                                  <label>All the time</label>
                                                  <input type="radio" id="some_times"  name="all_time2" value="0.5" />
                                                  <label>Sometimes</label>
                                                  <input type="radio" id="never"  name="all_time2" value="0"/>
                                                  <label>Never</label>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>3.  Does the lecturer present origin of thoughts and concepts? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time3" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time3" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>4.	Does he/she discuss latest development in the field? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time4" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time4" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>5.	Does he provide properly organized notes? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time5" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time5" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>6. Is he/she honest about concepts he does not know clearly? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time6" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time6" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>7. Would you say you looked forward attending this particular series of lectures?  </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time7" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time7" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              {{--<p class="description"><b>1. Is your teacher able to put across his lessons in easy to understand form? </b>--}}

                                              {{--</p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time1" name="all_time1" value="1" />--}}
                                                  {{--<label>All the time</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time1" value="0.5" />--}}
                                                  {{--<label>Sometimes</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time1" value="0"/>--}}
                                                  {{--<label>Never</label>--}}
                                              {{--</p>--}}
                                          </div>
                                      </div>

                                  </section>

                                  <h2>Personal Leadership Skills Appraisal</h2>
                                  <section>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>1.	Is your lecturer open to different views by students? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time8" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time8" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>2.	Does he/she discuss students' views? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time9" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time9" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>3.	Do students participate actively in his/her class?	 </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time0" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time0" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>4.	Does he/she encourage team work among students?	 </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time11" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time11" value="0" />
                                                  <label>No</label>

                                              </p>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>5. How sensitive is he/she to students' non-verbal actions/responses?	 </b></p>
                                              <p>
                                                  <input type="radio" id="all_time1" name="all_time12" value="1" />
                                                  <label>Very sensitive</label>
                                                  <input type="radio" id="some_times"  name="all_time12" value="0.5" />
                                                  <label>Sensitive</label>
                                                  <input type="radio" id="never"  name="all_time12" value="0"/>
                                                  <label>Insensitive</label>

                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>6.	How is his/her relationship with students?	 </b></p>
                                              <p>
                                                  <input type="radio" id="all_time1" name="all_time13" value="1" />
                                                  <label>Very cordial</label>
                                                  <input type="radio" id="some_times"  name="all_time13" value="0.5" />
                                                  <label>Cordial</label>
                                                  <input type="radio" id="never"  name="all_time13" value="0"/>
                                                  <label>Disinterested</label>

                                              </p>
                                          </div>
                                      </div>
                                  </section>

                                  <h2>Self-management Skills Appraisal</h2>
                                  <section>
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>1.	Does he/she return continuous assessment scripts? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time14" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time14" value="0" />
                                                  <label>No</label>
                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>2. If YES to q1, how long did it take? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time1" name="all_time15" value="1" />
                                                  <label>The next lecture</label>
                                                  <input type="radio" id="some_times"  name="all_time15" value="0.5" />
                                                  <label>Two weeks</label>
                                                  <input type="radio" id="never"  name="all_time15" value="0"/>
                                                  <label>Longer than two weeks</label>
                                              </p>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>3. Does he/she look happy to be in class? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time1" name="all_time16" value="1" />
                                                  <label>All the time</label>
                                                  <input type="radio" id="some_times"  name="all_time16" value="0.5" />
                                                  <label>Sometimes</label>
                                                  <input type="radio" id="never"  name="all_time16" value="0"/>
                                                  <label>Never</label>
                                              </p>
                                          </div>
                                          <div class="col-lg-6">
                                              <p class="description mb-0"><b>4.	Does he/she teach with enthusiasm? </b></p>
                                              <p>
                                                  <input type="radio" id="all_time" name="all_time17" value="1" />
                                                  <label>Yes</label>
                                                  <input type="radio" id="some_times"  name="all_time17" value="0" />
                                                  <label>No</label>
                                              </p>
                                          </div>
                                      </div>
                                  </section>

                                  {{--<h2>Forth Step</h2>--}}
                                  {{--<section>--}}
                                      {{--<p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor.--}}
                                          {{--Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.--}}
                                          {{--Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.</p>--}}
                                  {{--</section>--}}
                              </div>
                              {{--<div class="nav-wrapper">--}}
                                  {{--<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">--}}
                                      {{--<li class="nav-item">--}}
                                          {{--<a class="nav-link mb-sm-3 mb-md-0 active border" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fe fe-home mr-2"></i>Interpersonal Skills Appraisal</a>--}}
                                      {{--</li>--}}
                                      {{--<li class="nav-item">--}}
                                          {{--<a class="nav-link mb-sm-3 mb-md-0 border" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fe fe-user mr-2"></i>Personal Leadership Skills Appraisal</a>--}}
                                      {{--</li>--}}
                                      {{--<li class="nav-item">--}}
                                          {{--<a class="nav-link mb-sm-3 mb-md-0 border" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fe fe-message-circle mr-2"></i>Self-management Skills Appraisal</a>--}}
                                      {{--</li>--}}
                                  {{--</ul>--}}
                              {{--</div>--}}
                              {{--<div class="card shadow mb-0">--}}
                                  {{--<div class="card-body ">--}}
                                      {{--<div class="tab-content" id="myTabContent">--}}
                                          {{--<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">--}}
                                              {{--<p class="description mb-0"><b>1. Is your teacher able to put across his lessons in easy to understand form? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time1" name="all_time1" value="1" />--}}
                                                  {{--<label>All the time</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time1" value="0.5" />--}}
                                                  {{--<label>Sometimes</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time1" value="0"/>--}}
                                                  {{--<label>Never</label>--}}
                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>2. How often is your teacher able to show real life applications of class concepts? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time2" value="1" />--}}
                                                  {{--<label>All the time</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time2" value="0.5" />--}}
                                                  {{--<label>Sometimes</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time2" value="0"/>--}}
                                                  {{--<label>Never</label>--}}
                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>3.  Does the lecturer present origin of thoughts and concepts? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time3" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time3" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>4.	Does he/she discuss latest development in the field? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time4" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time4" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>5.	Does he provide properly organized notes? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time5" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time5" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>6. Is he/she honest about concepts he does not know clearly? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time6" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time6" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>7. Would you say you looked forward attending this particular series of lectures?  </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time7" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time7" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><input type="button" class="btn btn-outline-info form-control" value="Submit"> </p>--}}

                                          {{--</div>--}}
                                          {{--<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">--}}
                                              {{--<p class="description mb-0"><b>1.	Is your lecturer open to different views by students? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time8" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time8" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>2.	Does he/she discuss students' views? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time9" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time9" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>3.	Do students participate actively in his/her class?	 </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time0" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time0" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>4.	Does he/she encourage team work among students?	 </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time11" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time11" value="0" />--}}
                                                  {{--<label>No</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>5. How sensitive is he/she to students' non-verbal actions/responses?	 </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time1" name="all_time12" value="1" />--}}
                                                  {{--<label>Very sensitive</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time12" value="0.5" />--}}
                                                  {{--<label>Sensitive</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time12" value="0"/>--}}
                                                  {{--<label>Insensitive</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>6.	How is his/her relationship with students?	 </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time1" name="all_time12" value="1" />--}}
                                                  {{--<label>Very cordial</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time12" value="0.5" />--}}
                                                  {{--<label>Cordial</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time12" value="0"/>--}}
                                                  {{--<label>Disinterested</label>--}}

                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><input type="button" class="btn btn-outline-info form-control" value="Submit"> </p>--}}
                                          {{--</div>--}}
                                          {{--<div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">--}}
                                              {{--<p class="description mb-0"><b>1.	Does he/she return continuous assessment scripts? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time13" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time13" value="0" />--}}
                                                  {{--<label>No</label>--}}
                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><b>2. If YES to q1, how long did it take? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time1" name="all_time13" value="1" />--}}
                                                  {{--<label>The next lecture</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time13" value="0.5" />--}}
                                                  {{--<label>Two weeks</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time13" value="0"/>--}}
                                                  {{--<label>Longer than two weeks</label>--}}
                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>3. Does he/she look happy to be in class? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time1" name="all_time14" value="1" />--}}
                                                  {{--<label>All the time</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time14" value="0.5" />--}}
                                                  {{--<label>Sometimes</label>--}}
                                                  {{--<input type="radio" id="never"  name="all_time14" value="0"/>--}}
                                                  {{--<label>Never</label>--}}
                                              {{--</p>--}}

                                              {{--<p class="description mb-0"><b>4.	Does he/she teach with enthusiasm? </b></p>--}}
                                              {{--<p>--}}
                                                  {{--<input type="radio" id="all_time" name="all_time15" value="1" />--}}
                                                  {{--<label>Yes</label>--}}
                                                  {{--<input type="radio" id="some_times"  name="all_time15" value="0" />--}}
                                                  {{--<label>No</label>--}}
                                              {{--</p>--}}
                                              {{--<p class="description mb-0"><input type="button" class="btn btn-outline-info form-control" value="Submit"> </p>--}}
                                          {{--</div>--}}
                                      {{--</div>--}}
                                  {{--</div>--}}
                              {{--</div>--}}
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

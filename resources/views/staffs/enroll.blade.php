@extends('layouts.staffs')

@section('contentstaffs')
    <div class="side-app">
        <div class="main-content">
    @include('includes.staff.nav')
    <div class="container pt-7">

<div class="row">
    <div class="col-lg-12 col-md-12">

        <div class="card border-success shadow">

            <div class="card-body text-success">
                {{--Main content wizard start here--}}

                <div id="wizard">
                <h2>Staff Basic Info</h2>
                <section>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 profile-image">

                            <div class="card shadow" id="result">
                                <img src="../assets/img/photos/19.jpg" alt="gallery" class="default-pixs">
                                <img id="snap" class="getimage" />
                                <div id="lo"></div>
                                <div class="figcaption">
                                    <div style="margin:15px;">
                                        <input class="btn-outline-success btn" id="snap_again" value="Snap Again">
                                    </div>
                                    <div style="margin:15px;">
                                        <div style="margin:15px;">
                                            <input class="btn-outline-success btn" id="snap_now" value="Take Snap Shot">
                                        </div>
                                        {{--<input type=button class="btn-outline-success btn" class="snapshot" value="Take Snapshot" id="lol">--}}

                                    </div>
                                </div>
                            </div>



                            {{--<div class="preview" id="hide">--}}
                                {{--<input type=button class="snapshot" value="Take Snapshot" id="lol">--}}
                                {{--<div id="my_camera"></div>--}}
                            {{--</div>--}}
                            {{--<div id="result">--}}

                                {{--<img id="snap" />--}}
                            {{--</div>--}}
                            {{--<input class="btn-outline-success btn" id="des" value="take Again">--}}
                        </div>
                        <div class="card shadow" id="hide">
                            <span id="my_camera" alt="gallery"></span>
                        </div>
                        <div class="col-md-8 col-lg-8">


                            <div class="well" id="form_input">
                                <div class="alert alert-default" role="alert">

                                    <span class="alert-inner--text"><strong>Hello! {{$staff->fname}}  {{$staff->lname}} Your ID is</strong> {{$staff->staff_idNo}}</span>
                                </div>
                                <form action="#" id="formcreated" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="fname" readonly="readonly" value="{{$staff->fname}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" readonly="readonly" value="{{$staff->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Department</label>
                                        <input type="text" class="form-control" name="department" placeholder="Read Only Text area." value="{{$staff->dept->dept_name}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Age</label>
                                        <input type="text" class="form-control" id="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lname" readonly="readonly" value="{{$staff->lname}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" class="form-control required" name="phone" id="phone" required="required">
                                        <span style="color:red">
                                                 @foreach($errors->get('phone') as $message)
                                                <li>{{$message}}</li>
                                            @endforeach
                                            </span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <select class="form-control" id="gender">
                                            <option selected="selected" disabled="disabled"> Select Gender</option>
                                            <option value="Male" >Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Marital Status</label>
                                        <select class="form-control" id="marital_status" >
                                            <option selected="selected" disabled="disabled"> Select Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorce">Divorced</option>
                                        </select>
                                    </div>
                                </div>

                                </div>

                            </div>
                            </div>
                    </div>
                    <br><br>



                </section>

                <h2>Academic Details</h2>
                <section>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="alert alert-default" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                            <span class="alert-inner--text"><strong>Hello! Kingsley Okon Your ID is</strong>  UJISHIDH788</span>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Degree Certificate</label>
                                    <select class="form-control" id="degree">
                                        <option value="B.sc">B.sc</option>
                                        <option value="M.Eng">M.eng</option>
                                        <option value="PhD">PhD</option>
                                    </select>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label>Date Started</label>--}}
                                    {{--<input type="text" class="form-control datetimepicker4" placeholder="Select Date Started">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Date Ended</label>--}}
                                    {{--<input type="text" class="form-control datetimepicker4" placeholder="Date Program Ended">--}}
                                {{--</div>--}}
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="col">
                                        <label>Date Started</label>
                                        <div class="form-group mb-0">
                                            <div class="input-group">

                                                <input class="form-control" placeholder="Stdate_ractyart date" id="start_degree_date" type="text" value="10/16/2018">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Date Ended</label>
                                        <div class="form-group mb-0">
                                            <div class="input-group">

                                                <input class="form-control" placeholder="End date" id="end_degree_date" type="text" value="10/20/2018">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>School Attended</label>
                                    <select class="form-control" id="school_attend">
                                        <option value="University of Uyo">University of Uyo</option>
                                        <option value="Federal University Of Science and Technology">Federal University Of Science and Technology</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label>Upload Document</label>
                                    <div>
                                        <div class="input-group">

                                            <input type="file" class="form-control hide" id="degree-document">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Field of Study</label>
                                    <input type="text" class="form-control" id="field_study" placeholder="Field of Study">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Area of Specialization</label>
                                <input type="text" class="form-control" id="specialty" placeholder="Area of Specialization">
                            </div>

                        </div>
                    </div>
                </div>
                </section>

                <h2>Working Experience</h2>
                <section>

            {{--working experiencces--}}

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Staff Number</label>
                                <input type="text" class="form-control" placeholder="Staff Number" readonly="readonly" value="{{$staff->staff_idNo}}">
                            </div>

                            <div class="form-group">
                                <label>Date Of Assumption of Duty</label>
                                <input type="text" class="form-control datetimepicker4" id="data_assump" placeholder="Date Of Assumption of Duty">
                            </div>

                            <div class="form-group">
                                <label>Date Of Ratification of Employment</label>
                                <input type="text" class="form-control datetimepicker4" id="date_racty" placeholder="Date Of Confirmation of Employment">
                            </div>

                            <div class="form-group">
                                <label>Date Of Confirmation of Employment</label>
                                <input type="text" class="form-control datetimepicker4" id="confirm_date" placeholder="Date Of Confirmation of Employment">
                            </div>

                            <div class="form-group">
                                <label>Promotion Year</label>
                                <input type="text" class="form-control datetimepicker4" id="promotion_yr" placeholder="YYYY">
                            </div>





                        </div>
                        <div class="col-lg-6">


                            <div class="form-group">
                                <label>Present Status</label>
                                <select class="form-control" id="first_appointment">
                                    <option value="7">Professor</option>
                                    <option value="6">Assoc Professor</option>
                                    <option value="5">Senior Lecturer</option>
                                    <option value="4">Lecturer 2</option>
                                    <option value="3">Lecturer 1</option>
                                    <option value="2">Assistant Lecturer</option>
                                    <option value="1">Graduate Assistant</option>
                                </select>
                            </div>

                            <div class="form-group">


                                    <div class="form-group">
                                        <label>Level or Rank</label>

                                        <select class="form-control" id="level_rank">
                                            <option value="" disabled="" selected="">Level or Rank</option>
                                            <option value="CONUASS 7">CONUASS 7</option>
                                            <option value="CONUASS 6">CONUASS 6</option>
                                            <option value="CONUASS 5">CONUASS 5</option>
                                            <option value="CONUASS 4">CONUASS 4</option>
                                            <option value="CONUASS 3">CONUASS 3</option>
                                            <option value="CONUASS 2">CONUASS 2</option>
                                            <option value="CONUASS 1">CONUASS 1</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Step</label>

                                        <select class="form-control" id="step">
                                            <option value="" disabled="" selected="">Step</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>


                            </div>

                            <div class="form-group">
                                <label>Status of First Appointment</label>
                                <select class="form-control" id="status_first_appointment">
                                    <option value="Professor">Professor</option>
                                    <option value="Reader">Reader</option>
                                    <option value="lecturer 1">Lecturer 1</option>
                                    <option value="Lecturer 2">Lecturer 2</option>
                                    <option value="Senior Lecturer">Senior Lecturer</option>
                                    <option value="Assistant Lecturer">Assistant Lecturer</option>
                                    <option value="Graduate Lecturer">Graduate Assistant</option>
                                </select>
                            </div>


                        </div>
                    </div>
                    </form>

                    {{--End of working eperience--}}
                </section>

                    <h2>Confimation</h2>
                    <section>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow bg-default">
                                    <div class="card-header bg-transparent border-0">
                                        {{--<h2 class="text-white mb-0">Confirm your details before submitting </h2>--}}
                                        <p><i>Please confirm that all information provided is valid before final submission</i></p>
                                    </div>
                                    <div role="alert" id="alert"></div>
                                    <div class="">
                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table card-table table-dark table-vcenter text-nowrap  align-items-center">
                                                        {{--<thead class="thead-dark text-white">--}}
                                                        {{--<tr>--}}
                                                            {{--<th>Id</th>--}}
                                                            {{--<th>Project Name</th>--}}
                                                            {{--<th>Team</th>--}}
                                                            {{--<th>Feedback</th>--}}
                                                            {{--<th>Date</th>--}}
                                                        {{--</tr>--}}
                                                        {{--</thead>--}}
                                                        <tbody>
                                                        <tr>

                                                            <td class="text-nowrap text-center" colspan="2">
                                                                <h3 class="text-white mb-0">Basic Information </h3>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>Names</td>
                                                            <td class="name"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td class="text-sm font-weight-600 email"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone</td>
                                                            <td class="phone"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Department</td>
                                                            <td class="department"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender</td>
                                                            <td class="text-nowrap gender">Male</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Age</td>
                                                            <td class="age"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marital Status</td>
                                                            <td class="maritalS"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap text-center" colspan="2">
                                                                <h3 class="text-white mb-0"> Academic Information </h3>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Degree</td>
                                                            <td class="degree"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>School Attended</td>
                                                            <td class="school"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date</td>
                                                            <td class="dateFT"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Field Of Study</td>
                                                            <td class="fOS"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap">Area Of Specialization</td>
                                                            <td class="text-nowrap aOS"></td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-nowrap text-center" colspan="2">
                                                                <h3 class="text-white mb-0"> Working Experience </h3>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Present Status</td>
                                                            <td class="status"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date Of Assumption of Duty</td>
                                                            <td class="dOAD"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date Of Ratification of Employment</td>
                                                            <td class="dOROE"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date Of Confirmation of Employment</td>
                                                            <td class="dOCOE"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status of First Appointment</td>
                                                            <td class="sOFA"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Step</td>
                                                            <td class="step"></td>
                                                        </tr>
                                                       <!--  <tr>
                                                            <td>Date</td>
                                                            <td class="dW"></td>
                                                        </tr> -->
                                                        <tr>
                                                            <td>Level or Rank</td>
                                                            <td class="rank"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-nowrap">Promotion Year</td>
                                                            <td class="text-nowrap year"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>


                </div>

                {{--Main content wizard ends here--}}
            </div>

        </div>

    </div>

</div>
    </div>
        </div>
    </div>



@stop


{{--Edit Academic Modal goes here--}}



<div class="modal fade" id="academicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel">Update Academic Staff Details</h2>
                    <span aria-hidden="true">&times;</span>
                </input>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Degree Certificate</label>
                            <select class="form-control" id="degree">
                                <option value="B.sc">B.sc</option>
                                <option value="M.Eng">M.eng</option>
                                <option value="PHd">PHD</option>
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
                                <option value="uniuyo">University of Uyo</option>
                                <option value="futo">FUTO Owerri</option>
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
            <div class="modal-footer">
                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

{{--Edit academic modal ends here--}}


{{--Edit Work Modal goes here--}}



<div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel">Academic Work Details</h2>
                <span aria-hidden="true">&times;</span>
                </input>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Staff Number</label>
                            <input type="text" class="form-control" placeholder="Staff Number" readonly="readonly" value="">
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
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

{{--Edit Work modal ends here--}}





{{--Edit Basic Modal goes here--}}



<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="largeModalLabel">Basic Info Details</h2>
                <span aria-hidden="true">&times;</span>
                </input>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fname" value="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" name="department" placeholder="Read Only Text area." value="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" placeholder="Age">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control required" name="phone" id="phone" required="required">

                        </div>
                        <div class="form-group">
                            <label class="form-label">Gender</label>
                            <select class="form-control" id="gender">
                                <option selected="selected" disabled="disabled"> Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Marital Status</label>
                            <select class="form-control" id="marital_status" >
                                <option selected="selected" disabled="disabled"> Select Marital Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorce">Divorced</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

{{--Edit Basic modal ends here--}}




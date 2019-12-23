<div class="modal fade" id="editCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Edit Course</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="#" method="POST" id="updateForm">
                    {{ csrf_field() }}
                    <div class="card-body">
                        {{--@if(session('success_msg'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--<span class="alert-inner--text"><strong>{{ session('success_msg') }}</strong></span>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--@if(session('error_msg'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--<span class="alert-inner--icon"><i class="fe fe-download"></i></span>--}}
                                {{--<span class="alert-inner--text"><strong>{{ session('error_msg') }}</strong></span>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label">Choose Department</label><br>
                                        {{--<input type="text" class="form-control" placeholder="Course Name" name="courseName" required="required">--}}
                                        <select class="form-control select2 col-md-12" id="dept" name="dept_id" style="width:400px; margin: 40px">
                                            <option selected="selected" disabled="disabled">Select Department</option>
                                            @foreach($dept as $key => $department)
                                                <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Course Name</label>
                                    <input type="text" class="form-control" placeholder="Course Name" id="cusname" name="courseName" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Course Code</label>
                                    <input type="text" class="form-control" required="required" id="cuscode" name="courseCode" placeholder="Course Code">
                                </div>
                            </div>
                            <div class="col-md-6" hidden="hidden">
                                <div class="form-group">
                                    <label class="form-label">Course Id</label>
                                    <input type="text" class="form-control" required="required" id="cusid" name="id" placeholder="Course Code">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Credit Unit</label>
                                    <input type="text" class="form-control" required="required" id="cunit" name="credit_unit" placeholder="Credit Unit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Semester</label>
                                    <input type="number" class="form-control" required="required" id="semes" name="semester" placeholder="Semester">
                                </div>
                            </div>
                        </div>
                            <input type="submit" class="btn btn-primary btn-pill mt-1 mb-1" value="Update Course">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

{{--Add Courses Here--}}

<div class="modal fade" id="editCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Add Course</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="#" method="POST" id="updateForm">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                            <span class="alert-inner--text">Add Courses to <strong><p id="studentReg"></p></strong></span>
                        </div>
                        {{--@if(session('success_msg'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                        {{--<span class="alert-inner--text"><strong>{{ session('success_msg') }}</strong></span>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--@if(session('error_msg'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                        {{--<span class="alert-inner--icon"><i class="fe fe-download"></i></span>--}}
                        {{--<span class="alert-inner--text"><strong>{{ session('error_msg') }}</strong></span>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <label class="form-label">Choose Department</label><br>
                                    {{--<input type="text" class="form-control" placeholder="Course Name" name="courseName" required="required">--}}
                                    <select class="form-control select2 col-md-12" id="dept" name="dept_id" style="width:400px; margin: 40px">
                                        <option selected="selected" disabled="disabled">Select Department</option>

                                    </select>

                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary btn-pill mt-1 mb-1" value="Add Course">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

{{--Add Courses Ends Here--}}


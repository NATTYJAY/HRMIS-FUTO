$(document).ready(function(){

    sendLeaveNow();
    reject_leave();
    editCourses();
    selectLecturer();
    studentRegCourse();
    function get_dept(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url:'getstaffs/'+id,
            type: 'POST',
            data:{
                "id" :id
            },
            dataType:"Json",
            success: function(data){
                $('#staff').empty();
                $('#staff').append("<option>Select Lecturers Here</option>")
                $.each(data.result, function(){
                    $('#staff').append("<option value='"+this['id']+"'>"+this['name']+"</option>")
                })

                $('#lecturers').empty();
                $('#lecturers').append("<option>Select Lecturers Here</option>")
                $.each(data.result, function(){
                    $('#lecturers').append("<option value='"+this['id']+"'>"+this['name']+"</option>")
                })
            }
        });
    }
     $('.dept').on("change", function(){
         var get = $('.dept').val();
         get_dept(get);
     });


    $('.noY').on('keyup',function(){
        actual_year = parseFloat(0+$('.noY').val());
         recommended_year = $('.rY').val();
        final = (parseFloat(recommended_year) + parseFloat(actual_year) );
         $('.toY').html("<h2>"+final+"</h2>");
         $('#leaveActual').val(final);
        if( $('.noY').val() == ""){
            $('.noY').val(0);
        }else if($('.noY').val() >3){
            console.log('not allowed');
            //$('.noY').val(0);
        }
    });

    function initial_result(){
        actual_year = parseFloat(0+$('.noY').val());
        recommended_year = $('.rY').val();
        final = (parseFloat(recommended_year) + parseFloat(actual_year) );
        $('.toY').html("<h2>"+final+"</h2>");
        $('#leaveActual').val(final);
    }
    window.load(initial_result());


});

function sendLeaveNow(){
    $('#leaveForm').on('submit',function(e){
        e.preventDefault();
        token = $('._token').val();
        id__ = $('.id').val();
        $.ajax({
            url:"/admin/storeLeave",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData:false,
            dataType : "Json",
            success: function(data){
                //console.log(data.success);
                if(data.success == 321){
                    $('#msggs').addClass('alert alert-success col-lg-12 col-md-12 textcenter');
                    $('#msggs').html('<span class="alert-inner--text"><strong>\n' +
                        '\n' +
                        '\n' +
                        'Leave Approved</strong></span>  ');
                    window.location.href = "http://localhost:8000/admin/staffleave";
                    setTimeout(function(){
                            $('#msggs').removeClass('alert alert-danger col-lg-12 col-md-12 textcenter');
                            $('#msggs').html('');
                            location.load('admin/staffleave');
                        },
                        2000);
                    setTimeout(function(){
                            $('#msggs').removeClass('alert alert-danger col-lg-12 col-md-12 textcenter');
                            $('#msggs').html('');
                            location.reload('admin/staffleave');
                        },
                        2000);
                }else{
                    $('#msggs').addClass('alert alert-danger col-lg-12 col-md-12  textcenter');
                    $('#msggs').html('<strong>Leave Approval Failed !. Please try again later</strong> ');
                }
            }

        });
    });
}

function successAlert($title,$text){
    swal({
        title: $title,
        text: $text,
        timer: 4000,
        type: "success",
        showConfirmButton: false,
    });
    location.reload();
}

function errorAlert($title,$text){
    swal({
        title: $title,
        text: $text,
        type: "error",
        confirmButtonText: 'Exit'
    });
}

function reject_leave(){
    $('.reject').on('click',function(e){
        e.preventDefault();
        send_data = new FormData();
        send_data.append("id", $(this).attr('id'));
        send_data.append("staff_id", $('.staff_id').val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url:"/admin/reject",
            type: "POST",
            data: send_data,
            contentType: false,
            processData:false,
            dataType : "Json",
            success: function(data){
              if(data.success == 321){
                  successAlert('Leave Rejected','You have successfully rejected leave application');

              }else{
                  errorAlert('Error','"Leave could not be Rejected"');
              }
            }

        });
    })
}

function editCourses(){
    $('.updatecourse').on('click', function(){
        course_id = $(this).attr("id");
        $.get('/admin/edit/'+course_id, function (result) {
            $('#cusname').val(result.success.courseName);
            $('#cuscode').val(result.success.courseCode);
            $('#cunit').val(result.success.credit_unit);
            $('#semes').val(result.success.semester);
            $('#cusid').val(result.success.id);
            $('#editCourseModal').modal('show');
        });
    });


    $('#updateForm').on('submit',function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url:"/admin/updateCourse",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData:false,
            dataType : "Json",
            success: function(data){
                if(data.success == 321){
                    successAlert('Success','Data successfully Updated');
                  setTimeout(function(){
                            $('#msggs').removeClass('alert alert-danger col-lg-12 col-md-12 textcenter');
                            $('#msggs').html('');
                            location.reload();
                        },
                        5000);
                }else{
                    errorAlert('Error','Data could not be updated');

                }
            }

        });
    });
}

function selectLecturer(){
    function get_lecturer(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url:'getLecturer/'+id,
            type: 'POST',
            data:{
                "id" :id
            },
            dataType:"Json",
            success: function(data){
                $('#lecturers').empty();
                $('#lecturers').append("<option>Select Lecturers Here</option>")
                $.each(data.result, function(){
                    $('#lecturers').append("<option value='"+this['id']+"'>"+this['name']+"</option>")
                })
            }
        });
        $.ajax({
            url:'getCourses/'+id,
            type: 'POST',
            data:{
                "id" :id
            },
            dataType:"Json",
            success: function(data){
                $('#courses').empty();
                $('#courses').append("<option>Select Courses Here</option>")
                $.each(data.result, function(){
                    $('#courses').append("<option value='"+this['id']+"'>"+this['name']+"</option>")
                })
            }
        });
    }
    $('#deptselect').on("change", function(){
        var get_id_dept = $(this).val();
        get_lecturer(get_id_dept);
    });

    $('#CourseSave').on('submit',function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url:"/admin/assignCourse",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData:false,
            dataType : "Json",
            success: function(data){
                //console.log(data.success);
                if(data.success == 321){
                    swal('Saved!', 'Course succesfully Assigned', 'success');
                   setTimeout(function(){
                            location.reload();
                        },
                        3000);
                }else if(data.success == 312){
                    errorAlert('Error','Course Already Registered for this User');
                }
                else{
                    errorAlert('Error','Data could not be updated');
                }
            }

        });
    });

}

/*GET LECTURER FOR APPRAISALS*/

function getLecturerCourse(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url:'student/getLecturerC/'+id,
        type: 'POST',
        data:{
            "id" :id
        },
        cache: false,
        dataType:"Json",
        success: function(data){
            //console.log(data.result);
            $('#tblC').empty();
            $.each(data.result, function(){
                $('#tblC').append(" <tr>"+"<td>"+this['cName']+"</td>\n" +
                    "<td>"+this['lName']+"</td>\n" +
                    " <td><a href='student/appraisal/"+this['uID']+"/"+this['cId']+" '> <span class=\"badge badge-danger\" style='background-color: #00c3ed'>Access</span></a></td>"+"</tr>");
            })
        }
    });
}

function studentRegCourse(){
    $('#courseStudent').on("change", function(){
        var cus_id = $(this).val();
        getLecturerCourse(cus_id);
    });
}
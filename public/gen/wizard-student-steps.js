$(document).ready(function(){

    function successAlert($title,$text){
        swal({
            title: $title,
            text: $text,
            timer: 5000,
            type: "success",
            showConfirmButton: false,
        });
        location.assign('/student');
    }

    function errorAlert($title,$text){
        swal({
            title: $title,
            text: $text,
            type: "error",
            confirmButtonText: 'Exit'
        });
    }

    $("#wizard1").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        labels: {
            finish: "Submit Now"
        },

        onFinished: function () {
            if( !$('input[name=all_time1]:checked').val() || !$('input[name=all_time2]:checked').val() || !$('input[name=all_time3]:checked').val() || !$('input[name=all_time4]:checked').val() || !$('input[name=all_time5]:checked').val() || !$('input[name=all_time6]:checked').val() || !$('input[name=all_time7]:checked').val() || !$('input[name=all_time8]:checked').val() || !$('input[name=all_time9]:checked').val() || !$('input[name=all_time0]:checked').val() || !$('input[name=all_time11]:checked').val() || !$('input[name=all_time12]:checked').val() || !$('input[name=all_time13]:checked').val() || !$('input[name=all_time14]:checked').val() || !$('input[name=all_time15]:checked').val() || !$('input[name=all_time16]:checked').val() || !$('input[name=all_time17]:checked').val()){
                errorAlert('Sorry ! Not Submitted','You have skipped one or more questions');
                }else{
                ap1 = parseFloat($('input[name=all_time1]:checked').val());
                ap2 = parseFloat($('input[name=all_time2]:checked').val());
                ap3 = parseFloat($('input[name=all_time3]:checked').val());
                ap4 = parseFloat($('input[name=all_time4]:checked').val());
                ap5 = parseFloat($('input[name=all_time5]:checked').val());
                ap6 = parseFloat($('input[name=all_time6]:checked').val());
                ap7 = parseFloat($('input[name=all_time7]:checked').val());
                ap8 = parseFloat($('input[name=all_time8]:checked').val());
                ap9 = parseFloat($('input[name=all_time9]:checked').val());
                ap10 = parseFloat($('input[name=all_time0]:checked').val());
                ap11 = parseFloat($('input[name=all_time11]:checked').val());
                ap12 = parseFloat($('input[name=all_time12]:checked').val());
                ap13 = parseFloat($('input[name=all_time13]:checked').val());
                ap14 = parseFloat($('input[name=all_time14]:checked').val());
                ap15 = parseFloat($('input[name=all_time15]:checked').val());
                ap16 = parseFloat($('input[name=all_time16]:checked').val());
                ap17 = parseFloat($('input[name=all_time17]:checked').val());

                score = ap1 + ap2 + ap3+ ap4 + ap5 + ap6 + ap7 + ap8 + ap9 + ap10 + ap11 + ap12 + ap13 + ap14 + ap15 + ap16 + ap17;

                send_data = new FormData();
                send_data.append("courseID", $('#courseID').val());
                send_data.append("lecturerID", $('#lecturerID').val());
                send_data.append("studentID", $('#studentID').val());
                send_data.append("totalScore", score);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url:'/student/sCompute',
                    type: 'POST',
                    data: send_data,
                    contentType: false,
                    processData: false,
                    cache:true,
                    dataType:"Json",
                    success: function(data){
                        //console.log(data.success);
                        if(data.success == 333){
                            //alert('Appraisal Already submitted for this lecturer in this Course');
                            errorAlert('Sorry !','Appraisal Already submitted for this lecturer in this Course');
                        }else if(data.success == 321){
                            //alert('Appraisal Submitted !. Thank You');
                             successAlert('Success','Appraisal Submitted !. Thank You');
                        }else{
                            //alert('Something else went wrong');
                            errorAlert('Error','Something else went wrong');
                        }
                    }
                });
            }

        }
    })
    // webcamping();
});







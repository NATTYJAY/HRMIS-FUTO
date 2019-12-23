$(function ()
{

    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: 0,
        labels: {
            finish: "Finish"
        },
        onStepChanged: function (event, currentIndex, newIndex) {
            // return true;
            $('.name').text($('input[name=fname]').val()+"  "+$('input[name=lname]').val());
            $('.email').text($('input[name=email]').val());
            $('.phone').text($('input[name=phone]').val());
            $('.department').text($('input[name=email]').val());
            $('.gender').text($('#gender').val());
            $('.age').text($('#age').val());
            $('.maritalS').text($('#marital_status').val());
            $('.degree').text($('#degree').val());
            $('.school').text($('#school_attend').val());
            $('.dateFT').text(" From "+$('#start_degree_date').val()+" to "+$('#end_degree_date').val());
            $('.fOS').text($('#field_study').val());
            $('.aOS').text($('#specialty').val());
                if($('#first_appointment').val() == 7){
                    val = 'Professor';
                }else if($('#first_appointment').val() == 6){
                    val = 'Assoc Professor';
                }else if($('#first_appointment').val() == 5){
                    val = 'Senior Lecturer';
                }else if($('#first_appointment').val() == 4){
                    val = 'Lecturer 2';
                }else if($('#first_appointment').val() == 3){
                    val = 'Lecturer 1';
                }else if($('#first_appointment').val() == 2){
                    val = 'Assistant Lecturer';
                }else if($('#first_appointment').val() == 1){
                    val = 'Graduate Assistant';
                }
            $('.status').text(val);

            $('.dOAD').text($('#data_assump').val());
            $('.dOROE').text($('#date_racty').val());
            $('.dOCOE').text($('#confirm_date').val());
            $('.sOFA').text($('#status_first_appointment').val());
            $('.step').text($('#step').val());
            // $('.dW').text($('input[name=email]').val());
            $('.rank').text($('#level_rank').val());
            $('.year').text($('#promotion_yr').val());
            },

        onFinished: function () {

            ajax_call();

        }
    })
    webcamping();
});

function ajax_call(){
    var degree_document = $('#degree-document');
    send_data = new FormData();
    send_data.append("img", degree_document[0].files[0]);
    send_data.append("getimage", myImg);
    send_data.append("phone", $('#phone').val());
    send_data.append("age", $('#age').val());
    send_data.append("gender", $('#gender').val());
    send_data.append("marital_status", $('#marital_status').val());
    send_data.append("degree", $('#degree').val());
    send_data.append("start_degree_date", $('#start_degree_date').val());
    send_data.append("end_degree_date", $('#end_degree_date').val());
    send_data.append("school_attend", $('#school_attend').val());
    send_data.append("field_study", $('#field_study').val());
    send_data.append("specialty", $('#specialty').val());
    send_data.append("data_assump", $('#data_assump').val());
    send_data.append("date_racty", $('#date_racty').val());
    send_data.append("confirm_date", $('#confirm_date').val());
    send_data.append("first_appointment", $('#first_appointment').val());
    send_data.append("level_rank", $('#level_rank').val());
    send_data.append("step", $('#step').val());
    send_data.append("promotion_yr", $('#promotion_yr').val());

    send_data.append("status_first_appointment", $('#status_first_appointment').val());
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url:'display',
        type: 'POST',
        data: send_data,
        contentType: false,
        processData: false,
        cache:true,
        dataType:"Json",
        success: function(data){
           if(data.success == 322){
               $('#alert').removeClass('alert alert-danger textcenter');
               $('#alert').html('');
               $('#alert').addClass('alert alert-success textcenter');
               $('#alert').html('<strong> Enrollment Successful !</strong> ');
           }else if(data.success == 321){
               $('#alert').removeClass('alert alert-danger textcenter');
               $('#alert').html('');
               $('#alert').addClass('alert alert-success textcenter');
               $('#alert').html('<strong> Data Updated !</strong> ');
           }else if(data.success ==329){
               $('#alert').addClass('alert alert-danger textcenter');
               $('#alert').html('<strong> Please Take Snap Shot !</strong> ');
           }else if(data.success == 311){
               $('#alert').addClass('alert alert-danger textcenter');
               $('#alert').html('<strong> Please Uplode Document !</strong> ');
           }else{
               $('#alert').addClass('alert alert-danger textcenter');
               $('#alert').html('<strong> Something went wrong !</strong> ');
           }

        }
    });
}

function webcamping(){
    $('#snap_again').hide();
    $('.default-pixs').show();
    $('#form_input').hide();
    requirejs([$("meta[name='webcam-link']").attr('content')], ({Webcam}) => {
        // create an instance and initialize it
        const config = {
            ctx: '#my_camera',
            previewWidth: 320,
            previewHeight: 240,
            imageFormat: 'jpeg',
            jpegQuality: 97,
        }
        Webcam(config).connect().then(cam => {
            window.cam = cam;
        });
        cam.set_api_url( 'display' );
    });

    $('#snap_again').on('click',function(){
        $('#hide').show();
        $('#snap_now').show();
        $('#form_input').hide();
        $(this).hide();
    })
    function take_snapshot() {
        cam.snap().then(url => {
            console.log('urllen:' + url.length+'.'+cam.config.imageFormat);
            document.querySelector('#snap').src = url;
            myImg = document.querySelector('#snap').src;
        });
    }
    $('#snap_now').on('click', function () {
        take_snapshot();
        $('#hide').hide();
        $('#snap_again').show();
        $('.default-pixs').hide();
        $('#form_input').show();
        $(this).hide();
    })

}





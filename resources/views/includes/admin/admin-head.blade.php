<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
    <meta content="Spruko" name="author">
    <meta name="webcam-link" content="{{ url('webcam.js') }}">

    <!-- Title -->
    <title>FUTO HRMIS</title>

    <!-- Favicon -->
    <link href="{{asset('assets/img/brand/f.png')}}" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
    <!-- Icons -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" />
    <!-- Ansta CSS -->
    <link href="{{asset('assets/css/left-style-dashboard.css')}}" rel="stylesheet" type="text/css">

    <!-- Tabs CSS -->
    <link href="{{asset('assets/plugins/tabs/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}">
    <!-- jvectormap CSS -->
    {{--<link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />--}}

    {{--<!-- Custom scroll bar css-->--}}
    {{--<link href="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />--}}

    <!-- Sidemenu Css -->
    <link href="{{asset('assets/plugins/toggle-sidebar/css/sidemenu.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('wizard/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('wizard/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('wizard/css/jquery.steps.css')}}">
    <meta id="token" name="_token" content="{{csrf_token()}}">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
</head>
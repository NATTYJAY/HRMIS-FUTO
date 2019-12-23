<!-- Ansta Scripts -->
<!-- Core -->

<script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/application.js')}}"></script>
<!-- Echarts JS -->
<script src="{{asset('assets/plugins/chart-echarts/echarts.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{asset('assets/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- peitychart -->
<script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/sweet-alert.js')}}"></script>

<!-- Vector Plugin -->
{{--<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>--}}
<script src="{{asset('assets/js/dashboard2map.js')}}"></script>

<script src="{{asset('assets/plugins/select2/select2.full.js')}}"></script>
<script src="{{asset('assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Ansta JS -->
<script src="{{asset('assets/js/select2.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/dashboard-sales.js')}}"></script>


<script src="{{asset('lib/modernizr-2.6.2.min.js')}}"></script>

<script src="{{asset('lib/jquery.cookie-1.3.1.js')}}"></script>
<script src="{{asset('build/jquery.steps.js')}}"></script>

<script src="{{asset('require.min.js')}}" ></script>
<script src="{{asset('gen/wizard-student-steps.js')}}"></script>
<script src="{{asset('gen/wizard-steps.js')}}"></script>
<script src="{{asset('jquery.validate.min.js')}}"></script>


<script>
    $(function(e) {
        $('#example').DataTable();

        var table = $('#example1').DataTable();
        $('button').click( function() {
            var data = table.$('input, select').serialize();
            alert(
                "The following data would have been submitted to the server: \n\n"+
                data.substr( 0, 120 )+'...'
            );
            return false;
        });
        $('#example2').DataTable( {
            "scrollY":        "200px",
            "scrollCollapse": true,
            "paging":         false
        });
    } );

</script>
<script src="{{asset('assets/hcharts.js')}}" ></script>


</body>

<!-- Mirrored from spruko.com/demo/ansta/Leftmenu-Icon-LightSidebar/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:24:06 GMT -->
</html>
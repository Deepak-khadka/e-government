
<!-- Mainly scripts -->
<script src="{{asset('assets/admin/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('assets/admin/js/inspinia.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/iCheck/icheck.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('assets/admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('assets/admin/js/plugins/select2/select2.full.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Sparkline demo data  -->
<script src="{{asset('assets/admin/js/demo/sparkline-demo.js')}}"></script>
<script src="{{asset('assets/admin/js/plugins/sweetalert/sweetalert.min.js')}}"></script>

<script src="{{asset('assets/admin/bootstrap3-editable-1.5.1/bootstrap3-editable/js/bootstrap-editable.js')}}"></script>


<!-- DataTables -->
<script src="{{asset('assets/admin/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>


<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>


@stack('js')

</body>
</html>

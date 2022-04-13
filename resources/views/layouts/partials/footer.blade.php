<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>&copy;<a href="https://wa.me/6285333920007"> BakidDev</a>.</strong> Template By AdminLTE3.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@include('sweetalert::alert')
<!-- jQuery -->
<script src="{{ asset('adminlte3') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte3') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- sweet alert2-->
<script src="{{ asset('adminlte3') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('adminlte3') }}/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte3') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
@include('layouts.partials.scripts')
@stack('footer')
</body>

</html>

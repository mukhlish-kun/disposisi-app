<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2023 <a href="#">Fadil & Muklis</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('adminLTE/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?=base_url('adminLTE/plugins/select2/js/select2.full.min.js')?>"></script>
<!-- Datatables -->
<script src="<?= base_url('adminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('adminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js')?>"></script>
<script src="<?= base_url('adminLTE/dist/js/adminlte.min.js') ?>"></script>


<script>
$(function() {
    bsCustomFileInput.init();
});
$('.select2').select2();
$('.select2bs4').select2({
    theme: 'bootstrap4'
})
</script>
</body>

</html>
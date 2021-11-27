<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Design & Developed By: </b> Umesh Kumar
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin')}}/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="{{asset('admin')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
@yield('script')

</body>
</html>

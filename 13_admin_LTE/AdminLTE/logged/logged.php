<!DOCTYPE html>
<html lang="pl">
<?php
session_start();
if (!isset($_SESSION['logged']['email'])) {
  $_SESSION['error'] = 'Zaloguj się na naszą stronę!';
  header('location: ../');
  exit();
}
// head
require_once './pages/head.php';
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
<?php
require_once './pages/navbar.php';
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php
    if ($_SESSION['logged']['permission_id']) {
        switch ($_SESSION['logged']['permission_id']) {
            case '1':
              $path = './pages/user/aside.php';
                break;            
                
            case '2':
              $path = './pages/moderator/aside.php';
                break;            
                
            case '3':
              $path = './pages/administrator/aside.php';
        }
        require_once $path;
    }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php
    if ($_SESSION['logged']['permission_id']) {
        switch ($_SESSION['logged']['permission_id']) {
            case '1':
              $path = './pages/user/content_header.php';
                break;            
                
            case '2':
              $path = './pages/moderator/content_header.php';
                break;            
                
            case '3':
              $path = './pages/administrator/content_header.php';
        }
        require_once $path;
    }
?>
    <!-- /.content-header -->

    <!-- Main content -->
<?php
    if ($_SESSION['logged']['permission_id']) {
        switch ($_SESSION['logged']['permission_id']) {
            case '1':
              $path = './pages/user/content.php';
                break;            
                
            case '2':
              $path = './pages/moderator/content.php';
                break;            
                
            case '3':
              $path = './pages/administrator/content.php';
        }
        require_once $path;
    }
?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php
require_once './pages/footer.php';
?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>

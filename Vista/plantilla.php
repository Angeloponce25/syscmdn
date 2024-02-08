<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Centro Medico Divino Niño</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/dist/css/skins/_all-skins.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- FullCalendar -->
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

   <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
<?php
if($_SESSION['logueado'] == true)
{
  /*session_destroy();*/    
  echo '<div class="wrapper">';

    include "modulos/cabecera.php";
    include "modulos/menu.php";
    $controller = new co_menu();
    $controller->cargarRutas();        
    include "modulos/footer.php";
  echo '<div class="control-sidebar-bg"></div>';
  echo '</div>';
}

else
{  
  include "modulos/login.php";
}

?>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/dist/js/demo.js"></script>
<script src="<?php echo dirname($_SERVER['PHP_SELF']) ?>/Vista/js/sesion.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>

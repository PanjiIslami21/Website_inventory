<?php  
session_start();
ob_start();
//include "cekuser.php";
include "../fungsi/koneksi.php";

$page = isset($_GET['p']) ? $_GET['p'] : false;
$query = mysqli_query($koneksi, "SELECT COUNT(id_jenis) AS jumlah FROM jenis_barang ");
$data = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DitjenBadilmiltun</title>
  <link rel="shortcut icon" type="image/icon" href="../pv.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link href="../assets/bootstrap/css/custom.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/fa/css/font-awesome.min.css">
  <!-- Ionicons -->  
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="../assets/plugins/iCheck/flat/blue.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="../assets/plugins/datepicker/datepicker3.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">

   <script src="../assets/plugins/jQuery/jquery.min.js"></script>
   
 </head>
 <body class="hold-transition skin-red-light sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
     <div class="logo">

      <span class="logo-lg"><b>DitjenBadilmiltun</b></span>
    </div>
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      
    </a>
    

  </nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">      
    <ul class="sidebar-menu">
      <li class="header"><h4 class="text-center"><?=  $_SESSION['username']; ?></h4></li>
      <li class="active treeview">
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
        </a>          
      </li>
      <li><a href="index.php?p=user"><i class="fa fa-users"></i> <span>Data User</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cubes"></i>
          <span>Data Stok Barang</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"><?= $data['jumlah']; ?></span>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="index.php?p=material-m1&id_jenis=1" ><i class="fa fa-circle-o"></i>ATK</a></li>
         <li><a href="index.php?p=material-m2&id_jenis=2" ><i class="fa fa-circle-o"></i>ALAT KEBERSIHAN</a></li>
         <li><a href="index.php?p=material-m3&id_jenis=3" ><i class="fa fa-circle-o"></i>PERLENGKAPAN LAIINYA</a></li>
       </ul>
     </li>        
     
     <li class="treeview">
      <a href="#">
        <i class="fa fa-retweet"></i>
        <span>Permintaan Barang</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?p=datapermintaan" ><i class="fa fa-circle-o"></i>Permintaan Barang</a></li>
      </ul>
      <ul class="treeview-menu">
        <li><a href="index.php?p=datapengeluaran" ><i class="fa fa-circle-o"></i>Data Permintaan Barang</a></li>
      </ul>
    </li> 
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pencil-square"></i>
        <span>Pengajuan Barang</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?p=formpengajuan" ><i class="fa fa-circle-o"></i>Form Pengajuan Barang</a></li>
      </ul>
      <ul class="treeview-menu">
        <li><a href="index.php?p=datapengajuan" ><i class="fa fa-circle-o"></i>Data Pengajuan Barang</a></li>
      </ul>
    </li> 
    <li class="treeview">
      <a href="#">
        <i class="fa fa-file-pdf-o"></i>
        <span>Laporan Permintaan Barang</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?p=detil_lap_permintaan" ><i class="fa fa-circle-o"></i>Detil Laporan Permintaan</a></li>
      </ul>
      <ul class="treeview-menu">
        <li><a href="index.php?p=rekapitulasipermintaan" ><i class="fa fa-circle-o"></i>Rekapitulasi Permintaan</a></li>
      </ul>
    </li>        
    <li class="treeview">
      <a href="#">
        <i class="fa fa-file-pdf-o"></i>
        <span>Laporan Pengajuan Barang</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="index.php?p=detil_lap_pengajuan" ><i class="fa fa-circle-o"></i>Detil Laporan Pengajuan</a></li>
      </ul>
      <ul class="treeview-menu">
        <li><a href="index.php?p=rekapitulasipengajuan" ><i class="fa fa-circle-o"></i>Rekapitulasi Pengajuan</a></li>
      </ul>
    </li>                               

    <li><a href="../logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>        
  </ul>
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php include "page.php"; ?>
</div>

<footer class="main-footer">
 <marquee hspace="40" width="full-width">Bendahara mengolah data user dan data stok Barang.</marquee>
 <strong>Copyright &copy; DitjenBadilmiltun </strong>
</footer>

<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->

<script src="../assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<!-- datepicker -->
<script src="../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/app.min.js"></script>

<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

</body>
</html>

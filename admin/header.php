<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIK D'elixir Bracelet</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <?php
  include '../koneksi.php';
  session_start();
  if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
  }
  ?>

</head>

<body class="hold-transition skin-yellow sidebar-mini" style="background: linear-gradient(90deg, #fec163 0%, #de4313 100%);">

  <style>
    #table-datatable {
      width: 100% !important;
    }

    #table-datatable .sorting_disabled {
      border: 1px solid #f4f4f4;
    }
  </style>
  <div class="wrapper">

    <header class="main-header">
      <a href="index.php" class="logo">
        <span class="logo-mini"><b><i class="fa fa-money"></i></b> </span>
        <span class="logo-lg" style="color: black;"><b>SIP3</b></span>
      </a>
      <nav class="navbar navbar-static-top" >
        <a href="#" class="sidebar-toggle" data-toggle="push-menu " role="button" >
        </a>

        <div class="navbar-custom-menu" style="background: linear-gradient(90deg, #fec163 0%, #de4313 100%);">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> </a>
            </li>
            <li>

              <a href="logout.php"><i class="fa fa-sign-out" style="color: black;"></i> <strong style="color: black;">LOGOUT</strong></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar" style="background: linear-gradient(90deg, #fec163 0%, #de4313 100%);">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
          </div>

          <ul class="sidebar-menu " data-widget="tree">
            <li class="header" style="background: linear-gradient(90deg, #fec163 0%, #de4313 100%);">MENU</li>

            <li>
              <a href="index.php">
                <i class="fa fa-dashboard" style="color: black;"></i> <span style="color: black;"><strong>DASHBOARD</strong></span>
              </a>
            </li>

            <li>
              <a href="transaksi.php">
                <i class="fa fa-calculator" style="color: black;"></i> <span style="color: black;"><strong>PUM-PJUM</strong></span>
              </a>
            </li>

            <!-- <li>
            <a href="kategori.php">
              <i class="fa fa-folder"></i> <span>DATA KATEGORI</span>
            </a>
          </li> -->

            <li>
              <a href="laporan.php">
                <i class="fa fa-file" style="color: black;"></i> <span style="color: black;"><strong>LAPORAN</strong></span>
              </a>
            </li>

          </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
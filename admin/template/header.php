<?php
// include '../../function/function.php';

// $query_user = mysqli_query($conn, "SELECT * FROM tb_login");


session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Desa Bonea Timur | Dashboard</title>

  <meta name="description" content="Desa Bonea Timur">
  <meta name="keywords" content="">
  <meta name="author" content="tabthemes">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../img/bonea/logo_selayar.png">


  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo"><b>Bonea Timur|</b>Dashboard</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <?php
              if ($_SESSION['level']['role'] == 'staff'){
            ?>
            <li>
              <a href="absen.php" class="btn btn-warning">ABSEN STAFF</a>
            </li>
            <?php  } ?>

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                <span class="hidden-xs">Admin | Desa Bonea Timur</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                  <p>
                    Admin | Desa Bonea Timur
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">

                  <div class="pull-right">
                    <a href="../index.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found  in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p>Admin | Desa Bonea Timur</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">DASHBOARD DESA BONEA TIMUR</li>
          <li class="active treeview">

          <li class="active"><a href="super_dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

          </li>

          <li class="treeview">
            <?php
            if ($_SESSION['level']['role'] != "kepala_desa") { ?>
          <li><a href="user.php"><i class="fa  fa-user"></i> User Desa</a></li>
          <li><a href="profile.php"><i class="fa fa-group"></i> Profile Desa</a></li>
          <li><a href="wisata.php"><i class="fa fa-camera"></i> Wisata Desa</a></li>
          <li><a href="informasi.php"><i class="fa fa-file-text-o"></i> Informasi Desa</a></li>
          <?php } ?>
          <?php if ($_SESSION['level']['role'] == 'kepala_desa') {
          ?>
        <li><a href="data_absen.php"><i class="fa fa-file-text-o"></i>Data Absen</a></li>
        <?php } ?>
        
        <center><h3 style="color: wheat;">Penduduk</h3></center>
        
        <li><a href="data_penduduk.php"><i class="fa fa-file-text-o"></i>Data Penduduk</a></li>
        <li><a href="data_kk.php"><i class="fa fa-file-text-o"></i>Data KK</a></li>
        <li><a href="data_kelahiran.php"><i class="fa fa-file-text-o"></i>Data Kelahiran</a></li>
        <li><a href="data_kematian.php"><i class="fa fa-file-text-o"></i>Data Kematian</a></li>
        <li><a href="data_pindah.php"><i class="fa fa-file-text-o"></i>Data Pindah</a></li>
      
        <center><h3 style="color: wheat;">Persuratan</h3></center>
      
        <li><a href="surat_masuk.php"><i class="fa fa-file-text-o"></i>Surat Masuk</a></li>
        <li><a href="surat_keluar.php"><i class="fa fa-file-text-o"></i>Surat Keluar</a></li>

        </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
<?php
require '../function/function.php';

if (isset($_POST['submit'])) {

  $no_file = $_GET['no_file'];
  // var_dump($no_file);

  if (insert($_POST, $no_file) > 0) {
    echo "<script>
      alert('Sukses Registrasi');
      </script>";
  } else {
    echo "<script>
      alert('Gagal gemink');
      </script>";
  }

  // header("location: login.php");

}

?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Desa Bonea Timur | Log in</title>

  <meta name="description" content="Desa Bonea Timur">
  <meta name="keywords" content="">
  <meta name="author" content="tabthemes">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../img/bonea/maros.png">
  <link rel="apple-touch-icon" sizes="57x57" href="../img/bonea/maros_02.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../img/bonea/maros_03.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../img/bonea/maros_04.png">

  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page" style="background-image:url(../img/bonea/bg.jpg)">
  <div class="login-box">
    <div class="login-logo text-uppercase">
      <b>Admin</b>| Desa Bonea Timur
    </div><!-- /.login-logo -->
    <div class="login-box-body rounded">
      <form action="?no_file=1" method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback mt-4">
          <input type="text" class="form-control fs-4 " name="nama" placeholder="Nama Lengkap" required />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback mt-4">
          <input type="text" class="form-control fs-4 " name="user" placeholder="Username" required />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control fs-4" name="pass" placeholder="Password" required />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control fs-4" placeholder="Retype Password" required />
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="file" name="gambar" class="form-control fs-4" placeholder="Foto Profile" required />
          <span class="glyphicon glyphicon-download-alt form-control-feedback"></span>
        </div>

        <div class="row ">
          <div class="col-xs-8">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat fs-3 p-3 my-4">Daftar</button>
          </div><!-- /.col -->
        </div>
      </form>



      <p class="text-center fs-4">Sudah punya akun ? <a href="login.php">Silahkan Login</a></p>

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.3 -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>
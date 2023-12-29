<?php
require 'template/header.php';
require '../function/function.php';



?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Absen Staff
        </h1>
        <?php

        ?>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Profile Desa</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Data Absen</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <h1>Selamat Datang <b><?= $_SESSION['level']['nama']; ?></b>, Silahkan Absen</h1>

                    <form action="proses.php?id=absen&id_login=<?= $_SESSION['level']['id_login']?>" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama" readonly rows="6" value="<?= $_SESSION['level']['nama'];?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Absen</label>
                            <input class="form-control" name="tgl_absen" readonly rows="6" id="tgl_absen">
                        </div>
                        <input type="text" value="<?= $_SESSION['level']['id_login'];?>" hidden name="id_login">
                        <input type="submit" value="Absen" class="btn btn-success">
                    </form>
                    <script>
                        // Mendapatkan tanggal saat ini dalam format YYYY-MM-DD
                        const today = new Date().toISOString().slice(0, 10);

                        // Menyimpan tanggal saat ini ke dalam input
                        document.getElementById('tgl_absen').value = today;
                    </script>

                </div><!-- /.box -->


            </div><!--/.col (left) -->

        </div> <!-- /.row -->
    </section>

    <!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Plugin CK editor -->
<script src="../ckeditor/ckeditor.js"></script>
<script src="../ckeditor/styles.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('sejarah');
    CKEDITOR.replace('deskripsi');
    //   CKEDITOR.replace('penulis');
    //   CKEDITOR.replace('uploaded');
    CKEDITOR.replace('misi');
</script>


<?php require 'template/footer.php'; ?>
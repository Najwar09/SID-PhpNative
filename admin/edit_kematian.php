<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_kematian = view("SELECT * FROM tb_kematian WHERE id_mati = $id");

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (update($_POST, $no_file) > 0) {
        echo "<script>
            window.location.replace('data_kematian.php');
          </script>";
    } else {
        // var_dump(update($_POST, $no_file));   

        echo "<script>
                alert('Tidak ada perubahan data');
                window.location.replace('data_kematian.php');

            </script>";
    }
}


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Kematian
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Kematian/li>
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
                        <h3 class="box-title">Data Kematian</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    while ($row = mysqli_fetch_assoc($query_kematian)) :
                    ?>

                        <form role="form" action="proses.php?id=editmati" method="post" enctype="multipart/form-data">

                            <div class="box-body">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label>Nama Penduduk</label>
                                        <input class="form-control" name="nama_penduduk" rows="6" placeholder="Enter ..." value="<?= $row['nama_penduduk'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nik</label>
                                        <input class="form-control" name="nik" rows="6" placeholder="Enter ..." type="number" value="<?= $row['nik'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Mati</label>
                                        <input class="form-control" name="tgl_mati" rows="6" placeholder="Enter ..." type="date" value="<?= $row['tgl_mati'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Penyebab Mati</label>
                                        <input class="form-control" name="penyebab_mati" rows="6" placeholder="Enter ..." value="<?= $row['penyebab_mati'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Mati</label>
                                        <input class="form-control" name="tempat_mati" rows="6" placeholder="Enter ..." value="<?= $row['tempat_mati'];?>">
                                    </div>




                                    <input type="text" value="<?= $row['id_mati']; ?>" name="id_mati" hidden>

                                </div>



                            <?php endwhile; ?>

                            <div class="box-footer">
                                <button type="submit" name='submit' class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
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
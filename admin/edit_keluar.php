<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_keluar = view("SELECT * FROM tb_surat_keluar WHERE id_keluar = $id");

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (update($_POST, $no_file) > 0) {
        echo "<script>
            window.location.replace('surat_keluar.php');
          </script>";
    } else {
        // var_dump(update($_POST, $no_file));   

        echo "<script>
                alert('Tidak ada perubahan data');
                window.location.replace('surat_keluar.php');

            </script>";
    }
}


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Surat Keluar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Surat Keluar</li>
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
                        <h3 class="box-title">Data Surat Keluar</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    while ($row = mysqli_fetch_assoc($query_keluar)) :
                    ?>

                        <form role="form" action="proses.php?id=editkeluar" method="post" enctype="multipart/form-data">

                            <div class="box-body">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label>Nomor Surat</label>
                                        <input class="form-control" name="no_surat" rows="6" placeholder="Enter ..." value="<?= $row['no_surat'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Perihal</label>
                                        <input class="form-control" name="perihal" rows="6" placeholder="Enter ..." value="<?= $row['perihal'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tujuan</label>
                                        <input class="form-control" name="tujuan" rows="6" placeholder="Enter ..." value="<?= $row['tujuan'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Surat</label>
                                        <input class="form-control" type="date" name="tgl_surat" rows="6" placeholder="Enter ..." value="<?= $row['tgl_surat'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Kirim</label>
                                        <input class="form-control" type="date" name="tgl_kirim" rows="6" placeholder="Enter ..." value="<?= $row['tgl_kirim'];?>">
                                    </div>




                                    <input type="text" value="<?= $row['id_keluar']; ?>" name="id_keluar" hidden>

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
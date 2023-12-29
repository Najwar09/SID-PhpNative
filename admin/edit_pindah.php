<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_pindah = view("SELECT * FROM tb_data_pindah WHERE id_pindah = $id");

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (update($_POST, $no_file) > 0) {
        echo "<script>
            window.location.replace('data_pindah.php');
          </script>";
    } else {
        // var_dump(update($_POST, $no_file));   

        echo "<script>
                alert('Tidak ada perubahan data');
                window.location.replace('data_pindah.php');

            </script>";
    }
}


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Penduduk Pindah
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Data Pindah</li>
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
                        <h3 class="box-title">Data Penduduk Pindah</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    while ($row = mysqli_fetch_assoc($query_pindah)) :
                    ?>

                        <form role="form" action="proses.php?id=editpindah" method="post" enctype="multipart/form-data">

                            <div class="box-body">
                                <div class="box-body">



                                    <div class="form-group">
                                        <label>Nama Penduduk</label>
                                        <input class="form-control" value="<?= $row['nama'];?>" name="nama" rows="6" placeholder="Enter ...">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Pindah</label>
                                        <input class="form-control" value="<?= $row['tgl_pindah'];?>" name="tgl_pindah" rows="6" type="date" placeholder="Enter ...">
                                    </div>

                                    <div class="form-group">
                                        <label>Alasan</label>
                                        <input class="form-control" value="<?= $row['alasan'];?>" name="alasan" rows="6" placeholder="Enter ...">
                                    </div>



                                    <input type="text" value="<?= $row['id_pindah']; ?>" name="id_pindah" hidden>

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
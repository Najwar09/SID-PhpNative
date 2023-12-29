<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_kk = view("SELECT * FROM tb_kk WHERE id_kk = $id");

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (update($_POST, $no_file) > 0) {
        echo "<script>
            window.location.replace('data_penduduk.php');
          </script>";
    } else {
        // var_dump(update($_POST, $no_file));   

        echo "<script>
                alert('Tidak ada perubahan data');
                window.location.replace('data_penduduk.php');

            </script>";
    }
}


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data KK
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit KK</li>
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
                        <h3 class="box-title">Data KK</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    while ($row = mysqli_fetch_assoc($query_kk)) :
                    ?>

                        <form role="form" action="proses.php?id=editkk" method="post" enctype="multipart/form-data">

                            <div class="box-body">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label>No KK</label>
                                        <input class="form-control" name="no_kk" rows="6" placeholder="Enter ..." type="number" value="<?= $row['no_kk'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Kepala Keluarga</label>
                                        <input class="form-control" name="kepala_keluarga" rows="6" placeholder="Enter ..." value="<?= $row['kepala_keluarga'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Desa</label>
                                        <input class="form-control" name="desa" rows="6" placeholder="Enter ..." value="<?= $row['desa'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>RT</label>
                                        <input class="form-control" name="rt" rows="6" placeholder="Enter ..." value="<?= $row['rt'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>RW</label>
                                        <input class="form-control" name="rw" rows="6" placeholder="Enter ..." value="<?= $row['rw'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input class="form-control" name="kecamatan" rows="6" placeholder="Enter ..." value="<?= $row['kecamatan'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <input class="form-control" name="kabupaten" rows="6" placeholder="Enter ..." value="<?= $row['kabupaten'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input class="form-control" name="provinsi" rows="6" placeholder="Enter ..." value="<?= $row['provinsi'];?>">
                                    </div>




                                    <input type="text" value="<?= $row['id_kk']; ?>" name="id_kk" hidden>

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
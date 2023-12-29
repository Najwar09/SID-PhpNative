<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_lahir = view("SELECT * FROM tb_lahiran WHERE id_lahiran = $id");

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (update($_POST, $no_file) > 0) {
        echo "<script>
            window.location.replace('data_kelahiran.php');
          </script>";
    } else {
        // var_dump(update($_POST, $no_file));   

        echo "<script>
                alert('Tidak ada perubahan data');
                window.location.replace('data_kelahiran.php');

            </script>";
    }
}


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Kelahiran
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Kelahiran</li>
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
                        <h3 class="box-title">Data Kelahiran</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    while ($row = mysqli_fetch_assoc($query_lahir)) :
                    ?>

                        <form role="form" action="proses.php?id=editlahiran" method="post" enctype="multipart/form-data">

                            <div class="box-body">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" name="nama" rows="6" placeholder="Enter ..." type="text" value="<?= $row['nama']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Lahiran</label>
                                        <input class="form-control" name="tgl_lahiran" rows="6" placeholder="Enter ..." type="date" value="<?= $row['tgl_lahir']; ?>">
                                    </div>

                                    <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jkel">
                                        <option <?php if ($row['jkel'] == 'pria') {
                                                    echo 'selected';
                                                } ?>>
                                            Pria
                                        </option>
                                        <option <?php if ($row['jkel'] == 'wanita') {
                                                    echo 'selected';
                                                } ?>>
                                            Wanita
                                        </option>
                                    </select>
                                </div>






                                <input type="text" value="<?= $row['id_lahiran']; ?>" name="id_lahiran" hidden>

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
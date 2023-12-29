<?php
require 'template/header.php';
require '../function/function.php';

$id = $_GET['id'];
$query_penduduk = view("SELECT * FROM tb_data_penduduk WHERE id_penduduk = $id");

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
            Penduduk Desa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Penduduk Desa</li>
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
                        <h3 class="box-title">Data Penduduk</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php

                    while ($row = mysqli_fetch_assoc($query_penduduk)) :

                    ?>

                        <form role="form" action="proses.php?id=editpenduduk" method="post" enctype="multipart/form-data">


                            <div class="box-body">

                                <div class="form-group">
                                    <label>Nik</label>
                                    <input class="form-control" name="nik" rows="6" placeholder="Enter ..." type="number" value="<?= $row['nik']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" name="nama" rows="6" placeholder="Enter ..." value="<?= $row['nama_lengkap']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control" name="tempat_lahir" rows="6" placeholder="Enter ..." value="<?= $row['tempat_lahir']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input class="form-control" name="tgl_lahir" rows="6" placeholder="Enter ..." type="date" value="<?= $row['tanggal_lahir']; ?>">
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

                                <div class="form-group">
                                    <label>Desa</label>
                                    <input class="form-control" name="desa" rows="6" placeholder="Enter ..." value="<?= $row['desa']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>RT</label>
                                    <input class="form-control" name="rt" rows="6" placeholder="Enter ..." value="<?= $row['rt']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>RW</label>
                                    <input class="form-control" name="rw" rows="6" placeholder="Enter ..." value="<?= $row['rw']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Agama</label>
                                    <input class="form-control" name="agama" rows="6" placeholder="Enter ..." value="<?= $row['agama']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Status Nikah</label>
                                    <input class="form-control" name="status" rows="6" placeholder="Enter ..." value="<?= $row['status_nikah']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input class="form-control" name="pekerjaan" rows="6" placeholder="Enter ..." value="<?= $row['pekerjaan']; ?>">
                                </div>
                                <input type="text" value="<?= $row['id_penduduk'];?>" hidden name="id_penduduk">

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
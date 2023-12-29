<?php
require 'template/header.php';
require '../function/function.php';

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (insert($_POST, $no_file) > 0) {

        echo "<script>
            window.location.replace('data_pindah.php');
          </script>";
    } else {
        echo "<script>
                alert('Gagal gemink');
            </script>";
    }
}


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Pindah
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Edit Penduduk Pindah</li>
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

                    <form action="proses.php?id=pindah" method="post" enctype="multipart/form-data">


                        <div class="box-body">

                            

                            <div class="form-group">
                                <label>Nama Penduduk</label>
                                <input class="form-control" name="nama" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Pindah</label>
                                <input class="form-control" name="tgl_pindah" rows="6" type="date" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Alasan</label>
                                <input class="form-control" name="alasan" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Alamat Baru</label>
                                <input class="form-control" name="alamat_baru" rows="6" placeholder="Enter ...">
                            </div>


                        </div><!-- /.box-body -->

                        <div class=" box-footer">
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
<?php
require 'template/header.php';
require '../function/function.php';

if (isset($_POST['submit'])) {

    $no_file = $_POST['no_file'];
    // var_dump(update($_POST, $no_file));
    if (insert($_POST, $no_file) > 0) {

        echo "<script>
            window.location.replace('informasi.php');
          </script>";
    } else {
        echo "<script>
                alert('Gagal gemink');
            </script>";
    }
}
$query = "SELECT * FROM tb_kk";
$hasil = mysqli_query($conn, $query);


?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Penduduk
        </h1>
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
                        <h3 class="box-title">Data Penduduk</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form action="proses.php?id=penduduk" method="post" enctype="multipart/form-data">


                        <div class="box-body">

                            <div class="form-group">
                                <label>No KK</label>
                                <select id="kk" name="kk" class="form-control">
                                    <option selected>-------Pilih-------</option>
                                    <?php
                                    foreach ($hasil as $isi) {
                                    ?>
                                    <option value="<?= $isi['no_kk']; ?>"><?= $isi['no_kk']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            

                            <div class="form-group">
                                <label>Nik</label>
                                <input class="form-control" name="nik" rows="6" placeholder="Enter ..." type="number">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" name="nama" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" name="tempat_lahir" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tgl_lahir" rows="6" placeholder="Enter ..." type="date">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select id="jkel" name="jkel" class="form-control">
                                    <option selected>-------Pilih-------</option>
                                    <option value="pria">Laki-laki</option>
                                    <option value="wanita">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Desa</label>
                                <input class="form-control" name="desa" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>RT</label>
                                <input class="form-control" name="rt" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>RW</label>
                                <input class="form-control" name="rw" rows="6" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <select id="agama" name="agama" class="form-control">
                                    <option selected>-------Pilih-------</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status Nikah</label>
                                <select id="status" name="status" class="form-control">
                                    <option selected>-------Pilih-------</option>
                                    <option value="sudah menikah">Sudah Nikah</option>
                                    <option value="belum menikah">Belum</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control" name="pekerjaan" rows="6" placeholder="Enter ...">
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
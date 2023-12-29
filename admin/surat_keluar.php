<?php
require 'template/header.php';
require '../function/function.php';

$query_keluar = view("SELECT * FROM tb_surat_keluar");

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
            <li class="active">Data Surat Keluar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Surat Keluar</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_surat_keluar.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Perihal</th>
                                    <th>Tujuan</th>
                                    <th>Tanggal Surat</th>
                                    <th>Tanggal Kirim</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_keluar)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['no_surat'] ?></td>
                                    <td><?= $row['perihal'] ?></td>
                                    <td><?= $row['tujuan'] ?></td>
                                    <td><?= $row['tgl_surat'] ?></td>
                                    <td><?= $row['tgl_kirim'] ?></td>
                             

                                    <td>
                                        <a href="hapus_keluar.php?id=<?= $row['id_keluar'] ?>&no_file=12" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_keluar.php?id=<?= $row['id_keluar'] ?>&no_file=12" class="btn normal bg-yellow">Edit</a>
                                    </td>
                                </tbody>

                            <?php endwhile; ?>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require 'template/footer.php' ?>
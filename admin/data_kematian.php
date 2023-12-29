<?php
require 'template/header.php';
require '../function/function.php';

$query_mati = view("SELECT * FROM tb_kematian");

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
            <li class="active">Data Kematian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Kematian</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_kematian.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penduduk</th>
                                    <th>Nik</th>
                                    <th>Tanggal Kematian</th>
                                    <th>Penyebab Kematian</th>
                                    <th>Tempat Kematian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_mati)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['nama_penduduk'] ?></td>
                                    <td><?= $row['nik'] ?></td>
                                    <td><?= $row['tgl_mati'] ?></td>
                                    <td><?= $row['penyebab_mati'] ?></td>
                                    <td><?= $row['tempat_mati'] ?></td>
                                   
                                    <td>
                                        <a href="hapus_kematian.php?id=<?= $row['id_mati'] ?>&no_file=9" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_kematian.php?id=<?= $row['id_mati'] ?>&no_file=9" class="btn normal bg-yellow">Edit</a>
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
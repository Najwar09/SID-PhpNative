<?php
require 'template/header.php';
require '../function/function.php';

$query_pindah = view("SELECT * FROM tb_data_pindah");

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
            <li class="active">Data Penduduk Pindah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Penduduk Pindah</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_pindah.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penduduk</th>
                                    <th>Tanggal Pindah</th>
                                    <th>Alasan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_pindah)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['tgl_pindah'] ?></td>
                                    <td><?= $row['alasan'] ?></td>

                                    <td>
                                        <a href="hapus_pindah.php?id=<?= $row['id_pindah'] ?>&no_file=10" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_pindah.php?id=<?= $row['id_pindah'] ?>&no_file=10" class="btn normal bg-yellow">Edit</a>
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
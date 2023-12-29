<?php
require 'template/header.php';
require '../function/function.php';

$query_lahiran = view("SELECT * FROM tb_lahiran");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Lahiran
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data KK</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Lahiran</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_lahiran.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_lahiran)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['tgl_lahir'] ?></td>
                                    <td><?= $row['jkel'] ?></td>
                                    <td>
                                        <a href="hapus_lahiran.php?id=<?= $row['id_lahiran'] ?>&no_file=8" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_lahiran.php?id=<?= $row['id_lahiran'] ?>&no_file=8" class="btn normal bg-yellow">Edit</a>
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
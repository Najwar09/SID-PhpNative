<?php
require 'template/header.php';
require '../function/function.php';

$query_absen = view("SELECT * FROM absen");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Penduduk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Absen</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Penduduk</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">


                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Absen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_absen)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td>
                                        <a href="hapus_absen.php?id=<?= $row['id_absen'] ?>&no_file=5" class="btn normal bg-maroon">Hapus</a>
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
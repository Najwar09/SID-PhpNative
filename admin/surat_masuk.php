<?php
require 'template/header.php';
require '../function/function.php';

$query_masuk = view("SELECT * FROM tb_surat_masuk");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Surat Masuk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Surat Masuk</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Surat Masuk</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_surat_masuk.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Tanggal Terima</th>
                                    <th>Asal Surat</th>
                                    <th>Perihal</th>
                                    <th>File PDF</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_masuk)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['no_surat'] ?></td>
                                    <td><?= $row['tgl_surat'] ?></td>
                                    <td><?= $row['tgl_terima'] ?></td>
                                    <td><?= $row['asal_surat'] ?></td>
                                    <td><?= $row['perihal'] ?></td>
                                    <td><a href='downloadfile.php?file=<?= $row["file"]; ?>' class="btn btn-success">Download</a></td>
                             

                                    <td>
                                        <a href="hapus_masuk.php?id=<?= $row['id_masuk'] ?>&no_file=11" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_masuk.php?id=<?= $row['id_masuk'] ?>&no_file=11" class="btn normal bg-yellow">Edit</a>
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
<?php
require 'template/header.php';
require '../function/function.php';

$query_kk = view("SELECT * FROM tb_kk");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data KK
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
                        <h3 class="box-title">Data KK</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">

                        <a href="tambah_kk.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No KK</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Pekerjaan</th>
                                    <th>Desa</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Provinsi</th>
                                    <th>Anggota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query_kk)) :


                            ?>
                                <tbody>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['no_kk'] ?></td>
                                    <td><?= $row['kepala_keluarga'] ?></td>
                                    <td><?= $row['pekerjaan'] ?></td>
                                    <td><?= $row['desa'] ?></td>
                                    <td><?= $row['rt'] ?></td>
                                    <td><?= $row['rw'] ?></td>
                                    <td><?= $row['kecamatan'] ?></td>
                                    <td><?= $row['kabupaten'] ?></td>
                                    <td><?= $row['provinsi'] ?></td>
                                    <td><a href="angggota_kk.php?id=<?= $row['no_kk']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                        </svg></a>
                                    </td>

                                    <td>
                                        <a href="hapus_kk.php?id=<?= $row['id_kk'] ?>&no_file=7" class="btn normal bg-maroon">Hapus</a>
                                        <a href="edit_kk.php?id=<?= $row['id_kk'] ?>&no_file=7" class="btn normal bg-yellow">Edit</a>
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
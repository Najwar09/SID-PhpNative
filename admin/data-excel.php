<?php
require '../function/function.php';

$query_penduduk = view("SELECT * FROM tb_data_penduduk");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center"><b>DATA PENDUDUK</b></h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No KK</th>
                    <th>Nik</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Desa</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Agama</th>
                    <th>Status Nikah</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
            <?php
                            $i = 1;
                            
                            while ($row = mysqli_fetch_assoc($query_penduduk)) :
                                $tanggal_lahir = $row['tanggal_lahir']; // Contoh tanggal lahir
                                $tanggal_sekarang = date('Y-m-d'); // Tanggal saat ini
    
                                // Konversi string tanggal menjadi objek DateTime
                                $tanggal_lahir_obj = new DateTime($tanggal_lahir);
                                $tanggal_sekarang_obj = new DateTime($tanggal_sekarang);
    
                                // Hitung perbedaan tanggal
                                $perbedaan = $tanggal_lahir_obj->diff($tanggal_sekarang_obj);


                            ?>
                <tr>
                    <td><?= $i++ ?></td>
                                <td><?= $row['no_kk'] ?></td>
                                    <td><?= $row['nik'] ?></td>
                                    <td><?= $row['nama_lengkap'] ?></td>
                                    <td><?= $row['tempat_lahir'] ?></td>
                                    <td><?= $row['tanggal_lahir'] ?></td>
                                    <td><?= $perbedaan->y; ?></td>
                                    <td><?= $row['jkel'] ?></td>
                                    <td><?= $row['rt'] ?></td>
                                    <td><?= $row['rw'] ?></td>
                                    <td><?= $row['desa'] ?></td>
                                    <td><?= $row['agama'] ?></td>
                                    <td><?= $row['status_nikah'] ?></td>
                                    <td><?= $row['pekerjaan'] ?></td>
                </tr>
                <?php endwhile; ?>

            </tbody>
        </table>

























        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
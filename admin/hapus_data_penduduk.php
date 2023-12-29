<?php
require '../function/function.php';

$id = $_GET['id'];
$no_file = $_GET['no_file'];
// var_dump($no_file);
$query = hapus($id, $no_file);

if ($query != null) {
    echo "<script>
            window.location.replace('data_penduduk.php');    
        </script>";
} else {
    echo "<script>
                alert('Gagal gemink');
            </script>";
}

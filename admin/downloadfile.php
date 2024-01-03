<?php
$file = $_GET['file'];

if (empty($file) || !file_exists($file)) {
    // Berkas tidak ditemukan atau nama file kosong
    http_response_code(404);
    die('File not found.');
}

// Set header untuk memulai pengunduhan
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));

// Baca dan kirimkan isi file
readfile($file);
exit;
?>

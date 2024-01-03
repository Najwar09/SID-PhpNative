<?php
$conn = mysqli_connect("localhost", "root", "", "db_desa");


// tambah data absen
if ($_GET['id'] == 'absen') {
    $id_login = $_POST['id_login'];
    $nama = $_POST['nama'];
    $tgl_absen = $_POST['tgl_absen'];

    $query = "INSERT INTO absen VALUES('','$id_login','$nama','$tgl_absen')";
    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Absen!");history.go(-1);</script>';
}

// tambah data penduduk baru
if ($_GET['id'] == 'penduduk') {
    $kk = $_POST['kk'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jkel = $_POST['jkel'];
    $desa = $_POST['desa'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

    $query2 = "INSERT INTO tb_data_penduduk VALUES('','$kk','$nik','$nama','$tempat_lahir','$tgl_lahir','$jkel','$desa','$rt','$rw','$agama','$status','$pekerjaan')";
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data Penduduk!");history.go(-2);</script>';
}

// tambah data kk
if ($_GET['id'] == 'kk') {
    $no_kk = $_POST['no_kk'];
    $kepala_keluarga = $_POST['kepala_keluarga'];
    $pekerjaan = $_POST['pekerjaan'];
    $desa = $_POST['desa'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];

    $query2 = "INSERT INTO tb_kk VALUES('','$no_kk','$kepala_keluarga','$pekerjaan','$desa','$rt','$rw','$kecamatan','$kabupaten','$provinsi')";
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data KK!");history.go(-2);</script>';
}

// tambah data lahiran
if ($_GET['id'] == 'lahiran') {

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahiran'];
    $jkel = $_POST['jkel'];

    $query2 = "INSERT INTO tb_lahiran VALUES('','$nama','$tgl_lahir','$jkel')";
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data Lahiran!");history.go(-2);</script>';
}

// tambah data kematian
if ($_GET['id'] == 'kematian') {

    $nama = $_POST['nama_penduduk'];
    $nik = $_POST['nik'];
    $tgl_mati = $_POST['tgl_mati'];
    $penyebab_mati = $_POST['penyebab_mati'];
    $tempat_mati = $_POST['tempat_mati'];

    $query2 = "INSERT INTO tb_kematian VALUES('','$nama','$nik','$tgl_mati','$penyebab_mati','$tempat_mati')";
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data Kematian!");history.go(-2);</script>';
}

// tambah data pindah
if ($_GET['id'] == 'pindah') {

    $nama = $_POST['nama'];
    $tgl_pindah = $_POST['tgl_pindah'];
    $alasan = $_POST['alasan'];
    $alamat_baru = $_POST['alamat_baru'];

    $query2 = "INSERT INTO tb_data_pindah VALUES('','$nama','$tgl_pindah','$alasan','$alamat_baru')";
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data Pindah!");history.go(-2);</script>';
}

// tambah data surat masuk
if ($_GET['id'] == 'suratmasuk') {

    $no_surat = $_POST['no_surat'];
    $tgl_surat = $_POST['tgl_surat'];
    $tgl_terima = $_POST['tgl_terima'];
    $asal_surat = $_POST['asal_surat'];
    $perihal = $_POST['perihal'];
    // $dokumen = $_POST['berkas'];

    $namafile = $_FILES['berkas']['name'];
    $x = explode(".", $namafile);
    $ekstensifile = strtolower(end($x));
    $ukuranfile = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    $dirUpload = '../file/';
    $linkBerkas = $dirUpload.$namafile;

    $terupload = move_uploaded_file($file_tmp,$linkBerkas);
    $dataarr = array(
        'id_masuk' => '',
        'no_surat' => $no_surat,
        'tgl_surat' => $tgl_surat,
        'tgl_terima' => $tgl_terima,
        'asal_surat' => $asal_surat,
        'perihal' => $perihal,
        'file' => $linkBerkas,
    );


    $query2 = "INSERT INTO tb_surat_masuk VALUES('', '" .$dataarr['no_surat']. "', '" .$dataarr['tgl_surat']. "', '" .$dataarr['tgl_terima']. "', '" .$dataarr['asal_surat']. "', '" .$dataarr['perihal']. "', '" .$dataarr['file']. "')";
    // $query2 = "INSERT INTO tb_surat_masuk VALUES('','".$dataarr['id_masuk']. "','" .$dataarr['no_surat']. "','" .$dataarr['tgl_surat']. "','" .$dataarr['tgl_terima']. "','" .$dataarr['asal_surat']. "','" .$dataarr['perihal']. "','" .$dataarr['file'];
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data Surat Masuk!");history.go(-2);</script>';
}

// tambah data surat keluar
if ($_GET['id'] == 'suratkeluar') {

    $no_surat = $_POST['no_surat'];
    $perihal = $_POST['perihal'];
    $tujuan = $_POST['tujuan'];
    $tgl_surat = $_POST['tgl_surat'];
    $tgl_kirim = $_POST['tgl_kirim'];

    $namafile = $_FILES['berkas']['name'];
    $x = explode(".", $namafile);
    $ekstensifile = strtolower(end($x));
    $ukuranfile = $_FILES['berkas']['size'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    $dirUpload = '../file/';
    $linkBerkas = $dirUpload.$namafile;

    $terupload = move_uploaded_file($file_tmp,$linkBerkas);
    $dataarr = array(
        'id_keluar' => '',
        'no_surat' => $no_surat,
        'perihal' => $perihal,
        'tujuan' => $tujuan,
        'tgl_surat' => $tgl_surat,
        'tgl_kirim' => $tgl_kirim,
        'file' => $linkBerkas,
    );

    $query2 = "INSERT INTO tb_surat_keluar VALUES('', '" .$dataarr['no_surat']. "', '" .$dataarr['perihal']. "', '" .$dataarr['tujuan']. "', '" .$dataarr['tgl_surat']. "', '" .$dataarr['tgl_kirim']. "', '" .$dataarr['file']. "')";
    // $query2 = "INSERT INTO tb_surat_keluar VALUES('','$no_surat','$perihal','$tujuan','$tgl_surat','$tgl_kirim')";
    $hasil = mysqli_query($conn, $query2);

    echo '<script>alert("Berhasil Tambah Data Surat Keluar!");history.go(-2);</script>';
}





























// edit data penduduk
if ($_GET['id'] == 'editpenduduk') {
    $id = $_POST['id_penduduk'];

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jkel = $_POST['jkel'];
    $desa = $_POST['desa'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

    $query = "UPDATE tb_data_penduduk SET 
        nik='$nik',
        nama_lengkap='$nama', 
        tempat_lahir='$tempat_lahir', 
        tanggal_lahir='$tgl_lahir',
        jkel='$jkel',
        desa='$desa',
        rt='$rt',
        rw='$rw',
        agama='$agama',
        status_nikah='$status', 
        pekerjaan='$pekerjaan'
        WHERE id_penduduk = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data Penduduk!");history.go(-1);</script>';
}



// edit data kk
if ($_GET['id'] == 'editkk') {
    $id = $_POST['id_kk'];

    $no_kk = $_POST['no_kk'];
    $kepala_keluarga = $_POST['kepala_keluarga'];
    $desa = $_POST['desa'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];

    $query = "UPDATE tb_kk SET 
        no_kk='$no_kk',
        kepala_keluarga='$kepala_keluarga', 
        desa='$desa', 
        rt='$rt',
        rw='$rw',
        kecamatan='$kecamatan',
        kabupaten='$kabupaten',
        provinsi='$provinsi'
        WHERE id_kk = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data KK!");history.go(-2);</script>';
}

// edit data lahiran
if ($_GET['id'] == 'editlahiran') {
    $id = $_POST['id_lahiran'];

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahiran'];
    $jkel = $_POST['jkel'];

    $query = "UPDATE tb_lahiran SET 
        nama='$nama',
        tgl_lahir='$tgl_lahir', 
        jkel='$jkel'
        WHERE id_lahiran = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data Kelahiran!");history.go(-2);</script>';
}


// edit data kematian
if ($_GET['id'] == 'editmati') {
    $id = $_POST['id_mati'];

    $nama = $_POST['nama_penduduk'];
    $nik = $_POST['nik'];
    $tgl_kematian = $_POST['tgl_mati'];
    $penyebab_mati = $_POST['penyebab_mati'];
    $tempat_mati = $_POST['tempat_mati'];

    $query = "UPDATE tb_kematian SET 
        nama_penduduk='$nama',
        nik='$nik', 
        tgl_mati='$tgl_kematian',
        penyebab_mati='$penyebab_mati',
        tempat_mati='$tempat_mati'
        WHERE id_mati = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data Kematian!");history.go(-2);</script>';
}

// edit data pindah
if ($_GET['id'] == 'editpindah') {
    $id = $_POST['id_pindah'];

    $nama = $_POST['nama'];
    $tgl_pindah = $_POST['tgl_pindah'];
    $alasan = $_POST['alasan'];

    $query = "UPDATE tb_data_pindah SET 
        nama='$nama',
        tgl_pindah='$tgl_pindah', 
        alasan='$alasan'
        WHERE id_pindah = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data Pindah!");history.go(-2);</script>';
}

// edit data surat masuk
if ($_GET['id'] == 'editmasuk') {
    $id = $_POST['id_masuk'];

    $no_surat = $_POST['no_surat'];
    $tgl_surat = $_POST['tgl_surat'];
    $tgl_terima = $_POST['tgl_terima'];
    $asal_surat = $_POST['asal_surat'];
    $perihal = $_POST['perihal'];

    $query = "UPDATE tb_surat_masuk SET 
        no_surat='$no_surat',
        tgl_surat='$tgl_surat', 
        tgl_terima='$tgl_terima',
        asal_surat='$asal_surat',
        perihal='$perihal'
        WHERE id_masuk = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data Surat Masuk!");history.go(-2);</script>';
}

// edit data surat keluar
if ($_GET['id'] == 'editkeluar') {
    $id = $_POST['id_keluar'];

    $no_surat = $_POST['no_surat'];
    $perihal = $_POST['perihal'];
    $tujuan = $_POST['tujuan'];
    $tgl_surat = $_POST['tgl_surat'];
    $tgl_kirim = $_POST['tgl_kirim'];

    $query = "UPDATE tb_surat_keluar SET 
        no_surat='$no_surat',
        perihal='$perihal', 
        tujuan='$tujuan',
        tgl_surat='$tgl_surat',
        tgl_kirim='$tgl_kirim'
        WHERE id_keluar = '$id'";

    $hasil = mysqli_query($conn, $query);

    echo '<script>alert("Berhasil Memperbaharui Data Surat Keluar!");history.go(-2);</script>';
}

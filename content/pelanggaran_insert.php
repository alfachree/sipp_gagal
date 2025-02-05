<?php
if(!defined('INDEX')) die("");

// Ambil nilai dari form
$nama_pelanggaran = isset($_POST['nama_pelanggaran']) ? $_POST['nama_pelanggaran'] : '';

// Pastikan nilai tidak kosong sebelum diinsert
if (!empty($nama_pelanggaran)) {
    $query = "INSERT INTO pelanggaran (nama_pelanggaran) VALUES ('$nama_pelanggaran')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data berhasil ditambahkan!";
        echo "jabatan <b>$nama_pelanggaran</b> berhasil disimpan";
        echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
    }else{
    echo "tidak dapat menyimpan";
    echo mysqli_error();
}
}
?>


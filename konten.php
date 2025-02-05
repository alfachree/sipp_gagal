<?php
if (!defined('INDEX')) die();

$halaman = [
    "dashboard",
    "pelanggaran",
    "pelanggaran_tambah",
    "pelanggaran_insert",
    "pelanggaran_edit",
    "pelanggaran_update",
    "pelanggaran_hapus",
    "siswa",
    "siswa_tambah",
    "siswa_insert",
    "siswa_edit",
    "siswa_update",
    "siswa_hapus",
    "riwayat_pl",
    "riwayat_tambah",
    "riwayat_insert",
    "riwayat_edit",
    "riwayat_update",
    "riwayat_hapus",
    "riwayat_tb",
    "riwayattb_tambah",
    "riwayattb_insert",
    "riwayattb_edit",
    "riwayattb_update",
    "riwayattb_hapus",
];

if (isset($_GET['hal'])) {
    $hal = $_GET['hal'];
} else {
    $hal = 'dashboard';
}

foreach($halaman as $h) {
    if ($hal == $h) {
        include "content/$h.php";
        break;
    }
}
?>

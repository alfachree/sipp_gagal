<?php
if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah pelanggaran</h2>
<form action="?hal=pelanggaran_insert" method="post">
  <!-- input foto -->
  <div class="form-group">
    <label for="nama">Nama Pelanggaran</label>
    <div class="input">
      <input type="text" name="nama" id="nama" />
    </div>

    <label for="jenis">Kategori</label>
    <div class="input">
      <select name="jenis" id="jenis">
        <option value="Ringan">Ringan</option>
        <option value="Sedang">Sedang</option>
        <option value="Berat">Berat</option>
      </select>
    </div>

    <label for="poin">Poin</label>
    <div class="input">
      <select name="poin" id="poin">
        <option value="1">2</option>
        <option value="2">10</option>
        <option value="3">7</option>
    </div>

<label for="kode_pelanggaran">Kode Pelanggaran</label>
<div class="input">
    <select name="kode_pelanggaran" id="kode_pelanggaran">
        <option value="p11">P11 - 25</option>
        <option value="p12">P12 - 26</option>
        <option value="p13">P13 - 27</option>
    </select>
</div>



  <!-- input nama -->
  <div class="form-group">
    <input type="reset" value="Reset" class="tombol reset" />
    <input type="submit" value="Simpan" class="tombol simpan" />
  </div>
</form>

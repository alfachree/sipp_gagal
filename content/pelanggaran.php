<?php
if(!defined('INDEX')) die();
?>

      <section class="main">
        <h2 class="judul">Macam-Macam Pelanggaran</h2>
        <a href="?hal=pelanggaran_tambah" class="tombol">Tambah</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama pelanggaran</th>
              <th>Jenis Pelanggaran</th>
              <th>Poin</th>
              <th>Kode Pelanggaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $query = "select * from pelanggaran order by id_pelanggaran desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_pelanggaran'] ?></td>
                <td><?=$data['jenis_pelanggaran']?></td>
                <td><?=$data['poin']?></td>
                <td><?=$data['kode_pelanggaran']?></td>
              <td>
                <a href="?hal=pelanggaran_edit&id=<?= $data['id_pelanggaran'] ?>" class="tombol edit"> Edit </a>
              </td>
            </tr>
        <?php
        }
        ?>
          </tbody>
        </table>
</body>
</html>
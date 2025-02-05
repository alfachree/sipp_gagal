
-- membuat database
create database sipp;

use sipp;

-- membuat table

CREATE TABLE siswa(
   id_siswa INT(40) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   foto VARCHAR(1000) NOT NULL,
   nama_siswa VARCHAR(50) NOT NULL,
   tanggal_lahir DATE,
   kelas ENUM('10','11','12') NOT NULL,
   jurusan ENUM('AKL','PPLG') NOT NULL,
   jenis_kelamin ENUM('L','P')
);


CREATE TABLE pelanggaran(
   id_pelanggaran INT(40) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nama_pelanggaran VARCHAR (40) NOT NULL,
   jenis_pelanggaran VARCHAR(50) NOT NULL,
   poin INT(10),
   kode_pelanggaran INT (5) NOT NULL
);


CREATE TABLE Riwayat_Pelanggaran(
   id_riwayat INT (40) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nama VARCHAR(100) NOT NULL,
   tanggal DATE,
   kode VARCHAR(50) NOT NULL
);



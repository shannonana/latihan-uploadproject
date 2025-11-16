<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set kode_mahasiswa='$kode_mahasiswa', nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat' where kode_mahasiswa='$kode_mahasiswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
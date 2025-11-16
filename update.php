
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP MAHASISWA UNI XX</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="update">
    <br/>
    <a href="index.php" class="button"> KEMBALI </a>
    <h2>CRUD DATA MAHASISWA UNI XX MALANG</h2>
    <hr/>
    <h3>EDIT DATA MAHASISWA</h3>

    <?php
    include 'koneksi.php';
    $kode_mahasiswa = $_GET['id'];
    $project = mysqli_query($koneksi,"select * from mahasiswa where kode_mahasiswa='$kode_mahasiswa'");
    while($d = mysqli_fetch_array($project)){
        ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Kode Mahasiswa</td>
                    <td>
                        <input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['kode_mahasiswa']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="number" name="nim" value="<?php echo $d['nim']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                        <input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN" class="simpan"></td>
                    <input type="hidden" name="kode_mahasiswa" value="<?php echo $d[kode_mahasiswa]; ?>">
                </tr>
            </table>
        </form>
        <a href="index.php" class="button"> KEMBALI </a>
        <?php 
    }
    ?>
    </div>
</body>
</html>
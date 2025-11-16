<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="index">
    <a href="tambah.php" class="button">+ TAMBAH SISWA</a>
    <br/>
    <br/>
    <table border="1">
            <tr>
                <th>Kode_Mahasiswa</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $project = mysqli_query($koneksi,"select * from mahasiswa");
            while ($d = mysqli_fetch_array($project)){
                ?>
                <tr>
                    <td><?php echo $d['kode_mahasiswa']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['jurusan']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['kode_mahasiswa']; ?>">UPDATE</a>
                        <a href="delete.php?id=<?php echo $d['kode_mahasiswa']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php
        }
        ?>
    </table>
    </div>
</body>
</html>
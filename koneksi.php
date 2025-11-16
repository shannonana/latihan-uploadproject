<?php
    $koneksi = mysqli_connect("localhost","root","mysql","project");
    echo "KONEKSI BERHASIL";

    if(mysqli_connect_error()){
        echo "koneksi database gagal : " . mysqli_connect_error();
    }
?>

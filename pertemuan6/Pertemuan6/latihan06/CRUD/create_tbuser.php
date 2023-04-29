<?php

    include("konfigurasi.php");

    $tbname = "tbUSER";

    $sql = "CREATE TABLE $tbname(
        id INT(6) UNSIGNED AUTO_INCREMENT,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(255) NOT NULL,
        username VARCHAR(20),
        passkey VARCHAR(255),
        iduser VARCHAR(255),        
        PRIMARY KEY(id)
    );";

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi Gagal");

$hasil = mysqli_query($cnn,$sql);
if($hasil === true){
    echo "Tabel".$tbname."Berhasil Dibuat";
}else{
    echo "Tabel".$tbname."Gagal Dibuat";
}
mysqli_close($cnn); // untuk menutup datdbase
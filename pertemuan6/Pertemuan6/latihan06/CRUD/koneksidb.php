<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);

    if($cnn == true){
        echo"Koneksi Sukses";

        //membuat database(database hanya bisa dibuat 1x)
        $sql1 = "CREATE DATABASE ".DBNAME;
        
        $hasil = mysqli_query($cnn,$sql1);

        if($hasil == true){
            echo"Database ".DBNAME."Berhasil Dibuat";
        }else{
            echo"Database ".DBNAME."Gagal Dibuat";
        }

    }else{
        echo "Tidak Sukses".mysqli_connect_error();
    }
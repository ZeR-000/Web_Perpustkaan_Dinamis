<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_1918090";
    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(!$koneksi){
        die ("Waduh, gagal terkoneksi :" .mysqli_connect_error());
    }
?>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    }
    else{
        echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
    }

    $query = "INSERT into student (name, address)
        VALUES('Rasyid Razeka', 'Kediri'),
        ('Rizqi Zamzami','Kediri'),
        ('Rizqi Hendra','Nganjuk')";
    
    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }
    else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>
<?php
    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $gambar = $_FILES['fotoku']['name'];
    $tempSementara = $_FILES['fotoku']['tmp_name'];

    $lokasiUpload = "foto/";

    move_uploaded_file($tempSementara, $lokasiUpload . $gambar);

    $query = "INSERT INTO student(name, address, foto)
        VALUE('$name','$address', '$gambar')";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>
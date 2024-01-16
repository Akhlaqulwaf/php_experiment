<?php
    include 'koneksi.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO alamat (nama,alamat) VALUES ('$nama','$alamat')";
        if($conn->query($sql) === true){
            echo "data berhasil ditambahkan";
            header("Location: index.php");
            exit();
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();


?>
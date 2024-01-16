<?php 
    include "koneksi.php";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $id = $_GET['id'];

        $sql = "SELECT * FROM alamat WHERE id=$id";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $alamat = $row['alamat'];
        }else{
            echo "Data tidak ditemukan";
            exit();
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];


        $sql = "UPDATE alamat SET nama='$nama', alamat='$alamat' WHERE id=$id";
        if($conn->query($sql) === true){
            echo "Data berhasil diupdate";
            header("Location: index.php");
            exit();
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();


?>
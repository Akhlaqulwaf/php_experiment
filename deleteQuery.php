<?php
    include 'koneksi.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = $_GET['id'];

        $sql = "DELETE FROM alamat WHERE id=$id";
        if($conn->query($sql) == true){
            echo 'Data berhasil dihapus';
            header('Location: index.php');
            exit();
        }
    }
    $conn->close();
?>
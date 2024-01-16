<?php
    include 'koneksi.php';
    $sql = "SELECT * FROM alamat";
    $response = $conn->query($sql);
    $result = array();
    if($response->num_rows > 0){
        while($row = $response->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }
?>
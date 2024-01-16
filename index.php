<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include "indexQuery.php";
?>
<body>
    <p><a href="add.php">add data</a></p>
    <?php if($response->num_rows > 0) { ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $val ) { ?>
                        <tr>
                            <td><?php echo $val["id"]; ?></td>
                            <td><?php echo $val["nama"]; ?></td>
                            <td><?php echo $val["alamat"]; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $val["id"]; ?> ">edit</a>
                                <a href="deleteQuery.php?id=<?php echo $val["id"]; ?>">delete</a>
                            </td>
                        </tr>
                    <?php }?>
            </tbody>
        </table>
    <?php }else{ ?>
            <p>Tidak ada data</p>
    <?php } ?>
    
</body>
</html>
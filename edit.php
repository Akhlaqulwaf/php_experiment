<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    include 'editQuery.php'
?>
<body>
    <form method="post" action="editQuery.php">
        <input type="text" name="id" hidden value="<?php echo $id ?>">
        Nama: <input type="text" name="nama" value="<?php echo $nama ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat ?>"><br>
        <input type="submit" value="edit">
    </form>
</body>
</html>
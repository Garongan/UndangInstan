<?php 
$pageNO = $_POST['pageNO'];
$filename = unserialize($_POST['filename']);
$nama = unserialize($_POST['nama']);
// delete file
unlink("upload/$filename[0]");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print View</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    foreach ($nama as $key => $value) {
        # code...
        echo include ("template/undangan".($pageNO).".php");
        ?>
    <?php
    }
    ?>
</body>
</html>
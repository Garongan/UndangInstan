<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg">
    <div class="navigasi_atas_kecil">
        <?php
        $target_path = "upload/";
        $target_path = $target_path . basename($_FILES['uploadfile'] ['name']);
        if (move_uploaded_file($_FILES['uploadfile'] ['tmp_name'], $target_path)) {
            # code...
            echo "File " . basename($_FILES['uploadfile'] ['name']) . " berhasil diunggah";
        } else {
            echo "There was an error uploading the file, please try again!";
        }
        ?>
    </div>
    <a href="index.php"><button>Kembali</button></a>
</body>
</html>
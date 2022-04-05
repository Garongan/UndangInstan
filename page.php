<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template UndangInstan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg1">
    <?php    
    // scan file
    $filename = scandir("upload/", 1);
    if (!is_dir("upload/$filename[0]")) {
        # code...
        // read file
        if (($file = fopen("upload/$filename[0]", 'r')) !== FALSE) {
            while (($data = fgetcsv($file, 1000, ",")) !== FALSE) { 
                
                for ($i = 0; $i < count($data); $i++) { 
                    $nama[] = $data[$i];
                }
            }
            fclose($file);
        }
    }
    else {
        # code...
        echo "<p class='navigasi_atas_besar'>Unggah file terlebih dahulu</p>";
    }
    // ----------------------------------------------------------------
    $pageNO = $_GET['pageNO'];
    include ("template/undangan".($pageNO).".php");
    ?>
    <!-- select template undangan -->
    <form action="print.php" class="paginasi" method='post'>
            <?php
            if (!is_dir("upload/$filename[0]")) {
                # code...
                $namaString = serialize($nama);
                $filenameString = serialize($filename);
                echo "<input type='hidden' name='nama' value='$namaString'>";
                echo "<input type='hidden' name='filename' value='$filenameString'>";
                echo "<button type='submit' name='pageNO' value='$pageNO'>Pilih</button></form>";
            }else
            echo "<button type='submit' disabled='disabled' name='pageNO' value='$pageNO'>Pilih</button></form>";
        ?>
    <!-- select page -->
    <form method="get" class="paginasi">
        <?php
        $page = [1 => 1, 2, 3];
        foreach ($page as $key => $value) {
            # code...
            echo "<input type='submit' name='pageNO' value='$value'>";
        }
        echo "</form>";
        ?>
    <a href="index.php" class="paginasi"><button>Kembali</button></a>
    <!-- -------------------------------------------------------------- -->
</body>
</html>
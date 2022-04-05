<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UndangInstan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg">
    <!-- navigasi atas -->
    <div class="navigasi_atas">
        <p class="navigasi_atas_besar">Cobalah lihat contoh file Book1.csv ini</p>
        <div class="button_kiri">
            <button><a href="dummy/Book1.csv">Book1.csv</a></button>
        </div>
        <p class="navigasi_atas_besar">Upload file yang telah kamu edit</p>
        <div class="button_kiri navigasi_atas_kecil">
            <form enctype="multipart/form-data" action="upload.php" method="post">
                Pilih file untuk di unggah:
                <input type="file" name="uploadfile"  id="uploadfile" accept=".csv">
                <br>
                <input type="submit" value="Unggah File">
            </form>   
        </div>
        <p class="navigasi_atas_kecil">
            Accepted format file
            <br>
            .csv
        </p>
    </div>
    <!-- --------------------------------------------------------------- -->
    <!-- navigasi bawah -->
    <div class="navigasi_bawah">
        <div class="button_kanan">
            <a href="page.php?pageNO=1">
                <button>Pilih</button>
            </a>
        </div>
        <p class="navigasi_bawah_besar">Pilih format undangan kamu</p>
        <!-- <div class="button_kanan">
            <?php
            $filename = scandir("upload/", 1);
            echo "<button><a href='upload/$filename[0]'>$filename[0]</a></button>";
            ?>
        </div>
        <p class="navigasi_bawah_besar">Unduh hasil proses file kamu</p> -->
    </div>
    <!-- ---------------------------------------------------------------- -->
</body>
</html>
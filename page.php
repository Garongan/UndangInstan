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
    include("fungsi/fungsi.php");
    $filename = scandir("upload/", 1);
    $nama = scanfile($filename);
    // ----------------------------------------------------------------
    $pageNO = $_GET['pageNO'];
    $value = $nama[0];
    include ("template/undangan".($pageNO).".php");
    ?>
    <!-- select template undangan -->
    <form action="print.php" class="paginasi" method='post'>
        <?php
        selecttemplate($filename, $nama, $pageNO);
        ?>
    <!-- select page -->
    <form method="get" class="paginasi">
        <?php
        selectpage();
        ?>
    <a href="index.php" class="paginasi"><button>Kembali</button></a>
    <!-- -------------------------------------------------------------- -->
</body>
</html>
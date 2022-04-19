<?php
function upload()
{
    # code...
    $target_path = "upload/";
    $target_path = $target_path . basename($_FILES['uploadfile'] ['name']);
    if (move_uploaded_file($_FILES['uploadfile'] ['tmp_name'], $target_path)) {
        # code...
        echo "File " . basename($_FILES['uploadfile'] ['name']) . " berhasil diunggah";
    } else {
        echo "There was an error uploading the file, please try again!";
    }
}
function scanfile($filename)
{
    # code...
        // scan file
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
    return $nama;
}
function selecttemplate($filename, $nama, $pageNO)
{
    # code...
    if (!is_dir("upload/$filename[0]")) {
        # code...
        $namaString = serialize($nama);
        $filenameString = serialize($filename);
        echo "<input type='hidden' name='nama' value='$namaString'>";
        echo "<input type='hidden' name='filename' value='$filenameString'>";
        echo "<button type='submit' name='pageNO' value='$pageNO'>Pilih</button></form>";
    }else
    echo "<button type='submit' disabled='disabled' name='pageNO' value='$pageNO'>Pilih</button></form>";
}
function selectpage()
{
    # code...
    $page = [1 => 1, 2, 3];
        foreach ($page as $key => $value) {
            # code...
            echo "<input type='submit' name='pageNO' value='$value'>";
        }
        echo "</form>";
}
function cetaktemplate($nama, $pageNO, $filename)
{
    # code...
    if (!is_dir("upload/$filename[0]")) {
        # code...
        foreach ($nama as $key => $value) {
            # code...
            echo include ("template/undangan".($pageNO).".php");
        }
    }else {

    }
}
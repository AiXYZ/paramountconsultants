<?php

include('include/config.php');

$upload_dir = "./audio/";

if (isset($_FILES["myfile"])) {
    $no_files = count($_FILES["myfile"]['name']);
    

    for ($i = 0; $i < $no_files; $i++) {

        if ($_FILES["myfile"]["error"][$i] > 0) {
            echo "Error: " . $_FILES["myfile"]["error"][$i] . "<br>";
        } else {

            $file_name = $_FILES["myfile"]["name"][$i];
            $file_size  = $_FILES['myfile']['size'][$i];
          //echo $file_name.'/'.$file_size;die;
            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $upload_dir . $_FILES["myfile"]["name"][$i]);
            $sql= "insert into audio(a_name,a_size) values ('$file_name','$file_size')";

                mysqli_query($conn,$sql);
            echo $_FILES["myfile"]["name"][$i] . "<br>";
        }
    }
    echo " Files Uploaded Successfully!<br>";
}else{
    echo " No file ";
}
?>
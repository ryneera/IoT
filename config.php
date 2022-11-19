<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","w");

    fwrite($file,"name :");
    fwrite($file, $name ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Age :");
    fwrite($file, $age ."\n");
    fwrite($file,"Phone :");
    fwrite($file, $phone ."\n");
    fclose($file);
    header("location: index.php");
 ?>
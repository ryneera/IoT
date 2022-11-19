<?php
    extract($_REQUEST);
    $file=fopen("file.txt","w");

    fwrite($file,"name: ");
    fwrite($file, $name ."\n");
    fwrite($file,"Email: ");
    fwrite($file, $email ."\n");
    fwrite($file,"Password: ");
    fwrite($file, $password ."\n");
    fwrite($file,"Age: ");
    fwrite($file, $age ."\n");
    fwrite($file,"Phone: ");
    fwrite($file, $phone ."\n");
    fwrite($file,"Gender: ");
    fwrite($file, $gender ."\n");
    fclose($file);
    header("location: index.php");
 ?>
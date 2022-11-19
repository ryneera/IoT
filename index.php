<?php
        
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];
        
        $file_name = "sensors.txt"; 
        $file1 = fopen($file_name,"w") or die("Unable to open file!");
        $text1 = "a=" . $sn1 . " b=" . $sn2;
        
        fwrite($file1, $text1);
        fclose($file1);
        
        $file2 = fopen("actuator.txt","w") or die("Unable to open file!");
        $text2 = "Value from actuator. Save this value to actuator.txt :)";
        fwrite($file2, $text2);
        fclose($file2);
        
        $file3 = fopen("actuator.txt","r") or die ("Subor neexistuje");
        $text3 = fread($file3,filesize("actuator.txt"));
        echo $text3;
        fclose($file3);
    ?>
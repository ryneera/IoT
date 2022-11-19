<?php
        
        $file = fopen("anyu.txt", "w");
        fwrite($file, "szia :)");
        fclose($file);

        echo "csu";
    ?>
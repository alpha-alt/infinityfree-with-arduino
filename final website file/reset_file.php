<?php



$file=fopen("uploads/last_known_location.txt", "w") ;
fclose($file);

header("location: home.php");











?>
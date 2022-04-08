<?php 



$name="uploads/train_location.txt";

header("cache-Control: public ");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=location.txt");
header("Content-Type: text/plain");
header("Content-Transfer-Encoding: binary");

readfile($name);




?>
<?php 



$name="data.txt";

header("cache-Control: public ");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$name");
header("Content-Type: text/plain");
header("Content-Transfer-Encoding: binary");

readfile($name);




?>
<?php


require_once("connection.php");


$query="select id from ticket";



$result=mysqli_query($dbc,$query) or die("error in retriving data");
echo "</br>";
$file=fopen("data.txt","w") or die("error in opening");
while($row=mysqli_fetch_array($result)){


fwrite($file, $row['id']);
fwrite($file," ");

echo "</br>";




	}




fclose($file);
 header("Location:hellow.php");












?>
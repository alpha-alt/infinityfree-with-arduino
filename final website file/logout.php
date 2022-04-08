<?php
/**
require_once("connection.php");

$temp=$_COOKIE['id_for_arduino'];
$query="delete from users_table where id ="."$temp ";

$result=mysqli_query($dbc,$query) or die ('error in removing');

mysqli_close($dbc);
**/
setcookie('username_for_arduino',' ',time()-3000);
setcookie('id_for_arduino',' ',time()-3000);





header("Location:index.php");











?>